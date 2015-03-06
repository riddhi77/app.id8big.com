<?php
/**
 * recaptcha language pack.
 */

$english = array(

	'recaptcha:public_key' => 'Enter Public Key:',
    'recaptcha:private_key' => 'Enter Private Key:',
    'recaptcha:use_recaptcha_registration' => 'Use Recaptcha for user registration.',
    'recaptcha:form_error' => 'Both Public and Private keys are required',
    'recaptcha:settings_saved' => 'All settings successfully saved',
    'recaptcha:label:human_verification' => 'Human Verification',
	'recaptcha:human_verification_failed' => 'Human Verification Failed<br>Please enter the correct values for the human verification field<br>
	    You can get a different challenge by clicking the refresh button inside the image',
    'recaptcha:signup' => 'Please sign up for recaptcha to get you public and private keys at %s',
    'recaptcha:verified' => 'Verified',
    'recaptcha:error:incorrect' => 'Incorrect please try again',
    /** Recaptcha HTML texts **/
    'recaptcha:info_txt:recaptcha_only_if_image' => 'Enter the words above',
    'recaptcha:info_txt:recaptcha_only_if_image:link' => 'Image',
    'recaptcha:info_txt:recaptcha_only_if_audio' => 'Enter the numbers you hear:',
    'recaptcha:info_txt:recaptcha_only_if_audio:link' => 'Audio',
    'recaptcha:info_txt:reload_captcha' => 'Reload',
    'recaptcha:info_txt:help' => 'Help',

    /** Admin Area **/
    'admin:appearance:recaptcha' => 'Recaptcha',
    //Themes
    'admin:appearence:theme:title:red' => 'Red',
    'admin:appearence:theme:title:white' => 'White',
    'admin:appearence:theme:title:blackglass' => 'Black Glass',
    'admin:appearence:theme:title:clean' => 'Clean',
    'admin:appearence:theme:title:custom' => 'Custom',
    'admin:appearence:theme:setting:saved' => 'Theme setted successfully',
);

add_translation("en", $english);
