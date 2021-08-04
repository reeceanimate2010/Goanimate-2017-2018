<?php
	////
	//// This PHP Reads the links that you got and replaces it with a new link.
	////

	///
	/// Read file
	///
	echo "GET": {
		"/go/character_creator/family/new_char?type=adam": {
			"headers": {
				"Location": "/characters/create.php?theme=family&type=adam"
			},
			"statusCode": 302,
			"content": ""
		},
		"/go/character_creator/family/new_char?type=eve": {
			"headers": {
				"Location": "/characters/create.php?theme=family&type=eve"
			},
			"statusCode": 302,
			"content": ""
		},
		"/go/character_creator/family/new_char?type=rocky": {
			"headers": {
				"Location": "/characters/create.php?theme=family&type=rocky"
			},
			"statusCode": 302,
			"content": ""
		},
		"/go/character_creator/family/new_char?type=bob": {
			"headers": {
				"Location": "/characters/create.php?theme=family&type=bob"
			},
			"statusCode": 302,
			"content": ""
		},
		"/go/character_creator/action/new_char?type=default": {
			"headers": {
				"Location": "/characters/create.php?theme=family&type=default"
			},
			"statusCode": 302,
			"content": ""
		},
		"/videomaker/full/custom/tutorial": {
			"headers": {
				"Location": "/videos/create.php?tray=custom&interactiveTutorial=Display"
			},
			"statusCode": 302,
			"content": ""
		},
		"/videomaker/full/action/tutorial": {
			"headers": {
				"Location": "/videos/create.php?tray=action&interactiveTutorial=Display"
			},
			"statusCode": 302,
			"content": ""
		},
		"/videomaker/full/retro/tutorial": {
			"headers": {
				"Location": "/videos/create.php?tray=retro&interactiveTutorial=Display"
			},
			"statusCode": 302,
			"content": ""
		}
}
				
    ?>
