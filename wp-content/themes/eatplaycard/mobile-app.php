<?php /* Template Name: Mobile App */ ?>

<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		if ( has_post_thumbnail() ) {
		    $thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'page-banner', true);
			$thumb_url = $thumb_url_array[0];
		} else {
			$thumb_url = '';
		}
	?>
		<div id="page-header" <?php if($thumb_url!='') { ?> style="background-image: url('<?php echo $thumb_url; ?>');" <?php } ?> >
	        <div class="page-header-inner">
	            <h1 class="smaller-headline"><?php the_title(); ?></h1>
	        </div>
	    </div>

		<div class="inner-page-content">
			<div class="wc cf">
				<?php the_content(); ?>
				<div class="app-btns">
					<a target="_blank" href="https://play.google.com/store/apps/details?id=com.favequest.mea.eat_and_play_card&hl=en"><img src="<?php echo get_template_directory_uri(); ?>/img/google-play-large-btn.png" alt="Google Play" /></a>
					<a target="_blank"  href="https://itunes.apple.com/us/app/eat-and-play-card/id913039433?ls=1&mt=8"><img src="<?php echo get_template_directory_uri(); ?>/img/apple-play-store-btn.png" alt="Apple Store" /></a>
				</div>
				<a href="#top" class="back-to-top"></a>
			</div>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>