<?php
/**
 * Featured projects
 *
 * @package ElggProjects
 */

$featured_projects = elgg_get_entities_from_metadata(array(
	'metadata_name' => 'featured_project',
	'metadata_value' => 'yes',
	'types' => 'group',
	'limit' => 10,
));

if ($featured_projects) {

	elgg_push_context('widgets');
	$body = '';
	foreach ($featured_projects as $project) {
		$body .= elgg_view_entity($project, array('full_view' => false));
	}
	elgg_pop_context();

	echo elgg_view_module('aside', elgg_echo("projects:featured"), $body);
}
