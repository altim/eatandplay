<?php get_header(); ?>

		<div id="page-header" style="background:#4b99fd;">
	        <div class="page-header-inner">
	            <h1 class="smaller-headline">Blog</h1>
	        </div>
	    </div>


	    <div id="blog">
        	<div class="blog-inner">

		    <?php $counter = 1; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		    	<?php
		    		if ($counter % 2 == 0) {
		    			$post_class = 'post-image-right';

		    		} else {
		    			$post_class = 'post-image-left';
		    		}
		    	?>
	            <div class="post-item <?php echo $post_class; ?>">
	                <a href="<?php the_permalink(); ?>" class="post-image">
						<?php if ( has_post_thumbnail() ) {
								the_post_thumbnail('blog-thumb');
							} else { ?>
								<img src="<?php echo get_template_directory_uri() . '/img/blog-placeholder.jpg'; ?>">
							<?php } ?>
	                </a>
	                <div class="post-content">
	                    <div class="post-content-inner">
	                        <h2><?php the_title(); ?></h2>
	                        <?php the_excerpt(); ?>
	                        <a href="<?php the_permalink(); ?>" class="btn">Read More</a>
	                    </div>
	                </div>
	            </div>

			<?php $counter++; endwhile; endif; ?>

			</div>
	    </div>

		<div class="pagination">
			<div class="wc cf">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
		<a href="#top" class="back-to-top"></a>

<?php get_footer(); ?>