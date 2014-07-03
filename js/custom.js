/*  JQUERY   */
$(document).ready(function() {

    $('#mobile-nav-btn').click(function() {

        if ($('#page-wrapper').hasClass("slide")) {
            $('#page-wrapper').removeClass("slide");
        } else {
            $('#page-wrapper').addClass("slide");
            $('#page-wrapper').focus();
        }

    });

});





