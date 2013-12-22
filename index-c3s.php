<?php
// This is a special for the C3S
// It is the modified index4.php, with the featured vids beneath the first categorie
?>

			<?php /*-- [ CATEGORY BOX 1 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_1') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">
				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_1'),'category')->term_id) ); ?>"><?php _e("press releases", "solostream"); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_1'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-1-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>

<?php /*====== Include the featured vids for C3S =======*/ ?>
<?php include ('featured-vids.php'); ?>


			<?php /*-- [ CATEGORY BOX 2 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_2') !== 'Select a Category Slug' ) { ?>
		
			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_2'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_2_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_2'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post(); 
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-2-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>




			<?php /*-- [ CATEGORY BOX 3 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_3') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_3'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_3_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_3'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-3-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

				</div>
<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>




			<?php /*-- [ CATEGORY BOX 4 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_4') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_4'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_4_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_4'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-4-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>






			<?php /*-- [ CATEGORY BOX 5 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_5') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_5'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_5_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_5'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-5-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>




			<?php /*-- [ CATEGORY BOX 6 ] -- */ ?>
			<?php if ( get_option('solostream_cat_box_6') !== 'Select a Category Slug' ) { ?>

			<div class="cat-posts">

				<h2 class="feat-title"><span><a href="<?php echo esc_url(get_category_link(get_term_by('slug',get_option('solostream_cat_box_6'),'category')->term_id) ); ?>"><?php echo stripslashes(get_option('solostream_cat_box_6_title')); ?></a></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'category_name' => get_option('solostream_cat_box_6'),
	'showposts' => get_option('solostream_num_home_posts_by_cat')
));
while ($my_query->have_posts()) : $my_query->the_post(); 
$do_not_duplicate[] = $post->ID; ?>

				<div class="post clearfix<?php if ($count%3 == 0) { ?> right<?php } ?>" id="post-6-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<div style="clear:both;"></div>

					</div>

					<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>





			<?php /*-- [ OTHER RECENT ARTICLES ] -- */ ?>
			<?php if ( get_option('solostream_other_articles') == yes ) { ?>

			<div class="cat-posts-stacked">

				<h2 class="feat-title"><span><?php echo stripslashes(get_option('solostream_other_title')); ?></span></h2>

<?php 
$count = 1;
$my_query = new WP_Query(array(
	'post__not_in' => $do_not_duplicate,
	'posts_per_page' => get_option('solostream_other_number')
));
while ($my_query->have_posts()) : $my_query->the_post(); ?> 

				<div class="post clearfix" id="post-main-<?php the_ID(); ?>">

					<div class="entry clearfix">

						<a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php solostream_wide_thumbnail(); ?></a>

						<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="<?php _e("bookmark", "solostream"); ?>" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php include (TEMPLATEPATH . "/postinfo.php"); ?>

						<?php if ( get_option('solostream_post_content') == 'Excerpts' ) { ?>
							<?php the_excerpt(); ?>
						<?php } else { ?>
							<?php the_content(__("", "solostream")); ?>
						<?php } ?>

						<p class="readmore"><a class="more-link" href="<?php the_permalink() ?>" rel="nofollow" title="<?php _e("Permanent Link to", "solostream"); ?> <?php the_title(); ?>"><?php _e("Read More", "solostream"); ?></a></p>

						<div style="clear:both;"></div>						

					</div>

				</div>

<?php $count = $count + 1 ?>
<?php endwhile; ?>
				<div style="clear:both;"></div>
			</div>
			<?php } ?>
