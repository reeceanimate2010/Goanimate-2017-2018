<!doctype html>
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>Video Studio | PHPWrapper</title>
<link href="/pages/css/global.css" rel="stylesheet" type="text/css">
<meta name="title" content="test"/>
<meta name="description" content="Make a Video"/>

<meta name="robots" content="noindex, nofollow"/>
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>

<style>
html, body, #player-container {margin:0;padding:0;width:100%;height:100%;overflow:hidden;}
</style>

<script src="https://phpwrapper.herokuapp.com/static/go/js/swfobject.js"></script>
</head>
<body>
<div id="player-container">
	This content requires the Adobe Flash Player 10.3. <a href="https://get.adobe.com/flashplayer/">Get Flash</a>
	<noscript>
	<object data="https://josephcrosmanplays532.github.io/static/animation/go_full.swf" type="application/x-shockwave-flash" id="Studio" width="100%" height="100%">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=/&storePath=https://josephcrosmanplays532.github.io/static/store/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://josephcrosmanplays532.github.io/static/<client_theme>&themeId=custom&tlang=en_US&presaveId=<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>&goteam_draft_only=1&isWide=1&collab=0&nextUrl=./browse.php&tray=custom">
	<param name="allowScriptAccess" value="always">
	<param name="allowFullScreen" value="true">
        </object>
	</noscript>
</div>
<script>
var so = new SWFObject("/goapi/asset/animation/go_full.swf", "Studio", "100%", "100%", "10.0.12", "#464646");
so.useExpressInstall('/static/libs/expressInstall.swf');
so.addParam("AllowScriptAccess", "always");
so.addParam("wmode", "transparent");
so.addParam("scale", "exactfit");
so.addParam("allowFullScreen","true");

so.addVariable("apiserver", "<?php if (isset($_GET["goapi"])) { echo $_GET["goapi"]; } else { echo "/"; } ?>");
so.addVariable("storePath", "https://josephcrosmanplays532.github.io/static/store/<store>");
so.addVariable("isEmbed", "<?php if (isset($_GET["isEmbed"])) { echo $_GET["isEmbed"]; } else { echo "1"; } ?>");
so.addVariable("ctc", "<?php if (isset($_GET["ctc"])) { echo $_GET["ctc"]; } else { echo "go"; } ?>");
so.addVariable("ut", "<?php if (isset($_GET["ut"])) { echo $_GET["ut"]; } else { echo "60"; } ?>");
so.addVariable("bs", "<?php if (isset($_GET["bs"])) { echo $_GET["bs"]; } else { echo "default"; } ?>");
so.addVariable("appCode", "<?php if (isset($_GET["code"])) { echo $_GET["code"]; } else { echo "go"; } ?>");
so.addVariable("page", "<?php if (isset($_GET["page"])) { echo $_GET["page"]; } ?>");
so.addVariable("siteId", "<?php if (isset($_GET["id"])) { echo $_GET["id"]; } else { echo "go"; } ?>");
so.addVariable("lid", "<?php if (isset($_GET["lid"])) { echo $_GET["lid"]; } else { echo "13"; } ?>");
so.addVariable("isLogin", "<?php if (isset($_GET["logedin"])) { echo $_GET["logedin"]; } else { echo "Y"; } ?>");
so.addVariable("retut", "<?php if (isset($_GET["retut"])) { echo $_GET["retut"]; } else { echo "-1"; } ?>");
so.addVariable("clientThemePath", "https://josephcrosmanplays532.github.io/static/<client_theme>");
so.addVariable("themeId", "<?php if (isset($_GET["theme"])) { echo $_GET["theme"]; } else { echo "custom"; } ?>");
so.addVariable("presaveId", "<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>");
so.addVariable("goteam_draft_only", "<?php if (isset($_GET["draftonly"])) { echo $_GET["draftonly"]; } else { echo "1"; } ?>");
so.addVariable("isWide", "<?php if (isset($_GET["studiowidth"])) { echo $_GET["studiowidth"]; } else { echo "1"; } ?>");
so.addVariable("collab", "<?php if (isset($_GET["collab"])) { echo $_GET["collab"]; } else { echo "0"; } ?>");
so.addVariable("nextUrl", "<?php if (isset($_GET["nextlink"])) { echo $_GET["nextlink"]; } else { echo "./browse.php"; } ?>");




so.write("player-container");
</script>
</body>
</html>
