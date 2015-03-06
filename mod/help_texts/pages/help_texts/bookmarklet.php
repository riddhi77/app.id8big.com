<?php
/**
* Elgg help_texts plugin help_textlet page
*
* @package Help texts
*/

gatekeeper();

$container_guid = get_input('container_guid');
$container = get_entity($container_guid);
$page_owner = $container;

if (elgg_instanceof($container, 'object')) {
	$page_owner = $container->getContainerEntity();
}

elgg_set_page_owner_guid($page_owner->getGUID());

$title = elgg_echo('help_texts:bookmarklet');

if ($page_owner instanceof ElggGroup) {
	elgg_push_breadcrumb($page_owner->name, $page_owner->getURL());
}

elgg_push_breadcrumb($title);

$content = elgg_view("help_texts/bookmarklet");

$body = elgg_view_layout('content', array(
	'content' => $content,
	'title' => $title,
	'filter' => false
));

echo elgg_view_page($title, $body);