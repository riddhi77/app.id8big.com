<?php
/**
 * Provide a way of setting your language prefs
 *
 * @package Elgg
 * @subpackage Core
 */

$user = elgg_get_page_owner_entity();

if ($user) {
?>
<div class="elgg-module elgg-module-info">
	<div class="elgg-head">
		<h3><?php echo elgg_echo('user:set:language'); ?></h3>
	</div>
	<div class="elgg-body rFrmSet nmBot">
		<label class="flLef"><?php echo elgg_echo('user:language:label'); ?>:</label>
		<?php
			echo elgg_view("input/dropdown", array(
				'name' => 'language',
				'value' => $user->language,
				'options_values' => get_installed_translations()
			));
		?>
		<div class="clearfloat"></div>
	</div>
</div>
<?php
}