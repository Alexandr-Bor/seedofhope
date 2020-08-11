jQuery(function($) {
    "use strict";

    if( $('.kapi_slick_header').length ){
        $('.kapi_slick_header').slick({
            autoplay: true,
            arrows: false,
        });
    }

    /* Scrolls down, hide, scrolls up, shows navigation bar + background */
    let prevScrollpos = window.pageYOffset;
    let elemMenu = document.getElementById("header_top_line");
    window.onscroll = function() {
        // background
        if (prevScrollpos < 800) { elemMenu.style.background = "rgba(0,0,0,0.1)";} else { elemMenu.style.background = "rgba(0,0,0,0.6)";}
        // hide, shows
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos < currentScrollPos) { elemMenu.style.top = "-120px";} else { elemMenu.style.top = "0";}
        prevScrollpos = currentScrollPos;
    }


});
