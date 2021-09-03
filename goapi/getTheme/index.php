<?php
	////
	//// This PHP reads a theme XML to the Video Studio
	////

	///
	/// Variables
	///
	$themeXMLZip = new ZipArchive;
	$createZip = $themeXMLZip->open("../../_themes/{$_POST["themeId"]}/theme.zip", ZipArchive::CREATE);

	///
	/// Read Zip
	///
	if ($createZip == true) {
		// Read theme XML
		$themeXMLZip->readfile("../asset/themes/{$_POST["themeId"]}/theme.xml", "theme.xml");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "ERROR: Could not read theme XML zip. please dm me on joseph the animator#2292 if this problem contuiues.";
	}
?>
