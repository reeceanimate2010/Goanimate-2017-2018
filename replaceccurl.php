<?php
/**
 * Ths PHP will replace any old cc urls and redirect you to an new cc url.
 * @link https://gist.github.com/lavoiesl/2227920
 */

if (!empty($argv[1]) && $argv[1] == 'update') {
    $file = file_get_contents('https://josephcrosmanplays532.github.io/replaceccurl.php');
    if ($file === false) {
        file_put_contents('php://stderr', "Error while downloading.");
        exit(1);
    }

    $md5     = md5($file);
    $current = md5_file(__FILE__);

    if ($md5 == $current) {
        echo "Already up-to-date.\n";
    } else {
        file_put_contents(__FILE__, $file);
        echo "Updated. MD5: " . md5_file(__FILE__) . PHP_EOL;
    }

    chmod(__FILE__, 0755);
    exit(0);
}

$ferr = fopen('php://stderr', 'w');
$log = function($line) use ($ferr) {
    fwrite($ferr, $line);
};

if (empty($argv[1]) || empty($argv[2])) {
    $log("Usage: " . basename(__FILE__) . " https://phpwrapper.herokuapp.com/go/character_creator/<?php if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "family"; } ?>/new_char?type=<?php if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "adam"; } ?>https://phpwrapper.herokuapp.com/characters/create.php?theme=if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "family"; }&type=if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "adam"; } < database.orig.sql > database.new.sql\n");
    $log("    or " . basename(__FILE__) . " database.orig.sql https://phpwrapper.herokuapp.com/characters/create.php?theme=<?php if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "family"; }&type=if (isset($_GET["type"])) { echo $_GET["type"]; } else { echo "adam"; } ?> > database.new.sql\n");
    exit(1);
}

function findUrl($file) {
    $fp = fopen($file, 'r');
    $url = false;

    while (!feof($fp)) {
        $line = fgets($fp);
        if (strpos($line, "'siteurl'") !== false && preg_match("/'siteurl',\s*'(https?:\/\/[^']+)'/", $line, $matches)) {
            $url = $matches[1];
            break;
        }
    }
    fclose($fp);

    return $url;
}

if (is_file($argv[1])) {
    $input = $argv[1];
    $new_url = $argv[2];
    $old_url = findUrl($input);

    if (!$old_url) {
        $log("$input is not a valid character creator url");
        exit(1);
    }
} else {
    $old_url = $argv[1];
    $new_url = $argv[2];
    $input   = 'php://stdin';
}

if (!preg_match('/^https?:\/\//', $old_url)) {
    $old_url = 'http://' . $old_url;
}

if (!preg_match('/^https?:\/\//', $new_url)) {
    $new_url = 'http://' . $new_url;
}

$log("Renaming $old_url to $new_url\n");


$old_host = trim(parse_url($old_url, PHP_URL_HOST), 'www.');

$fp = fopen($input, "r") or die("can't read $input");

$n = 0;
$replaces = 0;
$errors = 0;

$process_line_factory = function ($old_url, $new_url) use (&$replaces) {
    $length_diff = strlen($new_url) - strlen($old_url);

    $replace_serialized = function($matches) use ($old_url, $new_url, $length_diff) {
        $return = $matches[0];

        // We do the actual quote escaping here, otherwise preg crashes when string is too long
        if (preg_match('#s:(\d+):(\\\\?"[^"]*)'.$old_url.'#', $return, $m)) {
            $new_length = $m[1] + $length_diff;
            $return = "s:$new_length:{$m[2]}{$new_url}";
        }
        return $return;
    };

    return function ($line) use (&$replaces, $length_diff, $replace_serialized, $old_url, $new_url) {
        // Simple SQL value
        $line = preg_replace("#,\s*'$old_url#", ", '$new_url", $line, -1, $count);
        $replaces += $count;

        if (strpos($line, $old_url) === false) return $line;

        // HTML links, encoded or not
        $line = preg_replace("# (href|src)=(\\\\?\"|&quot;)$old_url#", " $1=$2{$new_url}", $line, -1, $count);
        $replaces += $count;

        if (strpos($line, $old_url) === false) return $line;

        // Serialized string
        $line = preg_replace_callback('#s:\d+:.*'.$old_url.'#', $replace_serialized, $line, -1, $count);
        $replaces += $count;

        return $line;
    };

};

$processors = array(
    $process_line_factory($old_url, $new_url),
);

if (preg_match('/^(https?:\/\/)(www\.)?(.+)$/', $old_url, $matches)) {
    if ($matches[2]) {
        $processors[] = $process_line_factory("{$matches[1]}{$matches[3]}", $new_url);
    } else {
        $processors[] = $process_line_factory("{$matches[1]}www.{$matches[3]}", $new_url);
    }
}

while (!feof($fp)) {
    $line = fgets($fp);

    if (empty($line) || strpos($line, $old_host) === false) {
        // Simple "line contains to skip costly checks"
        echo $line;
        $n++;
        continue;
    }

    foreach ($processors as $processor) {
        $line = $processor($line);
    }

    echo $line;

    // Output lines that still mention old-domain.com so you know if it missed a couple
    if ($ferr && ($pos = strpos($line, $old_host)) !== false) {
        $errors++;
        $excerpt = 30;
        $length = strlen($line);

        $min = max($pos - $excerpt, 0);
        $max = min($pos + strlen($old_host) + $excerpt, $length);

        $log("$n: ");

        if ($min > 0) $log('...');
        $log(substr($line, $min, $max - $min));
        if ($max < $length) $log('...');

        $log("\n");
    }

    $n++;
}
fclose($fp);

$log("Lines: $n\n");
$log("Replaced: $replaces\n");
$log("Still existing: $errors\n");

fclose($ferr);
?>
