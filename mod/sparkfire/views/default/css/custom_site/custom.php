<?php
	/*
	 * Custom Specific Theme Css
	 */
?>
/* general */
.limitWidth,
.elgg-system-messages li p,
.topbarContainer {
    width: 990px;   /* fixed width, baby */
}
.elgg-layout {
    background: none;
}
.elgg-page-default {
	background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>fon-main-body.jpg) 0 62px repeat-x;
}
.elgg-page-body {
	background: none;
	min-height: 600px;
}
.elgg-layout.elgg-layout-one-column .elgg-main {
    margin: 0 0 0 120px;
}
.elgg-layout.elgg-layout-one-sidebar .elgg-main {
    margin: 0 200px 0 110px;
}
.elgg-body.elgg-main {
    overflow: visible;
}
.isLoggedIn .headRig {
    margin-top: 8px;
}
.userTopMn {
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>sep-header-items.png) 0 0 no-repeat;
    margin-left: 15px;
    padding-left: 15px;
    height: 41px;
}
.userTopMn .usrIcoName {
    margin-top: 7px;
}
.userTopMn ul {
    top: 41px;
}
.bgWhiteAndShadow {
    background: #fff; /* Old browsers */
    
    background: -moz-linear-gradient(top,  #ffffff 0%, #f2f2f2 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f2f2f2)); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  #ffffff 0%,#f2f2f2 100%); /* IE10+ */
    background: linear-gradient(to bottom,  #ffffff 0%,#f2f2f2 100%); /* W3C */
    border-radius: 0 0 6px 6px;
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 15px 20px 30px;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    /*border-top: none;*/
    min-height: 450px;
  }
  /* IE9 SVG, needs conditional override of 'filter' to 'none' */
  :root .bgWhiteAndShadow  { 
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmMmYyZjIiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+)\0/IE9;
    } /* IE9 + IE10pp4 */
.reqIco {
    margin-right: 0 !important;
}
.reqIco.ico0 div.divIco {
    background: url("<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>ico-0.png") no-repeat 6px 6px;
}
.reqIco.ico0 div.divIco.on {
    background-position: 5px 5px!important;
}
.reqIco.ico1 div.divIco {
    background: url("<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>ico-1.png") no-repeat 6px 5px;
}
.reqIco.ico2 div.divIco {
    background: url("<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>ico-2.png") no-repeat 7px 4px!important;
}
.reqIco.ico2 div.divIco.on {
    background-position: 6px 3px!important;
}
.elgg-page .userTopMn .usrIco {
    background: url("<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>custom/ico-user-profile.png") no-repeat 50% 50%;
    margin: 0;
}
.reqIco div.divIco.on {
    background-color: #fff!important;
}
.utmMnButton {
    background-color: transparent;
    border: 1px solid transparent;
}
.reqIco div.divIco.on span.count {
    top: -3px;
}
.reqIco div.divIco span.count .counter {
    background-color: #d7894e;
}
ul.topNotifications {
    padding: 8px 0 0 10px;
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>sep-header-items.png) 0 0 no-repeat;
    margin-left: 0;
    height: 33px;
}
.elgg-search-header {
    margin-top: 7px;
}
.expandableSearch.elgg-search-header input[type="text"] {
    right: 31px;
    box-shadow: 0 -2px 1px rgba(0, 0, 0, 0.2) inset;
    background-color: #fcfcfc;
    color: #767676;
}
.expandableSearch.elgg-search-header input[type="text"],
.expandableSearch.elgg-search-header input[type="text"]:focus {
    font-size: 12px;
}
.sbbContents.groupsBoxContents,
.sbbContents.profileBoxContents {
    padding: 0;
}
/* sidebar boxes */
.sidebarBox,
.user-profile-inline-fields,
.sideBarsWidget .elgg-module-aside,
.schrFrm.sidebarSrchFrm {
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border: 1px solid #e7e7e7;
    background: rgb(254,254,254); /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZlZmVmZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmMWYxZjEiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top,  rgba(254,254,254,1) 0%, rgba(241,241,241,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(254,254,254,1)), color-stop(100%,rgba(241,241,241,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(254,254,254,1) 0%,rgba(241,241,241,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(254,254,254,1) 0%,rgba(241,241,241,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(254,254,254,1) 0%,rgba(241,241,241,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(254,254,254,1) 0%,rgba(241,241,241,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefe', endColorstr='#f1f1f1',GradientType=0 ); /* IE6-8 */
    box-shadow: 0 3px 4px rgba(0, 0, 0, 0.1);
    margin: 15px 0 0!important;
    padding: 10px 8px;
}
.elgg-module-aside .elgg-head h3,
.sidebarBox h3,
.schrFrm.sidebarSrchFrm h3 {
    font-size: 13px;
    font-weight: bold;
    padding-bottom: 8px;
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>sep-title-sbb.png) 50% 100% no-repeat;
}
/* Agenda Widget */
#agenda-widget-box .sidebarBoxHeader {
	position: relative;
}
#agenda-widget-box .btn-group {
	position: absolute;
	top: -3px;
	right: 6px;
}
#agenda-widget-box .itemDate {
	width: 60px;
	padding: 0 0 0 5px;
}
.elgg-head .btn-group {
    margin-top: -1px;
}
.ktFormWrapper.ktFormnews.ktSearchForm {
    margin: 0;
}
.ktFormWrapper.ktFormnews.ktSearchForm .elgg-foot.rBtnSrchFrm.mTop1 {
    padding: 0;
    border: none;
}
.elgg-module-aside > .elgg-body > .elgg-form,
.sidebarBox > .elgg-body > .elgg-form {
    padding: 0;
}
.elgg-sidebar .elgg-module-aside .elgg-input-text {
    width: 60.75% !important;
}
.elgg-sidebar .elgg-module-aside .elgg-button.elgg-button-submit {
    margin-top: 2px;
}
.elgg-page .elgg-sidebar .elgg-list {
    border-bottom: none;
    border-top: none;
    padding: 0;
}
/* title */
.mainContentsTitle {
    font-weight: normal;
    font-size: 14px;
    line-height: 1.2;
    color: #565656;
    padding: 0 0 16px;
    margin: 0 0 16px;
    border-bottom: none;
}
.elgg-heading-main {
    float: none;
}
.elgg-heading-main,
h2.elgg-heading-main {
    max-width: none;
    margin-bottom: 10px;
}
.elgg-head {
    position: relative;
}
/* common main title */
.elgg-main > .elgg-head,
.elgg-main.elgg-body > h2 {
    border: none;
    margin-bottom: 20px;
    padding: 0;
}
.elgg-main > .elgg-head h2,
.elgg-main.elgg-body > h2 {
    font-size: 16px;
    font-weight: bold;
    line-height: 1.2;
    color: #000;
    margin: 0;
    padding: 0 0 0 5px;
}
ul.elgg-menu.elgg-menu-title {
    right: 5px;
    top: 0;
}
.bodyEvents.bodyProject .elgg-main > .elgg-head,
.bodyKt_polls.bodyProject .elgg-main > .elgg-head,
.bodyMeeting.bodyProject .elgg-main > .elgg-head,
.bodyGdrive.bodyProject .elgg-main > .elgg-head,
.bodyPages.bodyProject .elgg-main > .elgg-head,
.bodyBlog.bodyProject .elgg-main > .elgg-head {   /* hack, will fix it someday... */
    margin-top: 20px;
}
/* button fixes */
a.elgg-button-action,
input.elgg-button-action {
    text-shadow: none!important;
}
.btn,
.btn:hover,
.elgg-button,
.elgg-button:hover,
.editable button,
.editable button:hover,
.ktForm.rBtn .elgg-button,
.ktForm.rBtn .elgg-button:hover {
    color: #666;
}
.editable textarea {
    width: 150px!important;
    font-size: 12px!important;
}
.editable button {
    font-size: 11px;
    margin: 5px 8px 0 0;
    padding: 3px 8px 2px;
    line-height: 13px;
}
/* common tabs */
ul.elgg-menu.elgg-menu-filter {
    position: relative;
    z-index: 12;
}
.nav-tabs > li > a,
.elgg-tabs > li > a,
.elgg-menu-filter > li > a {
    padding-bottom: 8px;
    padding-top: 10px;
}
.nav-tabs > li > a,
.elgg-tabs > li > a,
.elgg-menu-filter > li > a,
.nav-tabs > li > a:hover,
.elgg-tabs > li > a:hover,
.elgg-menu-filter > li > a:hover {
    color: #767676;
}
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.elgg-tabs .active > a,
.elgg-tabs .active > a:hover,
.elgg-tabs .elgg-state-selected > a,
.elgg-tabs .elgg-state-selected > a:hover,
.elgg-menu-filter .active > a,
.elgg-menu-filter .active > a:hover,
.elgg-menu-filter .elgg-state-selected > a,
.elgg-menu-filter .elgg-state-selected > a:hover {
    color: #000;
}
/* register, login, forgot password */
.elgg-page.unresponsiveIE form.elgg-form.elgg-form-login:after {
    display: none!important;
}
.elgg-page.unresponsiveIE form.elgg-form.elgg-form-login {
    border: none!important;
}
.elgg-page.unresponsiveIE form.elgg-form.elgg-form-login {
    background: #fff!important;
}
.bodyRegister .elgg-page-body .elgg-inner,
.bodyForgotpassword .elgg-page-body .elgg-inner,
.bodyLogin .elgg-page-body .elgg-inner {
	padding-top: 100px;
}
.elgg-main form.elgg-form.elgg-form-register,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword,
.elgg-main form.elgg-form.elgg-form-login,
.elgg-main form.elgg-form-registerstep-save {
	background: rgb(255,255,255); /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSI0MCUiIHN0b3AtY29sb3I9IiNmZmZmZmYiIHN0b3Atb3BhY2l0eT0iMSIvPgogICAgPHN0b3Agb2Zmc2V0PSIxMDAlIiBzdG9wLWNvbG9yPSIjZjJmMmYyIiBzdG9wLW9wYWNpdHk9IjEiLz4KICA8L2xpbmVhckdyYWRpZW50PgogIDxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjZ3JhZC11Y2dnLWdlbmVyYXRlZCkiIC8+Cjwvc3ZnPg==);
    background: -moz-linear-gradient(top,  rgba(255,255,255,1) 40%, rgba(242,242,242,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(40%,rgba(255,255,255,1)), color-stop(100%,rgba(242,242,242,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 40%,rgba(242,242,242,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(255,255,255,1) 40%,rgba(242,242,242,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(255,255,255,1) 40%,rgba(242,242,242,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(255,255,255,1) 40%,rgba(242,242,242,1) 100%); /* W3C */
	box-shadow: 0 0 4px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    -moz-border-radius: 8px;
    -webkit-border-radius: 8px;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.elgg-main form.elgg-form.elgg-form-register,
.elgg-main form.elgg-form.elgg-form-login,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword {
    min-width: 550px;
}
.elgg-main form.elgg-form-registerstep-save {
    max-width: 550px;
    margin: 0 auto;
}
.elgg-main form.elgg-form.elgg-form-login,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword {
    margin-top: 60px;
}
.elgg-main form.elgg-form.elgg-form-register,
.elgg-main form.elgg-form-registerstep-save {
    margin-bottom: 30px;
}
.elgg-main form.elgg-form.elgg-form-register,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword,
.elgg-main form.elgg-form.elgg-form-login {
    padding: 0;
}
.elgg-main form.elgg-form.elgg-form-register h3.stdFrmTitle,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword h3.stdFrmTitle,
.elgg-main form.elgg-form.elgg-form-login h3.stdFrmTitle,
.registerInfo h3 {
    font-size: 20px;
    font-weight: normal;
    line-height: 1.2;
    margin: 0 0 35px;
    color: #000;
}
.registerInfo h3 {
    margin: 0;
}
.elgg-main form.elgg-form.elgg-form-register h3.stdFrmTitle,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword h3.stdFrmTitle,
.elgg-main form.elgg-form.elgg-form-login h3.stdFrmTitle,
.elgg-main form.elgg-form.elgg-form-login .loginOpts,
.registerInfo h3 {
    padding: 15px 0 18px 20px;
}
.elgg-main form.elgg-form-registerstep-save fieldset div {
    padding: 15px 20px;
    margin: 0;
}
.elgg-main form.elgg-form-registerstep-save fieldset div .note {
    font-size: 11px;
}
.elgg-main form.elgg-form-registerstep-save fieldset div .elgg-input-plaintext {
    margin-bottom: 5px;
}
.elgg-main form.elgg-form-registerstep-save .elgg-foot {
    overflow: hidden;
    padding-bottom: 20px;
}
.elgg-main form.elgg-form-registerstep-save .elgg-foot .elgg-subtext {
    float: left;
    margin: 20px 0 0 20px;
}
.elgg-main form.elgg-form-registerstep-save .elgg-foot input[type="submit"] {
    float: right;
    margin: 15px 20px 0 0;
}
.elgg-main form.elgg-form.elgg-form-register label,
.elgg-main form.elgg-form.elgg-form-login label {
    margin-top: 8px;
    width: 25.3721%;
}
.elgg-main form.elgg-form.elgg-form-register label,
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword label,
.elgg-main form.elgg-form.elgg-form-login label {
    display: block;
    font-size: 14px;
    color: #767676;
    line-height: 1.2;
}
.elgg-main form.elgg-form.elgg-form-register input[type="text"],
.elgg-main form.elgg-form.elgg-form-register fieldset input.elgg-input-date[type="text"],
.elgg-main form.elgg-form.elgg-form-register textarea,
.elgg-main form.elgg-form.elgg-form-register fieldset ul,
.elgg-main form.elgg-form.elgg-form-register input[type="password"],
.elgg-main form.elgg-form.elgg-form-register select,
.elgg-main form.elgg-form.elgg-form-register .captchaInputImg,
.elgg-main form.elgg-form.elgg-form-login input[type="text"],
.elgg-main form.elgg-form.elgg-form-login input[type="password"],
.elgg-main form.elgg-form.elgg-form-login select,
.elgg-main form.elgg-form.elgg-form-login .captchaInputImg {
    width: 54.837%;
}
.elgg-main form.elgg-form.elgg-form-register select,
.elgg-main form.elgg-form.elgg-form-login select {
    width: 56.837%;
}
.elgg-main form.elgg-form.elgg-form-register input[type="text"],
.elgg-main form.elgg-form.elgg-form-register input[type="password"],
.elgg-main form.elgg-form.elgg-form-register textarea,
.elgg-main form.elgg-form.elgg-form-register fieldset ul,
.elgg-main form.elgg-form.elgg-form-register select,
.elgg-main form.elgg-form.elgg-form-register .captchaInputImg,
.elgg-main form.elgg-form.elgg-form-login input[type="text"],
.elgg-main form.elgg-form.elgg-form-login input[type="password"],
.elgg-main form.elgg-form.elgg-form-login select,
.elgg-main form.elgg-form.elgg-form-login .captchaInputImg,
.elgg-main form.elgg-form.elgg-form-login .rLoginBtn input[type="submit"],
.elgg-main form.elgg-form.elgg-form-login label.labelRemember,
.rememberAndButton,
.elgg-main form.elgg-form.elgg-form-register .rBtn,
#recaptcha_image,
body #elgg-recaptcha-widget .elggCaptchaOptions,
.textVerified {
    margin: 0 13.814% 0 0;
}
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword #recaptcha_image {
    margin-right: 30px;
}
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword #elgg-recaptcha-widget label {
    float: left;
}
.elgg-main form.elgg-form.elgg-form-user-requestnewpassword #elgg-recaptcha-widget #recaptcha_response_field {
    float: right;
    margin: 0 6% 0 0;
    width: 58%;
}
body .elgg-main form.elgg-form.elgg-form-user-requestnewpassword #elgg-recaptcha-widget .elggCaptchaOptions {
    margin: -13px 0 0;
    text-align: left !important;
    width: 334px !important;
}
.elgg-main form.elgg-form.elgg-form-login label.labelRemember {
    width: auto;
    margin: 7px 0 0 0;
}
.elgg-main form.elgg-form.elgg-form-login .rememberAndButton input[type="submit"] {
    width: 80px;
}
.rememberAndButton,
.elgg-main form.elgg-form.elgg-form-register .rBtn,
#recaptcha_image,
body #elgg-recaptcha-widget .elggCaptchaOptions,
.textVerified {
    width: 312px!important;
}
.elgg-main form.elgg-form.elgg-form-login .loginOpts,
.registerInfo {
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    margin: 30px 0 0 0;
}
.elgg-main .rLoginBtn .labelRemember span,
.elgg-main .rFrm .labelRemember span {
    color: #767676;
    margin: 1px 0 0 0;
}
.elgg-main .elgg-form .timezoneSelectable br {
    display: block;
}
.elgg-main form.elgg-form.elgg-form-register .timezoneSelectable label,
.elgg-main form.elgg-form.elgg-form-register label.recaptcha_only_if_image {
    margin-top: -2px;
}
ul.ulLoginOptions .sep {
    color: #767676;
    margin: 0 3px;
}
ul.ulLoginOptions a {
    text-decoration: underline;
}
ul.ulLoginOptions a:hover {
    text-decoration: none;
}
.elgg-main form.elgg-form.elgg-form-register .rBtn .btnAlign,
.elgg-main form.elgg-form.elgg-form-register .elgg-subtext {
    margin: 3px 0 0 0;
    width: 80px;
}
.elgg-main form.elgg-form.elgg-form-register .registerInfo ul {
    padding: 0 20px 15px 20px;
    list-style: none;
    margin: 0;
    width: auto;
    float: none;
   // background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>logo-register.png) 95% 82% no-repeat;   (commented by Riddhi Mankad to remove the logo)
}
.elgg-main form.elgg-form.elgg-form-register .registerInfo ul li {
    font-size: 12px;
    line-height: 1.6;
}
form.elgg-form.elgg-form-user-requestnewpassword .rFrm {
    padding: 0 20px;
}
form.elgg-form.elgg-form-user-requestnewpassword .rFrm.nmBot {
    padding-bottom: 30px;
}
form.elgg-form.elgg-form-user-requestnewpassword .rFrm.nmBot input[type="submit"] {
    margin-top: 2px;
}
.bodyForgotpassword .mainContentsTitle.subMnCont {
    display: none;
}
.bodyLogin .elgg-module,
.bodyLogin .elgg-body.elgg-main .elgg-body,
.bodyLogin .elgg-body.elgg-main .elgg-col-last,
.bodyLogin .elgg-body.elgg-main .elgg-body:after,
.bodyLogin .elgg-body.elgg-main .elgg-col-last:after {
	overflow: visible;
}
.rFrm.rFrmRC {
    margin-bottom: 15px;
}
#register_tab {
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>fon-top-r-steps.png) 50% 100% no-repeat;
    list-style: none;
    margin: 0 0 15px;
    width: auto;
    height: 115px;
    padding: 15px 0 0 0;
}
#register_tab li,
#register_tab li .circleNumber {
    height: 40px;
}
#register_tab li,
#register_tab li .circleNumber {
    line-height: 40px;
}
#register_tab li {
    width: 26%;
    float: left;
}
#register_tab li.tabNumber1 {
    margin: 0 105px 0 0;
}
#register_tab li.tabNumber3 {
    float: right;
}
#register_tab li .circleNumber {
    width: 40px;
    text-align: center;
    font-size: 22px;
    color: #fff;
    margin: 0 20px 0 0;
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>fon-step-circle.png) 0 100% no-repeat;
}
#register_tab li.elgg-state-selected .circleNumber {
    background-position: 0 0;
}
#register_tab li .stepText {
    font-size: 22px;
    color: #b1b1b1;
    line-height: 44px;
}
#register_tab li.elgg-state-selected .stepText {
    color: #000;
}
/* header */
body .elgg-page-header {
	background-image: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>fon-header.png);
	background-position: 0 0;
	background-repeat: repeat-x;
}
.headerSocial {
	width: 393px;
	height: 43px;
	margin: 0 0 0 83px;
	background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>fon-social-elements.png) 0 0 no-repeat;
}
.loginTopText {
	color: #000;
	line-height: 1.2;
	font-size: 13px;
	margin: 5px 15px 0 0;
}
.loginTopText:hover {
	text-decoration: none;
}
/* logo */
<?php
	// Default logo.
	$logo_url = THEME_GRAPHICS_CUSTOM_SITE . 'logo.png';
	// get logo dimensions
	list($width, $height, $type, $attr) = getimagesize($logo_url);
?>
#headerLef {
    margin: 0;
}
#headerLef,
#headerLef h1,
#headerLef h1 a {
	width: <?php echo $width; ?>px;
}
#headerLef h1 a {
	background: url(<?php echo $logo_url; ?>) 50% 50% no-repeat;
}
.headerCenter p{
    margin: 24px 0 0 20px;
    color:#c64717;
    font-size: 14px;
    text-shadow: 1px 1px 0 #fff;
    font-weight: normal;
}
/* user sidebar */
.user-profile-inline-fields .inlineField {
	min-height: 50px;
}
.user-profile-inline-fields .itemInlineWrapper {
	margin: 0 0 10px 0;
}
.user-profile-inline-fields .itemInlineTitleWrapper {
	overflow: hidden;
	margin: 0 0 5px 0;
}
.user-profile-inline-fields .itemInlineTitleWrapper a {
	float: right;
}
.user-profile-inline-fields .itemInlineTitleWrapper h3 {
	float: left;
	margin: 3px 5px 0 0
}
/* menu sidebar */
#mnSiteResponsive,
#mnSiteResponsive ul {
    background-color: transparent;
}
#mnSiteResponsive,
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default {
    padding: 0;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li {
    background: none;
    border-bottom: 1px solid #c7c7c7;
    padding: 0;
    height: auto;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li > a {
    padding: 18px 10px 16px 10px;
    line-height: 1.2;
    background: none;
    text-align: left;
    font-size: 12px;
    color: #565656;
    text-transform: uppercase;
    display: block;
    height: auto;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li.elgg-state-selected > a,
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li > a:hover {
    background: #f7f7f7;
    color: #db5614;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li.elgg-state-selected > a {
    cursor: pointer;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li > ul {
    display: none;
    border-top: 1px solid #c7c7c7;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li > ul > li > a {
    cursor: pointer;
    padding: 8px 10px 6px 10px;
    line-height: 1.2;
    background: none;
    text-align: left;
    font-size: 12px;
    color: #565656;
    display: block;
    height: auto;
    text-shadow: 0 0 1px rgba(255, 255, 255, 0.8);
    background: #dfdfdf;
    border-bottom: 1px solid #f1f1f1;
    border-radius: 0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
}
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li > ul > li.subMnOpen > a,
.elgg-page-body #mnSiteResponsive .elgg-menu-site-default > li > ul > li > a:hover {
    color: #fff;
    text-shadow: 0 -1px 1px rgba(220, 102, 24, 1);
    background: rgb(231,136,36); /* Old browsers */
    /* IE9 SVG, needs conditional override of 'filter' to 'none' */
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U3ODgyNCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNkNzVhMGQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
    background: -moz-linear-gradient(top,  rgba(231,136,36,1) 0%, rgba(215,90,13,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(231,136,36,1)), color-stop(100%,rgba(215,90,13,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(231,136,36,1) 0%,rgba(215,90,13,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(231,136,36,1) 0%,rgba(215,90,13,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(231,136,36,1) 0%,rgba(215,90,13,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(231,136,36,1) 0%,rgba(215,90,13,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e78824', endColorstr='#d75a0d',GradientType=0 ); /* IE6-8 */
}
/* hide breadcrumbs */
.elgg-menu.elgg-breadcrumbs {
    display: none;
}
/* widget sidebar */
.sideBarsContainer.sideBarsWidget {
    right: 0;
    top: 0;
}
#mnSidebarWidget{
    padding: 0;
    width: 190px;
}
/* footer */
body .elgg-page-footer {
    background-image: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>fon-footer.png);
    background-position: 0 0;
    background-repeat: no-repeat;
    background-position: center top;
}
.footerCols {
	padding: 30px 0 26px 100px;
}
.footerCols .footerCol {
	width: 130px;
	margin: 0 40px 0 0;
}
.footerCol h4 {
	font-size: 15px;
    line-height: 1.2;
    margin: 0 0 15px;
    text-shadow: 1px 1px 0 #fff;
    font-weight: normal;
}
.ulFootCol a {
	color: <?php echo $vars['css']['base-color']; ?>;
}
.ulFootCol li {
	font-size: 12px;
	line-height: 1.2;
	margin: 0 0 14px;
	text-shadow: 1px 1px 0 #fff;
}
.ulFootCol li:last-child {
	margin: 0;
}
.footerCols .footerCol1{
    width:200px !important;
}
.footerSlogans{
    margin:20px 0 0 0;
    width: 135px;
}
/* social icons */
.socialIcons {
    padding: 1px 0px 0;
    margin: 0 0 36px;
}
.socialIcons,
.socialIcons li,
.socialIcons a {
    height: 23px;
    display: block;
    text-decoration: none;
}
.socialIcons li,
.socialIcons a {
    width: 23px;
}
.socialIcons li {
    float: left;
    margin: 0 6px 0 0;
}
.socialIcons a {
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE ?>ico-social.png) 0 0 no-repeat;
}
.socialIcons .item1 a {
    background-position: 0 0;
}
.socialIcons .item2 a {
    background-position: -30px 0;
}
.socialIcons .item3 a {
    background-position: -59px 0;
}
.socialIcons .item4 a {
    background-position: -90px 0;
}
/* icon activity */
.elgg-icon-thumbs-up {
    background-position: 0 1px;
    background-image: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE ?>ico-unlike.png);
}
.elgg-icon-thumbs-up-alt,
.elgg-icon-thumbs-up-alt:hover {
    background-position: 0 2px;
    background-image: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE ?>ico-like.png);
}
.elgg-icon-thumbs-up:hover {
    background-position: 0 1px;
}
/* footer newsletter */
.newsAndCopy {
	padding: 0 0 0 117px;
}
#frmNewsletter h4 {
	font-size: 15px;
    line-height: 1.2;
    margin: 0 0 15px;
    text-shadow: 1px 1px 0 #fff;
    font-weight: normal;
}
#frmNewsletter .elgg-input-text {
	width: 300px;
	margin: 0 10px 0 0;
}
#frmNewsletter input.elgg-input-submit,
#frmNewsletter input.elgg-input-submit:hover {
	border: none;
	background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>btn-subscribe.png) 0 0 no-repeat;
	width: 113px;
	height: 33px;
	text-align: center;
	color: #fff;
	text-shadow: 0 -1px 0 #666;
	font-weight: normal;
	font-size: 14px;
	padding: 0;
}
#frmNewsletter input.elgg-input-submit:hover {
	text-shadow: 0 -1px 0 #000;
}
/* text inputs */
input[type="text"],
input[type="password"],
textarea {
    background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #f3f3f3 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#f3f3f3)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 0%,#f3f3f3 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#f3f3f3 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#f3f3f3 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ffffff 0%,#f3f3f3 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f3f3f3',GradientType=0 ); /* IE6-9 */
}
input[type="text"],
input[type="password"],
textarea,
input[type="text"]:focus,
input[type="password"]:focus,
textarea:focus {
    box-shadow: inset 0 -1px 1px rgba(0, 0, 0, 0.1);
    font-size: 15px;
    padding: 6px 4px;
}
input[type="text"]:focus,
input[type="password"]:focus,
textarea:focus {
	background: #ffffff; /* Old browsers */
	background: -moz-linear-gradient(top,  #ffffff 0%, #e8e8e8 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e8e8e8)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #ffffff 0%,#e8e8e8 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #ffffff 0%,#e8e8e8 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #ffffff 0%,#e8e8e8 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #ffffff 0%,#e8e8e8 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e8e8e8',GradientType=0 ); /* IE6-9 */
    -webkit-transition: background linear 0.2s!important;
    -moz-transition: background linear 0.2s!important;
    -ms-transition: background linear 0.2s!important;
    -o-transition: background linear 0.2s!important;
    transition: background linear 0.2s!important;
}
/* footer text */
ul.ulFoot {
    float: right;
    margin: 40px 18px 0;
    min-width: 0;
    padding: 0;
    text-align: right;
    text-shadow: 1px 1px 0 #fff;
}
ul.ulFoot li,
ul.ulFoot li a,
.elgg-page-footer ul.ulFoot a {
	color: <?php echo $vars['css']['base-color']; ?>;
}
/* submit buttons */
.elgg-button,
.elgg-button-submit,
.elgg-button-delete,
.elgg-button-action,
.elgg-button-special,
.elgg-button-cancel {
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.4) !important;
    border: none !important;
}
.elgg-button-submit,
.elgg-button-delete,
.elgg-button-action,
.elgg-button-special,
.elgg-button-cancel {
	text-shadow: 0 -1px 1px rgba(211, 88, 17, 1)!important;
}
@-moz-document url-prefix() {
	/* CSS hack code for firefox */
	input.btn,
    input.elgg-button,
    input.elgg-button-submit,
    input.elgg-button-cancel,
    input.elgg-button-submit[type="submit"],
    button,
    input[type="button"],
    input[type="submit"] {
        padding-bottom: 4px;
        padding-top: 4px;
    }
}
/* search */
.elgg-search-header input[type="text"]:focus {
    padding: 3px 4px 2px;
}
.elgg-sidebar .ktSearchForm .ktFormWrapper input[type="text"],
.elgg-sidebar .ktSearchForm .ktFormWrapper input[type="password"],
.elgg-sidebar .ktSearchForm .ktFormWrapper input[type="file"] {
    max-width: 153px !important;
    min-width: 0 !important;
    width: 160px !important;
}
/* user menu */
.on .utmMnButton {
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
    border-bottom: 1px solid #fff;
}
/* qtip */
.ui-tooltip-dark {
    background-color: #000;
    border: 1px solid #fff;
    border-radius: 2px;
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
}
/* fabcybox */
#fancybox-content {
    width: auto!important;
}
#fancybox-content > div {
    background: #f5f5f5;
}
#fancybox-close {
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>btn-close-fb.png) 0 0 no-repeat;
    height: 16px;
    right: 0;
    top: 0;
    width: 15px;
}
#fancybox-content h3 {
    color: #5f5f5f;
    font-size: 14px;
    line-height: 1.2;
    font-weight: normal;
    margin: 0 0 15px;
}
/* scrollbars (webkit only) */
::-webkit-scrollbar {
	-webkit-appearance: none;
	width: 7px;
}
::-webkit-scrollbar-thumb {
	border-radius: 4px;
	background-color: rgba(0,0,0,.5);
	-webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
}
/* helpers */
.noShadow {
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
}
.noRounded {
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
}
/* recaptcha */
body #elgg-recaptcha-widget .elggCaptchaOptions {
    text-align: left;
}
#recaptcha_image > img {
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    margin: 0 auto;
    min-height: 57px;
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>ajax-loader.gif) 50% 50% #fff no-repeat;
}
#recaptcha_image > span {
    display: inline-block;
    margin: 0 5px 0 0;
    padding: 10px 0 0;
    cursor: pointer;
}
#recaptcha_image > span:hover {
    text-decoration: underline;
}
body #elgg-recaptcha-widget .elggCaptchaOptions {
    text-align: right!important;
    margin-top: -5px;
}
body #elgg-recaptcha-widget .elggCaptchaOptions li:after,
#recaptcha_image > span:after {
    content: "-";
    margin: 0 0 0 6px;
}
body #elgg-recaptcha-widget .elggCaptchaOptions li:last-child:after,
#recaptcha_image > span:last-child:after {
    content: "";
    margin: 0;
}
.textVerified {
    font-size: 15px;
    font-weight: bold;
    line-height: 1.2;
    padding: 6px 0 0;
}
form.elgg-form.elgg-form-user-requestnewpassword .textVerified {
    margin: -36px 0 0 0;
}
/* datepicker*/
.ui-datepicker,
.ui-autocomplete {
	z-index: 1102!important;
}
/* list items */
.elgg-list-river > li,
.elgg-list > li,
.searchListingCols .elgg-list > li {
    padding-top: 12px;
    padding-bottom: 14px;
    margin: 0;
}
.elgg-list-river > li,
.elgg-list > li,
.thewire-form,
.riverdashboardFilter .rdfLine {
    border-bottom: none;
    background: url(<?php echo THEME_GRAPHICS_CUSTOM_SITE; ?>sep-list-items.png) 50% 100% no-repeat;
}
.elgg-list-river > li:last-child,
.elgg-list > li:last-child {
    background: none;
}
.riverdashboardFilter .rdfLine {
    background-position: 0 0;
}
/* subtext */
.elgg-subtext,
.elgg-river-timestamp,
ul.elgg-menu.elgg-menu-entity,
ul.elgg-menu.elgg-menu-entity li,
ul.elgg-menu.elgg-menu-entity li:after {
    color: #464646;
    font-size: 12px;
    line-height: 1.2;
}
/* common text */
.elgg-river-item,
.elgg-river-comments li,
.elgg-list > li .elgg-content,
.elgg-list > li h3,
.elggFullView .elgg-output p,
.elggFullView .elgg-output ul {
    font-size: 14px;
    line-height: <?php echo $vars['css']['base-line-height']; ?>;
}
.river_content_display {
    padding-top: 8px;
}

ul.elgg-menu-longtext-default {
	display: block;
}

ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-access:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-edit:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-history:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-membership:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-members:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-published-status:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-reply:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-previous:after,
ul.elgg-menu.elgg-menu-entity li.elgg-menu-item-thread:after {
    content: "";
    padding-left: 8px;
}
/* right menu */
.elgg-page .elgg-menu-page li > a,
.elgg-page ul.treeview, .elgg-page .treeview ul {
    font-size: 12px;
}
.elgg-page .elgg-menu-page li:first-child {
    border-top: none;
}
/* ktform search */
.ktHiddenSrchFrm {
    width: 596px;
}
.mainTitleTop .mainTitleControls {
    margin: -45px 0 0;
}
#btnShowHideSrchFrm {
    background-position: 0 3px;
}
.elgg-sidebar .ktSearchForm .ktFormWrapper .frmField select {
    width: 162px;
}
.categories-selected {
    width: 80%;
}
/* polls */
ul.pollResults {
    list-style: none!important;
}
/* settings */
.elgg-form.elgg-form.elgg-form-alt.elgg-form-notificationsettings-save fieldset > div,
.elgg-main .elgg-form.elgg-form.elgg-form-alt.elgg-form-notificationsettings-save select,
.elgg-main .elgg-form.elgg-form.elgg-form-alt.elgg-form-notificationsettings-save .mceEditor {
    max-width: 94%;
}
/* tabs */
ul.nav-tabs,
ul.elgg-tabs,
ul.elgg-menu.elgg-menu-filter,
.elgg-menu.elgg-menu-project-profile-menu {
	margin: 0 0 -1px;
}
.elgg-menu.elgg-menu-project-profile-menu li a {
	font-size: 12px;
    padding: 6px 5px;
}
.nav-tabs > li,
.elgg-tabs > li,
.elgg-menu-filter > li {
    margin-right: 5px;
}
.nav-tabs > li:last-child,
.elgg-tabs > li:last-child,
.elgg-menu-filter > li:last-child {
    margin-right: 0;
}
.nav-tabs > li.elgg-state-selected:before,
.elgg-tabs > li.elgg-state-selected:before,
.elgg-menu-filter > li.elgg-state-selected:before {

}
.nav-tabs > li > a,
.elgg-tabs > li > a,
.elgg-menu-filter > li > a {
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    font-size: 13px;
    margin: 0;
    padding-left: 20px;
    padding-right: 20px;
    outline: none!important;
}
.nav-tabs > li.elgg-state-selected > a,
.elgg-tabs > li.elgg-state-selected > a,
.elgg-menu-filter > li.elgg-state-selected > a {
    box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
}
/* lightbox */
.meeting-request-talk-wrapper {
	padding: 14px 20px;
}
.meeting-request-talk-wrapper > .img {
	float: left;
}
.meeting-request-talk-wrapper > .txt {
	margin: 0 0 0 50px;
}
.meeting-request-talk-wrapper > .txt p {
	margin: 0 0 8px;
}
.meeting-request-talk-wrapper .btns {
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    padding: 10px 0 0 0;
    margin: 30px 0 0 0;
}
.meeting-request-talk-wrapper .btns > a {
    margin: 0 10px 0 0;
}
.projects-profile-collaborators .request-talk,
.elgg-list-entity .elgg-item .request-talk {
    float: right;
    margin: 0 4px 0 0;
}
.projects-profile-collaborators .elgg-list > li h3 {
    border: none;
    margin: 0;
    padding: 10px 0 0 0;
}
/* activity */
.bodyActivity .bgWhiteAndShadow > .elgg-head {
    display: none;
}
/* file */
.qq-uploader {
    padding: 10px 0 0 0;
}
.fineUploaderBtn {
    width: 90px!important;
    float: left;
}
.spUploadOpenTokButton {
    border: 3px dashed #CCCCCC;
    color: #999999;
    display: block;
    margin: -17px 0 0 130px;
    text-align: center;
}
.spUploadOpenTokButton {
    padding: 15px;
}
ul.qq-upload-list li {
    border: none;
    border-radius: 0px;
    -moz-border-radius: 0px;
    -webkit-border-radius: 0px;
    height: 22px;
    padding: 18px 15px 12px 15px;
}
.spUploadOpenTokButton,
.qq-upload-drop-area,
.qq-upload-extra-drop-area {
    font-size: 16px;
}
.qq-upload-drop-area,
.qq-upload-extra-drop-area {
    left: auto;
    right: 3px;
    top: -4px;
    position: absolute;
    z-index: 123;
    height: 51px;
    margin: 0!important;

}
ul.qq-upload-list {
    float: right;
    list-style: none;
    margin: -55px 3px 0 !important;
    position: relative !important;
    text-align: center;
}
ul.qq-upload-list,
.qq-upload-drop-area,
.qq-upload-extra-drop-area {
    width: 502px;
}
.elgg-form-embed ul.qq-upload-list,
.elgg-form-embed .qq-upload-drop-area,
.elgg-form-embed .qq-upload-extra-drop-area {
    width: 593px;
}
.elgg-form-fine_uploader ul.qq-upload-list,
.elgg-form-fine_uploader .qq-upload-drop-area,
.elgg-form-fine_uploader .qq-upload-extra-drop-area {
    width: 363px;
}
.qq-upload-drop-area span {
    margin-top: -11px;
}
.qq-progress-bar {
    display: none!important;
}
/* file gallery */
.bodyFile .twoCol .elgg-main .bgWhiteAndShadow ul.elgg-gallery li.elgg-item,
.bodyFile .twoCol .elgg-main .bgWhiteAndShadow ul.elgg-gallery li.elgg-item:nth-child(5n) {
    margin-right: 10px;
}
.bodyFile .twoCol .elgg-main .bgWhiteAndShadow ul.elgg-gallery li.elgg-item:nth-child(4n) {
    margin-right: 0;
}
/* sidebar search */
.elgg-sidebar .ktFormWrapper.ktSearchForm {
    margin: 0;
}
.elgg-sidebar .ktFormWrapper.ktSearchForm .elgg-foot {
    padding-bottom: 0;
}
/* Groups tabs */
ul.elgg-menu.elgg-menu-profile-groups-tabs {
    margin-bottom: 10px;
}
.elgg-menu-profile-groups-tabs > li > a {
    padding-left: 7px;
    padding-right: 7px;
}
.elgg-ajax-loader {
    width: 16px;
}
.fc-event {
    width: 85px !important;
}
.elgg-input-plaintext.profile-custom-input-looking_for,
.elgg-input-plaintext.profile-custom-input-how_i_can_help,
.elgg-input-plaintext.profile-custom-input-what_i_have_done {
	max-height: 75px !important;
	min-height: 50px !important;
}
.pagination .disabled a,
.pagination .disabled a:hover,
ul.elgg-pagination .disabled a,
ul.elgg-pagination .disabled a:hover,
ul.elgg-pagination .elgg-state-disabled a,
ul.elgg-pagination .elgg-state-disabled a:hover,
ul.elgg-pagination .elgg-state-disabled span,
ul.elgg-pagination .elgg-state-disabled span:hover,
ul.elgg-pagination .elgg-state-disabled span.elgg-button,
ul.elgg-pagination .elgg-state-disabled span.elgg-button:hover,
ul.elgg-pagination .elgg-state-selected span.elgg-button,
ul.elgg-pagination .elgg-state-selected span.elgg-button:hover {
    background-color: #F5F5F5 !important;
    background-position: 0 0;
}

/* My profile */

.profile.elgg-col-2of3{
    width: 835px;
}
#profile-details{
    float: left;
    width: 611px;
    margin-left: 15px;
}
.bodyUser .elgg-widgets{
    width: 100% !important;   
}
.bodyUser #cols2and3{
    width: 100% !important;
}
.bodyUser #elgg-widget-col-1,
.bodyUser #elgg-widget-col-2{
    min-height: 0 !important;
    padding: 0;
}
.bodyUser #elgg-widget-col-3{
    padding: 0;
}
.profile-aboutme-contents.on iframe{
    display: block;
}
.profile-aboutme-contents iframe + *{
    float: left;
}
.sideBarsWidget .elgg-module-aside .elgg-body {
    display: inline
}
/* Qtips */
.bodyLeancanvas .ui-tooltip .ui-tooltip-content,
.bodyCompass .ui-tooltip .ui-tooltip-content {
    line-height: 15px;
    font-size: 12px;
}
.bodyLeancanvas .ui-tooltip .ui-tooltip-content ul,
.bodyCompass .ui-tooltip .ui-tooltip-content ul {
    margin-left: 25px;
    list-style: disc;
}
.bodyLeancanvas .ui-tooltip .ui-tooltip-content ol,
.bodyCompass .ui-tooltip .ui-tooltip-content ol {
    list-style: decimal;
    margin-left: 15px;
}
.bodyLeancanvas .ui-tooltip .ui-tooltip-content ol ol,
.bodyCompass .ui-tooltip .ui-tooltip-content ol ol {
    list-style: lower-alpha;
    margin-left: 15px;
}
.bodyLeancanvas .ui-tooltip .ui-tooltip-content ol.ol-ml,
.bodyCompass .ui-tooltip .ui-tooltip-content ol.ol-ml {
    margin-left: 30px;
    list-style: decimal;
}