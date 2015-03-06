<?php
/*
 * Bulk action view, that handles the header and footer form.
 */

$entity_subtype = KtJobBaseMain::ktform_get_subtype($vars);

$kt_chck = KtJobBaseMain::ktform_get_bulk_action_support($entity_subtype);
?>
<?php
//if (defined('KtJob_st_DISABLE_BULK_ACTIONS') && KtJob_st_DISABLE_BULK_ACTIONS != TRUE) {
if($kt_chck) {
	//Get the defined bulk actions for this tab/content.
	$bulk_actions = KtJobBaseMain::ktform_get_bulk_action_links($entity_subtype);
	
?>
<div class="ktFrmBulkActionsWrapper">
	<form method="post" action="#" class="ktToolsTop">
		<?php 
			echo elgg_view('input/securitytoken');
		?>
		<label class="ktChkLabel">
			<input type="checkbox" class="ktChk" />
			<span class="txt"><?php echo elgg_echo('jobs_ktform:bulk_actions:label:all'); ?></span>
		</label>
		<?php
		//Bulk actions.
		echo elgg_view('input/custom_pulldown', array(
			'internalname' => 'action_selected',
			'options_values' => $bulk_actions,
			'class' => 'ktSel',
		));
		?>
		<input type="submit" class="btnSnd" value="<?php echo elgg_echo('jobs_ktform:bulk_actions:label:apply'); ?>" />
		<div class="cThis">&nbsp;</div>
	</form>
</div>
<?php } ?>