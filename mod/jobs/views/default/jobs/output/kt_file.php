<?php
/**
 *
 *  View to display the URL output
 * @package KtJobBaseForm
 * @subpackage KtJobBaseForm
 *
 * @uses string $vars['entity']
 * @uses string $vars['internalname'] The metadata internalname to retrieve
 * 
 *  NORMAL URL . them are autogenerated
 * @uses string $vars['href'] The string to display in the <a></a> tags
 * @uses string $vars['text'] The string between the <a></a> tags.
 * @uses bool $vars['target'] Set the target="" attribute.
 * @uses string $vars['class'] what to add in class=""
 * @uses string $vars['js'] Javascript to insert in <a> tag
 * @uses bool $vars['is_action'] Is this a link to an action?
 *
 */
$entity = $vars['entity'];
if (!($entity instanceof ElggEntity)) {
	return FALSE;
}

$file = $vars['internalname'];
if (empty($file)) {
	return FALSE;
}

$ignore_access = FALSE;
if (isset($vars['ignore_access'])) {
	$ignore_access = $vars['ignore_access'];
}

$filestore_data = jobs_get_filestore_data($entity, $file);

$href = NULL;

if ($filestore_data) {
	if (isset($vars['is_action']) && ($vars['is_action'] == TRUE)) {
		$action_url = $vars['url'].'action/download/file/';
		$href = elgg_http_add_url_query_elements($action_url, array('name' => $file, 'guid' => $entity->getGUID()));
	} else {
		$href = $vars['url']."kt_file/{$entity->getGUID()}/{$file}/";
		if (isset($filestore_data['simpletype']) && !empty($filestore_data['simpletype'])) { 
			//$href .= $filestore_data['simpletype'].'.'.pathinfo($filestore_data['filename'], PATHINFO_EXTENSION);
			$href .= $filestore_data['downloadname'];
		}
		if (isset($vars['ignore_access']) && $vars['ignore_access']) {
			$href .= "?dfile=true";
	}
}
}

if (!isset($vars['href']) && empty($vars['href'])) {
	$vars['href'] = $href;
}

if (empty($vars['text'])) {
	$vars['text'] = elgg_echo('jobs_file:download_link');
}


if (isset($filestore_data['simpletype']) && !empty($filestore_data['simpletype'])) {
	$js = 'rel="'.$filestore_data['simpletype'].'"';
	
	if (isset($vars['js']) && !empty($vars['js'])) {
		$vars['js'] = $vars['js'].' '.$js;
	}
}

if (isset($vars['value'])) {
	unset($vars['value']);
}
//Ver porque no se ve el output_url
echo elgg_view('output/url', $vars);
