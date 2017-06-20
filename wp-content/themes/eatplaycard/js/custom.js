jQuery(document).ready(function($) {

    // ========= Sticky menu ===========
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > 10) {
            $('header').addClass('fixed');
        } else {
            $('header').removeClass('fixed');
        }
    });



    // Lightbox
    $("body").magnificPopup({
        delegate: '.video',
        type: 'iframe',
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        }
    });


    //Hero slider
    $('.hero-slider ul').bxSlider({
        minSlider:1,
        maxSlides:2,
        infiniteLoop: true,
        touchEnabled : false,
        pager : false,
        controls: false,
        auto : true,
        pause: 4000
    });

    $(".logos-slider-owl").owlCarousel({
        loop:true,
        autoWidth:true,
        items:10,
        dots: false,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        navContainer: '.slider-controls'
    });


    //Scroll down on click
    $('.btn-scroll-down').click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $('#hero-image').height()+28+"px"
        },800,"swing");
    });


    //Mobile menu
    $('.btn-mobile-menu').on('click',function(e){
        e.preventDefault();
        $('nav').toggleClass('active');
    });

    // $('ul.main-menu li a').on('click',function(e){
    //     e.preventDefault();
    // });

    // $('ul.social-menu li a').on('click',function(e){
    //     e.preventDefault();
    // });


    //Merchants list
    $('.expand-toggle').on('click',function(e){
       e.preventDefault();

       var $merchantItem = $(this).parent().parent();

       if($merchantItem.hasClass('open')){
           $merchantItem.removeClass('open').find('.merchants-item-body').slideUp(800,'swing');
       }
       else {
           $merchantItem.addClass('open').find('.merchants-item-body').slideDown(800,'swing');

       }

    });


    //View all partners button
    $('.btn-view-all-partners').click(function(e){
        e.preventDefault();
        $('html,body').animate({
            scrollTop:  $('#filter-bar').offset().top - $('header').height()
        },800,"swing");
    });


    //Filter bar
    $('.filter-menu li a').on('click',function(e){

        var selectedValue = $(this).data('type');

        if(selectedValue!=="pdf") {

            e.preventDefault();
            $('.filter-menu li a.active').removeClass('active');
            $(this).addClass('active');

            //hide all
            $('.merchant-item').hide();
            if (selectedValue === 'all') {
                $('.merchant-item').fadeIn(400, 'swing');
            }
            else {
                $('.merchant-item.' + selectedValue).fadeIn(400, 'swing');
            }

            $('html,body').animate({
                scrollTop: $('#filter-bar').offset().top - 122
            }, 800, "swing");
        }
        else {
            
        }

    });


    //Dropdowns
    $('.btn-dropdown').on('click',function(e){
        e.preventDefault();
        if(! $(this).parent().hasClass('open')) {
            $(this).parent().find('.btn-dropdown').css({'z-index' : 12});
            $(this).css({'z-index' : 11});

            $(this).parent().addClass('open').find('.dropdown-menu-wrapper').slideDown(400, 'swing');
        }
        else {
            $(this).parent().removeClass('open').find('.dropdown-menu-wrapper').slideUp(400, 'swing', function(){
                $(this).parent().find('.btn-dropdown').css({'z-index' : 2});
                $(this).css({'z-index' : 1});
            });
        }
    });

    $('.dropdown-menu li a').on('click',function(e){
        e.preventDefault();
        var selectedItem = $(this).html();
        var selectedValue = $(this).parent().data('value');

        if(!$(this).hasClass('btn-dropdown-close')) {
            $(this).parent().parent().parent().parent().find('.btn-dropdown').html(selectedItem);
        }
        $(this).parent().parent().parent().parent().removeClass('open').addClass('selected').attr('data-selected',selectedValue);
        $(this).parent().parent().parent().slideUp(400,'swing');
    });



    //Delivery option boxes
    $('.option .btn-delivery').on('click',function(e){
       e.preventDefault();
       if(!$(this).hasClass('open')) {
           $(this).addClass('open');
           $(this).parent().find('.option-box').slideDown(400,'swing');
       }
       else {
           $(this).removeClass('open');
           $(this).parent().find('.option-box').slideUp(400,'swing');
       }

    });

    $('.option .btn-choose').on('click',function(e){
       e.preventDefault();
       $('.btn-delivery').removeClass('selected');
       $(this).parent().parent().slideUp(400,'swing');
       $(this).parent().parent().parent().find('.btn-delivery').removeClass('open').addClass('selected');
    });

    $('.back-to-top').on('click',function(e){
       e.preventDefault();
       $('html,body').animate({
            scrollTop:  $('#top').offset().top
        },800,"swing");
    });






    // ======================= PAYMENT ==========================


    $( document ).ready(function() {
        $(".alert").hide();
    });


    function errorAlert(component, message) {
        $(".alert").addClass("alert-danger");
        $(".alert").removeClass("alert-success");

        $(".alert p").empty();
        $(".alert p").html(message);

        setTimeout(function(){
            $(".alert").slideDown(400);
        }, 800);


        // $(component).addClass("inputError");
        // $(component).focus();

    }



    function clearFieldsError ()
    {
        $(".alert").slideUp(0);
        $("input[name=firstname]").removeClass("inputError");
        $("input[name=lastname]").removeClass("inputError");
        $("input[name=address]").removeClass("inputError");
        $("input[name=city]").removeClass("inputError");
        $("input[name=zip]").removeClass("inputError");
        $("input[name=phone]").removeClass("inputError");
        $("input[name=email]").removeClass("inputError");
        $("input[name=verifyemail]").removeClass("inputError");
        $("input[name=state]").removeClass("inputError");
        $("[name=cc-exp-month]").removeClass("inputError");
        $("[name=cc-name]").removeClass("inputError");
        $("[name=cc-code]").removeClass("inputError");
        $("[name=cc-number]").removeClass("inputError");

    }


    function checkfields() {

        clearFieldsError();
        var passing = false;



        // FirstName verification
        if (verifyFieldEmpty("input[name=firstname]") == true) {
            if (verifyFieldNumbers("input[name=firstname]") == true)
            {

                //LastName Verification
                if (verifyFieldEmpty("input[name=lastname]") == true) {
                    if (verifyFieldNumbers("input[name=lastname]") == true)
                    {
                        //Address Verification
                        if (verifyFieldEmpty("input[name=address]") == true) {
                            //City Verification
                            if (verifyFieldEmpty("input[name=city]") == true) {

                                //Country Verification
                                var selectedCountry = $(".dropdown-select-country").data('selected');
                                if ( !(selectedCountry == "Select Country") )
                                {
                                    var selectedUSState = $('.dropdown-us-states').data('selected');
                                    var selectedCAState = $('.dropdown-canada-states').data('selected');
                                    //State Verification
                                    if ((verifyFieldEmpty("input[name=state]") == true) || (selectedUSState != "") || (selectedCAState != "") ) {

                                        //Postal Code Verification
                                        if (verifyFieldEmpty("input[name=zip]") == true) {




                                            //Email Verification
                                            if (verifyFieldEmail("input[name=email]") == true) {

                                                //Email Verification Verification
                                                if ( $("input[name=email]").val() == $("input[name=verifyemail]").val() ) {


                                                    //Delivery options
                                                    if(($('.btn-email').hasClass('selected') || $('.btn-traditional-mail').hasClass('selected'))){

                                                    //Credit card verification (Month)
                                                    var currentMonth = (new Date).getMonth() + 1;
                                                    var currentYear = (new Date).getFullYear();
                                                    var checkmonth =0;

                                                    if ( $('[name=cc-exp-year]').val() - currentYear == 0) {
                                                        checkmonth =1;
                                                    }

                                                    var ccExpMonth = $(".dropdown-select-expiry-month").data('selected');
                                                    if ( ccExpMonth >= currentMonth || checkmonth==0) {

                                                        //Credit card verification (Name)
                                                        if (verifyFieldEmpty("input[name=cc-name]") == true) {

                                                            //Credit card verification (Number)
                                                            if (verifyFieldNumbers("input[name=cc-number]") == false) {


                                                                var pattern = new RegExp("^\\d{16}$");
                                                                if ( $("input[name=cc-number]").val().match(pattern)) {

                                                                    //Credit card verification (Number)
                                                                    if (verifyFieldNumbers("input[name=cc-code]") == false) {

                                                                        var pattern2 = new RegExp("^\\d{3}$");
                                                                        if ( $("input[name=cc-code]").val().match(pattern2)) {
                                                                            passing = true;
                                                                        }
                                                                        else
                                                                            errorAlert("[name=cc-code]", "Please enter 3 digits for your CVV code.");
                                                                    }
                                                                    else
                                                                        errorAlert("[name=cc-code]", "Your CVV code can only contains digits.");
                                                                }
                                                                else
                                                                    errorAlert("[name=cc-number]", "Please enter 16 digits for your credit card.");
                                                            }
                                                            else
                                                                errorAlert("[name=cc-number]", "Your credit card can only contains digits.");
                                                        }
                                                        else
                                                            errorAlert("[name=cc-name]", "Please enter a name holder for the credit card.");
                                                    }

                                                    else
                                                        errorAlert("[name=cc-exp-month]", "You credit card has expired that month.");
                                                    }
                                                    else
                                                        errorAlert("", "Please select delivery option");
                                                }
                                                else
                                                    errorAlert("input[name=verifyemail]", "Make sure you verify your email properly, this is where we will send your voucher !");
                                            }
                                            else
                                                errorAlert("input[name=email]", "Please enter a valid email.  hello@example.com");
                                            //End of Email Verification



                                        }
                                        else
                                            errorAlert("input[name=zip]", "Your postal code cannot be emtpy.");
                                        //End of Postal Code Verification
                                    }
                                    else
                                        errorAlert("input[name=state]", "State field cannot be empty.");
                                }
                                else
                                    errorAlert("[name=country]", "Please select a country.");
                            }
                            else
                                errorAlert("input[name=city]", "Your city cannot be emtpy.");

                            //End of City Verification

                        }
                        else
                            errorAlert("input[name=address]", "Your address cannot be emtpy.");
                        //End of Address Verification
                    }
                    else
                        errorAlert("input[name=lastname]", "Your first name cannot contain numbers.");
                }
                else
                    errorAlert("input[name=lastname]", "Your last name cannot be emtpy.");

                //End of LastName Verification
            }
            else
                errorAlert("input[name=firstname]", "Your first name cannot contain numbers.");
        }
        else
            errorAlert("input[name=firstname]", "Your first name cannot be emtpy.");

        //End of First name Verification

        return passing;

    }


//This function will verify if the User has a valid email
    function verifyFieldEmail(value) {
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if ($(value).val().match(mailformat)) return true;
        else return false;
    }

//This function will verify if the user has a valid phone number
    function verifyFieldPhone(value) {
        var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if ($(value).val().match(phoneno)) return true;
        else return false;
    }

//This function will verify if the field is not empty
    function verifyFieldEmpty(value) {
        if( $(value).val().length > 0) return true;
        else return false;
    }


//This function will verify if  there is a digit in the field
    function verifyFieldNumbers(value) {
        var matches = $(value).val().match(/\d+/g);
        if (matches == null) return true;
        else return false;
    }


//New function for verifying new dropdowns
function verifyDropdownEmpty(value) {
    if( $(value).data() !== '') return true;
    else return false;
}

    // $("#step2 .insider").hide(0);
    // $("#step3 .insider").hide(0);
    // $("#stepfail").hide(0);
    // $("#stepwork").hide(0);
    // $("#loader-gif").hide(0);
    // $("#usa-selector").hide();
    // $("#canada-selector").hide();
    // $('input[type="submit"]').removeAttr('disabled');


    $('.dropdown-select-country .dropdown-menu a').on('click', function() {
        var selectedValue = $(this).parent().data('value');

        if ( selectedValue == "CA" ) {
            $(".state").hide();
            $(".dropdown-us-states").hide();
            $(".dropdown-canada-states").css({'display' : 'inline-block'});
        }
        else if ( selectedValue == "US") {
            $(".state").hide();
            $(".dropdown-canada-states").hide();
            $(".dropdown-us-states").css({'display' : 'inline-block'});
        }
        else {
            $(".state").css({'display' : 'inline-block'});
            $(".dropdown-canada-states").hide();
            $(".dropdown-us-states").hide();
        }


    });


    // $("#btn1").on( "click", function() {
    //     $("#step1 .insider").slideUp(300);
    //     $("#step2 .insider").slideDown(300);
    // });

    // $(".btn2").on( "click", function() {
    //     if (checkfields() == true) {
    //
    //         // $("#step2 .insider").slideUp(300);
    //
    //         var total = $("[name=quantity]").val() * 25;
    //         var discount = false;
    //         if ($("[name=promo-code]").val().toUpperCase() == "14EPTW20")
    //         {
    //             total = $("[name=quantity]").val() * 20;
    //             discount = true;
    //             $("discount").val("1");
    //         }
    //         else if ($("[name=promo-code]").val().toUpperCase() == "14EAPC20")
    //         {
    //             total = $("[name=quantity]").val() * 20;
    //             discount = true;
    //             $("discount").val("1");
    //         }
    //         else if ($("[name=promo-code]").val().toUpperCase() == "14EPFB20")
    //         {
    //             total = $("[name=quantity]").val() * 20;
    //             discount = true;
    //             $("discount").val("1");
    //         }
    //         else if ($("[name=promo-code]").val().toUpperCase() == "VFEAPC20")
    //         {
    //
    //             total = $("[name=quantity]").val() * 25;
    //             total = total - (total * 0.2)
    //             discount = true;
    //             $("discount").val("1");
    //         }
    //         else if ($("[name=promo-code]").val().toUpperCase() == "FBEAPC20")
    //         {
    //
    //             total = $("[name=quantity]").val() * 25;
    //             total = total - (total * 0.2);
    //             discount = true;
    //             $("discount").val("1");
    //         }
    //
    //         var last4 = $( "[name=cc-number]" ).val().slice(-4);

            // $("#clientReceive").empty();
            // if( $("#sendcardby").val() == "Post" )
            // {
            //     $("#clientReceive").append( "The card will be delivered to your billing address" );
            //     //total = total + 5;
            // } else {
            //     $("#clientReceive").append( "A email will be sent with the voucher." );
            // }


            // $("#clientinfo").empty();
            // $("#clientinfo").append( $("[name=firstname]").val() + " " + $("[name=lastname]").val() + "<br />" + $("[name=email]").val() +  "<br />" + $("[name=address]").val() + "<br />" + $("[name=city]").val() + ", " + $("[name=state]").val() + ", " + $("[name=zip]").val() + "<br />" + $("[name=country]").val() );
            //
            // $("#paymentinfo").empty();
            // $("#paymentinfo").append("Credit Card Type : "  + $("[name=cc-type]").val() + "<br />" + "Card Holder Name : " + $("[name=cc-name]").val() + "<br />" + "Credit Card Number : XXXX-XXXX-XXXX-" + last4 + "<br />CVV : " + $("[name=cc-code]").val()  + "<br />" + "Expiry Date : " + $("[name=cc-exp-month]").val() + "/" + $("[name=cc-exp-year]").val() );
            //
            // $("#billingamount").empty();
            // $("#billingamount").append("Number of cards : " + $("[name=quantity]").val() + "<br />Destination : " + $("[name=destination]").val() );
            //
            // $("#totalprice").empty();
            //
            // if (discount)
            //     $("#totalprice").append("Total : $" + total + "    <span style='color:#ED1C24;'>Promotional price applied !<span>" );
            // else
            //     $("#totalprice").append("Total : $" + total);

            //[name=tcol1]


            // $("#step3 .insider").slideDown(300);
        // }
    // });

    // $("#btn3").on( "click", function() {
    //     $("#step3 .insider").slideUp(300);
    //     $("#step2 .insider").slideDown(300);
    //     $('#loader-gif').hide();
    // });
    // $("#btn3R").on( "click", function() {
    //
    //     $("#step2 .insider").slideUp(300);
    //     $("#stepfail ").slideUp(300);
    //     $("#step1 .insider").slideDown(300);
    //     $('#loader-gif').hide();
    // });



    /*$( .thisToolTip ).tooltip();*/

    $('.btn-confirm-order').click(function (e) {
        e.preventDefault();

        if (checkfields() == true) {

            // $( "#submitButton" ).hide();
            // $('input[type="submit"]').hide();
            $('.btn-confirm-order').hide();

            //$('input[type="submit"]').attr('disabled','disabled');
            $(".loader").show(100);

            var serializedForm = $("form").serialize();

            var selectedDestination = $(".dropdown-select-card").data('selected');
            var selectedCountry = $(".dropdown-select-country").data('selected');
            var selectedCreditCard = $(".dropdown-select-credit-card").data('selected');
            var selectedMonth = $(".dropdown-select-expiry-month").data('selected');
            var selectedYear = $(".dropdown-select-expiry-year").data('selected');



            var serializedDropdowns = '&destination='+selectedDestination+'&country=' + selectedCountry + '&cc-type=' + selectedCreditCard + '&cc-exp-month=' + selectedMonth + '&cc-exp-year=' + selectedYear;

            //In case of US or Canada, replace the state info from regular input with data from dropdowns
            if(selectedCountry == 'US'){
                var selectedState = $(".dropdown-us-states").data('selected');

                //remove old state info
                serializedForm = serializedForm.replace(/&state=[^&]*/,'');
                //add new state data from the dropdown
                serializedForm = serializedForm + '&stateUS='+selectedState;
            }
            if(selectedCountry == 'CA'){
                var selectedState = $(".dropdown-canada-states").data('selected');

                //remove old state info
                serializedForm = serializedForm.replace(/&state=[^&]*/,'');
                //add new state data from the dropdown
                serializedForm = serializedForm + '&stateCanada='+selectedState;
            }


            //Delivery option buttons, sendcardby
            if($('.btn-email').hasClass('selected')){
                serializedDeliveryOption = '&sendcardby=Email';
            }

            if($('.btn-traditional-mail').hasClass('selected')){
                serializedDeliveryOption = '&sendcardby=Post';
            }


            var serializedData = serializedForm + serializedDropdowns + serializedDeliveryOption;

            $.ajax({
                url : homeUrl + "/forms/formProcessor.php",
                type : 'POST',
                data : serializedData,
                // dataType: "text",
                success : function(data){
                    if(data.indexOf("work") != -1 )  {
                        window.location.href="/thank-you"
                    }
                },
                error: function(data, response){
                    $('.loader').hide();
                    $('.btn-confirm-order').show();

                    if(data.responseText.indexOf("work") != -1 )  {
                        window.location.href="/thank-you"
                    }
                    else {
                        errorAlert('', data.responseText);
                    }
                }

            });

            // $.post(homeUrl + "/forms/formProcessor.php", serializedData, function (data,status) {
            //
            //     console.log(data);
            //
            //     if (data.indexOf("work") > 0) {
            //         console.log('Success');
            //     }
            //     else {
            //
            //         console.log('showing error:',data);
            //
            //         errorAlert("", "<ul>" + data + "</ul>");
            //
            //         // $(".alert p").html("<ul>" + data + "</ul>");
            //         $('.loader').hide();
            //
            //     }
            //
            // });
            // return false; //On ne change pas de page

        }
    });





});