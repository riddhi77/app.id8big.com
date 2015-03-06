<?php
/**
 * Wire add form body
 *
 * @uses $vars['post']
 */

	elgg_load_js('elgg.thewire');
	
	$post = elgg_extract('post', $vars);
	$text = elgg_echo('post');
	if ($post) {
		$text = elgg_echo('thewire:reply');
	}
	if ($post) {
		echo elgg_view('input/hidden', array(
			'name' => 'parent_guid',
			'value' => $post->guid,
		));
	}
	echo elgg_view('input/plaintext', array(
		'name' => 'body',
		'class' => 'mtm',
		'id' => 'thewire-textarea',
	));
	
?>
<div class="rBtnTheWire">
	<div class="btnTheWire flLef">
		<?php
			echo elgg_view('input/submit', array(
				'value' => $text,
				'id' => 'thewire-submit-button',
				'class' => 'elgg-button-action',
			));
		?>
	</div>
	<div id="thewire-characters-remaining" class="flRig">
		<span>140</span> <?php echo elgg_echo('thewire:charleft'); ?>
	</div>
	<div class="clearfloat"></div>
</div>