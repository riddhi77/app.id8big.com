<?php
/**
 * Elgg sidebar contents
 *
 * @uses $vars['sidebar'] Optional content that is displayed at the bottom of sidebar
 */

 /*
if(!THEME_RESPONSIVE_SUPPORT) {
	echo elgg_view('page/elements/loggedin_block', $vars);
}
*/

echo elgg_view_menu('page', array('sort_by' => 'name'));

// optional 'sidebar' parameter
if (isset($vars['sidebar'])) {
	echo $vars['sidebar'];
}

// @todo deprecated so remove in Elgg 2.0
// optional second parameter of elgg_view_layout
if (isset($vars['area2'])) {
	echo $vars['area2'];

}

// @todo deprecated so remove in Elgg 2.0
// optional third parameter of elgg_view_layout
if (isset($vars['area3'])) {
	echo $vars['area3'];
}


echo elgg_view('theme_elements/sidebar_extras', $vars);
