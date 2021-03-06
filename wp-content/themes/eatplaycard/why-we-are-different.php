<?php /* Template Name: Why We Are Different */ ?>
<?php get_header(); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		if ( has_post_thumbnail() ) {
		    $thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'page-banner', true);
			$thumb_url = $thumb_url_array[0];
		} else {
			$thumb_url = '';;
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

                <section class="advantages">
                <h2>Eat and Play Card Advantages</h2>
                <table class="checkmark-table">
                    <thead>
                    <tr>
                        <th>Coupons & Other Savings</th>
                        <th>Eat and Play Card&trade;</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Require you to carry around a pocket full of messy coupons or multiple other programs.</td>
                        <td>One card is all you need for the best in dining, activities, attractions, and shopping.</td>
                    </tr>
                    <tr>
                        <td>Low on ”tourist appeal” – merchants far from tourist areas or services for locals such as dry cleaning and oil changes.</td>
                        <td>Real tourist appeal and savings at merchants with the right mix of location, products, and services.</td>
                    </tr>
                    <tr>
                       <td>Easy to lose or forget in your hotel.</td>
                        <td>Always in your wallet and ready when you need it.</td>
                   </tr>
                    <tr>
                        <td>Coupons can be used only once.</td>
                        <td>Use as often as you want – even visit the same merchant every day.</td>
					</tr>
                    <tr>
					 <td>Savings often only apply to children or seniors.</td>
                        <td>Savings apply to everyone.</td>
                    </tr>
                   <tr>
                       <td>Some programs require you to pre-pay for attractions often locking you into a schedule or forcing visits on rainy days.</td>
                        <td>No need to pre-pay. Visit and save on your own schedule.</td>
                    </tr>
                    <tr>
                        <td>Coupons are often found too late – you have already visited the merchant or have no more time.</td>
                        <td>Allows you to plan your visits and maximize your savings in advance.</td>
                    </tr>
                    <tr>
                        <td>Programs often require one per person.</td>
                        <td>Valid for up to four people – an entire group or family!</td>
                   </tr>
                    <tr>
                        <td>Discounts often have fixed limits such as “save $1.50”, ”free appetizer” or “free gift.</td>
                        <td>Entirely %-based discounts always maximize your savings – spend more; save more.</td>
                    </tr>
                    <tr>
                       <td>Often have restrictions such as minimum spend requirements and blackout dates.</td>
                        <td>No annoying restrictions.</td>
                    </tr>
                    </tbody>
               </table>

                </section>

                <h2>Money Back Guarantee</h2>
	             <p>After your trip, if you weren’t completely satisfied with your Eat and Play Card, just return it with proof of purchase (valid on individual sales direct from this website only) and a letter explaining what you didn’t like and we’ll refund your money. It’s risk free and it’s that easy.</p>

				<a href="#top" class="back-to-top"></a>
			</div>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>