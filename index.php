<?php get_header(); ?>

	<?php if ( is_home() && $paged < 2 && get_option('solostream_featpage_on') == 'Yes') { ?>
	<?php include (TEMPLATEPATH . '/featured-pages.php'); ?>
	<?php } ?>

	<?php if ( is_home() && $paged < 2 && get_option('solostream_features_on') == 'Full Width Featured Content Slider') { ?>
	<?php include (TEMPLATEPATH . '/featured-wide.php'); ?>
	<?php } ?>

	<div id="page" class="clearfix">

		<div id="contentleft" class="maincontent">

			<?php if ( is_home() && $paged < 2 && get_option('solostream_features_on') == 'Narrow Width Featured Content Slider') { ?>
			<?php include (TEMPLATEPATH . '/featured-narrow.php'); ?>
			<?php } ?>

			<?php if ( is_home() && $paged < 2 && get_option('solostream_galleries_on') == 'Yes' ) { ?>
			<?php include (TEMPLATEPATH . '/featured-galleries.php'); ?>
			<?php } ?>

			<?php // Featured Vids only if NOT Option 4 (c3s-Layout) is selected ?>
			<?php if ( is_home() && $paged < 2 && get_option('solostream_videos_on') == 'Yes' && get_option('solostream_home_layout') != 'Option 4 - 3 Posts Side-by-Side Arranged by Category') { ?>
			<?php include (TEMPLATEPATH . '/featured-vids.php'); ?>
			<?php } ?>

			<div id="content" class="clearfix">

				<?php include (TEMPLATEPATH . '/banner468.php'); ?>

				<?php if ( get_option('solostream_home_layout') == 'Option 1 - Standard Blog Layout') { ?>
				<?php include (TEMPLATEPATH . '/index1.php'); ?>

				<?php } elseif ( get_option('solostream_home_layout') == 'Option 2 - 2 Posts Aligned Side-by-Side') { ?>
				<?php include (TEMPLATEPATH . '/index2.php'); ?>

				<?php } elseif ( get_option('solostream_home_layout') == 'Option 3 - 3 Posts Aligned Side-by-Side') { ?>
				<?php include (TEMPLATEPATH . '/index3.php'); ?>
				
				<?php // This is the preferred Layout for C3S, so we include our modified index ?>
				<?php } elseif ( get_option('solostream_home_layout') == 'Option 4 - 3 Posts Side-by-Side Arranged by Category') { ?>
				<?php include ('index-c3s.php'); ?>

				<?php } elseif ( get_option('solostream_home_layout') == 'Option 5 - Posts Arranged by Category Side-by-Side') { ?>
				<?php include (TEMPLATEPATH . '/index5.php'); ?>

				<?php } elseif ( get_option('solostream_home_layout') == 'Option 6 - Posts Arranged by Category Stacked') { ?>
				<?php include (TEMPLATEPATH . '/index6.php'); ?>
				<?php } ?>

			</div>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>