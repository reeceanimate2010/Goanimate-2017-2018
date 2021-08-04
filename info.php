<?php
	////
	//// This PHP Reads the links that you got and replaces it with a new link.
	////

	///
	/// Read file
	///
	echo "{
	"GET": {
		"/index.html": {
			"headers": {
				"Location": "/yourvideos"
			},
			"statusCode": 302,
			"content": ""
		},
		"/dashboard/videos": {
			"headers": {
				"Location": "/yourvideos"
			},
			"statusCode": 302,
			"content": ""
		},
		"/$": {
			"headers": {
				"Location": "/yourvideos"
			},
			"statusCode": 302,
			"content": ""
		},
    ?>
