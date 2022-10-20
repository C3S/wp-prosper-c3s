<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php bloginfo('language'); ?>">

<head profile="http://gmpg.org/xfn/11">

<meta name="flattr:id" content="wexzv5">

<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width" />

<title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link rel="apple-touch-icon" sizes="57x57" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/wp-prosper-c3s/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="/wp-content/themes/wp-prosper-c3s/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="/wp-content/themes/wp-prosper-c3s/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/wp-content/themes/wp-prosper-c3s/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/wp-content/themes/wp-prosper-c3s/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/wp-content/themes/wp-prosper-c3s/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#00a300">
<meta name="msapplication-TileImage" content="/wp-content/themes/wp-prosper-c3s/mstile-144x144.png">

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="body-bg"></div>

<div id="topnav">
	<div class="limit clearfix">
		<?php if (has_nav_menu('topnav')) { ?>
			<ul class="clearfix">
				<?php wp_nav_menu(array('container'=>false,'theme_location'=>'topnav','fallback_cb'=>'nav_fallback','items_wrap'=>'%3$s')); ?>
				<li class="searchform"><?php get_search_form(); ?></li>
			</ul>
		<?php } else { ?>
			<ul>
				<li id="home"<?php if (is_front_page()) { echo " class=\"current_page_item\""; } ?>><a href="<?php bloginfo('url'); ?>"><?php _e("Home", "solostream"); ?></a></li>
				<?php wp_list_pages('title_li='); ?>
				<li class="searchform"><?php get_search_form(); ?></li>
			</ul>
		<?php } ?>
	</div>
</div>

<div id="header">
	<div id="head-content" class="clearfix">
		<?php if ( get_option('solostream_site_title_option') == 'Image/Logo-Type Title' && get_option('solostream_site_logo_url') ) { ?>
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo get_option('solostream_site_logo_url'); ?>" alt="<?php bloginfo('name'); ?>" /></a>
			</div>
		<?php } else { ?>
			<div id="sitetitle">
				<div class="title"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div> 
				<div class="description"><?php bloginfo('description'); ?></div>
			</div>
		<?php } ?>
		<?php include (TEMPLATEPATH . '/banner468head.php'); ?>
	</div>
</div>

<div id="outer-wrap">

	<?php if ( get_option('solostream_show_catnav') == 'yes'  ) { ?>
	<div id="catnav">
		<div class="limit clearfix">
			<?php if (has_nav_menu('catnav')) { ?>
				<ul class="clearfix">
					<?php wp_nav_menu(array('container'=>false,'theme_location'=>'catnav','fallback_cb'=>'catnav_fallback','items_wrap'=>'%3$s')); ?>
				</ul>
			<?php } else { ?>
				<ul class="clearfix"><?php wp_list_categories('title_li='); ?></ul>
			<?php } ?>
		</div>
	</div>
	<?php } ?>

	<div id="wrap">

		<?php include (TEMPLATEPATH . '/banner728.php'); ?>
