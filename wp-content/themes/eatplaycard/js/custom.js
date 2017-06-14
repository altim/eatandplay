jQuery(document).ready(function($) {

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
            scrollTop: $('#hero-image').height()+"px"
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
            scrollTop:  $('#filter-bar').offset().top -122
        },800,"swing");
    });


    //Filter bar
    $('.filter-menu li a').on('click',function(e){
        e.preventDefault();
        $('.filter-menu li a.active').removeClass('active');
        $(this).addClass('active');

        var selectedValue = $(this).data('type');

        //hide all
        $('.merchant-item').hide();
        if(selectedValue === 'all'){
            $('.merchant-item').fadeIn(400,'swing');
        }
        else {
            $('.merchant-item.' + selectedValue).fadeIn(400, 'swing');
        }

         $('html,body').animate({
            scrollTop:  $('#filter-bar').offset().top -122
        },800,"swing");

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
        if(!$(this).hasClass('btn-dropdown-close')) {
            $(this).parent().parent().parent().parent().find('.btn-dropdown').html(selectedItem);
        }
        $(this).parent().parent().parent().parent().removeClass('open').addClass('selected');
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
       $(this).parent().parent().slideUp(400,'swing');
       $(this).parent().parent().parent().find('.btn-delivery').removeClass('open').addClass('selected');
    });

    $('.back-to-top').on('click',function(e){
       e.preventDefault();
       $('html,body').animate({
            scrollTop:  $('#top').offset().top
        },800,"swing");
    });

});