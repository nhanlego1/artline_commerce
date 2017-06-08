<?php print $doctype; ?>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf->version . $rdf->namespaces; ?>>
<head<?php print $rdf->profile; ?>>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  
  <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link rel="stylesheet" type="text/css" media="all" href="<?php print base_path().path_to_theme('store') ?>/CherryFramework/boostrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php print base_path().path_to_theme('store') ?>/CherryFramework/boostrap/css/responsive.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php print base_path().path_to_theme('store') ?>/CherryFramework/boostrap/css/camera.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php print base_path().path_to_theme('store') ?>/CherryFramework/css/style.css" />
	<style type="text/css">
		
		body { background-image:url(<?php print base_path().path_to_theme('store') ?>/images/main-bg.jpg); background-repeat:repeat; background-position:top center;  background-attachment:scroll; }body { background-color:#F1EEE8}		
		.header {background-color:#ffffff}	</style>

<link rel='stylesheet' id='jigoshop_theme_styles-css'  href='<?php print base_path().path_to_theme('store') ?>/css/frontend.css?ver=3.6' type='text/css' media='all' />
<link rel='stylesheet' id='prettyphoto_styles-css'  href='<?php print base_path().path_to_theme('store') ?>/CherryFramework/css/prettyPhoto.css?ver=3.6' type='text/css' media='all' />
<link rel='stylesheet' id='jqueryui_styles-css'  href='<?php print base_path().path_to_theme('store') ?>/CherryFramework/css/ui.css?ver=3.6' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='<?php print base_path().path_to_theme('store') ?>/CherryFramework/css/styles.css?ver=3.4' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css?ver=3.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='<?php print base_path().path_to_theme('store') ?>/css/magnific-popup.css?ver=0.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='options_typography_Open+Sans-css'  href='https://fonts.googleapis.com/css?family=Open+Sans&#038;subset=latin' type='text/css' media='all' />
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.prettyPhoto.js?ver=1.4.15'></script>
<!--<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/js/blockui.js?ver=3.6'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/js/jigoshop_frontend.js?ver=3.6'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/js/script.js?ver=3.6'></script>-->
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/modernizr.js?ver=2.0.6'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.elastislide.js?ver=1.0'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jflickrfeed.js?ver=1.0'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/custom.js?ver=1.0'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/boostrap/js/bootstrap.min.js?ver=2.3.0'></script>
<style type='text/css'>
h1 { font: normal 24px/28px Open Sans;  color:#181818; }
h2 { font: normal 20px/24px Open Sans;  color:#181818; }
h3 { font: bold 17px/20px Open Sans;  color:#181818; }
h4 { font: bold 16px/20px Open Sans;  color:#181818; }
h5 { font: bold 14px/20px Open Sans;  color:#181818; }
h6 { font: normal 14px/20px Open Sans;  color:#181818; }
.main-holder { font: normal 14px/20px Arial, Helvetica, sans-serif;  color:#787878; }
.logo_h__txt, .logo_link { font: normal 60px/64px Open Sans;  color:#191919; }
.sf-menu > li > a { font: bold 17px/53px Open Sans;  color:#ffffff; }
.nav.footer-nav a { font: normal 14px/20px Arial, Helvetica, sans-serif;  color:#181818; }
</style>
<script type="text/javascript">
		// Init navigation menu
		jQuery(function(){
		// main navigation init
			jQuery('ul.sf-menu').superfish({
				delay: 1000, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing
				animation: {
					opacity: "show",
					height: "show"
				}, // used to animate the sub-menu open
				speed: "normal", // animation speed 
				autoArrows: false, // generation of arrow mark-up (for submenu)
				disableHI: true // to disable hoverIntent detection
			});

		//Zoom fix
		//IPad/IPhone
			var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
				ua = navigator.userAgent,
				gestureStart = function () {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
				},
				scaleFix = function () {
					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
						document.addEventListener("gesturestart", gestureStart, false);
					}
				};
			scaleFix();
		})
	</script>

</head>
<body<?php print $attributes;?> data="<?php print artline_color_key(); ?>">
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1519883851593966";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
 <script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/scripts.js?ver=3.4'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/superfish.js?ver=1.5.3'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.mobilemenu.js?ver=1.0'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.easing.1.3.js?ver=1.3'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.magnific-popup.min.js?ver=0.9.3'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.flexslider.js?ver=2.1'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/camera.min.js?ver=1.3.4'></script>
<!--<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/custom-script.js?ver=1.0'></script>-->
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.ui.mouse.min.js?ver=1.10.3'></script>
<script type='text/javascript' src='<?php print base_path().path_to_theme('store') ?>/CherryFramework/js/jquery.ui.slider.min.js?ver=1.10.3'></script>
</body>
</html>
