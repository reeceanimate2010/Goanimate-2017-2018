<?php echo {
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
		"/crossdomain.xml": {
			"headers": {
				"Content-Type": "text/html; charset=UTF-8"
			},
			"content": "<cross-domain-policy><allow-access-from domain=\"*\"/></cross-domain-policy>"
		},
    ?>
