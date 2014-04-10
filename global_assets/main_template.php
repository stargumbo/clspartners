<!doctype html>
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>[[$head-content]]</head>
<body class="id-[[*id]] [[*context_key]]">
	[[*context_key:is=`TulsaEnergyLaw`:then=`[[!$analytics-tulsa]]`]]
	[[*context_key:is=`LoyolaHealthLaw`:then=`[[!$analytics-healthlaw]]`]]
	[[++site_background]]

	<div id="masthead">
		<div class="position">[[++masthead_content]]</div>
	</div>
	<div id="header">[[++header_contents]]</div>
	<div id="nav"><ul>[[++site_nav]]</ul></div>

	<div id="announcements">
		<a href="[[!++announcement_url]]" target="_blank" />[[!++announcement_message]]</a>
	</div>

	<div class="row">
		<div id="form-wrapper" class="[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]">[[++contact_form]]</div>
		<div id="content" class="[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]">
			[[*content]]
			<a href="[[++bottom_cta]]" target="_blank" style="display:block;text-decoration:none;">
				<div id="virtual-session">
					<div id="virtual-copy"><p>[[*context_key:is=`TulsaEnergyLaw`:then=`Register for our Next Informational Webinar`:else=`Register for our next Online Virtual Information Session.`]]<br /><span class="[[*context_key:is=`LoyolaHealthLaw`:then=`georgia gold`:else=``]]"><em>Click here for more information</em></span></p></div>
					<div id="virtual-arrow"><img width="21" height="34" alt="Arrow" src="[[++site_url]]global_assets/img/arrow.png" /></div>
				</div>
			</a>
		</div>
	</div>

	<a href="javascript:void(0);" id="mobile-form" class="[[*pagetitle:is=`Thank You!`:then=`thanks-page`]]">Request More Information</a>

	[[*context_key:is=`TulsaEnergyLaw`:then=`[[$footer_tulsa]]`]]
	[[$footer-scripts]]
	[[*context_key:is=`LoyolaHealthLaw`:then=`[[*pagetitle:is=`Thank You!`:then=`[[$pixel_conversion]]`:else=`[[$pixel_retargeting]]`]]`:else``]]
</body>
</html>