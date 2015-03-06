<?php

/**
 * ElggEntity listing default view.
 * Default elgg listing.
 */
// Icon default.
$icon = '';

$image_support = KtJobBaseMain::ktform_get_entity_image_support($vars['entity']->getSubtype());


if ($image_support) {
	// If image support get the icon.
	$icon_entity = $vars['entity'];
	if ($image_support === KtJobBaseMain::$KtJob_st_OWNER_ICON_NAME) {
		$icon_entity = $vars['entity']->getOwnerEntity();
	}
	
	$icon = elgg_view(
			'jobs/icon', array(
		'entity' => $icon_entity,
		'size' => 'small',
			)
	);
}
// Handle it with another view, so it is easier.
$info = elgg_view('jobs/listing_widget/info', $vars);

echo elgg_view_image_block($icon, $info);
