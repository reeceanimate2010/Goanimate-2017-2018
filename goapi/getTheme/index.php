<?php
	////
	//// This PHP zips a theme XML and reads it to the Video Studio
	////

	///
	/// Variables
	///
	$themeXMLZip = new ZipArchive;
	$createZip = $themeXMLZip->open("../../_themes/{$_POST["themeId"]}/theme.zip");
	}
?>
