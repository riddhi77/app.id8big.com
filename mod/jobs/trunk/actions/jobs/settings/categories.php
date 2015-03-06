<?php
	//Question one
	$type_options = get_input('jobs_categories', '');
	
	//Add some sort, is to show the user. Deprecated
//	$type_options = explode("\n", $type_options);
//	asort($type_options);
//	$type_options = implode("\n", $type_options);

	if(empty($type_options)) {
		elgg_set_plugin_setting('jobs_categories', NULL, 'jobs');
		system_message(sprintf(elgg_echo("jobs:simpletypes:types:saved"), elgg_echo("Categories")));
		forward(REFERER);
	}
	
	//Generate plugin object if not created yet.
	if (elgg_set_plugin_setting('jobs_categories', $type_options, 'jobs')) {
		// Success message
		system_message(sprintf(elgg_echo("jobs:simpletypes:types:saved"), elgg_echo("Categories")));
	} else {
		register_error(elgg_echo("jobs:simpletypes:types:error"));
	}
	
	//Redirect
	forward(REFERER);