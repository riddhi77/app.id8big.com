<?php

$context = HelpBaseMain::ktform_get_subtype($vars);

if (elgg_is_active_plugin('keetup_categories') && HelpBaseMain::ktform_get_entity_category_support($context)) {
	echo elgg_view('output/keetup_categories_tiny', $vars);
}