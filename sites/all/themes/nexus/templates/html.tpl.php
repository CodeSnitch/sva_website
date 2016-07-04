<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>>
<head>
    <meta name="viewport" content="width=device-width" />
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>
<script type="text/javascript">
	jQuery(document).ready(function(){
		var $edit_subscribe = jQuery('#edit-subscribe');
		var $edit_unsubscribe = jQuery('#edit-unsubscribe');
		$edit_unsubscribe.remove();		
		jQuery('.form-item-mail').append($edit_subscribe);
		jQuery('label[for="edit-mail"]').remove();
		jQuery('#edit-mail').attr('placeholder','Your email address');


		jQuery('#main-menu #top-menu a').each(function(){
			var elementUrl = jQuery(this).attr('href');
			var pathArray = window.location.pathname.split( '/' );
			if(pathArray[2].length > 0 && elementUrl.indexOf(pathArray[2]) > -1 ){
				jQuery(this).parent().addClass('active');
			}
		});	
		jQuery(".field-name-field-licenses").detach().appendTo('#membership-form')
		jQuery(".mphoto-gallery a").fancybox();
		jQuery("a[href*='/user/login'], a[href*='?q=user/login']").fancybox();
});
</script>
<script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js'; ?>"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/jquery.fancybox.css?v=2.1.5'; ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5'; ?>"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5'; ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5'; ?>"></script>
<script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6'; ?>"></script>

<link rel="stylesheet" href="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7'; ?>" type="text/css" media="screen" />
<script type="text/javascript" src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7'; ?>"></script>
<!--[if lt IE 9]><script src="<?php print base_path() . drupal_get_path('theme', 'nexus') . '/js/html5.js'; ?>"></script><![endif]-->
</head>
<body class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
