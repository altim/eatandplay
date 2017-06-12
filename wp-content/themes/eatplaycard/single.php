<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		if ( has_post_thumbnail() ) {
		    $thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'page-banner', true);
			$thumb_url = $thumb_url_array[0];
		} else {
			$thumb_url = get_template_directory_uri() . '/img/gen-banner.jpg';
		}
		?>

		<div id="page-header" style="background-image: url('<?php echo $thumb_url; ?>');">
	        <div class="page-header-inner">
	            <h1 class="smaller-headline"><?php the_title(); ?></h1>
	        </div>
	    </div>

		<div class="inner-page-content">
			<div class="wc cf">
				<?php the_content(); ?>
				<div class="single-blog-pagination">
					<?php 
							$prevPost = get_previous_post(true);
							$nextPost = get_next_post(true);

						    if($prevPost) {
					            $args = array(
					                'posts_per_page' => 1,
					                'include' => $prevPost->ID
					            );
					            $prevPost = get_posts($args);
					            foreach ($prevPost as $post) {
					                setup_postdata($post); ?>
						    		<a class="previous-post" href="<?php the_permalink(); ?>">Previous</a>
							    	<?php wp_reset_postdata();
						        } //end foreach
						    } // end if ?>

						    <a class="back-btn" href="#">Go Back</a>
						         
					        <?php $nextPost = get_next_post(true);
					        if($nextPost) {
					            $args = array(
					                'posts_per_page' => 1,
					                'include' => $nextPost->ID
					            );
					            $nextPost = get_posts($args);
					            foreach ($nextPost as $post) {
					                setup_postdata($post); ?>
					            	<a class="next-post" href="<?php the_permalink(); ?>">Next</a>
					   				<?php wp_reset_postdata();
					            } //end foreach
					        } // end if
					    ?>
				</div>
				<a href="#top" class="back-to-top"></a>
			</div>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>