<?php
/**
 * Elgg logout action
 *
 * @package Elgg
 * @subpackage Core
 */

// Log out
$result = logout();

// Set the system_message as appropriate
if ($result) {
	system_message(elgg_echo('logoutok'));
//	forward();
    forward('http://id8big.com');
} else {
	register_error(elgg_echo('logouterror'));
}