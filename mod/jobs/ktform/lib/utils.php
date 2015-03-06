<?php

function jobs_entities_to_array_guid($entities) {
	$return = array();

	if (is_array($entities)) {
		foreach ($entities as $entity) {
			if ($entity instanceof ElggEntity) {
				$return[$entity->getGUID()] = $entity;
			}
		}
	}

	return $return;
}

/**
 * Function to return only the guids for elgg get entities in the callback option
 * 
 * @param StdClass $row
 * @return int
 *  
 */
function jobs_rows_to_guids(stdClass $row) {
	if ($row->guid) {
		return $row->guid;
	}

	return FALSE;
}

/**
 * Indents a flat JSON string to make it more human-readable.
 *
 * @param string $json The original JSON string to process.
 *
 * @return string Indented version of the original JSON string.
 */
function jobs_indent_json_dump($json) {
	$tab = "  ";
	$new_json = "";
	$indent_level = 0;
	$in_string = false;

	$json_obj = json_decode($json);

	if ($json_obj === false)
		return false;

	$json = json_encode($json_obj);
	$len = strlen($json);

	for ($c = 0; $c < $len; $c++) {
		$char = $json[$c];
		switch ($char) {
			case '{':
			case '[':
				if (!$in_string) {
					$new_json .= $char . "\n" . str_repeat($tab, $indent_level + 1);
					$indent_level++;
				} else {
					$new_json .= $char;
				}
				break;
			case '}':
			case ']':
				if (!$in_string) {
					$indent_level--;
					$new_json .= "\n" . str_repeat($tab, $indent_level) . $char;
				} else {
					$new_json .= $char;
				}
				break;
			case ',':
				if (!$in_string) {
					$new_json .= ",\n" . str_repeat($tab, $indent_level);
				} else {
					$new_json .= $char;
				}
				break;
			case ':':
				if (!$in_string) {
					$new_json .= ": ";
				} else {
					$new_json .= $char;
				}
				break;
			case '"':
				if ($c > 0 && $json[$c - 1] != '\\') {
					$in_string = !$in_string;
				}
			default:
				$new_json .= $char;
				break;
		}
	}

	return $new_json;
}
