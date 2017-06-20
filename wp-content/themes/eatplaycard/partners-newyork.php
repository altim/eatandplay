<?php /* Template Name: Partners - New York */ ?>
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
            <h1><?php the_title(); ?></h1>
            <a href="#" class="btn header-image-btn btn-view-all-partners">Places to Save</a>
        </div>
    </div>

    <div class="inner-page-content">
        <div class="wc">

	        <?php the_content(); endwhile; endif;  ?>

        </div>
    </div>

    <div id="filter-bar">
        <div class="filter-bar-inner">
            <ul class="filter-menu">
                <li><a href="#" class="btn btn-white active" data-type="all">All</a></li>
                <li><a href="#" class="btn" data-type="eat">Eat</a></li>
                <li><a href="#" class="btn" data-type="play">Play</a></li>
                <li><a href="#" class="btn" data-type="shop">Shop</a></li>
                <li><a href="#" class="btn" data-type="show">Show</a></li>
                <li><a href="#" class="btn btn-white" data-type="pdf">Print</a></li>
            </ul>
        </div>
    </div>

    <div id="merchants">
        <div class="merchants-inner">
            <h2>Places to Save</h2>

            <div class="merchants-list">

            	<?php
        		$args = array(
					'post_type' => 'partner',
					'posts_per_page' => -1,
					'orderby' => 'title',
					'order'   => 'ASC',
					'tax_query' => array(
                        array(
                            'taxonomy' => 'partner_location',
                            'field'    => 'slug',
                            'terms'    => 'new-york',
                        ),
                    ),
					
				); 
				$partner_query = new WP_Query( $args );

				?>

				<?php if ( $partner_query->have_posts() ) : while ( $partner_query->have_posts() ) : $partner_query->the_post();
                    $partner_cats = ''; 
					$term_list = wp_get_post_terms($post->ID, 'partner_category', array("fields" => "all", ));
						foreach($term_list as $term_single) {
							$partner_cats .= $term_single->slug . ' ';
						}
					?>

					<div class="merchant-item <?php echo $partner_cats; ?>">

                    <div class="merchants-item-header">
                        <div class="merchant-logo-wrapper expand-toggle">
                            <?php the_post_thumbnail('partner-logo'); ?>
                        </div>
                        <div class="merchant-name expand-toggle">
                            <p><?php the_title(); ?> - <span><?php the_field('savings_amount'); ?></span></p>
                        </div>
                        <div class="merchant-controls expand-toggle">
                            <a href="#" class="btn-expand"></a>
                        </div>
                    </div>

                    <div class="merchants-item-body">
                        <div class="merchants-item-body-text">
                            <?php the_content(); ?>
                        </div>
                    </div>

                </div><!-- end merchant-item -->

				<?php endwhile; endif; rewind_posts(); ?>

            </div><!-- end merchant list -->


            <div class="card">
                <img src="<?php echo get_template_directory_uri(); ?>/img/card-new-york.png" alt="New York card" />

                <a href="/buy-the-card/" class="btn">Buy this card</a>
            </div>

        </div>
    </div>


    <div class="blank-2">
        <div class="blank-2-inner">
            <h2>How much can I save</h2>

            <p>Coupons are virtually non-existent in New York City. But if you’re lucky enough to find one in New York, why settle for a piddly fixed discount like “free appetizer,” generally available with coupons? With Eat and Play Card, every discount is a % off the TOTAL bill (often including alcohol), so your savings are unlimited – the more you spend the more you’ll save – even on that extra beer or bottle of wine.
                <br/><br/>
                Given people’s spending patterns and frequency of use vary, so too will savings. Over 7 days in New York, for example, one card can easily save a group of four, $500 and likely even more. In fact, more than doubling your cost of the card back in one use is common.</p>
        </div>
    </div>

<?php get_footer(); ?>