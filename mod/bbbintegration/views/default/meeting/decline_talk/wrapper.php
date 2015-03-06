<?php

/*
 * BigBlueButton Integration
 */

// Get user
$user_guid = elgg_extract('user_guid', $vars, '');
$user = get_entity($user_guid);
if (!elgg_instanceof($user, 'user')) {
    return false;
}

?>
<div class="meeting-request-talk-wrapper">
    <div class="img">
        <a href="<?php echo $user->getURL(); ?>">
            <img src="<?php echo $user->getIconURL('small') ?>" alt="" />
        </a>
    </div>
    <div class="txt">
        <p>
            <a href="<?php echo $user->getURL(); ?>"><?php echo $user->name; ?></a>
            <?php
                echo elgg_echo('meeting:talk:decline:1');
            ?>
        </p>
    </div>
    <div class="btns">
        <?php
            // 'request_talk' is used to indicate that it is accepting a request
            // for talk
			$decline_url = $vars['url'] . 'action/meeting/talk/decline_accept?user_guid=' . $user->getGUID();
            $decline_url = elgg_add_action_tokens_to_url($decline_url);
            echo elgg_view('output/url', array(
                'text' => elgg_echo('meeting:talk:decline:accept'),
                'href' => $decline_url,
                'class' => 'elgg-button elgg-button-submit talk-decline-accept',
            ));
        ?>
    </div>
</div>
<div id="meeting-request-talk-sound"></div>
