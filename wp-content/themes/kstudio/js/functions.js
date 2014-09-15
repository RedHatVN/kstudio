jQuery(document).ready(function ($) {
    // Show mobile-menu > 1000
    $(window).resize(function () {
        if ($(window).width() > 1000) {
            $(".nav-toggle").removeClass("active");
            $(".mobile-navigation").hide();
        }
    });
});