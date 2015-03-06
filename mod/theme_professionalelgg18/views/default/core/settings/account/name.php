<?php
/**
 * Provide a way of setting your full name.
 *
 * @package Elgg
 * @subpackage Core
 */

$user = elgg_get_page_owner_entity();
?>
<div class="elgg-module elgg-module-info">
  <div class="elgg-head">
		<h3><?php echo elgg_echo('user:name:label'); ?></h3>
	</div>
	<div class="elgg-body rFrmSet nmBot">
		<label class="flLef"><?php echo elgg_echo('name'); ?>:</label>
		<?php echo elgg_view('input/text', array('name' => 'name', 'value' => $user->name)); ?>
		<div class="clearfloat"></div>
	</div>
</div>
<?php
// need the user's guid to make sure the correct user gets updated
echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $user->guid));
