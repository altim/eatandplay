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

            <form>

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
                    <div class="dropdown-menu-wrapper">
                        <ul class="dropdown-menu">
                            <li><a href="#">Orlando</a></li>
                            <li><a href="#">New York</a></li>
                            <li><a href="#" class="btn-dropdown-close"></a></li>
                        </ul>
                    </div>
                </div>

                <input type="text" class="input" name="quantity" value="1"><p>QTY.</p>
            </div>


            <div class="customer-info-box">
                <h2>Customer Information</h2>

                <div class="customer-info-form">
                    <input type="text" name="firstname" class="input input-1-2" placeholder="First Name" />
                    <input type="text" name="lastname" class="input input-1-2 no-margin" placeholder="Last Name" />

                    <input type="text" name="address" class="input input-1-3" placeholder="Address" />
                    <input type="text" name="address2" class="input input-1-3" placeholder="Address #2" />
                    <input type="text" name="city" class="input input-1-3 no-margin" placeholder="City" />

                    <div class="dropdown dropdown-select-country" data-selected="">
                        <a href="#" class="btn btn-dropdown">Select Country</a>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
                                <li data-value="US"><a href="#">USA</a></li>
                                <li data-value="GB"><a href="#">United Kingdom</a></li>
                                <li data-value="CA"><a href="#">Canada</a></li>
                                <li data-value="AF"><a href="#">Afghanistan</a></li>
                                <li data-value="AL"><a href="#">Albania</a></li>
                                <li data-value="DZ"><a href="#">Algeria</a></li>
                                <li data-value="AS"><a href="#">American Samoa</a></li>
                                <li data-value="AD"><a href="#">Andorra</a></li>
                                <li data-value="AO"><a href="#">Angola</a></li>
                                <li data-value="AI"><a href="#">Anguilla</a></li>
                                <li data-value="AG"><a href="#">Antigua</a></li>
                                <li data-value="AR"><a href="#">Argentina</a></li>
                                <li data-value="AM"><a href="#">Armenia</a></li>
                                <li data-value="AW"><a href="#">Aruba</a></li>
                                <li data-value="AU"><a href="#">Australia</a></li>
                                <li data-value="AT"><a href="#">Austria</a></li>
                                <li data-value="AZ"><a href="#">Azerbaijan</a></li>
                                <li data-value="BS"><a href="#">Bahamas</a></li>
                                <li data-value="BH"><a href="#">Bahrain</a></li>
                                <li data-value="BD"><a href="#">Bangladesh</a></li>
                                <li data-value="BB"><a href="#">Barbados</a></li>
                                <li data-value="BY"><a href="#">Belarus</a></li>
                                <li data-value="BE"><a href="#">Belgium</a></li>
                                <li data-value="BZ"><a href="#">Belize</a></li>
                                <li data-value="BJ"><a href="#">Benin</a></li>
                                <li data-value="BM"><a href="#">Bermuda</a></li>
                                <li data-value="BT"><a href="#">Bhutan</a></li>
                                <li data-value="BO"><a href="#">Bolivia</a></li>
                                <li data-value="BA"><a href="#">Bosnia</a></li>
                                <li data-value="BW"><a href="#">Botswana</a></li>
                                <li data-value="BR"><a href="#">Brazil</a></li>
                                <li data-value="BN"><a href="#">Brunei Darussalam</a></li>
                                <li data-value="BG"><a href="#">Bulgaria</a></li>
                                <li data-value="BF"><a href="#">Burkina Faso</a></li>
                                <li data-value="BI"><a href="#">Burundi</a></li>
                                <li data-value="KH"><a href="#">Cambodia</a></li>
                                <li data-value="Cameroon"><a href="#">Cameroon</a></li>
                                <li data-value="CV"><a href="#">Cape Verde</a></li>
                                <li data-value="CF"><a href="#">Central African Republic</a></li>
                                <li data-value="TD"><a href="#">Chad</a></li>
                                <li data-value="CL"><a href="#">Chile</a></li>
                                <li data-value="CN"><a href="#">China</a></li>
                                <li data-value="CO"><a href="#">Colombia</a></li>
                                <li data-value="KM"><a href="#">Comoros</a></li>
                                <li data-value="CG"><a href="#">Congo</a></li>
                                <li data-value="CR"><a href="#">Costa Rica</a></li>
                                <li data-value="HR"><a href="#">Croatia</a></li>
                                <li data-value="CU"><a href="#">Cuba</a></li>
                                <li data-value="CY"><a href="#">Cyprus</a></li>
                                <li data-value="CZ"><a href="#">Czech Republic</a></li>
                                <li data-value="DK"><a href="#">Denmark</a></li>
                                <li data-value="DJ"><a href="#">Djibouti</a></li>
                                <li data-value="DM"><a href="#">Dominica</a></li>
                                <li data-value="DO"><a href="#">Dominican Republic</a></li>
                                <li data-value="TL"><a href="#">East Timor</a></li>
                                <li data-value="EC"><a href="#">Ecuador</a></li>
                                <li data-value="EG"><a href="#">Egypt</a></li>
                                <li data-value="SV"><a href="#">El Salvador</a></li>
                                <li data-value="GQ"><a href="#">Equatorial Guina</a></li>
                                <li data-value="ER"><a href="#">Eritrea</a></li>
                                <li data-value="EE"><a href="#">Estonia</a></li>
                                <li data-value="ET"><a href="#">Ethiopia</a></li>
                                <li data-value="FO"><a href="#">Faroe Islands</a></li>
                                <li data-value="FJ"><a href="#">Fiji</a></li>
                                <li data-value="FI"><a href="#">Finland</a></li>
                                <li data-value="FR"><a href="#">France</a></li>
                                <li data-value="GF"><a href="#">Fench Guiana</a></li>
                                <li data-value="FM"><a href="#">French Metropolitan</a></li>
                                <li data-value="PF"><a href="#">French Polynesia</a></li>
                                <li data-value="GA"><a href="#">Gabon</a></li>
                                <li data-value="GM"><a href="#">Gambia</a></li>
                                <li data-value="GE"><a href="#">Georgia</a></li>
                                <li data-value="DE"><a href="#">Germany</a></li>
                                <li data-value="GH"><a href="#">Ghana</a></li>
                                <li data-value="GR"><a href="#">Greece</a></li>
                                <li data-value="GL"><a href="#">Greenland</a></li>
                                <li data-value="GD"><a href="#">Grenada</a></li>
                                <li data-value="GP"><a href="#">Guadeloupe</a></li>
                                <li data-value="GU"><a href="#">Guam</a></li>
                                <li data-value="GT"><a href="#">Guatemala</a></li>
                                <li data-value="GN"><a href="#">Guinea</a></li>
                                <li data-value="GW"><a href="#">Guinea-Bissau</a></li>
                                <li data-value="GY"><a href="#">Guyana</a></li>
                                <li data-value="HT"><a href="#">Haiti</a></li>
                                <li data-value="HS"><a href="#">Holy See</a></li>
                                <li data-value="HN"><a href="#">Honduras</a></li>
                                <li data-value="HK"><a href="#">Hong Kong</a></li>
                                <li data-value="HU"><a href="#">Hungary</a></li>
                                <li data-value="IS"><a href="#">Iceland</a></li>
                                <li data-value="IN"><a href="#">India</a></li>
                                <li data-value="ID"><a href="#">Indonesia</a></li>
                                <li data-value="IR"><a href="#">Iran</a></li>
                                <li data-value="IQ"><a href="#">Iraq</a></li>
                                <li data-value="IE"><a href="#">Ireland</a></li>
                                <li data-value="IL"><a href="#">Israel</a></li>
                                <li data-value="IT"><a href="#">Italy</a></li>
                                <li data-value="JM"><a href="#">Jamaica</a></li>
                                <li data-value="JP"><a href="#">Japan</a></li>
                                <li data-value="JO"><a href="#">Jordan</a></li>
                                <li data-value="KZ"><a href="#">Kazakhstan</a></li>
                                <li data-value="KE"><a href="#">Kenya</a></li>
                                <li data-value="KI"><a href="#">Kiribati</a></li>
                                <li data-value="KR"><a href="#">Korea</a></li>
                                <li data-value="KW"><a href="#">Kuwait</a></li>
                                <li data-value="KG"><a href="#">Kyrgyzstan</a></li>
                                <li data-value="LA"><a href="#">Laos</a></li>
                                <li data-value="LV"><a href="#">Latvia</a></li>
                                <li data-value="LB"><a href="#">Lebanon</a></li>
                                <li data-value="LS"><a href="#">Lesotho</a></li>
                                <li data-value="LR"><a href="#">Liberia</a></li>
                                <li data-value="LY"><a href="#">Libya</a></li>
                                <li data-value="LI"><a href="#">Liechtenstein</a></li>
                                <li data-value="LT"><a href="#">Lithuania</a></li>
                                <li data-value="LU"><a href="#">Luxembourg</a></li>
                                <li data-value="MO"><a href="#">Macau</a></li>
                                <li data-value="MK"><a href="#">Macedonia</a></li>
                                <li data-value="MG"><a href="#">Madagascar</a></li>
                                <li data-value="MW"><a href="#">Malawi</a></li>
                                <li data-value="MY"><a href="#">Malaysia</a></li>
                                <li data-value="MV"><a href="#">Maldives</a></li>
                                <li data-value="ML"><a href="#">Mali</a></li>
                                <li data-value="MT"><a href="#">Malta</a></li>
                                <li data-value="MH"><a href="#">Marshall Islands</a></li>
                                <li data-value="MQ"><a href="#">Martinique</a></li>
                                <li data-value="MR"><a href="#">Mauritania</a></li>
                                <li data-value="MU"><a href="#">Mauritius</a></li>
                                <li data-value="MX"><a href="#">Mexico</a></li>
                                <li data-value="FM"><a href="#">Micronesia</a></li>
                                <li data-value="MD"><a href="#">Moldova</a></li>
                                <li data-value="MC"><a href="#">Monaco</a></li>
                                <li data-value="MN"><a href="#">Mongolia</a></li>
                                <li data-value="MS"><a href="#">Montenegro</a></li>
                                <li data-value="MS"><a href="#">Montserrat</a></li>
                                <li data-value="MA"><a href="#">Morocco</a></li>
                                <li data-value="MZ"><a href="#">Mozambique</a></li>
                                <li data-value="MM"><a href="#">Myanmar</a></li>
                                <li data-value="NA"><a href="#">Namibia</a></li>
                                <li data-value="NR"><a href="#">Nauru</a></li>
                                <li data-value="NP"><a href="#">Nepal</a></li>
                                <li data-value="NL"><a href="#">Netherlands</a></li>
                                <li data-value="NC"><a href="#">New Caledonia</a></li>
                                <li data-value="NZ"><a href="#">New Zealand</a></li>
                                <li data-value="NI"><a href="#">Nicaragua</a></li>
                                <li data-value="NE"><a href="#">Niger</a></li>
                                <li data-value="NG"><a href="#">Nigeria</a></li>
                                <li data-value="MP"><a href="#">Northern Mariana Islands</a></li>
                                <li data-value="NO"><a href="#">Norway</a></li>
                                <li data-value="OM"><a href="#">Oman</a></li>
                                <li data-value="PK"><a href="#">Pakistan</a></li>
                                <li data-value="PW"><a href="#">Palau</a></li>
                                <li data-value="PA"><a href="#">Panama</a></li>
                                <li data-value="PG"><a href="#">Papua New Guinea</a></li>
                                <li data-value="PY"><a href="#">Paraguay</a></li>
                                <li data-value="PE"><a href="#">Peru</a></li>
                                <li data-value="PH"><a href="#">Philippines</a></li>
                                <li data-value="PN"><a href="#">Pitcairn Island</a></li>
                                <li data-value="PL"><a href="#">Poland</a></li>
                                <li data-value="PT"><a href="#">Portugal</a></li>
                                <li data-value="PR"><a href="#">Puerto Rico</a></li>
                                <li data-value="QA"><a href="#">Qatar</a></li>
                                <li data-value="RE"><a href="#">Reunion Island</a></li>
                                <li data-value="RO"><a href="#">Romania</a></li>
                                <li data-value="RU"><a href="#">Russia</a></li>
                                <li data-value="RW"><a href="#">Rwanda</a></li>
                                <li data-value="KN"><a href="#">Saint Kitts</a></li>
                                <li data-value="LC"><a href="#">Saint Lucia</a></li>
                                <li data-value="VC"><a href="#">Saint Vincent</a></li>
                                <li data-value="WS"><a href="#">Samoa</a></li>
                                <li data-value="SM"><a href="#">San Marino</a></li>
                                <li data-value="ST"><a href="#">Sao Tome</a></li>
                                <li data-value="SA"><a href="#">Saudi Arabia</a></li>
                                <li data-value="SN"><a href="#">Senegal</a></li>
                                <li data-value="CS"><a href="#">Serbia</a></li>
                                <li data-value="SC"><a href="#">Seychelles</a></li>
                                <li data-value="SL"><a href="#">Sierra Leone</a></li>
                                <li data-value="SG"><a href="#">Singapore</a></li>
                                <li data-value="SK"><a href="#">Slovakia</a></li>
                                <li data-value="SB"><a href="#">Solomon Islands</a></li>
                                <li data-value="SO"><a href="#">Somalia</a></li>
                                <li data-value="ZA"><a href="#">South Africa</a></li>
                                <li data-value="ES"><a href="#">Spain</a></li>
                                <li data-value="LK"><a href="#">Sri Lanka</a></li>
                                <li data-value="SD"><a href="#">Sudan</a></li>
                                <li data-value="SR"><a href="#">Suriname</a></li>
                                <li data-value="SZ"><a href="#">Swaziland</a></li>
                                <li data-value="SE"><a href="#">Sweden</a></li>
                                <li data-value="CH"><a href="#">Switzerland</a></li>
                                <li data-value="SY"><a href="#">Syria</a></li>
                                <li data-value="TW"><a href="#">Taiwan</a></li>
                                <li data-value="TJ"><a href="#">Tajikistan</a></li>
                                <li data-value="TZ"><a href="#">Tanzania</a></li>
                                <li data-value="TH"><a href="#">Thailand</a></li>
                                <li data-value="TG"><a href="#">Togo</a></li>
                                <li data-value="TO"><a href="#">Tonga</a></li>
                                <li data-value="TT"><a href="#">Trinidad</a></li>
                                <li data-value="TN"><a href="#">Tunisia</a></li>
                                <li data-value="TR"><a href="#">Turkey</a></li>
                                <li data-value="TM"><a href="#">Turkmenistan</a></li>
                                <li data-value="TV"><a href="#">Tuvalu</a></li>
                                <li data-value="UG"><a href="#">Uganda</a></li>
                                <li data-value="UA"><a href="#">Ukraine</a></li>
                                <li data-value="AE"><a href="#">United Arab Emriates</a></li>
                                <li data-value="UY"><a href="#">Uruguay</a></li>
                                <li data-value="UZ"><a href="#">Uzbekistan</a></li>
                                <li data-value="VU"><a href="#">Vanuatu</a></li>
                                <li data-value="VE"><a href="#">Venezuela</a></li>
                                <li data-value="VN"><a href="#">Vietnam</a></li>
                                <li data-value="VG"><a href="#">Virgin Islands(British)</a></li>
                                <li data-value="VI"><a href="#">Virgin Islands(US)</a></li>
                                <li data-value="YE"><a href="#">Yemen</a></li>
                                <li data-value="ZM"><a href="#">Zambia</a></li>
                                <li data-value="ZW"><a href="#">Zimbabwe</a></li>
                            </ul>
                        </div>
                </div>

                <input type="text" name="state" class="input input-1-3 state" placeholder="State / Province" />

                    <div class="dropdown dropdown-us-states" data-selected="">
                    <a href="#" class="btn btn-dropdown">Select State</a>
                    <div class="dropdown-menu-wrapper">
                        <ul class="dropdown-menu">
                            <li data-value="AL"><a href="#">Alabama</a></li>
                            <li data-value="AK"><a href="#">Alaska</a></li>
                            <li data-value="AZ"><a href="#">Arizona</a></li>
                            <li data-value="AR"><a href="#">Arkansas</a></li>
                            <li data-value="CA"><a href="#">California</a></li>
                            <li data-value="CO"><a href="#">Colorado</a></li>
                            <li data-value="CT"><a href="#">Connecticut</a></li>
                            <li data-value="DE"><a href="#">Delaware</a></li>
                            <li data-value="DC"><a href="#">District Of Columbia</a></li>
                            <li data-value="FL"><a href="#">Florida</a></li>
                            <li data-value="GA"><a href="#">Georgia</a></li>
                            <li data-value="HI"><a href="#">Hawaii</a></li>
                            <li data-value="ID"><a href="#">Idaho</a></li>
                            <li data-value="IL"><a href="#">Illinois</a></li>
                            <li data-value="IN"><a href="#">Indiana</a></li>
                            <li data-value="IA"><a href="#">Iowa</a></li>
                            <li data-value="KS"><a href="#">Kansas</a></li>
                            <li data-value="KY"><a href="#">Kentucky</a></li>
                            <li data-value="LA"><a href="#">Louisiana</a></li>
                            <li data-value="ME"><a href="#">Maine</a></li>
                            <li data-value="MD"><a href="#">Maryland</a></li>
                            <li data-value="MA"><a href="#">Massachusetts</a></li>
                            <li data-value="MI"><a href="#">Michigan</a></li>
                            <li data-value="MN"><a href="#">Minnesota</a></li>
                            <li data-value="MS"><a href="#">Mississippi</a></li>
                            <li data-value="MO"><a href="#">Missouri</a></li>
                            <li data-value="MT"><a href="#">Montana</a></li>
                            <li data-value="NE"><a href="#">Nebraska</a></li>
                            <li data-value="NV"><a href="#">Nevada</a></li>
                            <li data-value="NH"><a href="#">New Hampshire</a></li>
                            <li data-value="NJ"><a href="#">New Jersey</a></li>
                            <li data-value="NM"><a href="#">New Mexico</a></li>
                            <li data-value="NY"><a href="#">New York</a></li>
                            <li data-value="NC"><a href="#">North Carolina</a></li>
                            <li data-value="ND"><a href="#">North Dakota</a></li>
                            <li data-value="OH"><a href="#">Ohio</a></li>
                            <li data-value="OK"><a href="#">Oklahoma</a></li>
                            <li data-value="OR"><a href="#">Oregon</a></li>
                            <li data-value="PA"><a href="#">Pennsylvania</a></li>
                            <li data-value="RI"><a href="#">Rhode Island</a></li>
                            <li data-value="SC"><a href="#">South Carolina</a></li>
                            <li data-value="SD"><a href="#">South Dakota</a></li>
                            <li data-value="TN"><a href="#">Tennessee</a></li>
                            <li data-value="TX"><a href="#">Texas</a></li>
                            <li data-value="UT"><a href="#">Utah</a></li>
                            <li data-value="VT"><a href="#">Vermont</a></li>
                            <li data-value="VA"><a href="#">Virginia</a></li>
                            <li data-value="WA"><a href="#">Washington</a></li>
                            <li data-value="WV"><a href="#">West Virginia</a></li>
                            <li data-value="WI"><a href="#">Wisconsin</a></li>
                            <li data-value="WY"><a href="#">Wyoming</a></li>
                        </ul>
                    </div>
                </div>

                <div class="dropdown dropdown-canada-states" data-selected="">
                    <a href="#" class="btn btn-dropdown">Select State</a>
                    <div class="dropdown-menu-wrapper">
                        <ul class="dropdown-menu">
                            <li data-value="AB"><a href="#">Alberta</a></li>
                            <li data-value="BC"><a href="#">British Columbia</a></li>
                            <li data-value="MB"><a href="#">Manitoba</a></li>
                            <li data-value="NB"><a href="#">New Brunswick</a></li>
                            <li data-value="NL"><a href="#">Newfoundland and Labrador</a></li>
                            <li data-value="NS"><a href="#">Nova Scotia</a></li>
                            <li data-value="ON"><a href="#">Ontario</a></li>
                            <li data-value="PE"><a href="#">Prince Edward Island</a></li>
                            <li data-value="QC"><a href="#">Quebec</a></li>
                            <li data-value="SK"><a href="#">Saskatchewan</a></li>
                            <li data-value="NT"><a href="#">Northwest Territories</a></li>
                            <li data-value="NU"><a href="#">Nunavut</a></li>
                            <li data-value="YT"><a href="#">Yukon</a></li>
                        </ul>
                    </div>
                </div>



                <input type="text" name="zip" class="input input-1-3 no-margin" placeholder="Zip / Postal" />

                <input type="text" name="phone" class="input input-1-3" placeholder="Daytime Phone" />
                <input type="text" name="email" class="input input-1-3" placeholder="Email Address" />
                <input type="text" name="verifyemail" class="input input-1-3 no-margin" placeholder="(Verify) Email Address" />

                </div>
            </div><!-- end customer info -->


            <div class="delivery-box">
                <h2>Select Delivery Options</h2>

                <div class="option">

                    <a href="#" class="btn btn-delivery btn-traditional-mail selected" data-trigger="traditional-email-box">Traditional mail</a>

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
                    <div class="dropdown dropdown-select-credit-card" data-selected="">
                        <a href="#" class="btn btn-dropdown">Select Credit Card</a>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
                                <li data-value="Visa"><a href="#">Visa</a></li>
                                <li data-value="MasterCard"><a href="#">MasterCard</a></li>
<!--                                <li><a href="#" class="btn-dropdown-close"></a></li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="dropdown dropdown-select-expiry-month" data-selected="">
                        <a href="#" class="btn btn-dropdown">Expiry Month</a>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
                                <li data-value="01"><a href="#">01</a></li>
                                <li data-value="02"><a href="#">02</a></li>
                                <li data-value="03"><a href="#">03</a></li>
                                <li data-value="04"><a href="#">04</a></li>
                                <li data-value="05"><a href="#">05</a></li>
                                <li data-value="06"><a href="#">06</a></li>
                                <li data-value="07"><a href="#">07</a></li>
                                <li data-value="08"><a href="#">08</a></li>
                                <li data-value="09"><a href="#">09</a></li>
                                <li data-value="10"><a href="#">10</a></li>
                                <li data-value="11"><a href="#">11</a></li>
                                <li data-value="12"><a href="#">12</a></li>
<!--                                <li><a href="#" class="btn-dropdown-close"></a></li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="dropdown dropdown-select-expiry-year no-margin" data-selected="">
                        <a href="#" class="btn btn-dropdown">Expiry Year</a>
                        <div class="dropdown-menu-wrapper">
                            <ul class="dropdown-menu">
                                <li data-value="2017"><a href="#">2017</a></li>
                                <li data-value="2018"><a href="#">2018</a></li>
                                <li data-value="2019"><a href="#">2019</a></li>
                                <li data-value="2020"><a href="#">2020</a></li>
                                <li data-value="2021"><a href="#">2021</a></li>
                                <li data-value="2022"><a href="#">2022</a></li>
                                <li data-value="2023"><a href="#">2023</a></li>
                                <li data-value="2024"><a href="#">2024</a></li>
                                <li data-value="2025"><a href="#">2025</a></li>
                                <li data-value="2026"><a href="#">2026</a></li>
                                <li data-value="2027"><a href="#">2027</a></li>
                                <li data-value="2028"><a href="#">2028</a></li>
                                <li data-value="2029"><a href="#">2029</a></li>
                                <li data-value="2030"><a href="#">2030</a></li>
                                <li data-value="2031"><a href="#">2031</a></li>
                                <li data-value="2032"><a href="#">2032</a></li>
                                <li data-value="2033"><a href="#">2033</a></li>
                                <li data-value="2034"><a href="#">2034</a></li>
                                <li data-value="2035"><a href="#">2035</a></li>
                                <li data-value="2036"><a href="#">2036</a></li>
                                <li data-value="2037"><a href="#">2037</a></li>
<!--                                <li><a href="#" class="btn-dropdown-close"></a></li>-->
                            </ul>
                        </div>
                    </div>


                    <input type="text" name="cc-name" class="input input-1-3" placeholder="Name on Card" />
                    <input type="text" name="cc-number" class="input input-1-3" placeholder="Credit Card Number" />
                    <input type="text" name="cc-code" class="input input-1-3 no-margin" placeholder="Security Code" />

                    <input type="text" name="promo-code" class="input input-1-3 no-margin centered promo" placeholder="Promo Code (option)" />

                </div>

            </div><!-- end credit card info -->


            <div class="confirm-order-box">
                <h2>Confirm order</h2>

                <a href="#" class="btn btn-important btn-confirm-order">Click To Confirm Order</a><br/>
                <div class="loader"><img src="<?php echo get_template_directory_uri(); ?>/img/loader.svg" /></div>

                <div class="alert alert-danger">
                    <p></p>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/img/payment-methods-list.jpg" alt="payment methods"/>
            </div><!-- end confirm order box -->

            </form>
        </div>
    </section>



<?php get_footer(); ?>


