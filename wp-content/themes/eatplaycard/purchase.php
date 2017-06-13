<?php /* Template Name: Purchase */ ?>

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

    <?php endwhile; endif; ?>


    <div id="page-header" style="background-image: url('<?php echo $thumb_url; ?>');">
	        <div class="page-header-inner">
	            <h1 class="smaller-headline"><?php the_title(); ?></h1>
	        </div>
	    </div>

    <section id="purchase">
        <div class="purchase-inner">

            <div class="cards">

                <div class="card card-left">
                    <h2>Orlando</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-orlando.png" alt="Orlando card" />
                </div>

                <div class="card card-right">
                    <h2>New York</h2>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/card-new-york.png" alt="Orlando card" />
                </div>

            </div>

            <div class="select-card-box">
                <div class="dropdown dropdown-select-card">
                    <a href="#" class="btn btn-dropdown">Select a card</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Orlando</a></li>
                        <li><a href="#">New York</a></li>
                        <li><a href="#" class="btn-dropdown-close"></a></li>
                    </ul>
                </div>

                <input type="text" class="input" name="quantity" value="1"><p>QTY.</p>
            </div>


            <div class="customer-info-box">
                <h2>Customer Information</h2>

                <div class="customer-info-form">
                    <input type="text" class="input input-1-2" placeholder="First Name" />
                    <input type="text" class="input input-1-2 no-margin" placeholder="Last Name" />

                    <input type="text" class="input input-1-3" placeholder="Address" />
                    <input type="text" class="input input-1-3" placeholder="Address #2" />
                    <input type="text" class="input input-1-3 no-margin" placeholder="City" />

                    <div class="dropdown dropdown-select-country">
                        <a href="#" class="btn btn-dropdown">Select Country</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Country 1</a></li>
                            <li><a href="#">Country 2</a></li>
                            <li><a href="#">Country 3</a></li>
                            <li><a href="#" class="btn-dropdown-close"></a></li>
                        </ul>
                    </div>
                    <input type="text" class="input input-1-3" placeholder="State / Province" />
                    <input type="text" class="input input-1-3 no-margin" placeholder="Zip / Postal" />

                    <input type="text" class="input input-1-3" placeholder="Daytime Phone" />
                    <input type="text" class="input input-1-3" placeholder="Email Address" />
                    <input type="text" class="input input-1-3 no-margin" placeholder="(Verify) Email Address" />

                </div>
            </div><!-- end customer info -->


            <div class="delivery-box">
                <h2>Select Delivery Options</h2>

                <div class="option">

                    <a href="#" class="btn btn-delivery btn-traditional-mail" data-trigger="traditional-email-box">Traditional mail</a>

                    <div class="option-box traditional-email-box">
                        <div class="option-box-inner">
                            <p>Please allow the following time for shipping and handling<br/>
                                US/Canada - 2 weeks<br/>
                                UK - 3 weeks<br/>
                                Rest of World - 4 weeks</p>

                            <a href="#" class="btn btn-choose">Choose this option</a>
                        </div>
                    </div>

                </div>

                <div class="option">

                    <a href="#" class="btn btn-delivery btn-email" data-trigger="email-box">E-mail</a>
                    <div class="option-box email-box">
                        <div class="option-box-inner">
                            <p>You will immediately receive a voucher by email<br/>
                                Print voucher and exchange for your card at:<br/>
                                <a href="#">- 2 convenient locations in Orlando</a><br/>
                                <a href="#">- 4 convenient locations in New York</a><br/>
                                Complete address, phone and hours of operation will be on your voucher</p>

                            <a href="#" class="btn btn-choose">Choose this option</a>
                        </div>
                    </div>

                </div>

            </div><!-- end delivery options -->




            <div class="credit-card-info">
                <h2>Credit Card Information</h2>

                <div class="credit-card-form">
                    <div class="dropdown dropdown-select-credit-card">
                        <a href="#" class="btn btn-dropdown">Select Credit Card</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Visa</a></li>
                            <li><a href="#">Master Card</a></li>
                            <li><a href="#">Card 3</a></li>
                            <li><a href="#" class="btn-dropdown-close"></a></li>
                        </ul>
                    </div>

                    <div class="dropdown dropdown-select-expiry-month">
                        <a href="#" class="btn btn-dropdown">Expiry Month</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li><a href="#">04</a></li>
                            <li><a href="#" class="btn-dropdown-close"></a></li>
                        </ul>
                    </div>

                    <div class="dropdown dropdown-select-expiry-year no-margin">
                        <a href="#" class="btn btn-dropdown">Expiry Year</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">2017</a></li>
                            <li><a href="#">2018</a></li>
                            <li><a href="#">2019</a></li>
                            <li><a href="#">2020</a></li>
                            <li><a href="#" class="btn-dropdown-close"></a></li>
                        </ul>
                    </div>


                    <input type="text" class="input input-1-3" placeholder="Name on Card" />
                    <input type="text" class="input input-1-3" placeholder="Credit Card Number" />
                    <input type="text" class="input input-1-3 no-margin" placeholder="Security Code" />

                    <input type="text" class="input input-1-3 no-margin centered promo" placeholder="Promo Code (option)" />

                </div>

            </div><!-- end credit card info -->


            <div class="confirm-order-box">
                <h2>Confirm order</h2>

                <a href="#" class="btn btn-important">Click To Confirm Order</a><br/>

                <img src="<?php echo get_template_directory_uri(); ?>/img/payment-methods-list.jpg" alt="payment methods"/>
            </div><!-- end confirm order box -->


        </div>
    </section>

<?php get_footer(); ?>