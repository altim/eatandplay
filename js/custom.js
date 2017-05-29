$(document).ready(function(){

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


    //Logo slider
    $('.logos-slider').bxSlider({
        minSlider:1,
        maxSlides:10,
        sliderMargin: 75,
        infiniteLoop: true,
        touchEnabled : false,
        pager : false,
        controls: true,
        auto : true,
        pause: 5000,
        nextSelector : '.logo-next',
        prevSelector : '.logo-prev'
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
    })


});