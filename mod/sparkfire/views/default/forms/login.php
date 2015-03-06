<?php
/**
 * Elgg login form
 *
 * @package Elgg
 * @subpackage Core
 */
?>
<div class="rFrm clearfix">
	<label><?php echo elgg_echo('loginusername'); ?></label>
	<?php echo elgg_view('input/text', array(
		'name' => 'username',
		'class' => 'elgg-autofocus',
		));
	?>
</div>
<div class="rFrm clearfix">
	<label><?php echo elgg_echo('password'); ?></label>
	<?php echo elgg_view('input/password', array('name' => 'password')); ?>
</div>
<?php echo elgg_view('login/extend', $vars); ?>
<div class="rFrm clearfix">
	<label>&nbsp;</label>
	<div class="rememberAndButton flRig clearfix">
		<label class="flLef labelRemember">
			<input type="checkbox" name="persistent" value="true" class="flLef" />
			<span class="flLef"><?php echo elgg_echo('login:remember'); ?></span>
			<div class="clearfloat"></div>
		</label>
		<?php echo elgg_view('input/submit', array('value' => elgg_echo('login:button'), 'class' => 'flRig elgg-button-submit')); ?>
	</div>
</div>
<?php
	if (isset($vars['returntoreferer'])) {
		echo elgg_view('input/hidden', array('name' => 'returntoreferer', 'value' => 'true'));
	}
?>
<div class="loginOpts">
	<ul class="ulLoginOptions">
		<?php
			if (elgg_get_config('allow_registration')) {
		?>
		<li><a class="regLink" href="<?php echo elgg_get_site_url(); ?>register"><?php echo elgg_echo('login:register'); ?></a></li>
		<li class="sep">|</li>
		<?php
			}
		?>
	    <li><a class="forgotLink" href="<?php echo elgg_get_site_url(); ?>forgotpassword"><?php echo elgg_echo('login:forgot'); ?></a></li>
	</ul>
</div>
