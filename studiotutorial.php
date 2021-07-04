<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="dns-prefetch" href="//josephcrosmanplays532.github.io/">

<title>Video Studio</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="The Video Maker lets You make a video for YouTube for free! Drag &amp; drop or type &amp; go.  It's Fast, Fun, Easy and Free -  PHPWrapper!">

<meta property="og:site_name" content="GoAnimate for Schools">
<meta property="fb:app_id" content="122508887813978">
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI">


<link rel="stylesheet" href="/pages/css/modern-normalize.css">
<link rel="stylesheet" href="/pages/css/global.css">

<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/css/importer.css.gz.css">
<link rel="stylesheet" href="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/css/studio.css.gz.css">

<script>
var srv_tz_os = -4, view_name = "school", user_cookie_name = "u_info_school";
var user_country = "US";
</script>

<!--[if lt IE 9]>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/lib/html5shiv.js.gz.js"></script>
<![endif]-->
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/js/common_combined.js.gz.js"></script>
<script type="text/javascript" src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/po/goserver_js-en_US.json.gz.json"></script>
<script type="text/javascript">
var I18N_LANG = 'en_US';
var GT = new Gettext({'locale_data': json_locale_data});
</script>
<script src="https://vyondhosterremastered.000webhostapp.com.com/ajax/cookie_policy" async=""></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/movie.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/cookie.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/studio.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/go/js/jquery/jquery.tmpl.min.js.gz.js"></script>
<script src="https://josephcrosmanplays532.github.io/static/642cd772aad8e952/school/js/studio.js.gz.js"></script>

<!-- Google Knowledge Graph -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "GoAnimate",
    "url": "https://phpwrapper.herokuapp.com",
    "logo": "https://gawpstorage.s3.amazonaws.com/img/google_knowledge_graph_logo.jpg",
    "sameAs": [
        "https://www.facebook.com/GoAnimateInc",
        "https://twitter.com/GoAnimate",
        "https://www.linkedin.com/company/goanimate",
        "https://www.youtube.com/user/GoAnimate"
    ]
}
</script>

</head>
<body class="page-action-videomaker full_screen_studio" style="">
<script type="text/javascript">
if (self !== top) {
            jQuery('body').hide();
    }
</script>

<div style="position:relative;">
    <div id="studioBlock" style="height: 0px;"><!-- --></div>

    <div id="playerBlock"></div>
</div>
	
<!-- Asset Importer -->
<div id="import_popup_container" style="display:none">
	<div id="import_popup">
		<h2 id="import-an-asset">Import an Asset</h2>
		<p class="close-button" onclick="hideImporter()">X</p>
		<!-- Import form -->
		<div id="import_image">
			<form id="uploadbanner" enctype="multipart/form-data" method="post" action="/goapi/uploadAsset" target="dummy">
				<input id="fileupload" name="import" type="file" accept=".mp3,.wav,.png,.jpg">
				<h3 id="import-as">Import As:</h3>
				<input type="radio" value="prop" name="subtype"> Prop</input>
				<br />
				<input type="radio" value="background" name="subtype"> Background</input>
				<br />
				<input type="submit" value="Import" onclick='document.getElementById("video_maker").importerUploadComplete("importerUploadComplete"); document.getElementById("import_popup_container").style.display = "none";' id="submit" class="button_import" />
			</form>
		</div>
	</div>
</div>

<!-- Video Previewer -->
<div id="preview_popup_container" style="display:none">
	<div id="preview_popup">
		<h2 id="preview-video">Preview Video</h2>
		<p class="close-button" onclick="hidePreviewer()">X</p>
		<object data="https://josephcrosmanplays532.github.io/static/animation/player.swf" type="application/x-shockwave-flash" id="playerdiv">
			<!-- The flashvars are a huge mess, have fun looking at them. :) -->
			<param name="flashvars" value="apiserver=/&storePath=https://josephcrosmanplays532.github.io/static/store/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://josephcrosmanplays532.github.io/static/<client_theme>&themeId=custom&tlang=en_US&isInitFromExternal=1&goteam_draft_only=1&isWide=1&collab=0&startFrame=previewStartFrame&autostart=1&nextUrl=../pages/html/list.html&tray=custom">
			<param name="allowScriptAccess" value="always">
			<param name="allowFullScreen" value="true">
		</object>
	</div>
</div>

<!-- Video Studio -->
<main>

<object data="https://josephcrosmanplays532.github.io/static/animation/go_full.swf" type="application/x-shockwave-flash" id="Studio" width="100%" height="100%">
	<!-- The flashvars are a huge mess, have fun looking at them. :) -->
	<param name="flashvars" value="apiserver=/&storePath=https://josephcrosmanplays532.github.io/static/store/<store>&isEmbed=1&ctc=go&ut=60&bs=default&appCode=go&page=&siteId=go&lid=13&isLogin=Y&retut=1&clientThemePath=https://josephcrosmanplays532.github.io/static/<client_theme>&themeId=custom&tlang=en_US&presaveId=<?php include_once("../goapi/function/videoId.php"); if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo $id + 1; } ?><?php if (isset($_GET["video"])) { echo "&movieId={$_GET["video"]}"; } ?>&goteam_draft_only=1&isWide=1&collab=0&nextUrl=./browse.php&tray=custom">
	<param name="allowScriptAccess" value="always">
	<param name="allowFullScreen" value="true">
</object>

</main>

<!-- Keeps the page from reloading on form submission -->
<iframe style="display:none" name="dummy"></iframe>

<script>
	////
	//// This JS contains important Video Studio stuff
	////
	
	///
	/// Variables
	///
	var previewPlayerTempData = "";
	const fu = document.getElementById('fileupload'),
		sub = document.getElementById('submit');

	///
	/// Previewer
	///
	function initPreviewPlayer(dataXmlStr, startFrame, containsChapter, themeList) {
		// New variable to be used by loadPreviewer()
		movieDataXmlStr = dataXmlStr;
		// Movie XML
		filmXmlStr = dataXmlStr.split("<filmxml>")[1].split("</filmxml>")[0];
		// Show preview popup
		document.getElementById("preview_popup_container").style.display = "block";
		// Load the Video Previewer
		loadPreviewer();
	}
	function loadPreviewer() {
		// I think this is in case of an error??
		if (movieDataXmlStr === null) {
			return;
		}
		// I don't know
		savePreviewData(movieDataXmlStr);
	}
	function savePreviewData(a) {
		// Set temp data variable
		previewPlayerTempData = a
	}
	function retrievePreviewPlayerData() {
		// Store in separate variable
		var recentPreviewPlayerTempData = previewPlayerTempData;
		// Clear original variable
		previewPlayerTempData = "";
		// Return recent temp data
		return recentPreviewPlayerTempData;
	}

	///
	/// Importing
	///
	// Show upload window
	function showImporter() {
		document.getElementById("import_popup_container").style.display = "block";
	};

	///
	/// Other stuff
	///
	// Redirect to Video Browser on Video Studio exit
	function exitStudio() {
		window.location = "/videos/browse.php";
	}
	// Hide interactive tutorial
	interactiveTutorial = {
		neverDisplay: function() {
			return true
		}
	};
	// Hide Video Previewer popup
	function hidePreviewer() {
		document.getElementById("preview_popup_container").style.display = "none";
	}
	// Hide Asset Importer popup
	function hideImporter() {
		document.getElementById("import_popup_container").style.display = "none";
	}
</script>

</main>

</body></html>
