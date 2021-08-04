<?php
	////
	//// This PHP Reads the links that you got and replaces it with a new link.
	////

	///
	/// Read file
	///
	echo "GET": {
		"/go/character_creator/": {
			"headers": {
				"Location": "/characters/create.php"
			},
			"statusCode": 302,
			"content": ""
		},
		"/videomaker/full/": {
			"headers": {
				"Location": "/videos/create.php?interactiveTutorial=Display"
			},
			"statusCode": 302,
			"content": ""
		},
    ?>
