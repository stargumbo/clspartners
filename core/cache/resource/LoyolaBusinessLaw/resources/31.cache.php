<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 31,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Home',
    'longtitle' => 'Loyola Business Law',
    'description' => 'Loyola Home',
    'alias' => 'Home',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '<p class="centered" style="padding: 0; margin: 0;"><img src="global_assets/img/business-home-header.jpg" alt="Home Image" width="516" height="290" /></p>
<h3 class="justifyleft"><strong><br />Master of Jurisprudence in Business Law </strong><strong style="line-height: 1.5em;">Online Degree Program</strong></h3>
<p>Business today is highly regulated. Expertise in business fundamentals is no longer enough. Leaders must be able to recognize, understand and analyze the impact that laws and regulations have on business operations, judgment, strategy and decision making.</p>
<p>Loyola’s online Master of Jurisprudence (MJ) in Business Law is designed for business professionals who are looking to develop or deepen their understanding of business law and how it affects operations and strategy, as well as those who want to develop expertise in the legal aspects of corporate compliance.</p>
<p>Students in this program will develop the practical skills they need to: </p>
<ul>
<li><span style="line-height: 1.5em;">Recognize legal issues in business settings </span></li>
<li><span style="line-height: 1.5em;">Understand the legal context of business issues and the implications on strategy and decision making </span></li>
<li><span style="line-height: 1.5em;">Operate and manage internal compliance and governance programs </span></li>
<li><span style="line-height: 1.5em;">Effectively communicate with legal counsel</span></li>
</ul>
<p><span style="line-height: 1.5em;">Graduates of Loyola’s MJ in Business Law program are highly regarded for their legal knowledge and specialized skills in critical thinking, business judgment and ethical leadership.</span></p>',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1386970496,
    'editedby' => 2,
    'editedon' => 1390847541,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 1367949840,
    'publishedby' => 1,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'LoyolaBusinessLaw',
    'content_type' => 1,
    'uri' => 'Home.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'analyticsLabel' => 
    array (
      0 => 'analyticsLabel',
      1 => '',
      2 => 'default',
      3 => NULL,
      4 => 'text',
    ),
    '_content' => '<!doctype html>
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>	<meta charset="utf-8" />
	<title>Loyola University Chicago - Home</title>
	<base href="[[!++site_url]]" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="cleartype" content="on" />
	<!-- Stylesheets -->
	<link rel="stylesheet" href="http://onlinebusinesslaw.luc.edu/global_assets/css/style.css" />
	<link rel="stylesheet" media="print" href="http://onlinebusinesslaw.luc.edu/global_assets/css/print.css" />
	<link href=\'http://fonts.googleapis.com/css?family=Alfa+Slab+One\' rel=\'stylesheet\' type=\'text/css\' />
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/selectivizr-1.0.2.min.js"></script>
	<![endif]-->
	<!-- HTML5 Support -->
	<script src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/modernizr-2.6.2.min.js"></script></head>
<body class="id-31 LoyolaBusinessLaw">
	[[*context_key:is=`TulsaEnergyLaw`:then=`[[!$analytics-tulsa]]`]]
	[[*context_key:is=`LoyolaHealthLaw`:then=`[[!$analytics-healthlaw]]`]]
	<img src="http://onlinebusinesslaw.luc.edu/global_assets/img/biz-law-back.jpg" class="bg" />

	<div id="masthead">
		<div class="position"><a href="http://www.luc.edu/law/"><img src="http://onlinebusinesslaw.luc.edu/global_assets/img/logo-masthead.jpg" alt="Loyola University Chicago" /></a></div>
	</div>
	<div id="header"><div class="header-text"><a href="http://www.luc.edu/law/">Loyola University Chicago | Master of Jurisprudence</a></div><div class="school"><a href="">Business Law</a></div></div>
	<div id="nav"><ul>[[!getResources? &parents=`0` &limit=`0` &sortby=`menuindex` &sortdir=`ASC` &context=`LoyolaBusinessLaw` &resources=`-31,-36` &tpl=`menu_item`]]</ul></div>

	<div id="announcements">
		<a href="[[!++announcement_url]]" target="_blank" />[[!++announcement_message]]</a>
	</div>

	<div class="row">
		<div id="form-wrapper" class="[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]">[[!FormIt?
	&hooks=`FormSave,redirect`
	&fsFormTopic=`MJ-LLM`
	&redirectTo=`18`
]]

<a href="javascript:void(0);" class="close-box">Close Form</a>
<h2><em>Learn More</em> about the <br /> Business Law Program.</h2>

<form id="contact-form" action="" method="post" class="loyola-contact-form">
	<input type="hidden" name="nospam:blank" value="" />
	<div style="display:none;"><input type="text" name="emailaddress" id="emailaddress" value="" /></div>
	<input class="input-field required" type="text" name="firstName" id="firstName" value="[[!+fi.firstName:default=`First Name`]]" />
	<input class="input-field required" type="text" name="lastName" id="lastName" value="[[!+fi.lastName:default=`Last Name`]]" />
	<input class="input-field required" type="text" name="address" id="address" value="[[!+fi.address:default=`Address`]]" />
	<input class="input-field" type="text" name="address2" id="address2" value="[[!+fi.address2:default=`Address 2`]]" />
	<input class="input-field" type="text" name="city" id="city" value="[[!+fi.city:default=`City`]]" />
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="state" id="state" class="input-menu" style="width:100px; margin-top:4px;margin-bottom:4px;">
				[[!FormItStateOptions? &selected=`[[!+fi.state]]`]]
			</select></td>
			<td>
			<input name="zip" id="zip" class="input-field zip required" style="margin-left:10px;" value="[[!+fi.zip:default=`Zip`]]" maxlength="7" />
			<br />
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<select name="country" id="country" style="margin-bottom:4px;" class="input-menu country">
				[[!FormItCountryOptions? &selected=`[[+fi.country]]`]]
			</select></td>
		</tr>
	</table>
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="phoneType" id="phoneType" name="phoneType" class="input-menu" style="width:100px;margin-top:4px;">
				<option name="phoneType" value="" [[!+fi.phoneType:FormItIsChecked=``]]>Phone Type</option>
				<option name="phoneType" value="Home" [[!+fi.phoneType:FormItIsChecked=`Home`]]>Home</option>
				<option name="phoneType" value="Mobile" [[!+fi.phoneType:FormItIsChecked=`Mobile`]]>Mobile</option>
				<option name="phoneType" value="Work" [[!+fi.phoneType:FormItIsChecked=`Work`]]>Work</option>
				<option name="phoneType" value="Other" [[!+fi.phoneType:FormItIsChecked=`Other`]]>Other</option>
			</select></td>
			<td>
			<input name="phone" id="phone" class="input-field phone" style="margin-left:10px;" value="[[!+fi.phone:default=`Phone Number`]]" />
			</td>
		</tr>
	</table>
	<input name="email" id="email" class="input-field email required" value="[[!+fi.email:default=`Email`]]" />
	



	<input type="hidden" name="utm_source" class="utm_source" value="[[!getUrlParam?&name=`utm_source`]]" />
	<input type="hidden" name="utm_medium" class="utm_medium" value="[[!getUrlParam?&name=`utm_medium`]]" />
	<input type="hidden" name="utm_campaign" class="utm_campaign" value="[[!getUrlParam?&name=`utm_campaign`]]" />
	<input type="hidden" id="currentTime" name="timeStamp" value="" />
	
	<p class="form-text" style="margin-bottom:10px text-align:center;">
		<a href="#" class="sbmtbutton" id="request">&nbsp;</a>
	</p>
</form>
</div>
		<div id="content" class="[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]">
			<p class="centered" style="padding: 0; margin: 0;"><img src="global_assets/img/business-home-header.jpg" alt="Home Image" width="516" height="290" /></p>
<h3 class="justifyleft"><strong><br />Master of Jurisprudence in Business Law </strong><strong style="line-height: 1.5em;">Online Degree Program</strong></h3>
<p>Business today is highly regulated. Expertise in business fundamentals is no longer enough. Leaders must be able to recognize, understand and analyze the impact that laws and regulations have on business operations, judgment, strategy and decision making.</p>
<p>Loyola’s online Master of Jurisprudence (MJ) in Business Law is designed for business professionals who are looking to develop or deepen their understanding of business law and how it affects operations and strategy, as well as those who want to develop expertise in the legal aspects of corporate compliance.</p>
<p>Students in this program will develop the practical skills they need to: </p>
<ul>
<li><span style="line-height: 1.5em;">Recognize legal issues in business settings </span></li>
<li><span style="line-height: 1.5em;">Understand the legal context of business issues and the implications on strategy and decision making </span></li>
<li><span style="line-height: 1.5em;">Operate and manage internal compliance and governance programs </span></li>
<li><span style="line-height: 1.5em;">Effectively communicate with legal counsel</span></li>
</ul>
<p><span style="line-height: 1.5em;">Graduates of Loyola’s MJ in Business Law program are highly regarded for their legal knowledge and specialized skills in critical thinking, business judgment and ethical leadership.</span></p>
			<a href="http://luc.edu/law/centers/healthlaw/about/vis.html" target="_blank" style="display:block;text-decoration:none;">
				<div id="virtual-session">
					<div id="virtual-copy"><p>Register for our next Online Virtual Information Session.<br /><span class=""><em>Click here for more information</em></span></p></div>
					<div id="virtual-arrow"><img width="21" height="34" alt="Arrow" src="http://onlinebusinesslaw.luc.edu/global_assets/img/arrow.png" /></div>
				</div>
			</a>
		</div>
	</div>

	<a href="javascript:void(0);" id="mobile-form" class="[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]">Request More Information</a>

	[[*context_key:is=`TulsaEnergyLaw`:then=`	<div class="row">
		<div id="footer-copy">
			<div style="max-width:600px; margin:0 auto;">
				<div class="column_footer" style="width:48%;">
					<img src="/global_assets/img/acc_bestgradschools.png" />
					<p>The University of Tulsa College of Law is ranked in Top-100 Law Schools in the United States. Currently 86, Tulsa has risen 61 spots in USNEWS rankings in the past 4 years.</p>
				</div>
				<div class="column_footer" style="width:48%;">
					<p style="float:none; margin:0 auto; width:auto;">The University of Tulsa College of Law is accredited by the American Bar Association and the MJEL program has received acquiescence from the American Bar Association.  The University of Tulsa is accredited by the North Central Association of Colleges and Schools.</p>
				</div>
			</div>
		</div>
	</div>`]]
	<!-- JavaScript -->
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/plugins.js"></script>
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/custom.js"></script>
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/helper.js"></script>

	
</body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[*pagetitle]]' => 'Home',
    '[[$head-content]]' => '	<meta charset="utf-8" />
	<title>Loyola University Chicago - Home</title>
	<base href="[[!++site_url]]" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="cleartype" content="on" />
	<!-- Stylesheets -->
	<link rel="stylesheet" href="http://onlinebusinesslaw.luc.edu/global_assets/css/style.css" />
	<link rel="stylesheet" media="print" href="http://onlinebusinesslaw.luc.edu/global_assets/css/print.css" />
	<link href=\'http://fonts.googleapis.com/css?family=Alfa+Slab+One\' rel=\'stylesheet\' type=\'text/css\' />
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/selectivizr-1.0.2.min.js"></script>
	<![endif]-->
	<!-- HTML5 Support -->
	<script src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/modernizr-2.6.2.min.js"></script>',
    '[[*id]]' => 31,
    '[[*context_key]]' => 'LoyolaBusinessLaw',
    '[[*context_key:is=`TulsaEnergyLaw`:then=`[[!$analytics-tulsa]]`]]' => NULL,
    '[[*context_key:is=`LoyolaHealthLaw`:then=`[[!$analytics-healthlaw]]`]]' => NULL,
    '[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]' => NULL,
    '[[$contactForm_loyolabiz]]' => '[[!FormIt?
	&hooks=`FormSave,redirect`
	&fsFormTopic=`MJ-LLM`
	&redirectTo=`18`
]]

<a href="javascript:void(0);" class="close-box">Close Form</a>
<h2><em>Learn More</em> about the <br /> Business Law Program.</h2>

<form id="contact-form" action="" method="post" class="loyola-contact-form">
	<input type="hidden" name="nospam:blank" value="" />
	<div style="display:none;"><input type="text" name="emailaddress" id="emailaddress" value="" /></div>
	<input class="input-field required" type="text" name="firstName" id="firstName" value="[[!+fi.firstName:default=`First Name`]]" />
	<input class="input-field required" type="text" name="lastName" id="lastName" value="[[!+fi.lastName:default=`Last Name`]]" />
	<input class="input-field required" type="text" name="address" id="address" value="[[!+fi.address:default=`Address`]]" />
	<input class="input-field" type="text" name="address2" id="address2" value="[[!+fi.address2:default=`Address 2`]]" />
	<input class="input-field" type="text" name="city" id="city" value="[[!+fi.city:default=`City`]]" />
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="state" id="state" class="input-menu" style="width:100px; margin-top:4px;margin-bottom:4px;">
				[[!FormItStateOptions? &selected=`[[!+fi.state]]`]]
			</select></td>
			<td>
			<input name="zip" id="zip" class="input-field zip required" style="margin-left:10px;" value="[[!+fi.zip:default=`Zip`]]" maxlength="7" />
			<br />
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<select name="country" id="country" style="margin-bottom:4px;" class="input-menu country">
				[[!FormItCountryOptions? &selected=`[[+fi.country]]`]]
			</select></td>
		</tr>
	</table>
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="phoneType" id="phoneType" name="phoneType" class="input-menu" style="width:100px;margin-top:4px;">
				<option name="phoneType" value="" [[!+fi.phoneType:FormItIsChecked=``]]>Phone Type</option>
				<option name="phoneType" value="Home" [[!+fi.phoneType:FormItIsChecked=`Home`]]>Home</option>
				<option name="phoneType" value="Mobile" [[!+fi.phoneType:FormItIsChecked=`Mobile`]]>Mobile</option>
				<option name="phoneType" value="Work" [[!+fi.phoneType:FormItIsChecked=`Work`]]>Work</option>
				<option name="phoneType" value="Other" [[!+fi.phoneType:FormItIsChecked=`Other`]]>Other</option>
			</select></td>
			<td>
			<input name="phone" id="phone" class="input-field phone" style="margin-left:10px;" value="[[!+fi.phone:default=`Phone Number`]]" />
			</td>
		</tr>
	</table>
	<input name="email" id="email" class="input-field email required" value="[[!+fi.email:default=`Email`]]" />
	



	<input type="hidden" name="utm_source" class="utm_source" value="[[!getUrlParam?&name=`utm_source`]]" />
	<input type="hidden" name="utm_medium" class="utm_medium" value="[[!getUrlParam?&name=`utm_medium`]]" />
	<input type="hidden" name="utm_campaign" class="utm_campaign" value="[[!getUrlParam?&name=`utm_campaign`]]" />
	<input type="hidden" id="currentTime" name="timeStamp" value="" />
	
	<p class="form-text" style="margin-bottom:10px text-align:center;">
		<a href="#" class="sbmtbutton" id="request">&nbsp;</a>
	</p>
</form>
',
    '[[*context_key:is=`TulsaEnergyLaw`:then=`Register for our Next Informational Webinar`:else=`Register for our next Online Virtual Information Session.`]]' => 'Register for our next Online Virtual Information Session.',
    '[[*context_key:is=`LoyolaHealthLaw`:then=`georgia gold`:else=``]]' => '',
    '[[$footer_tulsa]]' => '	<div class="row">
		<div id="footer-copy">
			<div style="max-width:600px; margin:0 auto;">
				<div class="column_footer" style="width:48%;">
					<img src="/global_assets/img/acc_bestgradschools.png" />
					<p>The University of Tulsa College of Law is ranked in Top-100 Law Schools in the United States. Currently 86, Tulsa has risen 61 spots in USNEWS rankings in the past 4 years.</p>
				</div>
				<div class="column_footer" style="width:48%;">
					<p style="float:none; margin:0 auto; width:auto;">The University of Tulsa College of Law is accredited by the American Bar Association and the MJEL program has received acquiescence from the American Bar Association.  The University of Tulsa is accredited by the North Central Association of Colleges and Schools.</p>
				</div>
			</div>
		</div>
	</div>',
    '[[*context_key:is=`TulsaEnergyLaw`:then=`	<div class="row">
		<div id="footer-copy">
			<div style="max-width:600px; margin:0 auto;">
				<div class="column_footer" style="width:48%;">
					<img src="/global_assets/img/acc_bestgradschools.png" />
					<p>The University of Tulsa College of Law is ranked in Top-100 Law Schools in the United States. Currently 86, Tulsa has risen 61 spots in USNEWS rankings in the past 4 years.</p>
				</div>
				<div class="column_footer" style="width:48%;">
					<p style="float:none; margin:0 auto; width:auto;">The University of Tulsa College of Law is accredited by the American Bar Association and the MJEL program has received acquiescence from the American Bar Association.  The University of Tulsa is accredited by the North Central Association of Colleges and Schools.</p>
				</div>
			</div>
		</div>
	</div>`]]' => NULL,
    '[[$footer-scripts]]' => '<!-- JavaScript -->
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/plugins.js"></script>
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/custom.js"></script>
<script type="text/javascript" src="http://onlinebusinesslaw.luc.edu/global_assets/js/libs/helper.js"></script>
',
    '[[$pixel_conversion]]' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Thank You (23175) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23175;2810;iframe/?spotName=Loyola_Health_Law_Thank_You&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
    '[[$pixel_retargeting]]' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Homepage (23170) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23170;2810;iframe/?spotName=Loyola_Health_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
    '[[*pagetitle:is=`Thank You!`:then=`<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Thank You (23175) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23175;2810;iframe/?spotName=Loyola_Health_Law_Thank_You&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>`:else=`<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Homepage (23170) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23170;2810;iframe/?spotName=Loyola_Health_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>`]]' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Homepage (23170) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23170;2810;iframe/?spotName=Loyola_Health_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
    '[[*context_key:is=`LoyolaHealthLaw`:then=`<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Homepage (23170) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23170;2810;iframe/?spotName=Loyola_Health_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>`:else``]]' => '',
    '[[*analyticsLabel]]' => '',
    '[[*context_key:is=`TulsaEnergyLaw`:then=`<script type="text/javascript"> 
var ftRandom = Math.random()*1000000; 
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3223;23218;2818;iframe/?spotName=Energy_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\'); 
</script>


<!-- Google Code for Tulsa Conversion Page -->
<script type="text/javascript">
var google_conversion_id = 1001791301;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "";
var google_conversion_value = 0;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001791301/?value=0&amp;label=&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41559319-2\');
  ga(\'send\', \'pageview\');
</script>`]]' => NULL,
    '[[*context_key:is=`LoyolaHealthLaw`:then=`<!-- Google Code for HLP_VISinfo Conversion Page -->
<script type="text/javascript">
var google_conversion_id = 1001791301;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "";
var google_conversion_value = 0;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001791301/?value=0&amp;label=&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41559319-1\');
  ga(\'send\', \'pageview\');

</script>`]]' => NULL,
    '[[~32]]' => 'loyola-degree.html',
    '[[~37]]' => 'compliance.html',
    '[[~34]]' => 'career-advancement.html',
    '[[~35]]' => 'admissions.html',
    '[[~38]]' => 'faculty.html',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'head-content' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head-content',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '	<meta charset="utf-8" />
	<title>[[++site_name]] - [[*pagetitle]]</title>
	<base href="[[!++site_url]]" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="cleartype" content="on" />
	<!-- Stylesheets -->
	<link rel="stylesheet" href="[[++site_url]]global_assets/css/style.css" />
	<link rel="stylesheet" media="print" href="[[++site_url]]global_assets/css/print.css" />
	<link href=\'http://fonts.googleapis.com/css?family=Alfa+Slab+One\' rel=\'stylesheet\' type=\'text/css\' />
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="[[++site_url]]global_assets/js/libs/selectivizr-1.0.2.min.js"></script>
	<![endif]-->
	<!-- HTML5 Support -->
	<script src="[[++site_url]]global_assets/js/libs/modernizr-2.6.2.min.js"></script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '	<meta charset="utf-8" />
	<title>[[++site_name]] - [[*pagetitle]]</title>
	<base href="[[!++site_url]]" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="MobileOptimized" content="320" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="cleartype" content="on" />
	<!-- Stylesheets -->
	<link rel="stylesheet" href="[[++site_url]]global_assets/css/style.css" />
	<link rel="stylesheet" media="print" href="[[++site_url]]global_assets/css/print.css" />
	<link href=\'http://fonts.googleapis.com/css?family=Alfa+Slab+One\' rel=\'stylesheet\' type=\'text/css\' />
	<!--[if (lt IE 9) & (!IEMobile)]>
	<script src="[[++site_url]]global_assets/js/libs/selectivizr-1.0.2.min.js"></script>
	<![endif]-->
	<!-- HTML5 Support -->
	<script src="[[++site_url]]global_assets/js/libs/modernizr-2.6.2.min.js"></script>',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'contactForm_loyolabiz' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'contactForm_loyolabiz',
          'description' => '',
          'editor_type' => 0,
          'category' => 12,
          'cache_type' => 0,
          'snippet' => '[[!FormIt?
	&hooks=`FormSave,redirect`
	&fsFormTopic=`MJ-LLM`
	&redirectTo=`18`
]]

<a href="javascript:void(0);" class="close-box">Close Form</a>
<h2><em>Learn More</em> about the <br /> Business Law Program.</h2>

<form id="contact-form" action="[[~[[*id]]]]" method="post" class="loyola-contact-form">
	<input type="hidden" name="nospam:blank" value="" />
	<div style="display:none;"><input type="text" name="emailaddress" id="emailaddress" value="" /></div>
	<input class="input-field required" type="text" name="firstName" id="firstName" value="[[!+fi.firstName:default=`First Name`]]" />
	<input class="input-field required" type="text" name="lastName" id="lastName" value="[[!+fi.lastName:default=`Last Name`]]" />
	<input class="input-field required" type="text" name="address" id="address" value="[[!+fi.address:default=`Address`]]" />
	<input class="input-field" type="text" name="address2" id="address2" value="[[!+fi.address2:default=`Address 2`]]" />
	<input class="input-field" type="text" name="city" id="city" value="[[!+fi.city:default=`City`]]" />
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="state" id="state" class="input-menu" style="width:100px; margin-top:4px;margin-bottom:4px;">
				[[!FormItStateOptions? &selected=`[[!+fi.state]]`]]
			</select></td>
			<td>
			<input name="zip" id="zip" class="input-field zip required" style="margin-left:10px;" value="[[!+fi.zip:default=`Zip`]]" maxlength="7" />
			<br />
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<select name="country" id="country" style="margin-bottom:4px;" class="input-menu country">
				[[!FormItCountryOptions? &selected=`[[+fi.country]]`]]
			</select></td>
		</tr>
	</table>
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="phoneType" id="phoneType" name="phoneType" class="input-menu" style="width:100px;margin-top:4px;">
				<option name="phoneType" value="" [[!+fi.phoneType:FormItIsChecked=``]]>Phone Type</option>
				<option name="phoneType" value="Home" [[!+fi.phoneType:FormItIsChecked=`Home`]]>Home</option>
				<option name="phoneType" value="Mobile" [[!+fi.phoneType:FormItIsChecked=`Mobile`]]>Mobile</option>
				<option name="phoneType" value="Work" [[!+fi.phoneType:FormItIsChecked=`Work`]]>Work</option>
				<option name="phoneType" value="Other" [[!+fi.phoneType:FormItIsChecked=`Other`]]>Other</option>
			</select></td>
			<td>
			<input name="phone" id="phone" class="input-field phone" style="margin-left:10px;" value="[[!+fi.phone:default=`Phone Number`]]" />
			</td>
		</tr>
	</table>
	<input name="email" id="email" class="input-field email required" value="[[!+fi.email:default=`Email`]]" />
	



	<input type="hidden" name="utm_source" class="utm_source" value="[[!getUrlParam?&name=`utm_source`]]" />
	<input type="hidden" name="utm_medium" class="utm_medium" value="[[!getUrlParam?&name=`utm_medium`]]" />
	<input type="hidden" name="utm_campaign" class="utm_campaign" value="[[!getUrlParam?&name=`utm_campaign`]]" />
	<input type="hidden" id="currentTime" name="timeStamp" value="" />
	
	<p class="form-text" style="margin-bottom:10px text-align:center;">
		<a href="#" class="sbmtbutton" id="request">&nbsp;</a>
	</p>
</form>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '[[!FormIt?
	&hooks=`FormSave,redirect`
	&fsFormTopic=`MJ-LLM`
	&redirectTo=`18`
]]

<a href="javascript:void(0);" class="close-box">Close Form</a>
<h2><em>Learn More</em> about the <br /> Business Law Program.</h2>

<form id="contact-form" action="[[~[[*id]]]]" method="post" class="loyola-contact-form">
	<input type="hidden" name="nospam:blank" value="" />
	<div style="display:none;"><input type="text" name="emailaddress" id="emailaddress" value="" /></div>
	<input class="input-field required" type="text" name="firstName" id="firstName" value="[[!+fi.firstName:default=`First Name`]]" />
	<input class="input-field required" type="text" name="lastName" id="lastName" value="[[!+fi.lastName:default=`Last Name`]]" />
	<input class="input-field required" type="text" name="address" id="address" value="[[!+fi.address:default=`Address`]]" />
	<input class="input-field" type="text" name="address2" id="address2" value="[[!+fi.address2:default=`Address 2`]]" />
	<input class="input-field" type="text" name="city" id="city" value="[[!+fi.city:default=`City`]]" />
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="state" id="state" class="input-menu" style="width:100px; margin-top:4px;margin-bottom:4px;">
				[[!FormItStateOptions? &selected=`[[!+fi.state]]`]]
			</select></td>
			<td>
			<input name="zip" id="zip" class="input-field zip required" style="margin-left:10px;" value="[[!+fi.zip:default=`Zip`]]" maxlength="7" />
			<br />
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<select name="country" id="country" style="margin-bottom:4px;" class="input-menu country">
				[[!FormItCountryOptions? &selected=`[[+fi.country]]`]]
			</select></td>
		</tr>
	</table>
	<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<td>
			<select name="phoneType" id="phoneType" name="phoneType" class="input-menu" style="width:100px;margin-top:4px;">
				<option name="phoneType" value="" [[!+fi.phoneType:FormItIsChecked=``]]>Phone Type</option>
				<option name="phoneType" value="Home" [[!+fi.phoneType:FormItIsChecked=`Home`]]>Home</option>
				<option name="phoneType" value="Mobile" [[!+fi.phoneType:FormItIsChecked=`Mobile`]]>Mobile</option>
				<option name="phoneType" value="Work" [[!+fi.phoneType:FormItIsChecked=`Work`]]>Work</option>
				<option name="phoneType" value="Other" [[!+fi.phoneType:FormItIsChecked=`Other`]]>Other</option>
			</select></td>
			<td>
			<input name="phone" id="phone" class="input-field phone" style="margin-left:10px;" value="[[!+fi.phone:default=`Phone Number`]]" />
			</td>
		</tr>
	</table>
	<input name="email" id="email" class="input-field email required" value="[[!+fi.email:default=`Email`]]" />
	



	<input type="hidden" name="utm_source" class="utm_source" value="[[!getUrlParam?&name=`utm_source`]]" />
	<input type="hidden" name="utm_medium" class="utm_medium" value="[[!getUrlParam?&name=`utm_medium`]]" />
	<input type="hidden" name="utm_campaign" class="utm_campaign" value="[[!getUrlParam?&name=`utm_campaign`]]" />
	<input type="hidden" id="currentTime" name="timeStamp" value="" />
	
	<p class="form-text" style="margin-bottom:10px text-align:center;">
		<a href="#" class="sbmtbutton" id="request">&nbsp;</a>
	</p>
</form>
',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer_tulsa' => 
      array (
        'fields' => 
        array (
          'id' => 15,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'footer_tulsa',
          'description' => '',
          'editor_type' => 0,
          'category' => 10,
          'cache_type' => 0,
          'snippet' => '	<div class="row">
		<div id="footer-copy">
			<div style="max-width:600px; margin:0 auto;">
				<div class="column_footer" style="width:48%;">
					<img src="/global_assets/img/acc_bestgradschools.png" />
					<p>The University of Tulsa College of Law is ranked in Top-100 Law Schools in the United States. Currently 86, Tulsa has risen 61 spots in USNEWS rankings in the past 4 years.</p>
				</div>
				<div class="column_footer" style="width:48%;">
					<p style="float:none; margin:0 auto; width:auto;">The University of Tulsa College of Law is accredited by the American Bar Association and the MJEL program has received acquiescence from the American Bar Association.  The University of Tulsa is accredited by the North Central Association of Colleges and Schools.</p>
				</div>
			</div>
		</div>
	</div>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => '',
          'content' => '	<div class="row">
		<div id="footer-copy">
			<div style="max-width:600px; margin:0 auto;">
				<div class="column_footer" style="width:48%;">
					<img src="/global_assets/img/acc_bestgradschools.png" />
					<p>The University of Tulsa College of Law is ranked in Top-100 Law Schools in the United States. Currently 86, Tulsa has risen 61 spots in USNEWS rankings in the past 4 years.</p>
				</div>
				<div class="column_footer" style="width:48%;">
					<p style="float:none; margin:0 auto; width:auto;">The University of Tulsa College of Law is accredited by the American Bar Association and the MJEL program has received acquiescence from the American Bar Association.  The University of Tulsa is accredited by the North Central Association of Colleges and Schools.</p>
				</div>
			</div>
		</div>
	</div>',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'footer-scripts' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer-scripts',
          'description' => '',
          'editor_type' => 0,
          'category' => 11,
          'cache_type' => 0,
          'snippet' => '<!-- JavaScript -->
<script type="text/javascript" src="[[++site_url]]global_assets/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" src="[[++site_url]]global_assets/js/plugins.js"></script>
<script type="text/javascript" src="[[++site_url]]global_assets/js/custom.js"></script>
<script type="text/javascript" src="[[++site_url]]global_assets/js/libs/helper.js"></script>
',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- JavaScript -->
<script type="text/javascript" src="[[++site_url]]global_assets/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<script type="text/javascript" src="[[++site_url]]global_assets/js/plugins.js"></script>
<script type="text/javascript" src="[[++site_url]]global_assets/js/custom.js"></script>
<script type="text/javascript" src="[[++site_url]]global_assets/js/libs/helper.js"></script>
',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pixel_conversion' => 
      array (
        'fields' => 
        array (
          'id' => 6,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pixel_conversion',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Thank You (23175) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23175;2810;iframe/?spotName=Loyola_Health_Law_Thank_You&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Thank You (23175) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23175;2810;iframe/?spotName=Loyola_Health_Law_Thank_You&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'pixel_retargeting' => 
      array (
        'fields' => 
        array (
          'id' => 5,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'pixel_retargeting',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Homepage (23170) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23170;2810;iframe/?spotName=Loyola_Health_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!--  Conditional Container Tag: Loyola Health Law (3546) | Loyola Health Law Homepage (23170) | Loyola Health Law (2810) | Expected URL:  -->
<script type="text/javascript">
var ftRandom = Math.random()*1000000;
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3546;23170;2810;iframe/?spotName=Loyola_Health_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\');
</script>',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'analytics-tulsa' => 
      array (
        'fields' => 
        array (
          'id' => 16,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'analytics-tulsa',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<script type="text/javascript"> 
var ftRandom = Math.random()*1000000; 
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3223;23218;2818;iframe/?spotName=Energy_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\'); 
</script>


<!-- Google Code for Tulsa Conversion Page -->
<script type="text/javascript">
var google_conversion_id = 1001791301;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "[[*analyticsLabel]]";
var google_conversion_value = 0;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001791301/?value=0&amp;label=[[*analyticsLabel]]&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41559319-2\');
  ga(\'send\', \'pageview\');
</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<script type="text/javascript"> 
var ftRandom = Math.random()*1000000; 
document.write(\'<iframe style="position:absolute; visibility:hidden; width:1px; height:1px;" src="http://servedby.flashtalking.com/container/3223;23218;2818;iframe/?spotName=Energy_Law_Homepage&cachebuster=\'+ftRandom+\'"></iframe>\'); 
</script>


<!-- Google Code for Tulsa Conversion Page -->
<script type="text/javascript">
var google_conversion_id = 1001791301;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "[[*analyticsLabel]]";
var google_conversion_value = 0;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001791301/?value=0&amp;label=[[*analyticsLabel]]&amp;guid=ON&amp;script=0"/>
</div>
</noscript>


<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41559319-2\');
  ga(\'send\', \'pageview\');
</script>',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'analytics-healthlaw' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'analytics-healthlaw',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'cache_type' => 0,
          'snippet' => '<!-- Google Code for HLP_VISinfo Conversion Page -->
<script type="text/javascript">
var google_conversion_id = 1001791301;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "[[*analyticsLabel]]";
var google_conversion_value = 0;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001791301/?value=0&amp;label=[[*analyticsLabel]]&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41559319-1\');
  ga(\'send\', \'pageview\');

</script>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '<!-- Google Code for HLP_VISinfo Conversion Page -->
<script type="text/javascript">
var google_conversion_id = 1001791301;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "[[*analyticsLabel]]";
var google_conversion_value = 0;
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1001791301/?value=0&amp;label=[[*analyticsLabel]]&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-41559319-1\');
  ga(\'send\', \'pageview\');

</script>',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
      'getResources' => 
      array (
        'fields' => 
        array (
          'id' => 14,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getResources',
          'description' => '<strong>1.6.0-pl</strong> A general purpose Resource listing and summarization snippet for MODx Revolution',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2012, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) == 2) {
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) && $idx !== \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = \'\';
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if (empty($resourceTpl)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\',$scriptProperties,false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output,$toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array(\'output\' => $output));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
          'locked' => false,
          'properties' => 
          array (
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as a resource template. NOTE: if not provided, properties are dumped to output for each resource.',
              'area_trans' => '',
            ),
            'tplOdd' => 
            array (
              'name' => 'tplOdd',
              'desc' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for resources with an odd idx value (see idx property).',
              'area_trans' => '',
            ),
            'tplFirst' => 
            array (
              'name' => 'tplFirst',
              'desc' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the first resource (see first property).',
              'area_trans' => '',
            ),
            'tplLast' => 
            array (
              'name' => 'tplLast',
              'desc' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as resource template for the last resource (see last property).',
              'area_trans' => '',
            ),
            'tplWrapper' => 
            array (
              'name' => 'tplWrapper',
              'desc' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a chunk serving as wrapper template for the Snippet output. This does not work with toSeparatePlaceholders.',
              'area_trans' => '',
            ),
            'wrapIfEmpty' => 
            array (
              'name' => 'wrapIfEmpty',
              'desc' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if empty output should be wrapped by the tplWrapper, if specified. Defaults to false.',
              'area_trans' => '',
            ),
            'sortby' => 
            array (
              'name' => 'sortby',
              'desc' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'publishedon',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A field name to sort by or JSON object of field names and sortdir for each field, e.g. {"publishedon":"ASC","createdon":"DESC"}. Defaults to publishedon.',
              'area_trans' => '',
            ),
            'sortbyTV' => 
            array (
              'name' => 'sortbyTV',
              'desc' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Name of a Template Variable to sort by. Defaults to empty string.',
              'area_trans' => '',
            ),
            'sortbyTVType' => 
            array (
              'name' => 'sortbyTVType',
              'desc' => 'An optional type to indicate how to sort on the Template Variable value.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'string',
                  'value' => 'string',
                  'name' => 'String',
                ),
                1 => 
                array (
                  'text' => 'integer',
                  'value' => 'integer',
                  'name' => 'integer',
                ),
                2 => 
                array (
                  'text' => 'decimal',
                  'value' => 'decimal',
                  'name' => 'decimal',
                ),
                3 => 
                array (
                  'text' => 'datetime',
                  'value' => 'datetime',
                  'name' => 'datetime',
                ),
              ),
              'value' => 'string',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional type to indicate how to sort on the Template Variable value.',
              'area_trans' => '',
            ),
            'sortbyAlias' => 
            array (
              'name' => 'sortbyAlias',
              'desc' => 'Query alias for sortby field. Defaults to an empty string.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Query alias for sortby field. Defaults to an empty string.',
              'area_trans' => '',
            ),
            'sortbyEscaped' => 
            array (
              'name' => 'sortbyEscaped',
              'desc' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines if the field name specified in sortby should be escaped. Defaults to 0.',
              'area_trans' => '',
            ),
            'sortdir' => 
            array (
              'name' => 'sortdir',
              'desc' => 'Order which to sort by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'sortdirTV' => 
            array (
              'name' => 'sortdirTV',
              'desc' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'ASC',
                  'value' => 'ASC',
                  'name' => 'ASC',
                ),
                1 => 
                array (
                  'text' => 'DESC',
                  'value' => 'DESC',
                  'name' => 'DESC',
                ),
              ),
              'value' => 'DESC',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Order which to sort a Template Variable by. Defaults to DESC.',
              'area_trans' => '',
            ),
            'limit' => 
            array (
              'name' => 'limit',
              'desc' => 'Limits the number of resources returned. Defaults to 5.',
              'type' => 'textfield',
              'options' => '',
              'value' => '5',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits the number of resources returned. Defaults to 5.',
              'area_trans' => '',
            ),
            'offset' => 
            array (
              'name' => 'offset',
              'desc' => 'An offset of resources returned by the criteria to skip.',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An offset of resources returned by the criteria to skip.',
              'area_trans' => '',
            ),
            'tvFilters' => 
            array (
              'name' => 'tvFilters',
              'desc' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Delimited-list of TemplateVar values to filter resources by. Supports two delimiters and two value search formats. THe first delimiter || represents a logical OR and the primary grouping mechanism.  Within each group you can provide a comma-delimited list of values. These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the value, indicating you are searching for the value in any TemplateVar tied to the Resource. An example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`. <br />NOTE: filtering by values uses a LIKE query and % is considered a wildcard. <br />ANOTHER NOTE: This only looks at the raw value set for specific Resource, i. e. there must be a value specifically set for the Resource and it is not evaluated.',
              'area_trans' => '',
            ),
            'tvFiltersAndDelimiter' => 
            array (
              'name' => 'tvFiltersAndDelimiter',
              'desc' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'type' => 'textfield',
              'options' => '',
              'value' => ',',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical AND expressions in tvFilters. Default is ,',
              'area_trans' => '',
            ),
            'tvFiltersOrDelimiter' => 
            array (
              'name' => 'tvFiltersOrDelimiter',
              'desc' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'type' => 'textfield',
              'options' => '',
              'value' => '||',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The delimiter to use to separate logical OR expressions in tvFilters. Default is ||',
              'area_trans' => '',
            ),
            'depth' => 
            array (
              'name' => 'depth',
              'desc' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'type' => 'textfield',
              'options' => '',
              'value' => '10',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Integer value indicating depth to search for resources from each parent. Defaults to 10.',
              'area_trans' => '',
            ),
            'parents' => 
            array (
              'name' => 'parents',
              'desc' => 'Optional. Comma-delimited list of ids serving as parents.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Optional. Comma-delimited list of ids serving as parents.',
              'area_trans' => '',
            ),
            'includeContent' => 
            array (
              'name' => 'includeContent',
              'desc' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if the content of each resource should be returned in the results. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVs' => 
            array (
              'name' => 'includeTVs',
              'desc' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be included in the properties available to each resource template. Defaults to false.',
              'area_trans' => '',
            ),
            'includeTVList' => 
            array (
              'name' => 'includeTVList',
              'desc' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits included TVs to those specified as a comma-delimited list of TV names. Defaults to empty.',
              'area_trans' => '',
            ),
            'showHidden' => 
            array (
              'name' => 'showHidden',
              'desc' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are hidden from menus should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showUnpublished' => 
            array (
              'name' => 'showUnpublished',
              'desc' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are unpublished should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'showDeleted' => 
            array (
              'name' => 'showDeleted',
              'desc' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if Resources that are deleted should be shown. Defaults to false.',
              'area_trans' => '',
            ),
            'resources' => 
            array (
              'name' => 'resources',
              'desc' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-separated list of resource IDs to exclude or include. IDs with a - in front mean to exclude. Ex: 123,-456 means to include Resource 123, but always exclude Resource 456.',
              'area_trans' => '',
            ),
            'processTVs' => 
            array (
              'name' => 'processTVs',
              'desc' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values should be rendered as they would on the resource being summarized. Defaults to false.',
              'area_trans' => '',
            ),
            'processTVList' => 
            array (
              'name' => 'processTVList',
              'desc' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits processed TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for processing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'prepareTVs' => 
            array (
              'name' => 'prepareTVs',
              'desc' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Indicates if TemplateVar values that are not processed fully should be prepared before being returned. Defaults to true.',
              'area_trans' => '',
            ),
            'prepareTVList' => 
            array (
              'name' => 'prepareTVList',
              'desc' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Limits prepared TVs to those specified as a comma-delimited list of TV names; note only includedTVs will be available for preparing if specified. Defaults to empty.',
              'area_trans' => '',
            ),
            'tvPrefix' => 
            array (
              'name' => 'tvPrefix',
              'desc' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'type' => 'textfield',
              'options' => '',
              'value' => 'tv.',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'The prefix for TemplateVar properties. Defaults to: tv.',
              'area_trans' => '',
            ),
            'idx' => 
            array (
              'name' => 'idx',
              'desc' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'You can define the starting idx of the resources, which is an property that is incremented as each resource is rendered.',
              'area_trans' => '',
            ),
            'first' => 
            array (
              'name' => 'first',
              'desc' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the first resource (see tplFirst). Defaults to 1.',
              'area_trans' => '',
            ),
            'last' => 
            array (
              'name' => 'last',
              'desc' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Define the idx which represents the last resource (see tplLast). Defaults to the number of resources being summarized + first - 1',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign the result to this placeholder instead of outputting it directly.',
              'area_trans' => '',
            ),
            'toSeparatePlaceholders' => 
            array (
              'name' => 'toSeparatePlaceholders',
              'desc' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If set, will assign EACH result to a separate placeholder named by this param suffixed with a sequential number (starting from 0).',
              'area_trans' => '',
            ),
            'debug' => 
            array (
              'name' => 'debug',
              'desc' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'If true, will send the SQL query to the MODX log. Defaults to false.',
              'area_trans' => '',
            ),
            'where' => 
            array (
              'name' => 'where',
              'desc' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON expression of criteria to build any additional where clauses from, e.g. &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`',
              'area_trans' => '',
            ),
            'dbCacheFlag' => 
            array (
              'name' => 'dbCacheFlag',
              'desc' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'type' => 'textfield',
              'options' => '',
              'value' => '0',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'Determines how result sets are cached if cache_db is enabled in MODX. 0|false = do not cache result set; 1 = cache result set according to cache settings, any other integer value = number of seconds to cache result set',
              'area_trans' => '',
            ),
            'context' => 
            array (
              'name' => 'context',
              'desc' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A comma-delimited list of context keys for limiting results. Default is empty, i.e. do not limit results by context.',
              'area_trans' => '',
            ),
            'tplCondition' => 
            array (
              'name' => 'tplCondition',
              'desc' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A condition to compare against the conditionalTpls property to map Resources to different tpls based on custom conditional logic.',
              'area_trans' => '',
            ),
            'tplOperator' => 
            array (
              'name' => 'tplOperator',
              'desc' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'is equal to',
                  'value' => '==',
                  'name' => 'is equal to',
                ),
                1 => 
                array (
                  'text' => 'is not equal to',
                  'value' => '!=',
                  'name' => 'is not equal to',
                ),
                2 => 
                array (
                  'text' => 'less than',
                  'value' => '<',
                  'name' => 'less than',
                ),
                3 => 
                array (
                  'text' => 'less than or equal to',
                  'value' => '<=',
                  'name' => 'less than or equal to',
                ),
                4 => 
                array (
                  'text' => 'greater than or equal to',
                  'value' => '>=',
                  'name' => 'greater than or equal to',
                ),
                5 => 
                array (
                  'text' => 'is empty',
                  'value' => 'empty',
                  'name' => 'is empty',
                ),
                6 => 
                array (
                  'text' => 'is not empty',
                  'value' => '!empty',
                  'name' => 'is not empty',
                ),
                7 => 
                array (
                  'text' => 'is null',
                  'value' => 'null',
                  'name' => 'is null',
                ),
                8 => 
                array (
                  'text' => 'is in array',
                  'value' => 'inarray',
                  'name' => 'is in array',
                ),
                9 => 
                array (
                  'text' => 'is between',
                  'value' => 'between',
                  'name' => 'is between',
                ),
              ),
              'value' => '==',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'An optional operator to use for the tplCondition when comparing against the conditionalTpls operands. Default is == (equals).',
              'area_trans' => '',
            ),
            'conditionalTpls' => 
            array (
              'name' => 'conditionalTpls',
              'desc' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => NULL,
              'area' => '',
              'desc_trans' => 'A JSON map of conditional operands and tpls to compare against the tplCondition property using the specified tplOperator.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * getResources
 *
 * A general purpose Resource listing and summarization snippet for MODX 2.x.
 *
 * @author Jason Coward
 * @copyright Copyright 2010-2012, Jason Coward
 *
 * TEMPLATES
 *
 * tpl - Name of a chunk serving as a resource template
 * [NOTE: if not provided, properties are dumped to output for each resource]
 *
 * tplOdd - (Opt) Name of a chunk serving as resource template for resources with an odd idx value
 * (see idx property)
 * tplFirst - (Opt) Name of a chunk serving as resource template for the first resource (see first
 * property)
 * tplLast - (Opt) Name of a chunk serving as resource template for the last resource (see last
 * property)
 * tpl_{n} - (Opt) Name of a chunk serving as resource template for the nth resource
 *
 * tplWrapper - (Opt) Name of a chunk serving as a wrapper template for the output
 * [NOTE: Does not work with toSeparatePlaceholders]
 *
 * SELECTION
 *
 * parents - Comma-delimited list of ids serving as parents
 *
 * context - (Opt) Comma-delimited list of context keys to limit results by; if empty, contexts for all specified
 * parents will be used (all contexts if 0 is specified) [default=]
 *
 * depth - (Opt) Integer value indicating depth to search for resources from each parent [default=10]
 *
 * tvFilters - (Opt) Delimited-list of TemplateVar values to filter resources by. Supports two
 * delimiters and two value search formats. The first delimiter || represents a logical OR and the
 * primary grouping mechanism.  Within each group you can provide a comma-delimited list of values.
 * These values can be either tied to a specific TemplateVar by name, e.g. myTV==value, or just the
 * value, indicating you are searching for the value in any TemplateVar tied to the Resource. An
 * example would be &tvFilters=`filter2==one,filter1==bar%||filter1==foo`
 * [NOTE: filtering by values uses a LIKE query and % is considered a wildcard.]
 * [NOTE: this only looks at the raw value set for specific Resource, i. e. there must be a value
 * specifically set for the Resource and it is not evaluated.]
 *
 * tvFiltersAndDelimiter - (Opt) Custom delimiter for logical AND, default \',\', in case you want to
 * match a literal comma in the tvFilters. E.g. &tvFiltersAndDelimiter=`&&`
 * &tvFilters=`filter1==foo,bar&&filter2==baz` [default=,]
 *
 * tvFiltersOrDelimiter - (Opt) Custom delimiter for logical OR, default \'||\', in case you want to
 * match a literal \'||\' in the tvFilters. E.g. &tvFiltersOrDelimiter=`|OR|`
 * &tvFilters=`filter1==foo||bar|OR|filter2==baz` [default=||]
 *
 * where - (Opt) A JSON expression of criteria to build any additional where clauses from. An example would be
 * &where=`{{"alias:LIKE":"foo%", "OR:alias:LIKE":"%bar"},{"OR:pagetitle:=":"foobar", "AND:description:=":"raboof"}}`
 *
 * sortby - (Opt) Field to sort by or a JSON array, e.g. {"publishedon":"ASC","createdon":"DESC"} [default=publishedon]
 * sortbyTV - (opt) A Template Variable name to sort by (if supplied, this precedes the sortby value) [default=]
 * sortbyTVType - (Opt) A data type to CAST a TV Value to in order to sort on it properly [default=string]
 * sortbyAlias - (Opt) Query alias for sortby field [default=]
 * sortbyEscaped - (Opt) Escapes the field name(s) specified in sortby [default=0]
 * sortdir - (Opt) Order which to sort by [default=DESC]
 * sortdirTV - (Opt) Order which to sort by a TV [default=DESC]
 * limit - (Opt) Limits the number of resources returned [default=5]
 * offset - (Opt) An offset of resources returned by the criteria to skip [default=0]
 * dbCacheFlag - (Opt) Controls caching of db queries; 0|false = do not cache result set; 1 = cache result set
 * according to cache settings, any other integer value = number of seconds to cache result set [default=0]
 *
 * OPTIONS
 *
 * includeContent - (Opt) Indicates if the content of each resource should be returned in the
 * results [default=0]
 * includeTVs - (Opt) Indicates if TemplateVar values should be included in the properties available
 * to each resource template [default=0]
 * includeTVList - (Opt) Limits the TemplateVars that are included if includeTVs is true to those specified
 * by name in a comma-delimited list [default=]
 * prepareTVs - (Opt) Prepares media-source dependent TemplateVar values [default=1]
 * prepareTVList - (Opt) Limits the TVs that are prepared to those specified by name in a comma-delimited
 * list [default=]
 * processTVs - (Opt) Indicates if TemplateVar values should be rendered as they would on the
 * resource being summarized [default=0]
 * processTVList - (opt) Limits the TemplateVars that are processed if included to those specified
 * by name in a comma-delimited list [default=]
 * tvPrefix - (Opt) The prefix for TemplateVar properties [default=tv.]
 * idx - (Opt) You can define the starting idx of the resources, which is an property that is
 * incremented as each resource is rendered [default=1]
 * first - (Opt) Define the idx which represents the first resource (see tplFirst) [default=1]
 * last - (Opt) Define the idx which represents the last resource (see tplLast) [default=# of
 * resources being summarized + first - 1]
 * outputSeparator - (Opt) An optional string to separate each tpl instance [default="\\n"]
 * wrapIfEmpty - (Opt) Indicates if the tplWrapper should be applied if the output is empty [default=0]
 *
 */
$output = array();
$outputSeparator = isset($outputSeparator) ? $outputSeparator : "\\n";

/* set default properties */
$tpl = !empty($tpl) ? $tpl : \'\';
$includeContent = !empty($includeContent) ? true : false;
$includeTVs = !empty($includeTVs) ? true : false;
$includeTVList = !empty($includeTVList) ? explode(\',\', $includeTVList) : array();
$processTVs = !empty($processTVs) ? true : false;
$processTVList = !empty($processTVList) ? explode(\',\', $processTVList) : array();
$prepareTVs = !empty($prepareTVs) ? true : false;
$prepareTVList = !empty($prepareTVList) ? explode(\',\', $prepareTVList) : array();
$tvPrefix = isset($tvPrefix) ? $tvPrefix : \'tv.\';
$parents = (!empty($parents) || $parents === \'0\') ? explode(\',\', $parents) : array($modx->resource->get(\'id\'));
array_walk($parents, \'trim\');
$parents = array_unique($parents);
$depth = isset($depth) ? (integer) $depth : 10;

$tvFiltersOrDelimiter = isset($tvFiltersOrDelimiter) ? $tvFiltersOrDelimiter : \'||\';
$tvFiltersAndDelimiter = isset($tvFiltersAndDelimiter) ? $tvFiltersAndDelimiter : \',\';
$tvFilters = !empty($tvFilters) ? explode($tvFiltersOrDelimiter, $tvFilters) : array();

$where = !empty($where) ? $modx->fromJSON($where) : array();
$showUnpublished = !empty($showUnpublished) ? true : false;
$showDeleted = !empty($showDeleted) ? true : false;

$sortby = isset($sortby) ? $sortby : \'publishedon\';
$sortbyTV = isset($sortbyTV) ? $sortbyTV : \'\';
$sortbyAlias = isset($sortbyAlias) ? $sortbyAlias : \'modResource\';
$sortbyEscaped = !empty($sortbyEscaped) ? true : false;
$sortdir = isset($sortdir) ? $sortdir : \'DESC\';
$sortdirTV = isset($sortdirTV) ? $sortdirTV : \'DESC\';
$limit = isset($limit) ? (integer) $limit : 5;
$offset = isset($offset) ? (integer) $offset : 0;
$totalVar = !empty($totalVar) ? $totalVar : \'total\';

$dbCacheFlag = !isset($dbCacheFlag) ? false : $dbCacheFlag;
if (is_string($dbCacheFlag) || is_numeric($dbCacheFlag)) {
    if ($dbCacheFlag == \'0\') {
        $dbCacheFlag = false;
    } elseif ($dbCacheFlag == \'1\') {
        $dbCacheFlag = true;
    } else {
        $dbCacheFlag = (integer) $dbCacheFlag;
    }
}

/* multiple context support */
$contextArray = array();
$contextSpecified = false;
if (!empty($context)) {
    $contextArray = explode(\',\',$context);
    array_walk($contextArray, \'trim\');
    $contexts = array();
    foreach ($contextArray as $ctx) {
        $contexts[] = $modx->quote($ctx);
    }
    $context = implode(\',\',$contexts);
    $contextSpecified = true;
    unset($contexts,$ctx);
} else {
    $context = $modx->quote($modx->context->get(\'key\'));
}

$pcMap = array();
$pcQuery = $modx->newQuery(\'modResource\', array(\'id:IN\' => $parents), $dbCacheFlag);
$pcQuery->select(array(\'id\', \'context_key\'));
if ($pcQuery->prepare() && $pcQuery->stmt->execute()) {
    foreach ($pcQuery->stmt->fetchAll(PDO::FETCH_ASSOC) as $pcRow) {
        $pcMap[(integer) $pcRow[\'id\']] = $pcRow[\'context_key\'];
    }
}

$children = array();
$parentArray = array();
foreach ($parents as $parent) {
    $parent = (integer) $parent;
    if ($parent === 0) {
        $pchildren = array();
        if ($contextSpecified) {
            foreach ($contextArray as $pCtx) {
                if (!in_array($pCtx, $contextArray)) {
                    continue;
                }
                $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                $pcchildren = $modx->getChildIds($parent, $depth, $options);
                if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
            }
        } else {
            $cQuery = $modx->newQuery(\'modContext\', array(\'key:!=\' => \'mgr\'));
            $cQuery->select(array(\'key\'));
            if ($cQuery->prepare() && $cQuery->stmt->execute()) {
                foreach ($cQuery->stmt->fetchAll(PDO::FETCH_COLUMN) as $pCtx) {
                    $options = $pCtx !== $modx->context->get(\'key\') ? array(\'context\' => $pCtx) : array();
                    $pcchildren = $modx->getChildIds($parent, $depth, $options);
                    if (!empty($pcchildren)) $pchildren = array_merge($pchildren, $pcchildren);
                }
            }
        }
        $parentArray[] = $parent;
    } else {
        $pContext = array_key_exists($parent, $pcMap) ? $pcMap[$parent] : false;
        if ($debug) $modx->log(modX::LOG_LEVEL_ERROR, "context for {$parent} is {$pContext}");
        if ($pContext && $contextSpecified && !in_array($pContext, $contextArray, true)) {
            $parent = next($parents);
            continue;
        }
        $parentArray[] = $parent;
        $options = !empty($pContext) && $pContext !== $modx->context->get(\'key\') ? array(\'context\' => $pContext) : array();
        $pchildren = $modx->getChildIds($parent, $depth, $options);
    }
    if (!empty($pchildren)) $children = array_merge($children, $pchildren);
    $parent = next($parents);
}
$parents = array_merge($parentArray, $children);

/* build query */
$criteria = array("modResource.parent IN (" . implode(\',\', $parents) . ")");
if ($contextSpecified) {
    $contextResourceTbl = $modx->getTableName(\'modContextResource\');
    $criteria[] = "(modResource.context_key IN ({$context}) OR EXISTS(SELECT 1 FROM {$contextResourceTbl} ctx WHERE ctx.resource = modResource.id AND ctx.context_key IN ({$context})))";
}
if (empty($showDeleted)) {
    $criteria[\'deleted\'] = \'0\';
}
if (empty($showUnpublished)) {
    $criteria[\'published\'] = \'1\';
}
if (empty($showHidden)) {
    $criteria[\'hidemenu\'] = \'0\';
}
if (!empty($hideContainers)) {
    $criteria[\'isfolder\'] = \'0\';
}
$criteria = $modx->newQuery(\'modResource\', $criteria);
if (!empty($tvFilters)) {
    $tmplVarTbl = $modx->getTableName(\'modTemplateVar\');
    $tmplVarResourceTbl = $modx->getTableName(\'modTemplateVarResource\');
    $conditions = array();
    $operators = array(
        \'<=>\' => \'<=>\',
        \'===\' => \'=\',
        \'!==\' => \'!=\',
        \'<>\' => \'<>\',
        \'==\' => \'LIKE\',
        \'!=\' => \'NOT LIKE\',
        \'<<\' => \'<\',
        \'<=\' => \'<=\',
        \'=<\' => \'=<\',
        \'>>\' => \'>\',
        \'>=\' => \'>=\',
        \'=>\' => \'=>\'
    );
    foreach ($tvFilters as $fGroup => $tvFilter) {
        $filterGroup = array();
        $filters = explode($tvFiltersAndDelimiter, $tvFilter);
        $multiple = count($filters) > 0;
        foreach ($filters as $filter) {
            $operator = \'==\';
            $sqlOperator = \'LIKE\';
            foreach ($operators as $op => $opSymbol) {
                if (strpos($filter, $op, 1) !== false) {
                    $operator = $op;
                    $sqlOperator = $opSymbol;
                    break;
                }
            }
            $tvValueField = \'tvr.value\';
            $tvDefaultField = \'tv.default_text\';
            $f = explode($operator, $filter);
            if (count($f) == 2) {
                $tvName = $modx->quote($f[0]);
                if (is_numeric($f[1]) && !in_array($sqlOperator, array(\'LIKE\', \'NOT LIKE\'))) {
                    $tvValue = $f[1];
                    if ($f[1] == (integer)$f[1]) {
                        $tvValueField = "CAST({$tvValueField} AS SIGNED INTEGER)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS SIGNED INTEGER)";
                    } else {
                        $tvValueField = "CAST({$tvValueField} AS DECIMAL)";
                        $tvDefaultField = "CAST({$tvDefaultField} AS DECIMAL)";
                    }
                } else {
                    $tvValue = $modx->quote($f[1]);
                }
                if ($multiple) {
                    $filterGroup[] =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                } else {
                    $filterGroup =
                        "(EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.name = {$tvName} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id) " .
                        "OR EXISTS (SELECT 1 FROM {$tmplVarTbl} tv WHERE tv.name = {$tvName} AND {$tvDefaultField} {$sqlOperator} {$tvValue} AND tv.id NOT IN (SELECT tmplvarid FROM {$tmplVarResourceTbl} WHERE contentid = modResource.id)) " .
                        ")";
                }
            } elseif (count($f) == 1) {
                $tvValue = $modx->quote($f[0]);
                if ($multiple) {
                    $filterGroup[] = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                } else {
                    $filterGroup = "EXISTS (SELECT 1 FROM {$tmplVarResourceTbl} tvr JOIN {$tmplVarTbl} tv ON {$tvValueField} {$sqlOperator} {$tvValue} AND tv.id = tvr.tmplvarid WHERE tvr.contentid = modResource.id)";
                }
            }
        }
        $conditions[] = $filterGroup;
    }
    if (!empty($conditions)) {
        $firstGroup = true;
        foreach ($conditions as $cGroup => $c) {
            if (is_array($c)) {
                $first = true;
                foreach ($c as $cond) {
                    if ($first && !$firstGroup) {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_OR, null, $cGroup);
                    } else {
                        $criteria->condition($criteria->query[\'where\'][0][1], $cond, xPDOQuery::SQL_AND, null, $cGroup);
                    }
                    $first = false;
                }
            } else {
                $criteria->condition($criteria->query[\'where\'][0][1], $c, $firstGroup ? xPDOQuery::SQL_AND : xPDOQuery::SQL_OR, null, $cGroup);
            }
            $firstGroup = false;
        }
    }
}
/* include/exclude resources, via &resources=`123,-456` prop */
if (!empty($resources)) {
    $resourceConditions = array();
    $resources = explode(\',\',$resources);
    $include = array();
    $exclude = array();
    foreach ($resources as $resource) {
        $resource = (int)$resource;
        if ($resource == 0) continue;
        if ($resource < 0) {
            $exclude[] = abs($resource);
        } else {
            $include[] = $resource;
        }
    }
    if (!empty($include)) {
        $criteria->where(array(\'OR:modResource.id:IN\' => $include), xPDOQuery::SQL_OR);
    }
    if (!empty($exclude)) {
        $criteria->where(array(\'modResource.id:NOT IN\' => $exclude), xPDOQuery::SQL_AND, null, 1);
    }
}
if (!empty($where)) {
    $criteria->where($where);
}

$total = $modx->getCount(\'modResource\', $criteria);
$modx->setPlaceholder($totalVar, $total);

$fields = array_keys($modx->getFields(\'modResource\'));
if (empty($includeContent)) {
    $fields = array_diff($fields, array(\'content\'));
}
$columns = $includeContent ? $modx->getSelectColumns(\'modResource\', \'modResource\') : $modx->getSelectColumns(\'modResource\', \'modResource\', \'\', array(\'content\'), true);
$criteria->select($columns);
if (!empty($sortbyTV)) {
    $criteria->leftJoin(\'modTemplateVar\', \'tvDefault\', array(
        "tvDefault.name" => $sortbyTV
    ));
    $criteria->leftJoin(\'modTemplateVarResource\', \'tvSort\', array(
        "tvSort.contentid = modResource.id",
        "tvSort.tmplvarid = tvDefault.id"
    ));
    if (empty($sortbyTVType)) $sortbyTVType = \'string\';
    if ($modx->getOption(\'dbtype\') === \'mysql\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS SIGNED INTEGER) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(IFNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("IFNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    } elseif ($modx->getOption(\'dbtype\') === \'sqlsrv\') {
        switch ($sortbyTVType) {
            case \'integer\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS BIGINT) AS sortTV");
                break;
            case \'decimal\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DECIMAL) AS sortTV");
                break;
            case \'datetime\':
                $criteria->select("CAST(ISNULL(tvSort.value, tvDefault.default_text) AS DATETIME) AS sortTV");
                break;
            case \'string\':
            default:
                $criteria->select("ISNULL(tvSort.value, tvDefault.default_text) AS sortTV");
                break;
        }
    }
    $criteria->sortby("sortTV", $sortdirTV);
}
if (!empty($sortby)) {
    if (strpos($sortby, \'{\') === 0) {
        $sorts = $modx->fromJSON($sortby);
    } else {
        $sorts = array($sortby => $sortdir);
    }
    if (is_array($sorts)) {
        while (list($sort, $dir) = each($sorts)) {
            if ($sortbyEscaped) $sort = $modx->escape($sort);
            if (!empty($sortbyAlias)) $sort = $modx->escape($sortbyAlias) . ".{$sort}";
            $criteria->sortby($sort, $dir);
        }
    }
}
if (!empty($limit)) $criteria->limit($limit, $offset);

if (!empty($debug)) {
    $criteria->prepare();
    $modx->log(modX::LOG_LEVEL_ERROR, $criteria->toSQL());
}
$collection = $modx->getCollection(\'modResource\', $criteria, $dbCacheFlag);

$idx = !empty($idx) && $idx !== \'0\' ? (integer) $idx : 1;
$first = empty($first) && $first !== \'0\' ? 1 : (integer) $first;
$last = empty($last) ? (count($collection) + $idx - 1) : (integer) $last;

/* include parseTpl */
include_once $modx->getOption(\'getresources.core_path\',null,$modx->getOption(\'core_path\').\'components/getresources/\').\'include.parsetpl.php\';

$templateVars = array();
if (!empty($includeTVs) && !empty($includeTVList)) {
    $templateVars = $modx->getCollection(\'modTemplateVar\', array(\'name:IN\' => $includeTVList));
}
/** @var modResource $resource */
foreach ($collection as $resourceId => $resource) {
    $tvs = array();
    if (!empty($includeTVs)) {
        if (empty($includeTVList)) {
            $templateVars = $resource->getMany(\'TemplateVars\');
        }
        /** @var modTemplateVar $templateVar */
        foreach ($templateVars as $tvId => $templateVar) {
            if (!empty($includeTVList) && !in_array($templateVar->get(\'name\'), $includeTVList)) continue;
            if ($processTVs && (empty($processTVList) || in_array($templateVar->get(\'name\'), $processTVList))) {
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $templateVar->renderOutput($resource->get(\'id\'));
            } else {
                $value = $templateVar->getValue($resource->get(\'id\'));
                if ($prepareTVs && method_exists($templateVar, \'prepareOutput\') && (empty($prepareTVList) || in_array($templateVar->get(\'name\'), $prepareTVList))) {
                    $value = $templateVar->prepareOutput($value);
                }
                $tvs[$tvPrefix . $templateVar->get(\'name\')] = $value;
            }
        }
    }
    $odd = ($idx & 1);
    $properties = array_merge(
        $scriptProperties
        ,array(
            \'idx\' => $idx
            ,\'first\' => $first
            ,\'last\' => $last
            ,\'odd\' => $odd
        )
        ,$includeContent ? $resource->toArray() : $resource->get($fields)
        ,$tvs
    );
    $resourceTpl = \'\';
    if ($idx == $first && !empty($tplFirst)) {
        $resourceTpl = parseTpl($tplFirst, $properties);
    }
    if ($idx == $last && empty($resourceTpl) && !empty($tplLast)) {
        $resourceTpl = parseTpl($tplLast, $properties);
    }
    $tplidx = \'tpl_\' . $idx;
    if (empty($resourceTpl) && !empty($$tplidx)) {
        $resourceTpl = parseTpl($$tplidx, $properties);
    }
    if ($idx > 1 && empty($resourceTpl)) {
        $divisors = getDivisors($idx);
        if (!empty($divisors)) {
            foreach ($divisors as $divisor) {
                $tplnth = \'tpl_n\' . $divisor;
                if (!empty($$tplnth)) {
                    $resourceTpl = parseTpl($$tplnth, $properties);
                    if (!empty($resourceTpl)) {
                        break;
                    }
                }
            }
        }
    }
    if ($odd && empty($resourceTpl) && !empty($tplOdd)) {
        $resourceTpl = parseTpl($tplOdd, $properties);
    }
    if (!empty($tplCondition) && !empty($conditionalTpls) && empty($resourceTpl)) {
        $conTpls = $modx->fromJSON($conditionalTpls);
        $subject = $properties[$tplCondition];
        $tplOperator = !empty($tplOperator) ? $tplOperator : \'=\';
        $tplOperator = strtolower($tplOperator);
        $tplCon = \'\';
        foreach ($conTpls as $operand => $conditionalTpl) {
            switch ($tplOperator) {
                case \'!=\':
                case \'neq\':
                case \'not\':
                case \'isnot\':
                case \'isnt\':
                case \'unequal\':
                case \'notequal\':
                    $tplCon = (($subject != $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<\':
                case \'lt\':
                case \'less\':
                case \'lessthan\':
                    $tplCon = (($subject < $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>\':
                case \'gt\':
                case \'greater\':
                case \'greaterthan\':
                    $tplCon = (($subject > $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'<=\':
                case \'lte\':
                case \'lessthanequals\':
                case \'lessthanorequalto\':
                    $tplCon = (($subject <= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'>=\':
                case \'gte\':
                case \'greaterthanequals\':
                case \'greaterthanequalto\':
                    $tplCon = (($subject >= $operand) ? $conditionalTpl : $tplCon);
                    break;
                case \'isempty\':
                case \'empty\':
                    $tplCon = empty($subject) ? $conditionalTpl : $tplCon;
                    break;
                case \'!empty\':
                case \'notempty\':
                case \'isnotempty\':
                    $tplCon = !empty($subject) && $subject != \'\' ? $conditionalTpl : $tplCon;
                    break;
                case \'isnull\':
                case \'null\':
                    $tplCon = $subject == null || strtolower($subject) == \'null\' ? $conditionalTpl : $tplCon;
                    break;
                case \'inarray\':
                case \'in_array\':
                case \'ia\':
                    $operand = explode(\',\', $operand);
                    $tplCon = in_array($subject, $operand) ? $conditionalTpl : $tplCon;
                    break;
                case \'between\':
                case \'range\':
                case \'>=<\':
                case \'><\':
                    $operand = explode(\',\', $operand);
                    $tplCon = ($subject >= min($operand) && $subject <= max($operand)) ? $conditionalTpl : $tplCon;
                    break;
                case \'==\':
                case \'=\':
                case \'eq\':
                case \'is\':
                case \'equal\':
                case \'equals\':
                case \'equalto\':
                default:
                    $tplCon = (($subject == $operand) ? $conditionalTpl : $tplCon);
                    break;
            }
        }
        if (!empty($tplCon)) {
            $resourceTpl = parseTpl($tplCon, $properties);
        }
    }
    if (!empty($tpl) && empty($resourceTpl)) {
        $resourceTpl = parseTpl($tpl, $properties);
    }
    if (empty($resourceTpl)) {
        $chunk = $modx->newObject(\'modChunk\');
        $chunk->setCacheable(false);
        $output[]= $chunk->process(array(), \'<pre>\' . print_r($properties, true) .\'</pre>\');
    } else {
        $output[]= $resourceTpl;
    }
    $idx++;
}

/* output */
$toSeparatePlaceholders = $modx->getOption(\'toSeparatePlaceholders\',$scriptProperties,false);
if (!empty($toSeparatePlaceholders)) {
    $modx->setPlaceholders($output,$toSeparatePlaceholders);
    return \'\';
}

$output = implode($outputSeparator, $output);

$tplWrapper = $modx->getOption(\'tplWrapper\', $scriptProperties, false);
$wrapIfEmpty = $modx->getOption(\'wrapIfEmpty\', $scriptProperties, false);
if (!empty($tplWrapper) && ($wrapIfEmpty || !empty($output))) {
    $output = parseTpl($tplWrapper, array(\'output\' => $output));
}

$toPlaceholder = $modx->getOption(\'toPlaceholder\',$scriptProperties,false);
if (!empty($toPlaceholder)) {
    $modx->setPlaceholder($toPlaceholder,$output);
    return \'\';
}
return $output;',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'getUrlParam' => 
      array (
        'fields' => 
        array (
          'id' => 13,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'getUrlParam',
          'description' => '',
          'editor_type' => 0,
          'category' => 6,
          'cache_type' => 0,
          'snippet' => '/**
 *
 * getUrlParam
 *
 * A simple snippet to return a value passed through a URL parameter.
 *
 * @ author Paul Merchant
 * @ copyright 2010 Paul Merchant
 * @ version 1.0.0 - October 15, 2010
 * @ MIT License
 *
 * OPTIONS
 * name - The parameter name, defaults to p
 * int - (Opt) Set as true to only allow integer values
 * max - (Opt) The maximum length of the returned value, defaults to 20
 * default - (Opt) The value returned if no URL parameter is found
 *
 * Example: [[getUrlParam? &name=`pageid` &int=`1`]]
 *
**/

// set defaults
$name = $modx->getOption(\'name\',$scriptProperties,\'p\');
$int = $modx->getOption(\'int\',$scriptProperties,false);
$max = $modx->getOption(\'max\',$scriptProperties,20);
$output = $modx->getOption(\'default\',$scriptProperties,\'\');

// get the sanitized value if there is one
if (isset($_GET[$name])) {
    if ($int) {
        $value = intval($_GET[$name]);
    } else {
        if (strlen($_GET[$name]) > $max) {
            $value = filter_var(substr($_GET[$name],0,$max), FILTER_SANITIZE_STRING);
        } else {
            $value = filter_var($_GET[$name], FILTER_SANITIZE_STRING);
        }
    }
    $output = $value;
}

return $output;',
          'locked' => false,
          'properties' => 
          array (
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 *
 * getUrlParam
 *
 * A simple snippet to return a value passed through a URL parameter.
 *
 * @ author Paul Merchant
 * @ copyright 2010 Paul Merchant
 * @ version 1.0.0 - October 15, 2010
 * @ MIT License
 *
 * OPTIONS
 * name - The parameter name, defaults to p
 * int - (Opt) Set as true to only allow integer values
 * max - (Opt) The maximum length of the returned value, defaults to 20
 * default - (Opt) The value returned if no URL parameter is found
 *
 * Example: [[getUrlParam? &name=`pageid` &int=`1`]]
 *
**/

// set defaults
$name = $modx->getOption(\'name\',$scriptProperties,\'p\');
$int = $modx->getOption(\'int\',$scriptProperties,false);
$max = $modx->getOption(\'max\',$scriptProperties,20);
$output = $modx->getOption(\'default\',$scriptProperties,\'\');

// get the sanitized value if there is one
if (isset($_GET[$name])) {
    if ($int) {
        $value = intval($_GET[$name]);
    } else {
        if (strlen($_GET[$name]) > $max) {
            $value = filter_var(substr($_GET[$name],0,$max), FILTER_SANITIZE_STRING);
        } else {
            $value = filter_var($_GET[$name], FILTER_SANITIZE_STRING);
        }
    }
    $output = $value;
}

return $output;',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'FormIt' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormIt',
          'description' => 'A dynamic form processing snippet.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
          'locked' => false,
          'properties' => 
          array (
            'hooks' => 
            array (
              'name' => 'hooks',
              'desc' => 'prop_formit.hooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, after the form passes validation. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'preHooks' => 
            array (
              'name' => 'preHooks',
              'desc' => 'prop_formit.prehooks_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'What scripts to fire, if any, once the form loads. You can pre-set form fields via $scriptProperties[`hook`]->fields[`fieldname`]. This can be a comma-separated list of hooks, and if the first fails, the proceeding ones will not fire. A hook can also be a Snippet name that will execute that Snippet.',
              'area_trans' => '',
            ),
            'submitVar' => 
            array (
              'name' => 'submitVar',
              'desc' => 'prop_formit.submitvar_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set, will not begin form processing if this POST variable is not passed.',
              'area_trans' => '',
            ),
            'validate' => 
            array (
              'name' => 'validate',
              'desc' => 'prop_formit.validate_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of fields to validate, with each field name as name:validator (eg: username:required,email:required). Validators can also be chained, like email:email:required. This property can be specified on multiple lines.',
              'area_trans' => '',
            ),
            'errTpl' => 
            array (
              'name' => 'errTpl',
              'desc' => 'prop_formit.errtpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<span class="error">[[+error]]</span>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The wrapper template for error messages.',
              'area_trans' => '',
            ),
            'validationErrorMessage' => 
            array (
              'name' => 'validationErrorMessage',
              'desc' => 'prop_formit.validationerrormessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<p class="error">A form validation error occurred. Please check the values you have entered.</p>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A general error message to set to a placeholder if validation fails. Can contain [[+errors]] if you want to display a list of all errors at the top.',
              'area_trans' => '',
            ),
            'validationErrorBulkTpl' => 
            array (
              'name' => 'validationErrorBulkTpl',
              'desc' => 'prop_formit.validationerrorbulktpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '<li>[[+error]]</li>',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'HTML tpl that is used for each individual error in the generic validation error message value.',
              'area_trans' => '',
            ),
            'trimValuesBeforeValidation' => 
            array (
              'name' => 'trimValuesBeforeValidation',
              'desc' => 'prop_formit.trimvaluesdeforevalidation_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Whether or not to trim spaces from the beginning and end of values before attempting validation. Defaults to true.',
              'area_trans' => '',
            ),
            'customValidators' => 
            array (
              'name' => 'customValidators',
              'desc' => 'prop_formit.customvalidators_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A comma-separated list of custom validator names (snippets) you plan to use in this form. They must be explicitly stated here, or they will not be run.',
              'area_trans' => '',
            ),
            'clearFieldsOnSuccess' => 
            array (
              'name' => 'clearFieldsOnSuccess',
              'desc' => 'prop_formit.clearfieldsonsuccess_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true, will clear the fields on a successful form submission that does not redirect.',
              'area_trans' => '',
            ),
            'successMessage' => 
            array (
              'name' => 'successMessage',
              'desc' => 'prop_formit.successmessage_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set, will set this a placeholder with the name of the value of the property &successMessagePlaceholder, which defaults to `fi.successMessage`.',
              'area_trans' => '',
            ),
            'successMessagePlaceholder' => 
            array (
              'name' => 'successMessagePlaceholder',
              'desc' => 'prop_formit.successmessageplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.successMessage',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The placeholder to set the success message to.',
              'area_trans' => '',
            ),
            'store' => 
            array (
              'name' => 'store',
              'desc' => 'prop_formit.store_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true, will store the data in the cache for retrieval using the FormItRetriever snippet.',
              'area_trans' => '',
            ),
            'placeholderPrefix' => 
            array (
              'name' => 'placeholderPrefix',
              'desc' => 'prop_formit.placeholderprefix_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'fi.',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The prefix to use for all placeholders set by FormIt for fields. Defaults to `fi.`',
              'area_trans' => '',
            ),
            'storeTime' => 
            array (
              'name' => 'storeTime',
              'desc' => 'prop_formit.storetime_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 300,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `store` is set to true, this specifies the number of seconds to store the data from the form submission. Defaults to five minutes.',
              'area_trans' => '',
            ),
            'allowFiles' => 
            array (
              'name' => 'allowFiles',
              'desc' => 'prop_formit.allowfiles_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If set to 0, will prevent files from being submitted on the form.',
              'area_trans' => '',
            ),
            'spamEmailFields' => 
            array (
              'name' => 'spamEmailFields',
              'desc' => 'prop_formit.spamemailfields_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `spam` is set as a hook, a comma-separated list of fields containing emails to check spam against.',
              'area_trans' => '',
            ),
            'spamCheckIp' => 
            array (
              'name' => 'spamCheckIp',
              'desc' => 'prop_formit.spamcheckip_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `spam` is set as a hook, and this is true, will check the IP as well.',
              'area_trans' => '',
            ),
            'recaptchaJs' => 
            array (
              'name' => 'recaptchaJs',
              'desc' => 'prop_formit.recaptchajs_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '{}',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a hook, this can be a JSON object that will be set to the JS RecaptchaOptions variable, which configures options for reCaptcha.',
              'area_trans' => '',
            ),
            'recaptchaTheme' => 
            array (
              'name' => 'recaptchaTheme',
              'desc' => 'prop_formit.recaptchatheme_desc',
              'type' => 'list',
              'options' => 
              array (
                0 => 
                array (
                  'text' => 'formit.opt_red',
                  'value' => 'red',
                  'name' => 'Red',
                ),
                1 => 
                array (
                  'text' => 'formit.opt_white',
                  'value' => 'white',
                  'name' => 'White',
                ),
                2 => 
                array (
                  'text' => 'formit.opt_clean',
                  'value' => 'clean',
                  'name' => 'Clean',
                ),
                3 => 
                array (
                  'text' => 'formit.opt_blackglass',
                  'value' => 'blackglass',
                  'name' => 'Black Glass',
                ),
              ),
              'value' => 'clean',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `recaptcha` is set as a hook, this will select a theme for the reCaptcha widget.',
              'area_trans' => '',
            ),
            'redirectTo' => 
            array (
              'name' => 'redirectTo',
              'desc' => 'prop_formit.redirectto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `redirect` is set as a hook, this must specify the Resource ID to redirect to.',
              'area_trans' => '',
            ),
            'redirectParams' => 
            array (
              'name' => 'redirectParams',
              'desc' => 'prop_formit.redirectparams_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'A JSON array of parameters to pass to the redirect hook that will be passed when redirecting.',
              'area_trans' => '',
            ),
            'emailTo' => 
            array (
              'name' => 'emailTo',
              'desc' => 'prop_formit.emailto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailToName' => 
            array (
              'name' => 'emailToName',
              'desc' => 'prop_formit.emailtoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailTo` property.',
              'area_trans' => '',
            ),
            'emailFrom' => 
            array (
              'name' => 'emailFrom',
              'desc' => 'prop_formit.emailfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the From: address for the email. If not set, will first look for an `email` form field. If none is found, will default to the `emailsender` system setting.',
              'area_trans' => '',
            ),
            'emailFromName' => 
            array (
              'name' => 'emailFromName',
              'desc' => 'prop_formit.emailfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the From: name for the email.',
              'area_trans' => '',
            ),
            'emailReplyTo' => 
            array (
              'name' => 'emailReplyTo',
              'desc' => 'prop_formit.emailreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Reply-To: address for the email.',
              'area_trans' => '',
            ),
            'emailReplyToName' => 
            array (
              'name' => 'emailReplyToName',
              'desc' => 'prop_formit.emailreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, and this is set, will specify the Reply-To: name for the email.',
              'area_trans' => '',
            ),
            'emailCC' => 
            array (
              'name' => 'emailCC',
              'desc' => 'prop_formit.emailcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to as a CC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailCCName' => 
            array (
              'name' => 'emailCCName',
              'desc' => 'prop_formit.emailccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailCC` property.',
              'area_trans' => '',
            ),
            'emailBCC' => 
            array (
              'name' => 'emailBCC',
              'desc' => 'prop_formit.emailbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, then this specifies the email(s) to send the email to as a BCC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'emailBCCName' => 
            array (
              'name' => 'emailBCCName',
              'desc' => 'prop_formit.emailbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailBCC` property.',
              'area_trans' => '',
            ),
            'emailSubject' => 
            array (
              'name' => 'emailSubject',
              'desc' => 'prop_formit.emailsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `email` is set as a hook, this is required as a subject line for the email.',
              'area_trans' => '',
            ),
            'emailUseFieldForSubject' => 
            array (
              'name' => 'emailUseFieldForSubject',
              'desc' => 'prop_formit.emailusefieldforsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If the field `subject` is passed into the form, if this is true, it will use the field content for the subject line of the email.',
              'area_trans' => '',
            ),
            'emailHtml' => 
            array (
              'name' => 'emailHtml',
              'desc' => 'prop_formit.emailhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `email` is set as a hook, this toggles HTML emails or not. Defaults to true.',
              'area_trans' => '',
            ),
            'emailConvertNewlines' => 
            array (
              'name' => 'emailConvertNewlines',
              'desc' => 'prop_formit.emailconvertnewlines_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => false,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If true and emailHtml is set to 1, will convert newlines to BR tags in the email.',
              'area_trans' => '',
            ),
            'emailMultiWrapper' => 
            array (
              'name' => 'emailMultiWrapper',
              'desc' => 'prop_formit.emailmultiwrapper_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[+value]]',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Will wrap each item in a collection of fields sent via checkboxes/multi-selects. Defaults to just the value.',
              'area_trans' => '',
            ),
            'emailMultiSeparator' => 
            array (
              'name' => 'emailMultiSeparator',
              'desc' => 'prop_formit.emailmultiseparator_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_formit.emailmultiseparator_desc',
              'area_trans' => '',
            ),
            'fiarTpl' => 
            array (
              'name' => 'fiarTpl',
              'desc' => 'prop_fiar.fiartpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies auto-response template to send as the email.',
              'area_trans' => '',
            ),
            'fiarToField' => 
            array (
              'name' => 'fiarToField',
              'desc' => 'prop_fiar.fiartofield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'email',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies which form field shall be used for the To: address in the auto-response email.',
              'area_trans' => '',
            ),
            'fiarSubject' => 
            array (
              'name' => 'fiarSubject',
              'desc' => 'prop_fiar.fiarsubject_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '[[++site_name]] Auto-Responder',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, this is required as a subject line for the email.',
              'area_trans' => '',
            ),
            'fiarFrom' => 
            array (
              'name' => 'fiarFrom',
              'desc' => 'prop_fiar.fiarfrom_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the From: address for the email. If not set, will first look for an `email` form field. If none is found, will default to the `emailsender` system setting.',
              'area_trans' => '',
            ),
            'fiarFromName' => 
            array (
              'name' => 'fiarFromName',
              'desc' => 'prop_fiar.fiarfromname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the From: name for the email.',
              'area_trans' => '',
            ),
            'fiarReplyTo' => 
            array (
              'name' => 'fiarReplyTo',
              'desc' => 'prop_fiar.fiarreplyto_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the Reply-To: address for the email.',
              'area_trans' => '',
            ),
            'fiarReplyToName' => 
            array (
              'name' => 'fiarReplyToName',
              'desc' => 'prop_fiar.fiarreplytoname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, and this is set, will specify the Reply-To: name for the email.',
              'area_trans' => '',
            ),
            'fiarCC' => 
            array (
              'name' => 'fiarCC',
              'desc' => 'prop_fiar.fiarcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies the email(s) to send the email to as a CC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'fiarCCName' => 
            array (
              'name' => 'fiarCCName',
              'desc' => 'prop_fiar.fiarccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailCC` property.',
              'area_trans' => '',
            ),
            'fiarBCC' => 
            array (
              'name' => 'fiarBCC',
              'desc' => 'prop_fiar.fiarbcc_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `FormItAutoResponder` is set as a hook, then this specifies the email(s) to send the email to as a BCC. Can be a comma-separated list of email addresses.',
              'area_trans' => '',
            ),
            'fiarBCCName' => 
            array (
              'name' => 'fiarBCCName',
              'desc' => 'prop_fiar.fiarbccname_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, then this must be a parallel list of comma-separated names for the email addresses specified in the `emailBCC` property.',
              'area_trans' => '',
            ),
            'fiarHtml' => 
            array (
              'name' => 'fiarHtml',
              'desc' => 'prop_fiar.fiarhtml_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If `FormItAutoResponder` is set as a hook, this toggles HTML emails or not. Defaults to true.',
              'area_trans' => '',
            ),
            'mathMinRange' => 
            array (
              'name' => 'mathMinRange',
              'desc' => 'prop_math.mathminrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 10,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the minimum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathMaxRange' => 
            array (
              'name' => 'mathMaxRange',
              'desc' => 'prop_math.mathmaxrange_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 100,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the maximum range for each number in the equation.',
              'area_trans' => '',
            ),
            'mathField' => 
            array (
              'name' => 'mathField',
              'desc' => 'prop_math.mathfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'math',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the input field for the answer.',
              'area_trans' => '',
            ),
            'mathOp1Field' => 
            array (
              'name' => 'mathOp1Field',
              'desc' => 'prop_math.mathop1field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op1',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the field for the 1st number in the equation.',
              'area_trans' => '',
            ),
            'mathOp2Field' => 
            array (
              'name' => 'mathOp2Field',
              'desc' => 'prop_math.mathop2field_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'op2',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the field for the 2nd number in the equation.',
              'area_trans' => '',
            ),
            'mathOperatorField' => 
            array (
              'name' => 'mathOperatorField',
              'desc' => 'prop_math.mathoperatorfield_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'operator',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If `math` is set as a hook, the name of the field for the operator in the equation.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * FormIt
 *
 * A dynamic form processing Snippet for MODx Revolution.
 *
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\',null,MODX_CORE_PATH).\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);
$fi->initialize($modx->context->get(\'key\'));
$fi->loadRequest();

$fields = $fi->request->prepare();
return $fi->request->handle($fields);',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'FormItStateOptions' => 
      array (
        'fields' => 
        array (
          'id' => 10,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormItStateOptions',
          'description' => 'A utility snippet for generating a dropdown list of U.S. states.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Automatically generates and outputs a U.S. state list for usage in forms
 * 
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\').\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);

/** @var fiCountryOptions $co */
$co = $fi->loadModule(\'fiStateOptions\',\'stateOptions\',$scriptProperties);
$co->initialize();
$co->getData();
$co->iterate();
return $co->output();',
          'locked' => false,
          'properties' => 
          array (
            'selected' => 
            array (
              'name' => 'selected',
              'desc' => 'prop_fiso.selected_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The country value to select.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_fiso.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'option',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. The chunk to use for each country dropdown option.',
              'area_trans' => '',
            ),
            'useAbbr' => 
            array (
              'name' => 'useAbbr',
              'desc' => 'prop_fiso.useabbr_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If 1, will use the state abbreviation for the value. If 0, will use the full state name.',
              'area_trans' => '',
            ),
            'selectedAttribute' => 
            array (
              'name' => 'selectedAttribute',
              'desc' => 'prop_fiso.selectedattribute_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' selected="selected"',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. The HTML attribute to add to a selected country.',
              'area_trans' => '',
            ),
            'country' => 
            array (
              'name' => 'country',
              'desc' => 'prop_fiso.country_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'us',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. Set to use a different states file when loading a list of states.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_fiso.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. Use this to set the output to a placeholder instead of outputting directly.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Automatically generates and outputs a U.S. state list for usage in forms
 * 
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\').\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);

/** @var fiCountryOptions $co */
$co = $fi->loadModule(\'fiStateOptions\',\'stateOptions\',$scriptProperties);
$co->initialize();
$co->getData();
$co->iterate();
return $co->output();',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'FormItCountryOptions' => 
      array (
        'fields' => 
        array (
          'id' => 9,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormItCountryOptions',
          'description' => 'A utility snippet for generating a dropdown list of countries.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Automatically generates and outputs a country list for usage in forms
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\').\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);

/** @var fiCountryOptions $co */
$co = $fi->loadModule(\'fiCountryOptions\',\'countryOptions\',$scriptProperties);
$co->initialize();
$co->getData();
$co->loadPrioritized();
$co->iterate();
return $co->output();',
          'locked' => false,
          'properties' => 
          array (
            'selected' => 
            array (
              'name' => 'selected',
              'desc' => 'prop_fico.selected_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'The country value to select.',
              'area_trans' => '',
            ),
            'tpl' => 
            array (
              'name' => 'tpl',
              'desc' => 'prop_fico.tpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'option',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. The chunk to use for each country dropdown option.',
              'area_trans' => '',
            ),
            'useIsoCode' => 
            array (
              'name' => 'useIsoCode',
              'desc' => 'prop_fico.useisocode_desc',
              'type' => 'combo-boolean',
              'options' => '',
              'value' => true,
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'If 1, will use the ISO country code for the value. If 0, will use the country name.',
              'area_trans' => '',
            ),
            'prioritized' => 
            array (
              'name' => 'prioritized',
              'desc' => 'prop_fico.prioritized_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. A comma-separated list of ISO codes for countries that will move them into a prioritized "Frequent Visitors" group at the top of the dropdown. This can be used for your commonly-selected countries.',
              'area_trans' => '',
            ),
            'optGroupTpl' => 
            array (
              'name' => 'optGroupTpl',
              'desc' => 'prop_fico.optgrouptpl_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => 'optgroup',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'prop_fico.optgrouptpl_desc',
              'area_trans' => '',
            ),
            'prioritizedGroupText' => 
            array (
              'name' => 'prioritizedGroupText',
              'desc' => 'prop_fico.prioritizedgrouptext_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set and &prioritized is in use, will be the text label for the prioritized option group.',
              'area_trans' => '',
            ),
            'allGroupText' => 
            array (
              'name' => 'allGroupText',
              'desc' => 'prop_fico.allgrouptext_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. If set and &prioritized is in use, will be the text label for the all other countries option group.',
              'area_trans' => '',
            ),
            'selectedAttribute' => 
            array (
              'name' => 'selectedAttribute',
              'desc' => 'prop_fico.selectedattribute_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => ' selected="selected"',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. The HTML attribute to add to a selected country.',
              'area_trans' => '',
            ),
            'toPlaceholder' => 
            array (
              'name' => 'toPlaceholder',
              'desc' => 'prop_fico.toplaceholder_desc',
              'type' => 'textfield',
              'options' => '',
              'value' => '',
              'lexicon' => 'formit:properties',
              'area' => '',
              'desc_trans' => 'Optional. Use this to set the output to a placeholder instead of outputting directly.',
              'area_trans' => '',
            ),
          ),
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Automatically generates and outputs a country list for usage in forms
 *
 * @var modX $modx
 * @var array $scriptProperties
 * @package formit
 */
require_once $modx->getOption(\'formit.core_path\',null,$modx->getOption(\'core_path\').\'components/formit/\').\'model/formit/formit.class.php\';
$fi = new FormIt($modx,$scriptProperties);

/** @var fiCountryOptions $co */
$co = $fi->loadModule(\'fiCountryOptions\',\'countryOptions\',$scriptProperties);
$co->initialize();
$co->getData();
$co->loadPrioritized();
$co->iterate();
return $co->output();',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
      'FormItIsChecked' => 
      array (
        'fields' => 
        array (
          'id' => 7,
          'source' => 0,
          'property_preprocess' => false,
          'name' => 'FormItIsChecked',
          'description' => 'A custom output filter used with checkboxes/radios for checking checked status.',
          'editor_type' => 0,
          'category' => 1,
          'cache_type' => 0,
          'snippet' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' checked="checked"\';
}
$input = $modx->fromJSON($input);
if (in_array($options,$input)) {
  $output = \' checked="checked"\';
}
return $output;',
          'locked' => false,
          'properties' => NULL,
          'moduleguid' => '',
          'static' => false,
          'static_file' => '',
          'content' => '/**
 * FormIt
 *
 * Copyright 2009-2012 by Shaun McCormick <shaun@modx.com>
 *
 * FormIt is free software; you can redistribute it and/or modify it
 * under the terms of the GNU General Public License as published by the Free
 * Software Foundation; either version 2 of the License, or (at your option) any
 * later version.
 *
 * FormIt is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * FormIt; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 *
 * @package formit
 */
/**
 * Custom output filter that returns checked="checked" if the value is set
 *
 * @var string $input
 * @var string $options
 * @package formit
 */
$output = \' \';
if ($input == $options) {
    $output = \' checked="checked"\';
}
$input = $modx->fromJSON($input);
if (in_array($options,$input)) {
  $output = \' checked="checked"\';
}
return $output;',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
        ),
      ),
    ),
    'modTemplateVar' => 
    array (
      'analyticsLabel' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'type' => 'text',
          'name' => 'analyticsLabel',
          'caption' => 'Unique code for analytics',
          'description' => '',
          'editor_type' => 0,
          'category' => 4,
          'locked' => false,
          'elements' => '',
          'rank' => 0,
          'display' => 'default',
          'default_text' => '',
          'properties' => 
          array (
          ),
          'input_properties' => 
          array (
            'allowBlank' => 'true',
            'maxLength' => '',
            'minLength' => '',
          ),
          'output_properties' => 
          array (
          ),
          'static' => false,
          'static_file' => '',
          'content' => '',
        ),
        'policies' => 
        array (
          'LoyolaBusinessLaw' => 
          array (
          ),
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
  ),
);