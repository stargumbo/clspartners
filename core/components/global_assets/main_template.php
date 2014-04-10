<!doctype html>
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>[[$head-content]]</head>
<body>
	<img src="[[++site_url]]global_assets/img/bck.jpg" class="bg">
	<div id="masthead">
		<div class="position"><a href="http://www.luc.edu/law/"><img src="[[++site_url]]global_assets/img/logo-masthead.jpg" alt="Loyola Chicago School of Law" /></a></div>
	</div>
	<div id="header">
		<div class="header-text"><a href="http://www.luc.edu/law/">Loyola University Chicago | School Of Law</a></div>
		<div class="school"><a href="[[~2]]">Beazley Institute For Health Law and Policy</a></div>
	</div>


	<!-- <div id="nav"><ul>[[!getResources? &parents=`7` &resources=`-2,-8` &tpl=`menuItem`]]</ul></div> -->

	
	<div id="nav">[[Wayfinder? &startId=`7` &level=`1` &excludeDocs=`2,8` &rowTpl=`wf_menuItem`]]</div>
	
	<div id="announcements"><img src="[[++site_url]]global_assets/img/announcements.png" target="_blank" alt="announcements" /><a href="[[!$AnnouncementURL]]" target="_blank" />[[!$AnnouncementMessage]]</a></div>
	<div class="row">
		<div id="form-wrapper" class="[[*id:is=`8`:then=`thanks-page`]]">[[$contactForm]]</div>
		<div id="content" class="[[*id:is=`8`:then=`thanks-page`]]">
			[[*content]]
			<a href="http://luc.edu/law/centers/healthlaw/about/vis.html" target="_blank" style="display:block;text-decoration:none;">
				<div id="virtual-session">
					<div id="virtual-copy"><p>Register for our next Online Virtual Information Session.<br /><span class="georgia gold"><em>Click here for more information</em></span></p></div>
					<div id="virtual-arrow"><img width="21" height="34" alt="Arrow" src="[[++site_url]]global_assets/img/arrow.jpg" /></div>
				</div>
			</a>
		</div>
	</div>
	<a href="javascript:void(0);" id="mobile-form" class="[[*id:is=`8`:then=`thanks-page`]]">Request More Information</a>
	[[$footer-scripts]]
[[If?
    &subject=`[[*id]]`
    &operator=`is`
	&operand=`8`
    &then=`[[$pixel_conversion]]`
    &else=`[[$pixel_retargeting]]`
]]
[[$analytics-healthlaw]]
</body>
</html>