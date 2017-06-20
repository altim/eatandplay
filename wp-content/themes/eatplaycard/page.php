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
				<a href="#top" class="back-to-top"></a>
			</div>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>