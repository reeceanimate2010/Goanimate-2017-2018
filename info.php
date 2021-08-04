<?php
$theme = $_POST["themeId"];
$type = $_POST["bs"]
$tray = $_POST["tray"]
if (!isset("/go/character_creator/{$theme}/new_char?type={$type}") {
header("Location: /characters/create.php?theme={$theme}&type={$type}");
exit();
if (!isset("/videomaker/full/{$tray}/tutorial?") {
header("Location: /videos/create.php?tray={$tray}&interactiveTutorial=Display");
exit();

}
?>'
