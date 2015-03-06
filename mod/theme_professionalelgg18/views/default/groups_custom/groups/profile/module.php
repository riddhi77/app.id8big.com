<?php

/**
 * Group module (also called a group widget)
 *
 * @uses $vars['title']    The title of the module
 * @uses $vars['content']  The module content
 * @uses $vars['all_link'] A link to list content
 * @uses $vars['add_link'] A link to create content
 */

$group = elgg_get_page_owner_entity();
if (!elgg_instanceof($group, 'group')) {
	return false;
}

//$header = "<span class=\"groups-widget-viewall\">{$vars['all_link']}</span>";
//$header .= '<h3>' . $vars['title'] . '</h3>';

//if ($group->canWriteToContainer() && isset($vars['add_link'])) {
//	$vars['content'] .= "<span class='elgg-widget-more'>{$vars['add_link']}</span>";
//}

$content = $vars['content'];
$content .= "<span class=\"elgg-widget-more elgg-widget-more-all\">{$vars['all_link']}</span>";

//echo '<li>';
echo elgg_view_module('info', '', $content, array(
//	'header' => $header,
	'class' => 'elgg-module-group',
));
//echo '</li>';