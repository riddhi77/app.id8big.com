<?php
/**
 * Elgg gdrive widget
 *
 * @package GDrive
 */

$max = (int) $vars['entity']->num_display;

$options = array(
	'type' => 'object',
	'subtype' => 'gdrive',
	'container_guid' => $vars['entity']->owner_guid,
	'limit' => $max,
	'full_view' => FALSE,
	'pagination' => FALSE,
);
$content = elgg_list_entities($options);

echo $content;

if ($content) {
	$url = "gdrive/owner/" . elgg_get_page_owner_entity()->username;
	$more_link = elgg_view('output/url', array(
		'href' => $url,
		'text' => elgg_echo('gdrive:more'),
		'is_trusted' => true,
	));
	echo "<span class=\"elgg-widget-more\">$more_link</span>";
} else {
	echo elgg_echo('gdrive:none');
}
