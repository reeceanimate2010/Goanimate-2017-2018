<?php
	////
	//// This PHP file read the themelist to the LVM
	////

	///
	/// Variables
	///
	$themeListZip = new ZipArchive;
	$createZip = $themeListZip->open("../../_user-files/cache/themeList.zip", ZipArchive::CREATE);
	
	///
	/// Zip creation
	///
	if ($createZip == true) {
		// Read themelist xml
		$themeListZip->readFile("../asset/themes/themelist.xml", "themelist.xml");
	}
	// If, for some reason creating the zip fails, send the user a message explaining what went wrong.
	else {
		echo "ERROR: Could not create themelist zip. Please get support here: https://discord.io/goanimate4schools";
	}
?>
