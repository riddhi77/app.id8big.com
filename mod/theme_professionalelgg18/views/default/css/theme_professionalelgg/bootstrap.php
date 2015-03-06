/*!
 * Bootstrap v2.0.1
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
nav,
section {
    display: block;
}
audio,
canvas,
video {
    display: inline-block;
    *display: inline;
    *zoom: 1;
}
audio:not([controls]) {
    display: none;
}
html {
    font-size: 100%;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
}
a:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
a:hover,
a:active {
    outline: 0;
}
sub,
sup {
    position: relative;
    font-size: 75%;
    line-height: 0;
    vertical-align: baseline;
}
sup {
    top: -0.5em;
}
sub {
    bottom: -0.25em;
}
img {
    height: auto;
    vertical-align: middle;
    border: 0;
    -ms-interpolation-mode: bicubic;
}
#map_canvas img {
  max-width: none;
}
button,
input,
select,
textarea {
    margin: 0;
    font-size: 100%;
    vertical-align: middle;
}
button,
input {
    *overflow: visible;
    line-height: normal;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
    padding: 0;
    border: 0;
}
button,
input[type="button"],
input[type="reset"],
input[type="submit"] {
    cursor: pointer;
    -webkit-appearance: button;
}
input[type="search"] {
	-webkit-box-sizing: content-box;
	-moz-box-sizing: content-box;
	box-sizing: content-box;
	-webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-decoration,
input[type="search"]::-webkit-search-cancel-button {
    -webkit-appearance: none;
}
textarea {
    overflow: auto;
    vertical-align: top;
    resize: vertical;
}
abbr[title],
acronym[title] {
    border: none;
}
.clearfix {
    *zoom: 1;
}
.clearfix:before,
.clearfix:after {
    display: table;
    content: "";
}
.clearfix:after {
    clear: both;
}
.hide-text {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.input-block-level {
  display: block;
  width: 100%;
  min-height: 28px;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      -ms-box-sizing: border-box;
          box-sizing: border-box;
}
body {
    margin: 0;
    font-family: <?php echo $vars['css']['base-font-family']; ?>;
    font-size: <?php echo $vars['css']['base-font-size']; ?>;
    line-height: <?php echo $vars['css']['base-line-height']; ?>;
    color: <?php echo $vars['css']['base-color']; ?>;
    background: <?php echo $vars['css']['body-background']; ?>;
}
a {
    color: <?php echo $vars['css']['base-link-color']; ?>;
    text-decoration: none;
}
a:hover {
    text-decoration: underline;
}
.row {
    margin-left: -20px;
    *zoom: 1;
}
.row:before,
.row:after {
    display: table;
    content: "";
}
.row:after {
    clear: both;
}
[class*="span"] {
    float: left;
    margin-left: 20px;
}
.container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
	width: <?php echo $vars['css']['cont-width']; ?>;
}
.span12 {
  	width: 940px;
}
.span11 {
  	width: 860px;
}
.span10 {
  	width: 780px;
}
.span9 {
  	width: 700px;
}
.span8 {
  	width: 620px;
}
.span7 {
  	width: 540px;
}
.span6 {
  	width: 460px;
}
.span5 {
  	width: 380px;
}
.span4 {
  	width: 300px;
}
.span3 {
  	width: 220px;
}
.span2 {
  	width: 140px;
}
.span1 {
  	width: 60px;
}
.offset12 {
  	margin-left: 980px;
}
.offset11 {
  	margin-left: 900px;
}
.offset10 {
  	margin-left: 820px;
}
.offset9 {
  	margin-left: 740px;
}
.offset8 {
  	margin-left: 660px;
}
.offset7 {
  	margin-left: 580px;
}
.offset6 {
  	margin-left: 500px;
}
.offset5 {
  	margin-left: 420px;
}
.offset4 {
  	margin-left: 340px;
}
.offset3 {
  	margin-left: 260px;
}
.offset2 {
  	margin-left: 180px;
}
.offset1 {
  	margin-left: 100px;
}
.row-fluid {
    width: 100%;
    *zoom: 1;
}
.row-fluid:before,
.row-fluid:after {
    display: table;
    content: "";
}
.row-fluid:after {
    clear: both;
}
.row-fluid [class*="span"] {
	display: block;
	float: left;
	width: 100%;
	min-height: 28px;
	margin-left: 2.127659574%;
	*margin-left: 2.0744680846382977%;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}
.row-fluid [class*="span"]:first-child {
  	margin-left: 0;
}
.row-fluid .span12 {
  	width: 99.99999998999999%;
  	*width: 99.94680850063828%;
}
.row-fluid .span11 {
  	width: 91.489361693%;
  	*width: 91.4361702036383%;
}
.row-fluid .span10 {
  	width: 82.97872339599999%;
  	*width: 82.92553190663828%;
}
.row-fluid .span9 {
  	width: 74.468085099%;
  	*width: 74.4148936096383%;
}
.row-fluid .span8 {
  	width: 65.95744680199999%;
  	*width: 65.90425531263828%;
}
.row-fluid .span7 {
  	width: 57.446808505%;
  	*width: 57.3936170156383%;
}
.row-fluid .span6 {
 	width: 48.93617020799999%;
  	*width: 48.88297871863829%;
}
.row-fluid .span5 {
  	width: 40.425531911%;
  	*width: 40.3723404216383%;
}
.row-fluid .span4 {
  	width: 31.914893614%;
  	*width: 31.8617021246383%;
}
.row-fluid .span3 {
  	width: 23.404255317%;
  	*width: 23.3510638276383%;
}
.row-fluid .span2 {
  	width: 14.89361702%;
  	*width: 14.8404255306383%;
}
.row-fluid .span1 {
  	width: 6.382978723%;
  	*width: 6.329787233638298%;
}
.container {
  	margin-right: auto;
  	margin-left: auto;
  	*zoom: 1;
}
.container:before,
.container:after {
  	display: table;
  	content: "";
}
.container:after {
  	clear: both;
}
.container-fluid {
  	padding-right: 20px;
  	padding-left: 20px;
  	*zoom: 1;
}
.container-fluid:before,
.container-fluid:after {
  	display: table;
  	content: "";
}
.container-fluid:after {
  	clear: both;
}
p {
    margin: 0 0 15px;
}
p small {
    font-size: 11px;
    color: <?php echo $vars['css']['base-light-text-color']; ?>;
}
.lead {
    margin-bottom: 18px;
    font-size: 20px;
    font-weight: 200;
    line-height: 27px;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
  	font-family: inherit;
  	font-weight: bold;
  	color: inherit;
  	text-rendering: optimizelegibility;
}
p,
.elgg-main ul,
.elgg-main ol,
dl,
h1,
h2 {
    margin: 0 0 18px 0;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
    font-weight: normal;
    color: <?php echo $vars['css']['base-light-text-color']; ?>;
}
h1 {
    font-size: 16px;
    line-height: 18px;
}
h1 small {
    font-size: 14px;
}
h2 {
    font-size: 14px;
    line-height: 16px;
}
h2 small {
    font-size: 12px;
}
h3 {
    font-size: 12px;
    line-height: 14px;
}
h3 small {
    font-size: 11px;
}
h4,
h5,
h6 {
    font-size: 11px;
    line-height: 13px;
}
h4 small,
h5 small,
h6 small {
    font-size: 10px;
}
.page-header {
    padding-bottom: 17px;
    margin: 18px 0;
    border-bottom: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.page-header h1 {
    line-height: 1;
}
ul,
ol {
    padding: 0;
    margin: 0;
}
ul ul,
ul ol,
ol ol,
ol ul {
    margin-bottom: 0;
}
ul {
    list-style: none;
}
ol {
    list-style: decimal;
}
.elgg-main ul {
    list-style: disc;
}
.elgg-main ol {
    list-style: decimal;
}
li {
    line-height: 18px;
}
ul.unstyled,
ol.unstyled {
    margin-left: 0;
    list-style: none;
}
dl {
    margin-bottom: 18px;
}
dt,
dd {
    line-height: 18px;
}
dt {
    font-weight: bold;
}
dd {
    margin-left: 9px;
}
.dl-horizontal dt {
  	float: left;
  	width: 120px;
  	overflow: hidden;
  	clear: left;
  	text-align: right;
  	text-overflow: ellipsis;
  	white-space: nowrap;
}
.dl-horizontal dd {
  	margin-left: 130px;
}
hr {
    margin: 18px 0;
    border: 0;
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    border-bottom: 1px solid #fff;
}
strong,
b {
    font-weight: bold;
}
em,
i {
    font-style: italic;
}
.muted {
    color: <?php echo $vars['css']['base-light-text-color']; ?>;
}
abbr,
abbr.initialism {
    font-size: 90%;
    text-transform: uppercase;
    border-bottom: 1px dotted <?php echo $vars['css']['base-border-color']; ?>;
    cursor: help;
}
blockquote {
    padding: 0 0 0 15px;
    margin: 0 0 18px;
    border-left: 5px solid <?php echo $vars['css']['base-border-color']; ?>;
}
blockquote p {
    margin-bottom: 0;
    font-size: 16px;
    font-weight: 300;
    line-height: 22px;
}
blockquote small {
    display: block;
    line-height: 18px;
    color: <?php echo $vars['css']['base-light-text-color']; ?>;
}
blockquote small:before {
    content: '\2014 \00A0';
}
blockquote.pull-right {
    float: right;
    padding-left: 0;
    padding-right: 15px;
    border-left: 0;
    border-right: 5px solid <?php echo $vars['css']['base-border-color']; ?>;
}
blockquote.pull-right p,
blockquote.pull-right small {
    text-align: right;
}
q:before,
q:after,
blockquote:before,
blockquote:after {
    content: "";
}
address {
    display: block;
  	margin-bottom: 18px;
  	font-style: normal;
  	line-height: 18px;
}
small {
    font-size: 100%;
}
cite {
    font-style: normal;
}
code,
pre {
    padding: 0 3px 2px;
    font-family: <?php echo $vars['css']['monospace-font-family']; ?>;
    font-size: <?php echo $vars['css']['base-font-size']; ?>;
    color: <?php echo $vars['css']['base-color']; ?>;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
code {
    padding: 2px 4px;
    color: #d14;
    background-color: #f7f7f9;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
pre {
    display: block;
    padding: 8.5px;
    margin: 0 0 9px;
    font-size: 12px;
    line-height: 18px;
    background-color: #f5f5f5;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    white-space: pre;
    white-space: pre-wrap;
    word-break: break-all;
    word-wrap: break-word;
}
pre.prettyprint {
    margin-bottom: 18px;
}
pre code {
    padding: 0;
    color: inherit;
    background-color: transparent;
    border: 0;
}
.pre-scrollable {
    max-height: 340px;
    overflow-y: scroll;
}
form {
    margin: 0;
}
fieldset {
    padding: 0;
    margin: 0;
    border: 0;
}
legend {
    display: block;
    width: 100%;
    padding: 0;
    margin-bottom: 27px;
    font-size: 19px;
    line-height: 36px;
    color: #333;
    border: 0;
    border-bottom: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
legend small {
    font-size: 13.5px;
    color: <?php echo $vars['css']['base-light-text-color']; ?>;
}
label,
input,
button,
select,
textarea {
    font-size: 12px;
    font-weight: normal;
    line-height: 16px;
}
input,
button,
select,
textarea {
    font-family: <?php echo $vars['css']['base-font-family']; ?>;
}
label {
    display: block;
    margin-bottom: 5px;
}
input,
textarea,
select,
.uneditable-input {
    display: inline-block;
    height: 18px;
    padding: 4px;
    font-size: 13px;
    line-height: 18px;
    color: #555;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: <?php echo $vars['css']['input-border-radius']; ?>;
    -moz-border-radius: <?php echo $vars['css']['input-border-radius']; ?>;
    border-radius: <?php echo $vars['css']['input-border-radius']; ?>;
}
@-moz-document url-prefix() {
	/* CSS hack code for firefox */
	select {
		padding-top: 2px;
		padding-bottom: 5px;
	}
}
input,
textarea {
	font-size: 12px;
}
.uneditable-textarea {
    width: auto;
    height: auto;
}
label input,
label textarea,
label select {
    display: block;
}
input[type="image"],
input[type="checkbox"],
input[type="radio"] {
    width: auto;
    height: auto;
    padding: 0;
    margin: 3px 0;
    *margin-top: 0;
    /* IE7 */
    line-height: normal;
    cursor: pointer;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    border: 0 \9;
    /* IE9 and down */
}
input[type="image"] {
    border: 0;
}
input[type="file"] {
    width: auto;
    padding: initial;
    line-height: initial;
    border: initial;
    background-color: #fff;
    background-color: initial;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
input[type="button"],
input[type="reset"],
input[type="submit"] {
    width: auto;
    height: auto;
    cursor: pointer;
}
select,
input[type="file"] {
    height: 28px;
    /* In IE7, the height of the select element cannot be changed by height, only font-size */
    *margin-top: 4px;
    /* For IE7, add top margin to align select with labels */
    line-height: 28px;
}
input[type="file"] {
    line-height: 18px \9;
}
select {
    background-color: #fff;
    white-space: nowrap!important;
    word-wrap: normal!important;
}
select[multiple],
select[size] {
    height: auto;
}
input[type="image"] {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
textarea {
    height: auto;
}
input[type="hidden"] {
    display: none;
}
.radio, .checkbox {
    padding-left: 18px;
}
.radio input[type="radio"],
.checkbox input[type="checkbox"] {
    float: left;
    margin-left: -18px;
}
.controls > .radio:first-child,
.controls > .checkbox:first-child {
    padding-top: 5px;
}
.radio.inline,
.checkbox.inline {
    display: inline-block;
    padding-top: 5px;
    margin-bottom: 0;
    vertical-align: middle;
}
.radio.inline + .radio.inline,
.checkbox.inline + .checkbox.inline {
    margin-left: 10px;
}
input,
textarea {
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
    -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
    -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
    -o-transition: border linear 0.2s, box-shadow linear 0.2s;
    transition: border linear 0.2s, box-shadow linear 0.2s;
}
input:focus,
textarea:focus {
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-box-shadow: inset <?php echo $vars['css']['input-inner-shadow-focus']; ?>, <?php echo $vars['css']['input-shadow-focus']; ?>;
    -moz-box-shadow: inset <?php echo $vars['css']['input-inner-shadow-focus']; ?>, <?php echo $vars['css']['input-shadow-focus']; ?>;
    box-shadow: inset <?php echo $vars['css']['input-inner-shadow-focus']; ?>, <?php echo $vars['css']['input-shadow-focus']; ?>;
    outline: 0;
    outline: thin dotted \9;
    /* IE6-9 */
}
input[type="text"],
input[type="password"],
textarea {
	border: 1px solid <?php echo $vars['css']['input-border']; ?>;
	color: <?php echo $vars['css']['input-font-color']; ?>;
    background: <?php echo $vars['css']['input-background-color']; ?>;
}
input[type="text"]:focus,
input[type="password"]:focus,
textarea:focus {
	border: 1px solid <?php echo $vars['css']['input-border-focus']; ?>;
	color: <?php echo $vars['css']['input-font-color-focus']; ?>;
    background: <?php echo $vars['css']['input-background-color-focus']; ?>;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus,
select:focus {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
.input-mini {
    width: 60px;
}
.input-small {
    width: 90px;
}
.input-medium {
    width: 150px;
}
.input-large {
    width: 210px;
}
.input-xlarge {
    width: 270px;
}
.input-xxlarge {
    width: 530px;
}
input[class*="span"],
select[class*="span"],
textarea[class*="span"],
.uneditable-input {
    float: none;
    margin-left: 0;
}
input.span1,
textarea.span1,
.uneditable-input.span1 {
    width: 50px;
}
input.span2,
textarea.span2,
.uneditable-input.span2 {
    width: 130px;
}
input.span3,
textarea.span3,
.uneditable-input.span3 {
    width: 210px;
}
input.span4,
textarea.span4,
.uneditable-input.span4 {
    width: 290px;
}
input.span5,
textarea.span5,
.uneditable-input.span5 {
    width: 370px;
}
input.span6,
textarea.span6,
.uneditable-input.span6 {
    width: 450px;
}
input.span7,
textarea.span7,
.uneditable-input.span7 {
    width: 530px;
}
input.span8,
textarea.span8,
.uneditable-input.span8 {
    width: 610px;
}
input.span9,
textarea.span9,
.uneditable-input.span9 {
    width: 690px;
}
input.span10,
textarea.span10,
.uneditable-input.span10 {
    width: 770px;
}
input.span11,
textarea.span11,
.uneditable-input.span11 {
    width: 850px;
}
input.span12,
textarea.span12,
.uneditable-input.span12 {
    width: 930px;
}
input[disabled],
select[disabled],
textarea[disabled],
input[readonly],
select[readonly],
textarea[readonly] {
    background-color: #f5f5f5;
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
    cursor: not-allowed;
}
.control-group.warning > label,
.control-group.warning .help-block,
.control-group.warning .help-inline {
    color: #c09853;
}
.control-group.warning input,
.control-group.warning select,
.control-group.warning textarea {
    color: #c09853;
    border-color: #c09853;
}
.control-group.warning input:focus,
.control-group.warning select:focus,
.control-group.warning textarea:focus {
    border-color: #a47e3c;
    -webkit-box-shadow: 0 0 6px #dbc59e;
    -moz-box-shadow: 0 0 6px #dbc59e;
    box-shadow: 0 0 6px #dbc59e;
}
.control-group.warning .input-prepend .add-on,
.control-group.warning .input-append .add-on {
    color: #c09853;
    background-color: #fcf8e3;
    border-color: #c09853;
}
.control-group.error > label,
.control-group.error .help-block,
.control-group.error .help-inline {
    color: #b94a48;
}
.control-group.error input,
.control-group.error select,
.control-group.error textarea {
    color: #b94a48;
    border-color: #b94a48;
}
.control-group.error input:focus,
.control-group.error select:focus,
.control-group.error textarea:focus {
    border-color: #953b39;
    -webkit-box-shadow: 0 0 6px #d59392;
    -moz-box-shadow: 0 0 6px #d59392;
    box-shadow: 0 0 6px #d59392;
}
.control-group.error .input-prepend .add-on,
.control-group.error .input-append .add-on {
    color: #b94a48;
    background-color: #f2dede;
    border-color: #b94a48;
}
.control-group.success > label,
.control-group.success .help-block,
.control-group.success .help-inline {
    color: #468847;
}
.control-group.success input,
.control-group.success select,
.control-group.success textarea {
    color: #468847;
    border-color: #468847;
}
.control-group.success input:focus,
.control-group.success select:focus,
.control-group.success textarea:focus {
    border-color: #356635;
    -webkit-box-shadow: 0 0 6px #7aba7b;
    -moz-box-shadow: 0 0 6px #7aba7b;
    box-shadow: 0 0 6px #7aba7b;
}
.control-group.success .input-prepend .add-on,
.control-group.success .input-append .add-on {
    color: #468847;
    background-color: #dff0d8;
    border-color: #468847;
}
input:focus:required:invalid,
textarea:focus:required:invalid,
select:focus:required:invalid {
    color: #b94a48;
    border-color: #ee5f5b;
}
input:focus:required:invalid:focus,
textarea:focus:required:invalid:focus,
select:focus:required:invalid:focus {
    border-color: #e9322d;
    -webkit-box-shadow: 0 0 6px #f8b9b7;
    -moz-box-shadow: 0 0 6px #f8b9b7;
    box-shadow: 0 0 6px #f8b9b7;
}
.form-actions {
    padding: 17px 20px 18px;
    margin-top: 18px;
    margin-bottom: 18px;
    background-color: #f5f5f5;
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.uneditable-input {
    display: block;
    background-color: #fff;
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.025);
    cursor: not-allowed;
}
:-moz-placeholder {
    color: #999;
}
::-webkit-input-placeholder {
    color: #999;
}
.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 0;
    color: #999;
}
.help-inline {
    display: inline-block;
    *display: inline;
    /* IE7 inline-block hack */
    *zoom: 1;
    margin-bottom: 9px;
    vertical-align: middle;
    padding-left: 5px;
}
.input-prepend,
.input-append {
    margin-bottom: 5px;
    *zoom: 1;
}
.input-prepend:before,
.input-append:before,
.input-prepend:after,
.input-append:after {
    display: table;
    content: "";
}
.input-prepend:after,
.input-append:after {
    clear: both;
}
.input-prepend input,
.input-append input,
.input-prepend .uneditable-input,
.input-append .uneditable-input {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}
.input-prepend input:focus,
.input-append input:focus,
.input-prepend .uneditable-input:focus,
.input-append .uneditable-input:focus {
    position: relative;
    z-index: 2;
}
.input-prepend .uneditable-input,
.input-append .uneditable-input {
    border-left-color: <?php echo $vars['css']['base-border-color']; ?>;
}
.input-prepend .add-on,
.input-append .add-on {
    float: left;
    display: block;
    width: auto;
    min-width: 16px;
    height: 18px;
    margin-right: -1px;
    padding: 4px 5px;
    font-weight: normal;
    line-height: 18px;
    color: #999;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    background-color: #f5f5f5;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}
.input-prepend .active,
.input-append .active {
    background-color: #a9dba9;
    border-color: #46a546;
}
.input-prepend .add-on {
    *margin-top: 1px;
    /* IE6-7 */
}
.input-append input,
.input-append .uneditable-input {
    float: left;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}
.input-append .uneditable-input {
    border-left-color: <?php echo $vars['css']['base-border-color']; ?>;
    border-right-color: <?php echo $vars['css']['base-border-color']; ?>;
}
.input-append .add-on {
    margin-right: 0;
    margin-left: -1px;
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}
.input-append input:first-child {
    *margin-left: -160px;
}
.input-append input:first-child + .add-on {
    *margin-left: -21px;
}
.search-query {
    padding-left: 14px;
    padding-right: 14px;
    margin-bottom: 0;
    -webkit-border-radius: 14px;
    -moz-border-radius: 14px;
    border-radius: 14px;
}
.form-search input,
.form-inline input,
.form-horizontal input,
.form-search textarea,
.form-inline textarea,
.form-horizontal textarea,
.form-search select,
.form-inline select,
.form-horizontal select,
.form-search .help-inline,
.form-inline .help-inline,
.form-horizontal .help-inline,
.form-search .uneditable-input,
.form-inline .uneditable-input,
.form-horizontal .uneditable-input {
    display: inline-block;
    margin-bottom: 0;
}
.form-search .hide,
.form-inline .hide,
.form-horizontal .hide {
    display: none;
}
.form-search label,
.form-inline label,
.form-search .input-append,
.form-inline .input-append,
.form-search .input-prepend,
.form-inline .input-prepend {
    display: inline-block;
}
.form-search .input-append .add-on,
.form-inline .input-prepend .add-on,
.form-search .input-append .add-on,
.form-inline .input-prepend .add-on {
    vertical-align: middle;
}
.form-search .radio,
.form-inline .radio,
.form-search .checkbox,
.form-inline .checkbox {
    margin-bottom: 0;
    vertical-align: middle;
}
.control-group {
    margin-bottom: 9px;
}
legend + .control-group {
    margin-top: 18px;
    -webkit-margin-top-collapse: separate;
}
.form-horizontal .control-group {
    margin-bottom: 18px;
    *zoom: 1;
}
.form-horizontal .control-group:before,
.form-horizontal .control-group:after {
    display: table;
    content: "";
}
.form-horizontal .control-group:after {
    clear: both;
}
.form-horizontal .control-label {
    float: left;
    width: 140px;
    padding-top: 5px;
    text-align: right;
}
.form-horizontal .controls {
    margin-left: 160px;
}
.form-horizontal .form-actions {
    padding-left: 160px;
}
table {
    max-width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}
.table,
.elgg-table {
    width: 100%;
    margin-bottom: 18px;
}
.table th,
.table td,
.elgg-table td,
.elgg-table th {
    padding: 8px;
    line-height: 18px;
    text-align: left;
    vertical-align: top;
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.table th,
.elgg-table th {
    font-weight: bold;
}
.table thead th,
.elgg-table thead th {
    vertical-align: bottom;
}
.table thead:first-child tr th,
.table thead:first-child tr td,
.elgg-table thead:first-child tr th,
.elgg-table thead:first-child tr td {
    border-top: 0;
}
.table tbody + tbody,
.elgg-table tbody + tbody {
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.table-condensed th,
.table-condensed td {
    padding: 4px 5px;
}
.table-bordered {
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    border-collapse: separate;
    *border-collapse: collapsed;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.table-bordered th + th,
.table-bordered td + td,
.table-bordered th + td,
.table-bordered td + th {
    border-left: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.table-bordered thead:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child th,
.table-bordered tbody:first-child tr:first-child td {
    border-top: 0;
}
.table-bordered thead:first-child tr:first-child th:first-child,
.table-bordered tbody:first-child tr:first-child td:first-child {
    -webkit-border-radius: 4px 0 0 0;
    -moz-border-radius: 4px 0 0 0;
    border-radius: 4px 0 0 0;
}
.table-bordered thead:first-child tr:first-child th:last-child,
.table-bordered tbody:first-child tr:first-child td:last-child {
    -webkit-border-radius: 0 4px 0 0;
    -moz-border-radius: 0 4px 0 0;
    border-radius: 0 4px 0 0;
}
.table-bordered thead:last-child tr:last-child th:first-child,
.table-bordered tbody:last-child tr:last-child td:first-child {
    -webkit-border-radius: 0 0 0 4px;
    -moz-border-radius: 0 0 0 4px;
    border-radius: 0 0 0 4px;
}
.table-bordered thead:last-child tr:last-child th:last-child,
.table-bordered tbody:last-child tr:last-child td:last-child {
    -webkit-border-radius: 0 0 4px 0;
    -moz-border-radius: 0 0 4px 0;
    border-radius: 0 0 4px 0;
}
.table-striped tbody tr:nth-child(odd) td,
.table-striped tbody tr:nth-child(odd) th,
.elgg-table tr:nth-child(odd) td,
.elgg-table tr:nth-child(odd) th,
.elgg-table tr.odd td,
.elgg-table tr.odd th {
    background-color: #f9f9f9;
}
.table tbody tr:hover td,
.table tbody tr:hover th,
.elgg-table tr:hover td,
.elgg-table tr:hover th {
    background-color: #f5f5f5;
}
table .span1 {
    float: none;
    width: 44px;
    margin-left: 0;
}
table .span2 {
    float: none;
    width: 124px;
    margin-left: 0;
}
table .span3 {
    float: none;
    width: 204px;
    margin-left: 0;
}
table .span4 {
    float: none;
    width: 284px;
    margin-left: 0;
}
table .span5 {
    float: none;
    width: 364px;
    margin-left: 0;
}
table .span6 {
    float: none;
    width: 444px;
    margin-left: 0;
}
table .span7 {
    float: none;
    width: 524px;
    margin-left: 0;
}
table .span8 {
    float: none;
    width: 604px;
    margin-left: 0;
}
table .span9 {
    float: none;
    width: 684px;
    margin-left: 0;
}
table .span10 {
    float: none;
    width: 764px;
    margin-left: 0;
}
table .span11 {
    float: none;
    width: 844px;
    margin-left: 0;
}
table .span12 {
    float: none;
    width: 924px;
    margin-left: 0;
}
[class^="icon-"],
[class*=" icon-"] {
    display: inline-block;
    width: 14px;
    height: 14px;
    line-height: 14px;
    vertical-align: text-top;
    background: url(<?php echo THEME_GRAPHICS_CUSTOM; ?>glyphicons-halflings.png) 14px 14px no-repeat;
    *margin-right: .3em;
}
[class^="icon-"]:last-child,
[class*=" icon-"]:last-child {
    *margin-left: 0;
}
.icon-white {
	background-image: url(<?php echo THEME_GRAPHICS_CUSTOM; ?>glyphicons-halflings-white.png);
}
.icon-glass {
    background-position: 0 0;
}
.icon-music {
    background-position: -24px 0;
}
.icon-search {
    background-position: -48px 0;
}
.icon-envelope {
    background-position: -72px 0;
}
.icon-heart {
    background-position: -96px 0;
}
.icon-star {
    background-position: -120px 0;
}
.icon-star-empty {
    background-position: -144px 0;
}
.icon-user {
    background-position: -168px 0;
}
.icon-film {
    background-position: -192px 0;
}
.icon-th-large {
    background-position: -216px 0;
}
.icon-th {
    background-position: -240px 0;
}
.icon-th-list {
    background-position: -264px 0;
}
.icon-ok {
    background-position: -288px 0;
}
.icon-remove {
    background-position: -312px 0;
}
.icon-zoom-in {
    background-position: -336px 0;
}
.icon-zoom-out {
    background-position: -360px 0;
}
.icon-off {
    background-position: -384px 0;
}
.icon-signal {
    background-position: -408px 0;
}
.icon-cog {
    background-position: -432px 0;
}
.icon-trash {
    background-position: -456px 0;
}
.icon-home {
    background-position: 0 -24px;
}
.icon-file {
    background-position: -24px -24px;
}
.icon-time {
    background-position: -48px -24px;
}
.icon-road {
    background-position: -72px -24px;
}
.icon-download-alt {
    background-position: -96px -24px;
}
.icon-download {
    background-position: -120px -24px;
}
.icon-upload {
    background-position: -144px -24px;
}
.icon-inbox {
    background-position: -168px -24px;
}
.icon-play-circle {
    background-position: -192px -24px;
}
.icon-repeat {
    background-position: -216px -24px;
}
.icon-refresh {
    background-position: -240px -24px;
}
.icon-list-alt {
    background-position: -264px -24px;
}
.icon-lock {
    background-position: -287px -24px;
}
.icon-flag {
    background-position: -312px -24px;
}
.icon-headphones {
    background-position: -336px -24px;
}
.icon-volume-off {
    background-position: -360px -24px;
}
.icon-volume-down {
    background-position: -384px -24px;
}
.icon-volume-up {
    background-position: -408px -24px;
}
.icon-qrcode {
    background-position: -432px -24px;
}
.icon-barcode {
    background-position: -456px -24px;
}
.icon-tag {
    background-position: 0 -48px;
}
.icon-tags {
    background-position: -25px -48px;
}
.icon-book {
    background-position: -48px -48px;
}
.icon-bookmark {
    background-position: -72px -48px;
}
.icon-print {
    background-position: -96px -48px;
}
.icon-camera {
    background-position: -120px -48px;
}
.icon-font {
    background-position: -144px -48px;
}
.icon-bold {
    background-position: -167px -48px;
}
.icon-italic {
    background-position: -192px -48px;
}
.icon-text-height {
    background-position: -216px -48px;
}
.icon-text-width {
    background-position: -240px -48px;
}
.icon-align-left {
    background-position: -264px -48px;
}
.icon-align-center {
    background-position: -288px -48px;
}
.icon-align-right {
    background-position: -312px -48px;
}
.icon-align-justify {
    background-position: -336px -48px;
}
.icon-list {
    background-position: -360px -48px;
}
.icon-indent-left {
    background-position: -384px -48px;
}
.icon-indent-right {
    background-position: -408px -48px;
}
.icon-facetime-video {
    background-position: -432px -48px;
}
.icon-picture {
    background-position: -456px -48px;
}
.icon-pencil {
    background-position: 0 -72px;
}
.icon-map-marker {
    background-position: -24px -72px;
}
.icon-adjust {
    background-position: -48px -72px;
}
.icon-tint {
    background-position: -72px -72px;
}
.icon-edit {
    background-position: -96px -72px;
}
.icon-share {
    background-position: -120px -72px;
}
.icon-check {
    background-position: -144px -72px;
}
.icon-move {
    background-position: -168px -72px;
}
.icon-step-backward {
    background-position: -192px -72px;
}
.icon-fast-backward {
    background-position: -216px -72px;
}
.icon-backward {
    background-position: -240px -72px;
}
.icon-play {
    background-position: -264px -72px;
}
.icon-pause {
    background-position: -288px -72px;
}
.icon-stop {
    background-position: -312px -72px;
}
.icon-forward {
    background-position: -336px -72px;
}
.icon-fast-forward {
    background-position: -360px -72px;
}
.icon-step-forward {
    background-position: -384px -72px;
}
.icon-eject {
    background-position: -408px -72px;
}
.icon-chevron-left {
    background-position: -432px -72px;
}
.icon-chevron-right {
    background-position: -456px -72px;
}
.icon-plus-sign {
    background-position: 0 -96px;
}
.icon-minus-sign {
    background-position: -24px -96px;
}
.icon-remove-sign {
    background-position: -48px -96px;
}
.icon-ok-sign {
    background-position: -72px -96px;
}
.icon-question-sign {
    background-position: -96px -96px;
}
.icon-info-sign {
    background-position: -120px -96px;
}
.icon-screenshot {
    background-position: -144px -96px;
}
.icon-remove-circle {
    background-position: -168px -96px;
}
.icon-ok-circle {
    background-position: -192px -96px;
}
.icon-ban-circle {
    background-position: -216px -96px;
}
.icon-arrow-left {
    background-position: -240px -96px;
}
.icon-arrow-right {
    background-position: -264px -96px;
}
.icon-arrow-up {
    background-position: -289px -96px;
}
.icon-arrow-down {
    background-position: -312px -96px;
}
.icon-share-alt {
    background-position: -336px -96px;
}
.icon-resize-full {
    background-position: -360px -96px;
}
.icon-resize-small {
    background-position: -384px -96px;
}
.icon-plus {
    background-position: -408px -96px;
}
.icon-minus {
    background-position: -433px -96px;
}
.icon-asterisk {
    background-position: -456px -96px;
}
.icon-exclamation-sign {
    background-position: 0 -120px;
}
.icon-gift {
    background-position: -24px -120px;
}
.icon-leaf {
    background-position: -48px -120px;
}
.icon-fire {
    background-position: -72px -120px;
}
.icon-eye-open {
    background-position: -96px -120px;
}
.icon-eye-close {
    background-position: -120px -120px;
}
.icon-warning-sign {
    background-position: -144px -120px;
}
.icon-plane {
    background-position: -168px -120px;
}
.icon-calendar {
    background-position: -192px -120px;
}
.icon-random {
    background-position: -216px -120px;
}
.icon-comment {
    background-position: -240px -120px;
}
.icon-magnet {
    background-position: -264px -120px;
}
.icon-chevron-up {
    background-position: -288px -120px;
}
.icon-chevron-down {
    background-position: -313px -119px;
}
.icon-retweet {
    background-position: -336px -120px;
}
.icon-shopping-cart {
    background-position: -360px -120px;
}
.icon-folder-close {
    background-position: -384px -120px;
}
.icon-folder-open {
    background-position: -408px -120px;
}
.icon-resize-vertical {
    background-position: -432px -119px;
}
.icon-resize-horizontal {
    background-position: -456px -118px;
}
.dropdown {
    position: relative;
}
.dropdown-toggle {
    *margin-bottom: -3px;
}
.dropdown-toggle:active,
.open .dropdown-toggle {
    outline: 0;
}
.caret {
    display: inline-block;
    width: 0;
    height: 0;
    text-indent: -99999px;
    *text-indent: 0;
    vertical-align: top;
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid #000;
    opacity: 0.3;
    filter: alpha(opacity=30);
    content: "\2193";
}
.dropdown .caret {
    margin-top: 8px;
    margin-left: 2px;
}
.dropdown:hover .caret,
.open.dropdown .caret {
    opacity: 1;
    filter: alpha(opacity=100);
}
.dropdown-menu,
.elgg-menu-site-more,
.elgg-menu-hover {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    float: left;
    display: none;
    min-width: 160px;
    _width: 160px;
    padding: 0;
    margin: 0;
    list-style: none;
    background-color: <?php echo $vars['css']['mn-background-color']; ?>;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: <?php echo $vars['css']['mn-border-radius']; ?>;
    -moz-border-radius: <?php echo $vars['css']['mn-border-radius']; ?>;
    border-radius: <?php echo $vars['css']['mn-border-radius']; ?>;
    -webkit-box-shadow: <?php echo $vars['css']['mn-shadow']; ?>;
    -moz-box-shadow: <?php echo $vars['css']['mn-shadow']; ?>;
    box-shadow: <?php echo $vars['css']['mn-shadow']; ?>;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    *border-right-width: 2px;
    *border-bottom-width: 2px;
}
.dropdown-menu > li:first-child a,
.elgg-menu-hover > li:first-child a {
	border-radius: <?php echo $vars['css']['mn-border-radius']; ?> <?php echo $vars['css']['mn-border-radius']; ?> 0 0;
	-moz-border-radius: <?php echo $vars['css']['mn-border-radius']; ?> <?php echo $vars['css']['mn-border-radius']; ?> 0 0;
	-webkit-border-radius: <?php echo $vars['css']['mn-border-radius']; ?> <?php echo $vars['css']['mn-border-radius']; ?> 0 0;
}
.dropdown-menu > li > ul li a,
.elgg-menu-hover > li > ul.elgg-menu li a {
	border-radius: 0;
	-moz-border-radius: 0;
	-webkit-border-radius: 0;
}
.dropdown-menu > li:last-child a,
.elgg-menu-hover > li:last-child a,
.elgg-menu-hover > li > ul.elgg-menu li:last-child a {
	border-radius: 0 0 <?php echo $vars['css']['mn-border-radius']; ?> <?php echo $vars['css']['mn-border-radius']; ?>;
	-moz-border-radius: 0 0 <?php echo $vars['css']['mn-border-radius']; ?> <?php echo $vars['css']['mn-border-radius']; ?>;
	-webkit-border-radius: 0 0 <?php echo $vars['css']['mn-border-radius']; ?> <?php echo $vars['css']['mn-border-radius']; ?>;
}
.dropdown-menu.bottom-up {
    top: auto;
    bottom: 100%;
    margin-bottom: 2px;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 5px 1px;
    overflow: hidden;
    background-color: <?php echo $vars['css']['base-border-color']; ?>;
    border-bottom: 1px solid #fff;
    *width: 100%;
    *margin: -5px 0 5px;
}
.dropdown-menu a,
.elgg-menu.elgg-menu-site-more a,
.elgg-menu-hover a {
    display: block;
    padding: <?php echo $vars['css']['mn-item-height']; ?>;
    clear: both;
    font-weight: normal;
    line-height: <?php echo $vars['css']['mn-line-height']; ?>;
    color: <?php echo $vars['css']['mn-font-color']; ?>;
    white-space: nowrap;
    margin: 0;
    border-radius: 0;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    font-size: <?php echo $vars['css']['mn-font-size']; ?>;
}
.dropdown-menu li > a:hover,
.dropdown-menu .active > a,
.dropdown-menu .active > a:hover,
.elgg-menu.elgg-menu-site-more a:hover,
.elgg-menu-hover a:hover,
.elgg-menu-site-more .active a,
.elgg-menu-hover .active a {
    color: <?php echo $vars['css']['mn-font-color-hover']; ?>;
    text-decoration: none;
    background-color: <?php echo $vars['css']['mn-background-color-hover']; ?>;
}
.dropdown.open {
    *z-index: 1000;
}
.dropdown.open .dropdown-toggle {
    color: #fff;
    background: #ccc;
    background: rgba(0, 0, 0, 0.3);
}
.dropdown.open .dropdown-menu {
    display: block;
}
.typeahead {
    margin-top: 2px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.well {
    min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    border: 1px solid rgba(0, 0, 0, 0.05);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
}
.fade {
    -webkit-transition: opacity 0.15s linear;
    -moz-transition: opacity 0.15s linear;
    -ms-transition: opacity 0.15s linear;
    -o-transition: opacity 0.15s linear;
    transition: opacity 0.15s linear;
    opacity: 0;
}
.fade.in {
    opacity: 1;
}
.collapse {
    -webkit-transition: height 0.35s ease;
    -moz-transition: height 0.35s ease;
    -ms-transition: height 0.35s ease;
    -o-transition: height 0.35s ease;
    transition: height 0.35s ease;
    position: relative;
    overflow: hidden;
    height: 0;
}
.collapse.in {
    height: auto;
}
.close {
    float: right;
    font-size: 20px;
    font-weight: bold;
    line-height: 18px;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    opacity: 0.2;
    filter: alpha(opacity=20);
}
.close:hover {
    color: #000;
    text-decoration: none;
    opacity: 0.4;
    filter: alpha(opacity=40);
    cursor: pointer;
}
.btn,
.elgg-button,
.elgg-button-submit,
.elgg-button-cancel,
input[type="submit"].elgg-button-submit,
button,
input[type="button"],
input[type="submit"] {
    display: inline-block;
    padding: 3px 10px 4px;
    margin-bottom: 0;
    font-size: <?php echo $vars['css']['btn-font-size']; ?>;
    line-height: 18px;
    color: <?php echo $vars['css']['btn-font-color']; ?>;
    text-align: center;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    vertical-align: middle;
    background-color: <?php echo $vars['css']['btn-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-background-color-start']; ?>, <?php echo $vars['css']['btn-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-background-color-start']; ?>, <?php echo $vars['css']['btn-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-background-color-start']; ?>), to(<?php echo $vars['css']['btn-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-background-color-start']; ?>, <?php echo $vars['css']['btn-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-background-color-start']; ?>, <?php echo $vars['css']['btn-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-background-color-start']; ?>, <?php echo $vars['css']['btn-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-border-color']; ?> <?php echo $vars['css']['btn-border-color']; ?> <?php echo $vars['css']['btn-border-color']; ?>;
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    border: 1px solid <?php echo $vars['css']['btn-border-color']; ?>;
    border-bottom-color: <?php echo $vars['css']['btn-border-color']; ?>;
    -webkit-border-radius: <?php echo $vars['css']['btn-border-radius']; ?>;
    -moz-border-radius: <?php echo $vars['css']['btn-border-radius']; ?>;
    border-radius: <?php echo $vars['css']['btn-border-radius']; ?>;
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    cursor: pointer;
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    *margin-left: .3em;
}
@-moz-document url-prefix() {
	/* fix for height of inputs on firefox respect to <A> */
	/* this is calling for a maintenance nigthmare... */
	input.btn,
	input.elgg-button,
	input.elgg-button-submit,
	input.elgg-button-cancel,
	input[type="submit"].elgg-button-submit,
	button,
	input[type="button"],
	input[type="submit"] {
		padding-top: 2px;
		padding-bottom: 2px;
	}
}
.btn:hover,
.elgg-button:hover,
.elgg-button-submit:hover,
.elgg-button-cancel:hover,
input[type="submit"].elgg-button-submit:hover,
button:hover,
input[type="button"]:hover,
input[type="submit"]:hover {
    color: <?php echo $vars['css']['btn-font-color-hover']; ?>;
    text-decoration: none;
    background-color: <?php echo $vars['css']['btn-background-color-hover']; ?>;
    background-position: 0 -15px;
    -webkit-transition: background-position 0.1s linear;
    -moz-transition: background-position 0.1s linear;
    -ms-transition: background-position 0.1s linear;
    -o-transition: background-position 0.1s linear;
    transition: background-position 0.1s linear;
}
.btn:focus,
.elgg-button:focus,
.elgg-button-submit:focus,
.elgg-button-cancel:focus,
button:focus,
input[type="button"]:focus,
input[type="submit"]:focus {
    outline: thin dotted #333;
    outline: 5px auto -webkit-focus-ring-color;
    outline-offset: -2px;
}
.btn.active,
.btn:active,
.elgg-button.active,
.elgg-button-cancel.active,
.elgg-button:active,
.elgg-button-cancel:active,
.elgg-button-submit.active,
.elgg-button-submit:active,
button:active,
input[type="button"]:active,
input[type="submit"]:active,
button.active,
input[type="button"].active,
input[type="submit"].active {
    background-image: none;
    -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    background-color: <?php echo $vars['css']['btn-background-color-active']; ?>;
    background-color: <?php echo $vars['css']['btn-background-color-active-2']; ?> \9;
    outline: 0;
}
.btn-large,
.elgg-button.btn-large,
.elgg-button-submit.btn-large,
button.btn-large,
input[type="button"].btn-large,
input[type="submit"].btn-large {
    padding: 9px 14px;
    font-size: 15px;
    line-height: normal;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.btn-large [class^="icon-"],
.elgg-button.btn-large [class^="icon-"],
.elgg-button-submit.btn-large [class^="icon-"],
button.btn-large [class^="icon-"],
input[type="button"].btn-large [class^="icon-"],
input[type="submit"] [class^="icon-"] {
    margin-top: 1px;
}
.btn-small,
.elgg-button.btn-small,
.elgg-button-submit.btn-small,
button.btn-small,
input[type="button"].btn-small,
input[type="submit"].btn-small {
    padding: 5px 9px;
    font-size: 11px;
    line-height: 16px;
}
.btn-small [class^="icon-"],
.elgg-button.btn-small [class^="icon-"],
.elgg-button-submit.btn-small [class^="icon-"],
button.btn-small [class^="icon-"],
input[type="button"].btn-small [class^="icon-"],
input[type="submit"] [class^="icon-"] {
    margin-top: -1px;
}
.btn-mini,
.elgg-button.btn-mini,
.elgg-button-submit.btn-mini,
button.btn-mini,
input[type="button"].btn-mini,
input[type="submit"].btn-mini {
    padding: 2px 6px;
    font-size: 11px;
    line-height: 14px;
}
.btn-primary,
.btn-primary:hover,
.btn-warning,
.btn-warning:hover,
.btn-danger,
.btn-danger:hover,
.btn-success,
.btn-success:hover,
.btn-info,
.btn-info:hover,
.btn-inverse,
.btn-inverse:hover,
.elgg-button.elgg-button-delete,
.elgg-button.elgg-button-delete:hover,
.elgg-button.elgg-button-action,
.elgg-button.elgg-button-action:hover,
.elgg-button.elgg-button-special,
.elgg-button.elgg-button-special:hover,
.elgg-button.elgg-button-submit,
.elgg-button.elgg-button-submit:hover,
.elgg-button-delete,
.elgg-button-delete:hover,
input.elgg-button-delete,
input.elgg-button-delete:hover,
.elgg-button-action,
.elgg-button-action:hover,
.elgg-button-special,
.elgg-button-special:hover,
input.elgg-button-special,
input.elgg-button-special:hover,
.elgg-button-submit,
.elgg-button-submit:hover,
.elgg-button-cancel,
.elgg-button-cancel:hover,
input[type="submit"].elgg-button-submit,
input[type="submit"].elgg-button-submit:hover,
.elgg-button.elgg-button-cancel,
.elgg-button.elgg-button-cancel:hover {
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    color: <?php echo $vars['css']['btn-colored-font-color']; ?>;
}
.btn-primary.active,
.btn-warning.active,
.btn-danger.active,
.btn-success.active,
.btn-info.active,
.btn-dark.active,
.elgg-button.active,
.elgg-button:active,
.elgg-button.elgg-button-special.active,
.elgg-button.elgg-button-special:active,
.elgg-button-special.active,
.elgg-button-special:active,
.elgg-button.elgg-button-delete.active,
.elgg-button.elgg-button-delete:active,
.elgg-button-delete.active,
.elgg-button-delete:active,
input.elgg-button-delete.active,
input.elgg-button-delete:active {
    color: rgba(255, 255, 255, 0.75);
}
.btn-primary,
.elgg-button.elgg-button-submit,
.elgg-button-submit,
input[type="submit"].elgg-button-submit {
    background-color: <?php echo $vars['css']['btn-primary-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-primary-background-color-start']; ?>, <?php echo $vars['css']['btn-primary-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-primary-background-color-start']; ?>, <?php echo $vars['css']['btn-primary-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-primary-background-color-start']; ?>), to(<?php echo $vars['css']['btn-primary-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-primary-background-color-start']; ?>, <?php echo $vars['css']['btn-primary-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-primary-background-color-start']; ?>, <?php echo $vars['css']['btn-primary-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-primary-background-color-start']; ?>, <?php echo $vars['css']['btn-primary-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-primary-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-primary-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-primary-background-color-end']; ?> <?php echo $vars['css']['btn-primary-background-color-end']; ?> <?php echo $vars['css']['btn-primary-background-color-end']; ?>;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-warning {
    background-color: <?php echo $vars['css']['btn-warning-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-warning-background-color-start']; ?>, <?php echo $vars['css']['btn-warning-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-warning-background-color-start']; ?>, <?php echo $vars['css']['btn-warning-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-warning-background-color-start']; ?>), to(<?php echo $vars['css']['btn-warning-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-warning-background-color-start']; ?>, <?php echo $vars['css']['btn-warning-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-warning-background-color-start']; ?>, <?php echo $vars['css']['btn-warning-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-warning-background-color-start']; ?>, <?php echo $vars['css']['btn-warning-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-warning-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-warning-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-warning-background-color-end']; ?> <?php echo $vars['css']['btn-warning-background-color-end']; ?> <?php echo $vars['css']['btn-warning-background-color-end']; ?>;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-warning:hover,
.btn-warning:active,
.btn-warning.active,
.btn-warning.disabled,
.btn-warning[disabled] {
    background-color: <?php echo $vars['css']['btn-warning-background-hover']; ?>;
}
.btn-warning:active,
.btn-warning.active {
    background-color: <?php echo $vars['css']['btn-warning-background-hover-2']; ?> \9;
}
.btn-danger,
.elgg-button.elgg-button-delete,
.elgg-button-delete,
input.elgg-button.elgg-button-delete,
input.elgg-button-delete {
    background-color: <?php echo $vars['css']['btn-danger-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-danger-background-color-start']; ?>, <?php echo $vars['css']['btn-danger-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-danger-background-color-start']; ?>, <?php echo $vars['css']['btn-danger-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-danger-background-color-start']; ?>), to(<?php echo $vars['css']['btn-danger-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-danger-background-color-start']; ?>, <?php echo $vars['css']['btn-danger-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-danger-background-color-start']; ?>,<?php echo $vars['css']['btn-danger-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-danger-background-color-start']; ?>, <?php echo $vars['css']['btn-danger-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-danger-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-danger-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-danger-background-color-end']; ?> <?php echo $vars['css']['btn-danger-background-color-end']; ?> <?php echo $vars['css']['btn-danger-background-color-end']; ?>;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-success,
.alert-message.success,
.elgg-button.elgg-button-action {
    background-color: <?php echo $vars['css']['btn-success-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-success-background-color-start']; ?>, <?php echo $vars['css']['btn-success-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-success-background-color-start']; ?>, <?php echo $vars['css']['btn-success-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-success-background-color-start']; ?>), to(<?php echo $vars['css']['btn-success-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-success-background-color-start']; ?>, <?php echo $vars['css']['btn-success-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-success-background-color-start']; ?>, <?php echo $vars['css']['btn-success-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-success-background-color-start']; ?>, <?php echo $vars['css']['btn-success-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-success-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-success-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-success-background-color-end']; ?> <?php echo $vars['css']['btn-success-background-color-end']; ?> <?php echo $vars['css']['btn-success-background-color-end']; ?>;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-info,
.elgg-button.elgg-button-special,
.elgg-button-special,
input.elgg-button-special {
    background-color: <?php echo $vars['css']['btn-info-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-info-background-color-start']; ?>, <?php echo $vars['css']['btn-info-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-info-background-color-start']; ?>, <?php echo $vars['css']['btn-info-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-info-background-color-start']; ?>), to(<?php echo $vars['css']['btn-info-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-info-background-color-start']; ?>, <?php echo $vars['css']['btn-info-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-info-background-color-start']; ?>, <?php echo $vars['css']['btn-info-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-info-background-color-start']; ?>, <?php echo $vars['css']['btn-info-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-info-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-info-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-info-background-color-end']; ?> <?php echo $vars['css']['btn-info-background-color-end']; ?> <?php echo $vars['css']['btn-info-background-color-end']; ?>;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn-inverse,
.elgg-button.elgg-button-cancel {
    background-color: <?php echo $vars['css']['btn-inverse-background-color']; ?>;
    background-image: -moz-linear-gradient(top, <?php echo $vars['css']['btn-inverse-background-color-start']; ?>, <?php echo $vars['css']['btn-inverse-background-color-end']; ?>);
    background-image: -ms-linear-gradient(top, <?php echo $vars['css']['btn-inverse-background-color-start']; ?>, <?php echo $vars['css']['btn-inverse-background-color-end']; ?>);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(<?php echo $vars['css']['btn-inverse-background-color-start']; ?>), to(<?php echo $vars['css']['btn-inverse-background-color-end']; ?>));
    background-image: -webkit-linear-gradient(top, <?php echo $vars['css']['btn-inverse-background-color-start']; ?>, <?php echo $vars['css']['btn-inverse-background-color-end']; ?>);
    background-image: -o-linear-gradient(top, <?php echo $vars['css']['btn-inverse-background-color-start']; ?>, <?php echo $vars['css']['btn-inverse-background-color-end']; ?>);
    background-image: linear-gradient(top, <?php echo $vars['css']['btn-inverse-background-color-start']; ?>, <?php echo $vars['css']['btn-inverse-background-color-end']; ?>);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $vars['css']['btn-inverse-background-color-start']; ?>', endColorstr='<?php echo $vars['css']['btn-inverse-background-color-end']; ?>', GradientType=0);
    border-color: <?php echo $vars['css']['btn-inverse-background-color-end']; ?> <?php echo $vars['css']['btn-inverse-background-color-end']; ?> <?php echo $vars['css']['btn-inverse-background-color-end']; ?>;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.btn:hover,
.btn:active,
.btn.active,
.btn.disabled,
.btn[disabled],
.elgg-button:hover,
.elgg-button-cancel:hover,
.elgg-button:active,
.elgg-button-cancel:active,
.elgg-button.active,
.elgg-button-cancel.active,
.elgg-button.disabled,
.elgg-button-cancel.disabled,
.elgg-button[disabled],
.elgg-button-cancel[disabled],
.elgg-button.elgg-state-disabled,
button:hover,
input[type="button"]:hover,
input[type="submit"]:hover,
button.active,
input[type="button"].active,
input[type="submit"].active,
button:active,
input[type="button"]:active,
input[type="submit"]:active,
button.disabled,
input[type="button"].disabled,
input[type="submit"].disabled,
button[disabled],
input[type="button"][disabled],
input[type="submit"][disabled] {
    background-color: <?php echo $vars['css']['btn-had-background-color']; ?>;
}
.btn:active,
.btn.active,
.elgg-button:active,
.elgg-button-cancel:active,
.elgg-button.active,
.elgg-button-cancel.active,
button:hover,
input[type="button"]:hover,
input[type="submit"]:hover,
button.active,
input[type="button"].active,
input[type="submit"].active,
button:active,
input[type="button"]:active,
input[type="submit"]:active,
button.disabled,
input[type="button"].disabled,
input[type="submit"].disabled,
button[disabled],
input[type="button"][disabled],
input[type="submit"][disabled] {
    background-color: <?php echo $vars['css']['btn-had-background-color-2']; ?> \9;
}
.btn:first-child,
.elgg-button:first-child,
.elgg-button-cancel:first-child,
button:first-child,
input[type="button"]:first-child,
input[type="submit"]:first-child {
    *margin-left: 0;
}
.btn.disabled,
.btn[disabled],
.elgg-button.disabled,
.elgg-button-cancel.disabled,
.elgg-button[disabled],
.elgg-button-cancel[disabled],
.elgg-button.elgg-state-disabled,
.elgg-button-cancel.elgg-state-disabled,
button.elgg-state-disabled,
input[type="button"].elgg-state-disabled,
input[type="submit"].elgg-state-disabled,
button.disabled,
input[type="button"].disabled,
input[type="submit"].disabled,
button[disabled],
input[type="button"][disabled],
input[type="submit"][disabled] {
    cursor: default;
    background-image: none;
    background-color: <?php echo $vars['css']['btn-disabled-background-color']; ?>;
    opacity: 0.65;
    filter: alpha(opacity=65);
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
.btn-primary:hover,
.btn-primary:active,
.btn-primary.active,
.btn-primary.disabled,
.btn-primary[disabled],
.elgg-button.elgg-button-submit:hover,
.elgg-button.elgg-button-submit:active,
.elgg-button.elgg-button-submit.active,
.elgg-button.elgg-button-submit.disabled,
.elgg-button.elgg-button-submit[disabled],
.elgg-button.elgg-button-submit.elgg-state-disabled,
.elgg-button-submit:hover,
.elgg-button-submit:active,
.elgg-button-submit.active,
.elgg-button-submit.disabled,
.elgg-button-submit[disabled],
.elgg-button-submit.elgg-state-disabled,
input[type="submit"].elgg-button-submit:hover,
input[type="submit"].elgg-button-submit:active,
input[type="submit"].elgg-button-submit.active,
input[type="submit"].elgg-button-submit.disabled,
input[type="submit"].elgg-button-submit[disabled],
input[type="submit"].elgg-button-submit.elgg-state-disabled {
    background-color: <?php echo $vars['css']['btn-primary-had-background-color']; ?>;
}
.btn-primary:active,
.btn-primary.active,
.elgg-button.elgg-button-submit:active,
.elgg-button.elgg-button-submit.active,
.elgg-button-submit:active,
.elgg-button-submit.active,
input[type="submit"].elgg-button-submit:active,
input[type="submit"].elgg-button-submit.active {
    background-color: <?php echo $vars['css']['btn-primary-had-background-color-2']; ?> \9;
}
.btn-danger:hover,
.btn-danger:active,
.btn-danger.active,
.btn-danger.disabled,
.btn-danger[disabled],
.elgg-button.elgg-button-delete:hover,
.elgg-button.elgg-button-delete:active,
.elgg-button.elgg-button-delete.active,
.elgg-button.elgg-button-delete.disabled,
.elgg-button.elgg-button-delete[disabled],
.elgg-button.elgg-button-delete.elgg-state-disabled,
.elgg-button-delete:hover,
.elgg-button-delete:active,
.elgg-button-delete.active,
.elgg-button-delete.disabled,
.elgg-button-delete[disabled],
.elgg-button-delete.elgg-state-disabled,
input.elgg-button-delete:hover,
input.elgg-button-delete:active,
input.elgg-button-delete.active,
input.elgg-button-delete.disabled,
input.elgg-button-delete[disabled],
input.elgg-button-delete.elgg-state-disabled {
    background-color: <?php echo $vars['css']['btn-danger-had-background-color']; ?>;
}
.btn-danger:active,
.btn-danger.active,
.elgg-button.elgg-button-delete:active,
.elgg-button.elgg-button-delete.active,
.elgg-button-delete:active,
.elgg-button-delete.active,
input.elgg-button-delete:active,
input.elgg-button-delete.active {
    background-color: <?php echo $vars['css']['btn-danger-had-background-color-2']; ?> \9;
}
.btn-success:hover,
.btn-success:active,
.btn-success.active,
.btn-success.disabled,
.btn-success[disabled],
.elgg-button.elgg-button-action:hover,
.elgg-button.elgg-button-action:active,
.elgg-button.elgg-button-action.active,
.elgg-button.elgg-button-action.disabled,
.elgg-button.elgg-button-action[disabled],
.elgg-button.elgg-button-action.elgg-state-disabled,
.elgg-button-action:hover,
.elgg-button-action:active,
.elgg-button-action.active,
.elgg-button-action.disabled,
.elgg-button-action[disabled],
.elgg-button-action.elgg-state-disabled {
    background-color: <?php echo $vars['css']['btn-success-had-background-color']; ?>;
}
.btn-success:active,
.btn-success.active,
.elgg-button.elgg-button-action:active,
.elgg-button.elgg-button-action.active,
.elgg-button-action:active,
.elgg-button-action.active {
    background-color: <?php echo $vars['css']['btn-success-had-background-color-2']; ?> \9;
}
.btn-info:hover,
.btn-info:active,
.btn-info.active,
.btn-info.disabled,
.btn-info[disabled],
.elgg-button.elgg-button-special:hover,
.elgg-button.elgg-button-special:active,
.elgg-button.elgg-button-special.active,
.elgg-button.elgg-button-special.disabled,
.elgg-button.elgg-button-special[disabled],
.elgg-button.elgg-button-special.elgg-state-disabled,
.elgg-button-special:hover,
.elgg-button-special:active,
.elgg-button-special.active,
.elgg-button-special.disabled,
.elgg-button-special[disabled],
.elgg-button-special.elgg-state-disabled {
    background-color: <?php echo $vars['css']['btn-info-had-background-color']; ?>;
}
.btn-info:active,
.btn-info.active,
.elgg-button.elgg-button-special:active,
.elgg-button.elgg-button-special.active,
.elgg-button-special:active,
.elgg-button-special.active {
    background-color: <?php echo $vars['css']['btn-info-had-background-color-2']; ?> \9;
}
.btn-inverse:hover,
.btn-inverse:active,
.btn-inverse.active,
.btn-inverse.disabled,
.btn-inverse[disabled],
.elgg-button.elgg-button-cancel:hover,
.elgg-button.elgg-button-cancel:active,
.elgg-button.elgg-button-cancel.active,
.elgg-button.elgg-button-cancel.disabled,
.elgg-button.elgg-button-cancel[disabled],
.elgg-button.elgg-button-cancel.elgg-state-disabled,
.elgg-button-cancel:hover,
.elgg-button-cancel:active,
.elgg-button-cancel.active,
.elgg-button-cancel.disabled,
.elgg-button-cancel[disabled],
.elgg-button-cancel.elgg-state-disabled {
    background-color: <?php echo $vars['css']['btn-inverse-had-background-color']; ?>;
}
.btn-inverse:active,
.btn-inverse.active,
.elgg-button.elgg-button-cancel:active,
.elgg-button.elgg-button-cancel.active,
.elgg-button-cancel:active,
.elgg-button-cancel.active {
    background-color: <?php echo $vars['css']['btn-inverse-had-background-color-2']; ?> \9;
}
button.btn,
input[type="submit"].btn {
    *padding-top: 2px;
    *padding-bottom: 2px;
}
button.btn::-moz-focus-inner,
input[type="submit"].btn::-moz-focus-inner {
    padding: 0;
    border: 0;
}
button.btn.large,
input[type="submit"].btn.large {
    *padding-top: 7px;
    *padding-bottom: 7px;
}
button.btn.small,
input[type="submit"].btn.small {
    *padding-top: 3px;
    *padding-bottom: 3px;
}
.btn-group {
    position: relative;
    *zoom: 1;
    *margin-left: .3em;
}
.btn-group:before,
.btn-group:after {
    display: table;
    content: "";
}
.btn-group:after {
    clear: both;
}
.btn-group:first-child {
    *margin-left: 0;
}
.btn-group + .btn-group {
    margin-left: 5px;
}
.btn-toolbar {
    margin-top: 9px;
    margin-bottom: 9px;
}
.btn-toolbar .btn-group {
    display: inline-block;
    *display: inline;
    /* IE7 inline-block hack */
    *zoom: 1;
}
.btn-group .btn {
    position: relative;
    float: left;
    margin-left: -1px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}
.btn-group .btn:first-child {
    margin-left: 0;
    -webkit-border-top-left-radius: 4px;
    -moz-border-radius-topleft: 4px;
    border-top-left-radius: 4px;
    -webkit-border-bottom-left-radius: 4px;
    -moz-border-radius-bottomleft: 4px;
    border-bottom-left-radius: 4px;
}
.btn-group .btn:last-child,
.btn-group .dropdown-toggle {
    -webkit-border-top-right-radius: 4px;
    -moz-border-radius-topright: 4px;
    border-top-right-radius: 4px;
    -webkit-border-bottom-right-radius: 4px;
    -moz-border-radius-bottomright: 4px;
    border-bottom-right-radius: 4px;
}
.btn-group .btn.large:first-child {
    margin-left: 0;
    -webkit-border-top-left-radius: 6px;
    -moz-border-radius-topleft: 6px;
    border-top-left-radius: 6px;
    -webkit-border-bottom-left-radius: 6px;
    -moz-border-radius-bottomleft: 6px;
    border-bottom-left-radius: 6px;
}
.btn-group .btn.large:last-child,
.btn-group .large.dropdown-toggle {
    -webkit-border-top-right-radius: 6px;
    -moz-border-radius-topright: 6px;
    border-top-right-radius: 6px;
    -webkit-border-bottom-right-radius: 6px;
    -moz-border-radius-bottomright: 6px;
    border-bottom-right-radius: 6px;
}
.btn-group .btn:hover,
.btn-group .btn:focus,
.btn-group .btn:active,
.btn-group .btn.active {
    z-index: 2;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
    outline: 0;
}
.btn-group .dropdown-toggle {
    padding-left: 8px;
    padding-right: 8px;
    -webkit-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 1px 0 0 rgba(255, 255, 255, 0.125), inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    *padding-top: 5px;
    *padding-bottom: 5px;
}
.btn-group.open {
    *z-index: 1000;
}
.btn-group.open .dropdown-menu,
.elgg-menu-site-more,
.elgg-menu-hover {
    display: block;
    margin-top: 1px;
    margin-bottom: 0!important;
    -webkit-border-radius: <?php echo $vars['css']['mn-border-radius']; ?>;
    -moz-border-radius: <?php echo $vars['css']['mn-border-radius']; ?>;
    border-radius: <?php echo $vars['css']['mn-border-radius']; ?>;
}
.elgg-menu-site-more,
.elgg-menu-hover {
    display: none;
}
.btn-group.open .dropdown-toggle {
    background-image: none;
    -webkit-box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: inset 0 1px 6px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.btn .caret {
    margin-top: 7px;
    margin-left: 0;
}
.btn:hover .caret,
.open.btn-group .caret {
    opacity: 1;
    filter: alpha(opacity=100);
}
.btn-primary .caret,
.btn-danger .caret,
.btn-info .caret,
.btn-success .caret,
.btn-inverse .caret,
.elgg-button.elgg-button-action .caret,
.elgg-button.elgg-button-submit .caret,
.elgg-button.elgg-button-special .caret,
.elgg-button.elgg-button-delete .caret,
.elgg-button.elgg-button-cancel .caret {
    border-top-color: #fff;
    opacity: 0.75;
    filter: alpha(opacity=75);
}
.btn-small .caret {
    margin-top: 4px;
}
.alert,
.elgg-message {
    padding: 8px 35px 8px 14px;
    margin-bottom: 18px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
    background-color: #fcf8e3;
    border: 1px solid #fbeed5;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.alert,
.alert-heading,
.elgg-message {
    color: #c09853;
}
.alert .close,
.elgg-message .close {
    position: relative;
    top: -2px;
    right: -21px;
    line-height: 18px;
}
.alert-success,
.elgg-state-success {
    background-color: #dff0d8;
    border-color: #d6e9c6;
}
.alert-success,
.alert-success .alert-heading,
.elgg-state-success,
.elgg-state-success .alert-heading {
    color: #468847;
}
.alert-danger,
.alert-error,
.elgg-state-error {
    background-color: #f2dede;
    border-color: #eed3d7;
}
.alert-danger,
.alert-error,
.alert-danger .alert-heading,
.alert-error .alert-heading,
.elgg-state-error,
.elgg-state-error .alert-heading,
.elgg-state-error .alert-heading {
    color: #b94a48;
}
.alert-info,
.elgg-state-notice {
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.alert-info,
.alert-info .alert-heading,
.elgg-state-notice,
.elgg-state-notice .alert-heading {
    color: #3a87ad;
}
.alert-block {
    padding-top: 14px;
    padding-bottom: 14px;
}
.alert-block > p,
.alert-block > ul {
    margin-bottom: 0;
}
.alert-block p + p {
    margin-top: 5px;
}
.nav {
    margin-left: 0;
    margin-bottom: 18px;
    list-style: none;
}
.nav > li > a,
.elgg-tabs > li > a,
.elgg-menu-filter > li > a,
.elgg-menu-site > li > a {
    display: block;
}
.nav > li > a:hover,
.elgg-tabs > li > a:hover,
.elgg-menu-filter > li > a:hover,
.elgg-menu-site a:hover {
    text-decoration: none;
    background-color: <?php echo $vars['css']['tab-background-color-hover']; ?>;
    color: <?php echo $vars['css']['tab-font-color-hover']; ?>;
}
.nav .nav-header {
    display: block;
    padding: 3px 15px;
    font-size: 11px;
    font-weight: bold;
    line-height: 18px;
    color: #999;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
    text-transform: uppercase;
}
.nav li + .nav-header {
    margin-top: 9px;
}
.nav-list {
    padding-left: 14px;
    padding-right: 14px;
    margin-bottom: 0;
}
.nav-list > li > a,
.nav-list .nav-header {
    margin-left: -15px;
    margin-right: -15px;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}
.nav-list > li > a {
    padding: 3px 15px;
}
.nav-list .active > a,
.nav-list .active > a:hover {
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.2);
    background-color: #0088cc;
}
.nav-list [class^="icon-"] {
    margin-right: 2px;
}
.nav-tabs,
.nav-pills,
.elgg-tabs,
.elgg-menu-filter,
.elgg-menu-site {
    *zoom: 1;
}
ul.nav-tabs,
ul.nav-pills,
ul.elgg-tabs,
ul.elgg-menu-filter,
ul.elgg-menu-site {
    list-style: none;
    margin-left: 0;
}
.nav-tabs:before,
.nav-pills:before,
.nav-tabs:after,
.nav-pills:after,
.elgg-tabs:before,
.elgg-tabs:after,
.elgg-menu-filter:before,
.elgg-menu-filter:after,
.elgg-menu-site:before,
.elgg-menu-site:after {
    display: table;
    content: "";
}
.nav-tabs:after,
.nav-pills:after,
.elgg-tabs:after,
.elgg-menu-filter:after,
.elgg-menu-site:after {
    clear: both;
}
.nav-tabs > li,
.nav-pills > li,
.elgg-tabs > li,
.elgg-menu-filter > li,
.elgg-menu-site > li {
    float: left;
}
.elgg-menu.elgg-menu-site-more > li,
.elgg-menu-hover > li {
    float: none;
    margin: 0;
}
.nav-pills > li,
.elgg-menu-site > li {
    margin-right: 5px;
}
.nav-tabs > li > a,
.nav-pills > li > a,
.elgg-tabs > li > a,
.elgg-menu-filter > li > a,
.elgg-menu-site > li > a {
    padding-right: 12px;
    padding-left: 12px;
    margin-right: 2px;
    line-height: 14px;
}
.nav-tabs,
.elgg-tabs,
.elgg-menu-filter {
    border-bottom: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.nav-tabs > li,
.elgg-tabs > li,
.elgg-menu-filter > li {
    margin-bottom: -1px;
}
.nav-tabs > li > a,
.elgg-tabs > li > a,
.elgg-menu-filter > li > a {
    padding-top: 7px;
    padding-bottom: 5px;
    border: 1px solid transparent;
    line-height: 18px;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover,
.elgg-tabs > li > a:hover,
.elgg-menu-filter > li > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?>;
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
    color: #555555;
    background-color: #fff;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    border-bottom-color: transparent;
    cursor: default;
}
.nav-pills > li > a,
.elgg-menu-site a {
    padding-top: 8px;
    padding-bottom: 8px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
.nav-pills .active > a,
.nav-pills .active > a:hover,
.elgg-menu-site .active a,
.elgg-menu-site .elgg-state-selected a,
.elgg-menu-site .active a:hover,
.elgg-menu-site .elgg-state-selected a:hover {
    color: <?php echo $vars['css']['mn-font-color-hover']; ?>;
    background-color: <?php echo $vars['css']['mn-background-color-sel']; ?>;
}
.nav-stacked > li {
    float: none;
}
.nav-stacked > li > a {
    margin-right: 0;
}
.nav-tabs.nav-stacked {
    border-bottom: 0;
}
.nav-tabs.nav-stacked > li > a {
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}
.nav-tabs.nav-stacked > li:first-child > a {
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}
.nav-tabs.nav-stacked > li:last-child > a {
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}
.nav-tabs.nav-stacked > li > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
    z-index: 2;
}
.nav-pills.nav-stacked > li > a {
    margin-bottom: 3px;
}
.nav-pills.nav-stacked > li:last-child > a {
    margin-bottom: 1px;
}
.nav-tabs .dropdown-menu,
.nav-pills .dropdown-menu {
    margin-top: 1px;
    border-width: 1px;
}
.nav-pills .dropdown-menu {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.nav-tabs .dropdown-toggle .caret,
.nav-pills .dropdown-toggle .caret {
    border-top-color: #0088cc;
    margin-top: 6px;
}
.nav-tabs .dropdown-toggle:hover .caret,
.nav-pills .dropdown-toggle:hover .caret {
    border-top-color: #005580;
}
.nav-tabs .active .dropdown-toggle .caret,
.nav-pills .active .dropdown-toggle .caret {
    border-top-color: #333;
}
.nav > .dropdown.active > a:hover {
    color: #000;
    cursor: pointer;
}
.nav-tabs .open .dropdown-toggle,
.nav-pills .open .dropdown-toggle,
.nav > .open.active > a:hover {
    color: #fff;
    background-color: #999;
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
}
.nav .open .caret,
.nav .open.active .caret,
.nav .open a:hover .caret {
    border-top-color: #fff;
    opacity: 1;
    filter: alpha(opacity=100);
}
.tabs-stacked .open > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?>;
}
.tabbable {
    *zoom: 1;
}
.tabbable:before,
.tabbable:after {
    display: table;
    content: "";
}
.tabbable:after {
    clear: both;
}
.tab-content {
    overflow: hidden;
}
.tabs-below .nav-tabs,
.tabs-right .nav-tabs,
.tabs-left .nav-tabs {
    border-bottom: 0;
}
.tab-content > .tab-pane,
.pill-content > .pill-pane {
    display: none;
}
.tab-content > .active,
.pill-content > .active {
    display: block;
}
.tabs-below .nav-tabs {
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-below .nav-tabs > li {
    margin-top: -1px;
    margin-bottom: 0;
}
.tabs-below .nav-tabs > li > a {
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}
.tabs-below .nav-tabs > li > a:hover {
    border-bottom-color: transparent;
    border-top-color: <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-below .nav-tabs .active > a,
.tabs-below .nav-tabs .active > a:hover {
    border-color: transparent <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-left .nav-tabs > li,
.tabs-right .nav-tabs > li {
    float: none;
}
.tabs-left .nav-tabs > li > a,
.tabs-right .nav-tabs > li > a {
    min-width: 74px;
    margin-right: 0;
    margin-bottom: 3px;
}
.tabs-left .nav-tabs {
    float: left;
    margin-right: 19px;
    border-right: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-left .nav-tabs > li > a {
    margin-right: -1px;
    -webkit-border-radius: 4px 0 0 4px;
    -moz-border-radius: 4px 0 0 4px;
    border-radius: 4px 0 0 4px;
}
.tabs-left .nav-tabs > li > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-left .nav-tabs .active > a,
.tabs-left .nav-tabs .active > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?> transparent <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?>;
    *border-right-color: #fff;
}
.tabs-right .nav-tabs {
    float: right;
    margin-left: 19px;
    border-left: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-right .nav-tabs > li > a {
    margin-left: -1px;
    -webkit-border-radius: 0 4px 4px 0;
    -moz-border-radius: 0 4px 4px 0;
    border-radius: 0 4px 4px 0;
}
.tabs-right .nav-tabs > li > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?>;
}
.tabs-right .nav-tabs .active > a,
.tabs-right .nav-tabs .active > a:hover {
    border-color: <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> transparent;
    *border-left-color: #fff;
}
.navbar {
    overflow: visible;
    margin: 0;
}
.elgg-page-topbar {
	position: relative;
	z-index: 9000;
    height: 40px;
}
.navbar-inner {
    padding-left: 20px;
    padding-right: 20px;
    background-color: #2c2c2c;
    background-image: -moz-linear-gradient(top, #333333, #222222);
    background-image: -ms-linear-gradient(top, #333333, #222222);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#333333), to(#222222));
    background-image: -webkit-linear-gradient(top, #333333, #222222);
    background-image: -o-linear-gradient(top, #333333, #222222);
    background-image: linear-gradient(top, #333333, #222222);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#222222', GradientType=0);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25), inset 0 -1px 0 rgba(0, 0, 0, 0.1);
}
.btn-navbar {
    display: none;
    float: right;
    padding: 7px 10px;
    margin-left: 5px;
    margin-right: 5px;
    background-color: #2c2c2c;
    background-image: -moz-linear-gradient(top, #333333, #222222);
    background-image: -ms-linear-gradient(top, #333333, #222222);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#333333), to(#222222));
    background-image: -webkit-linear-gradient(top, #333333, #222222);
    background-image: -o-linear-gradient(top, #333333, #222222);
    background-image: linear-gradient(top, #333333, #222222);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#333333', endColorstr='#222222', GradientType=0);
    border-color: <?php echo $vars['css']['base-border-color']; ?> <?php echo $vars['css']['base-border-color']; ?> #000000;
    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
    -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
    box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.075);
}
.btn-navbar:hover,
.btn-navbar:active,
.btn-navbar.active,
.btn-navbar.disabled,
.btn-navbar[disabled] {
    background-color: #222;
}
.btn-navbar:active,
.btn-navbar.active {
    background-color: #080808 \9;
}
.btn-navbar .icon-bar {
    display: block;
    width: 18px;
    height: 2px;
    background-color: #f5f5f5;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    border-radius: 1px;
    -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    -moz-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.25);
}
.btn-navbar .icon-bar + .icon-bar {
    margin-top: 3px;
}
.nav-collapse.collapse {
    height: auto;
}
.navbar .brand:hover {
    text-decoration: none;
}
.navbar .brand {
    float: left;
    display: block;
    padding: 8px 20px 12px;
    margin-left: -20px;
    font-size: 20px;
    font-weight: 200;
    line-height: 1;
    color: #fff;
}
.navbar .navbar-text {
    margin-bottom: 0;
    line-height: 40px;
    color: #999;
}
.navbar .navbar-text a:hover {
    color: #fff;
    background-color: transparent;
}
.navbar .btn,
.navbar .btn-group {
    margin-top: 5px;
}
.navbar .btn-group .btn {
    margin-top: 0;
}
.navbar-form {
    margin-bottom: 0;
    *zoom: 1;
}
.navbar-form:before,
.navbar-form:after {
    display: table;
    content: "";
}
.navbar-form:after {
    clear: both;
}
.navbar-form input,
.navbar-form select {
    display: inline-block;
    margin-top: 5px;
    margin-bottom: 0;
}
.navbar-form .radio,
.navbar-form .checkbox {
    margin-top: 5px;
}
.navbar-form input[type="image"],
.navbar-form input[type="checkbox"],
.navbar-form input[type="radio"] {
    margin-top: 3px;
}
.navbar-form .input-append,
.navbar-form .input-prepend {
    margin-top: 6px;
    white-space: nowrap;
}
.navbar-form .input-append input,
.navbar-form .input-prepend input {
    margin-top: 0;
}
.navbar-search {
    position: relative;
    float: left;
    margin-top: 6px;
    margin-bottom: 0;
}
.navbar-search .search-query {
    padding: 4px 9px;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-weight: normal;
    line-height: 1;
    color: #fff;
    color: rgba(255, 255, 255, 0.75);
    background: #666;
    background: rgba(255, 255, 255, 0.3);
    border: 1px solid #111;
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0px rgba(255, 255, 255, 0.15);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0px rgba(255, 255, 255, 0.15);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 1px 0px rgba(255, 255, 255, 0.15);
    -webkit-transition: none;
    -moz-transition: none;
    -ms-transition: none;
    -o-transition: none;
    transition: none;
}
.navbar-search .search-query :-moz-placeholder {
    color: #eee;
}
.navbar-search .search-query::-webkit-input-placeholder {
    color: #eee;
}
.navbar-search .search-query:hover {
    color: #fff;
    background-color: #999;
    background-color: rgba(255, 255, 255, 0.5);
}
.navbar-search .search-query:focus,
.navbar-search .search-query.focused {
    padding: 5px 10px;
    color: #333;
    text-shadow: 0 1px 0 #fff;
    background-color: #fff;
    border: 0;
    -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.15);
    outline: 0;
}
.navbar-fixed-top {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1030;
}
.navbar-fixed-top .navbar-inner,
.elgg-page-topbar .navbar-inner {
    padding-left: 0;
    padding-right: 0;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
}
.elgg-page-topbar .navbar-inner,
.topbarContainer {
    height: 40px;
}
.navbar .nav,
.navbar .elgg-menu-topbar {
    position: relative;
    left: 0;
    display: block;
    float: left;
    margin: 0 10px 0 0;
}
.navbar .nav.pull-right,
.navbar .elgg-menu-topbar-alt {
    float: right;
}
.navbar .elgg-menu-topbar-alt {
    margin-right: 0;
}
.navbar .nav > li,
.elgg-menu-topbar > li {
    display: block;
    float: left;
}
.navbar .nav > li > a,
.elgg-menu-topbar > li > a {
    float: none;
    padding: 10px 10px 11px;
    line-height: 19px;
    color: #999;
    text-decoration: none;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.navbar .nav > li > a:hover,
.elgg-menu-topbar > li > a:hover {
    background-color: transparent;
    color: #fff;
    text-decoration: none;
}
.navbar .nav .active > a,
.navbar .nav .active > a:hover,
.elgg-menu-topbar > li.elgg-state-selected > a,
.elgg-menu-topbar > li.elgg-state-selected > a:hover {
    color: #fff;
    text-decoration: none;
    background-color: #222;
}
.navbar .divider-vertical {
    height: 40px;
    width: 1px;
    margin: 0 9px;
    overflow: hidden;
    background-color: #222;
    border-right: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.navbar .nav.pull-right {
    margin-left: 10px;
    margin-right: 0;
}
.navbar .dropdown-menu {
    margin-top: 1px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.navbar .dropdown-menu:before {
    content: '';
    display: inline-block;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-bottom: 7px solid #ccc;
    border-bottom-color: rgba(0, 0, 0, 0.2);
    position: absolute;
    top: -7px;
    left: 9px;
}
.navbar .dropdown-menu:after {
    content: '';
    display: inline-block;
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-bottom: 6px solid #fff;
    position: absolute;
    top: -6px;
    left: 10px;
}
.navbar .nav .dropdown-toggle .caret,
.navbar .nav .open.dropdown .caret {
    border-top-color: #fff;
}
.navbar .nav .active .caret {
    opacity: 1;
    filter: alpha(opacity=100);
}
.navbar .nav .open > .dropdown-toggle,
.navbar .nav .active > .dropdown-toggle,
.navbar .nav .open.active > .dropdown-toggle {
    background-color: transparent;
}
.navbar .nav .active > .dropdown-toggle:hover {
    color: #fff;
}
.navbar .nav.pull-right .dropdown-menu {
    left: auto;
    right: 0;
}
.navbar .nav.pull-right .dropdown-menu:before {
    left: auto;
    right: 12px;
}
.navbar .nav.pull-right .dropdown-menu:after {
    left: auto;
    right: 13px;
}
.breadcrumb,
.elgg-main .elgg-breadcrumbs {
    margin: 0 0 10px;
    overflow: hidden;
}
.breadcrumb,
.elgg-main .elgg-breadcrumbs,
.breadcrumb li,
.elgg-main .elgg-breadcrumbs li {
    font-size: 10px;
	line-height: 12px;
	min-height: 12px;
}
.breadcrumb li,
.elgg-main .elgg-breadcrumbs li {
    display: inline;
	list-style: none;
}
.breadcrumb .divider,
.elgg-main .elgg-breadcrumbs .divider,
.elgg-breadcrumbs > li:after {
    padding: 0 5px;
}
.breadcrumb .active a,
.elgg-main .elgg-breadcrumbs li {
    color: <?php echo $vars['css']['base-light-text-color']; ?>;
}
.pagination,
ul.elgg-pagination {
    height: 36px;
    margin: 18px 0;
}
.pagination ul,
ul.elgg-pagination {
    display: inline-block;
    *display: inline;
    /* IE7 inline-block hack */
    *zoom: 1;
    margin-left: 0;
    margin-bottom: 0;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
}
.pagination li,
ul.elgg-pagination li {
    display: inline;
}
.pagination a,
ul.elgg-pagination a,
ul.elgg-pagination span {
    float: left;
    padding: 0 14px;
    line-height: 34px;
    text-decoration: none;
    border: 1px solid #ddd;
    border-left-width: 0;
}
ul.elgg-pagination span {
    color: <?php echo $vars['css']['base-link-color']; ?>
}
.pagination a:hover,
.pagination .active a,
ul.elgg-pagination a:hover,
ul.elgg-pagination .elgg-state-selected a,
ul.elgg-pagination .active a,
ul.elgg-pagination span {
    background-color: #f5f5f5;
}
.pagination .active a,
ul.elgg-pagination .elgg-state-selected a,
ul.elgg-pagination .active a,
ul.elgg-pagination span {
    color: #999;
    cursor: default;
}
.pagination .disabled a,
.pagination .disabled a:hover,
ul.elgg-pagination .disabled a,
ul.elgg-pagination .disabled a:hover,
ul.elgg-pagination .elgg-state-disabled a,
ul.elgg-pagination .elgg-state-disabled a:hover,
ul.elgg-pagination .elgg-state-disabled span,
ul.elgg-pagination .elgg-state-disabled span:hover {
    color: #999;
    background-color: transparent;
    cursor: default;
}
.pagination li:first-child a,
ul.elgg-pagination li:first-child a,
.pagination li:first-child span,
ul.elgg-pagination li:first-child span {
    border-left-width: 1px;
    -webkit-border-radius: 3px 0 0 3px;
    -moz-border-radius: 3px 0 0 3px;
    border-radius: 3px 0 0 3px;
}
.pagination li:last-child a,
ul.elgg-pagination li:last-child a,
ul.elgg-pagination li:last-child span {
    -webkit-border-radius: 0 3px 3px 0;
    -moz-border-radius: 0 3px 3px 0;
    border-radius: 0 3px 3px 0;
}
.pagination-centered {
    text-align: center;
}
.pagination-right {
    text-align: right;
}
.pager {
    margin-left: 0;
    margin-bottom: 18px;
    list-style: none;
    text-align: center;
    *zoom: 1;
}
.pager:before,
.pager:after {
    display: table;
    content: "";
}
.pager:after {
    clear: both;
}
.pager li {
    display: inline;
}
.pager a {
    display: inline-block;
    padding: 5px 14px;
    background-color: #fff;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
}
.pager a:hover {
    text-decoration: none;
    background-color: #f5f5f5;
}
.pager .next a {
    float: right;
}
.pager .previous a {
    float: left;
}
.modal-open .dropdown-menu {
    z-index: 2050;
}
.modal-open .dropdown.open {
    *z-index: 2050;
}
.modal-open .popover {
    z-index: 2060;
}
.modal-open .tooltip {
    z-index: 2070;
}
.modal-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}
.modal-backdrop.fade {
    opacity: 0;
}
.modal-backdrop,
.modal-backdrop.fade.in {
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.modal {
    position: fixed;
    top: 50%;
    left: 50%;
    z-index: 1050;
    max-height: 500px;
    overflow: auto;
    width: 560px;
    margin: -250px 0 0 -280px;
    background-color: #fff;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    border: 1px solid rgba(0, 0, 0, 0.3);
    *border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    /* IE6-7 */
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
.modal.fade {
    -webkit-transition: opacity .3s linear, top .3s ease-out;
    -moz-transition: opacity .3s linear, top .3s ease-out;
    -ms-transition: opacity .3s linear, top .3s ease-out;
    -o-transition: opacity .3s linear, top .3s ease-out;
    transition: opacity .3s linear, top .3s ease-out;
    top: -25%;
}
.modal.fade.in {
    top: 50%;
}
.modal-header {
    padding: 9px 15px;
    border-bottom: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.modal-header .close {
    margin-top: 2px;
}
.modal-body {
    padding: 15px;
}
.modal-body .modal-form {
    margin-bottom: 0;
}
.modal-footer {
    padding: 14px 15px 15px;
    margin-bottom: 0;
    background-color: #f5f5f5;
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 0 0 6px 6px;
    -moz-border-radius: 0 0 6px 6px;
    border-radius: 0 0 6px 6px;
    -webkit-box-shadow: inset 0 1px 0 #fff;
    -moz-box-shadow: inset 0 1px 0 #fff;
    box-shadow: inset 0 1px 0 #fff;
    *zoom: 1;
}
.modal-footer:before,
.modal-footer:after {
    display: table;
    content: "";
}
.modal-footer:after {
    clear: both;
}
.modal-footer .btn {
    float: right;
    margin-left: 5px;
    margin-bottom: 0;
}
.tooltip {
    position: absolute;
    z-index: 1020;
    display: block;
    visibility: visible;
    padding: 5px;
    font-size: 11px;
    opacity: 0;
    filter: alpha(opacity=0);
}
.tooltip.in {
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.tooltip.top {
    margin-top: -2px;
}
.tooltip.right {
    margin-left: 2px;
}
.tooltip.bottom {
    margin-top: 2px;
}
.tooltip.left {
    margin-left: -2px;
}
.tooltip.top .tooltip-arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #000;
}
.tooltip.left .tooltip-arrow {
    top: 50%;
    right: 0;
    margin-top: -5px;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #000;
}
.tooltip.bottom .tooltip-arrow {
    top: 0;
    left: 50%;
    margin-left: -5px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #000;
}
.tooltip.right .tooltip-arrow {
    top: 50%;
    left: 0;
    margin-top: -5px;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-right: 5px solid #000;
}
.tooltip-inner {
    max-width: 200px;
    padding: 3px 8px;
    color: #fff;
    text-align: center;
    text-decoration: none;
    background-color: #000;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.tooltip-arrow {
    position: absolute;
    width: 0;
    height: 0;
}
.popover {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1010;
    display: none;
    padding: 5px;
}
.popover.top {
    margin-top: -5px;
}
.popover.right {
    margin-left: 5px;
}
.popover.bottom {
    margin-top: 5px;
}
.popover.left {
    margin-left: -5px;
}
.popover.top .arrow {
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid #000;
}
.popover.right .arrow {
    top: 50%;
    left: 0;
    margin-top: -5px;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-right: 5px solid #000;
}
.popover.bottom .arrow {
    top: 0;
    left: 50%;
    margin-left: -5px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #000;
}
.popover.left .arrow {
    top: 50%;
    right: 0;
    margin-top: -5px;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-left: 5px solid #000;
}
.popover .arrow {
    position: absolute;
    width: 0;
    height: 0;
}
.popover-inner {
    padding: 3px;
    width: 280px;
    overflow: hidden;
    background: #000;
    background: rgba(0, 0, 0, 0.8);
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
}
.popover-title {
    padding: 9px 15px;
    line-height: 1;
    background-color: #f5f5f5;
    border-bottom: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 3px 3px 0 0;
    -moz-border-radius: 3px 3px 0 0;
    border-radius: 3px 3px 0 0;
}
.popover-content {
    padding: 14px;
    background-color: #fff;
    -webkit-border-radius: 0 0 3px 3px;
    -moz-border-radius: 0 0 3px 3px;
    border-radius: 0 0 3px 3px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding-box;
    background-clip: padding-box;
}
.popover-content p,
.popover-content ul,
.popover-content ol {
    margin-bottom: 0;
}
.thumbnails {
    margin-left: -20px;
    list-style: none;
    *zoom: 1;
}
.thumbnails:before,
.thumbnails:after {
    display: table;
    content: "";
}
.thumbnails:after {
    clear: both;
}
.thumbnails > li {
    float: left;
    margin: 0 0 18px 20px;
}
.thumbnail {
    display: block;
    padding: 4px;
    line-height: 1;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
    -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075);
}
a.thumbnail:hover {
    border-color: #0088cc;
    -webkit-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
    -moz-box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
    box-shadow: 0 1px 4px rgba(0, 105, 214, 0.25);
}
.thumbnail > img {
    display: block;
    max-width: 100%;
    margin-left: auto;
    margin-right: auto;
}
.thumbnail .caption {
    padding: 9px;
}
.label {
    padding: 2px 4px 3px;
    font-size: 12px;
    font-weight: bold;
    color: #fff;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #999;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.label:hover {
    color: #fff;
    text-decoration: none;
}
.label-important {
    background-color: #b94a48;
}
.label-important:hover {
    background-color: #953b39;
}
.label-warning {
    background-color: #f89406;
}
.label-warning:hover {
    background-color: #c67605;
}
.label-success {
    background-color: #468847;
}
.label-success:hover {
    background-color: #356635;
}
.label-info {
    background-color: #3a87ad;
}
.label-info:hover {
    background-color: #2d6987;
}
@-webkit-keyframes progress-bar-stripes {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 40px 0;
    }
}
@-moz-keyframes progress-bar-stripes {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 40px 0;
    }
}
@keyframes progress-bar-stripes {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 40px 0;
    }
}
.progress {
    overflow: hidden;
    height: 18px;
    margin-bottom: 18px;
    background-color: #f7f7f7;
    background-image: -moz-linear-gradient(top, #f5f5f5, #f9f9f9);
    background-image: -ms-linear-gradient(top, #f5f5f5, #f9f9f9);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5f5f5), to(#f9f9f9));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #f9f9f9);
    background-image: -o-linear-gradient(top, #f5f5f5, #f9f9f9);
    background-image: linear-gradient(top, #f5f5f5, #f9f9f9);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#f9f9f9', GradientType=0);
    -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.progress .bar {
    width: 0%;
    height: 18px;
    color: #fff;
    font-size: 12px;
    text-align: center;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    background-color: #0e90d2;
    background-image: -moz-linear-gradient(top, #149bdf, #0480be);
    background-image: -ms-linear-gradient(top, #149bdf, #0480be);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#149bdf), to(#0480be));
    background-image: -webkit-linear-gradient(top, #149bdf, #0480be);
    background-image: -o-linear-gradient(top, #149bdf, #0480be);
    background-image: linear-gradient(top, #149bdf, #0480be);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#149bdf', endColorstr='#0480be', GradientType=0);
    -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    -moz-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: width 0.6s ease;
    -moz-transition: width 0.6s ease;
    -ms-transition: width 0.6s ease;
    -o-transition: width 0.6s ease;
    transition: width 0.6s ease;
}
.progress-striped .bar {
    background-color: #62c462;
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    -webkit-background-size: 40px 40px;
    -moz-background-size: 40px 40px;
    -o-background-size: 40px 40px;
    background-size: 40px 40px;
}
.progress.active .bar {
    -webkit-animation: progress-bar-stripes 2s linear infinite;
    -moz-animation: progress-bar-stripes 2s linear infinite;
    animation: progress-bar-stripes 2s linear infinite;
}
.progress-danger .bar {
    background-color: #dd514c;
    background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
    background-image: -ms-linear-gradient(top, #ee5f5b, #c43c35);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ee5f5b), to(#c43c35));
    background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
    background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
    background-image: linear-gradient(top, #ee5f5b, #c43c35);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#c43c35', GradientType=0);
}
.progress-danger.progress-striped .bar {
    background-color: #ee5f5b;
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-success .bar {
    background-color: #5eb95e;
    background-image: -moz-linear-gradient(top, #62c462, #57a957);
    background-image: -ms-linear-gradient(top, #62c462, #57a957);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#62c462), to(#57a957));
    background-image: -webkit-linear-gradient(top, #62c462, #57a957);
    background-image: -o-linear-gradient(top, #62c462, #57a957);
    background-image: linear-gradient(top, #62c462, #57a957);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462', endColorstr='#57a957', GradientType=0);
}
.progress-success.progress-striped .bar {
    background-color: #62c462;
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-info .bar {
    background-color: #4bb1cf;
    background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
    background-image: -ms-linear-gradient(top, #5bc0de, #339bb9);
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#5bc0de), to(#339bb9));
    background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
    background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
    background-image: linear-gradient(top, #5bc0de, #339bb9);
    background-repeat: repeat-x;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#339bb9', GradientType=0);
}
.progress-info.progress-striped .bar {
    background-color: #5bc0de;
    background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
    background-image: linear-gradient(-45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.accordion {
    margin-bottom: 18px;
}
.accordion-group {
    margin-bottom: 2px;
    border: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.accordion-heading {
    border-bottom: 0;
}
.accordion-heading .accordion-toggle {
    display: block;
    padding: 8px 15px;
}
.accordion-inner {
    padding: 9px 15px;
    border-top: 1px solid <?php echo $vars['css']['base-border-color']; ?>;
}
.carousel {
    position: relative;
    margin-bottom: 18px;
    line-height: 1;
}
.carousel-inner {
    overflow: hidden;
    width: 100%;
    position: relative;
}
.carousel .item {
    display: none;
    position: relative;
    -webkit-transition: 0.6s ease-in-out left;
    -moz-transition: 0.6s ease-in-out left;
    -ms-transition: 0.6s ease-in-out left;
    -o-transition: 0.6s ease-in-out left;
    transition: 0.6s ease-in-out left;
}
.carousel .item > img {
    display: block;
    line-height: 1;
}
.carousel .active,
.carousel .next,
.carousel .prev {
    display: block;
}
.carousel .active {
    left: 0;
}
.carousel .next,
.carousel .prev {
    position: absolute;
    top: 0;
    width: 100%;
}
.carousel .next {
    left: 100%;
}
.carousel .prev {
    left: -100%;
}
.carousel .next.left,
.carousel .prev.right {
    left: 0;
}
.carousel .active.left {
    left: -100%;
}
.carousel .active.right {
    left: 100%;
}
.carousel-control {
    position: absolute;
    top: 40%;
    left: 15px;
    width: 40px;
    height: 40px;
    margin-top: -20px;
    font-size: 60px;
    font-weight: 100;
    line-height: 30px;
    color: #fff;
    text-align: center;
    background: #222;
    border: 3px solid #fff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 23px;
    opacity: 0.5;
    filter: alpha(opacity=50);
}
.carousel-control.right {
    left: auto;
    right: 15px;
}
.carousel-control:hover {
    color: #fff;
    text-decoration: none;
    opacity: 0.9;
    filter: alpha(opacity=90);
}
.carousel-caption {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 10px 15px 5px;
    background: #333;
    background: rgba(0, 0, 0, 0.75);
}
.carousel-caption h4,
.carousel-caption p {
    color: #fff;
}
.hero-unit {
    padding: 60px;
    margin-bottom: 30px;
    background-color: #f5f5f5;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
}
.hero-unit h1 {
    margin-bottom: 0;
    font-size: 60px;
    line-height: 1;
    letter-spacing: -1px;
}
.hero-unit p {
    font-size: 18px;
    font-weight: 200;
    line-height: 27px;
}
.pull-right {
    float: right;
}
.pull-left {
    float: left;
}
.hide {
    display: none;
}
.show {
    display: block;
}
.invisible {
    visibility: hidden;
}
