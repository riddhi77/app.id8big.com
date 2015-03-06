<?php
/**
 * Elgg user display
 *
 * @uses $vars['entity'] ElggUser entity
 * @uses $vars['size']   Size of the icon
 */

$entity = $vars['entity'];
$size = elgg_extract('size', $vars, 'tiny');

$icon = elgg_view_entity_icon($entity, $size, $vars);

// Simple XFN
$rel = '';
if (elgg_get_logged_in_user_guid() == $entity->guid) {
	$rel = 'rel="me"';
} elseif (check_entity_relationship(elgg_get_logged_in_user_guid(), 'friend', $entity->guid)) {
	$rel = 'rel="friend"';
}

$title = "<a href=\"" . $entity->getUrl() . "\" $rel>" . $entity->name . "</a>";

$metadata = elgg_view_menu('entity', array(
	'entity' => $entity,
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz',
));

if (elgg_in_context('owner_block') || elgg_in_context('widgets')) {
	$metadata = '';
}

if (elgg_get_context() == 'gallery') {
	echo $icon;
} else {
	if ($entity->isBanned()) {
		$banned = elgg_echo('banned');
		$params = array(
			'entity' => $entity,
			'title' => $title,
//			'metadata' => $metadata,
		);
	} else {
		$params = array(
			'entity' => $entity,
			'title' => $title,
//			'metadata' => $metadata,
//			'subtitle' => $entity->briefdescription,
//			'content' => elgg_view('user/status', array('entity' => $entity)),
		);
	}

	$text = $entity->name;
	
		$link_params = array(
		'text' => $text,
		'href' => $entity->getURL(),
		'is_trusted' => true,
	);
	$title_link = elgg_view('output/url', $link_params);
	
	$list_body = '<h3>'.$title_link.'</h3>';

	echo elgg_view_image_block($icon, $list_body, $vars);
}
