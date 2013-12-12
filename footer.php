		</div> <!-- end #page div -->

		<?php include (TEMPLATEPATH . '/banner728-bottom.php'); ?>

		<?php /* footer widgets */ if ( is_active_sidebar('widget-5') || is_active_sidebar('widget-6') || is_active_sidebar('widget-7') || is_active_sidebar('widget-8') ) { ?>
		<div id="footer-widgets" class="maincontent">
			<div class="limit clearfix">
				<div class="footer-widget1">
					<?php dynamic_sidebar('Footer Widget 1'); ?>
				</div>
				<div class="footer-widget2">
					<?php dynamic_sidebar('Footer Widget 2'); ?>
				</div>
				<div class="footer-widget3">
					<?php dynamic_sidebar('Footer Widget 3'); ?>
				</div>
				<div class="footer-widget4">
					<?php dynamic_sidebar('Footer Widget 4'); ?>
				</div>
			</div>
		</div>
		<?php } ?>

	</div>  <!-- end #wrap div -->

</div> <!-- end #outer-wrap div -->

<div id="footer">

	<div class="limit clearfix">

		<?php include (TEMPLATEPATH . '/sub-icons.php'); ?>

		&copy;  <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e("All rights reserved.", "solostream"); ?> <a href="http://www.solostream.com"><?php _e("Premium WordPress Themes", "solostream"); ?></a>.

	</div>

</div>

<?php wp_footer(); ?>

</body>

</html>