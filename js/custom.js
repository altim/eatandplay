$(document).ready(function(){

    $("body").magnificPopup({
        delegate: '.video',
        type: 'iframe',
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        }
    });

});