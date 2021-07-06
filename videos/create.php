<!-- DOCTYPE html breaks it for some reason -->
<html>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

<title>Video Player | PHPWrapper</title>
<meta name="title" content="test"/>
<meta name="description" content="testing this old embed ga4s player"/>

<meta name="robots" content="noindex, nofollow"/>
<meta name="google-site-verification" content="Vta3YTpj6Kx6u4p-EzeMArY0alNItkyUYYMvNM8seVI"/>

<style>
html, body, #player-container {margin:0;padding:0;width:100%;height:100%;overflow:hidden;}
</style>

<script src="https://phpwrapper.herokuapp.com/static/go/js/swfobject.js"></script>
</head>
<body>
<div id="player-container">
	This content requires the Adobe Flash Player 18.0. <a href="https://get.adobe.com/flashplayer/">Get Flash</a>
</div>
<script>
flashvars={"apiserver":"/","storePath":"https://josephcrosmanplays532.github.io/static/store/<store>","isEmbed":"1","ctc":"go","ut":"60","bs":"default","appCode":"go","page":"","siteId":"go","lid":"13","isLogin":"Y","retut":"1","clientThemePath":"https://josephcrosmanplays532.github.io/static/<client_theme>","themeId":"custom","tlang":"en_US","presaveId":"3","goteam_draft_only":"1","isWide":"1","nextUrl":"./browse.php","collab":"0","tray":"custom"}
</script>
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
</body>
</html>
