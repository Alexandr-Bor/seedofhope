jQuery(function($) {
    "use strict";

    if( $('.kapi_slick_header').length ){
        $('.kapi_slick_header').slick({
            autoplay: true,
            arrows: false,
        });
    }

    /* Scrolls down, hide, scrolls up, shows navigation bar + background */
    ( function () {
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
    })();

    /* scroolly effects */
    ( function () {
        if ( screen.width > 782 ) {
            $('.leader_mission_title').scroolly([
                {
                    from: 'con-top = vp-bottom',
                    to: 'con-bottom = vp-top',
                    cssFrom:{'margin-top':'-1px'},
                    cssTo:{'margin-top':'-300px'},
                }
            ]);
        } else {
            $('.leader_mission_title').css({ 'margin-top' : '-77px', 'margin-bottom' : '100px' });
        }

        if ( screen.width > 500 ) {
            $('.site_container .active_work_container .work_item_container-1 .content_of_item .right').scroolly([
                {
                    from: 'con-top = vp-bottom',
                    to: 'con-bottom = vp-top',
                    cssFrom:{'position':'relative', top :'-1px'},
                    cssTo:{'position':'relative', top :'-200px'},
                },
            ]);
            $('.site_container .active_work_container .work_item_container-4 .content_of_item .right .img_3').scroolly([
                {
                    from: 'con-top = vp-bottom',
                    to: 'con-bottom = vp-top',
                    cssFrom:{ top :'-1px'},
                    cssTo:{ top :'-300px'},
                },
            ]);
        }
        $('.leader_box .img_box img').scroolly([
            {
                from: 'el-top = vp-bottom - 100px',
                to: 'el-bottom = vp-bottom - 100px',
                cssFrom:{ opacity :'0.1'},
                cssTo:{ opacity :'1'}
            },
            {
                from: 'el-top = vp-top + 100px',
                to:   'el-bottom = vp-top + 100px',
                cssFrom:{ opacity :'1'},
                cssTo:{ opacity :'0.1'}
            }
        ]);


        $('.description_box .signature').scroolly([
            {
                from: 'el-center = vp-center - 280',
                to: 'el-top = vp-top',
                cssFrom:{ position :'relative', left :'1px'},
                cssTo:{ position :'relative', left :'500px'},
            },
        ]);


        $('.site_container .active_work_container .work_item_container-2 .content_of_item .right').scroolly([
            {
                from: 'el-top = vp-bottom - 100px',
                to: 'el-bottom = vp-bottom - 100px',
                cssFrom:{ opacity :'0.1'},
                cssTo:{ opacity :'1'}
            },
            {
                from: 'el-top = vp-top + 100px',
                to:   'el-bottom = vp-top + 100px',
                cssFrom:{ opacity :'1'},
                cssTo:{ opacity :'0.1'}
            }
        ]);
        $('.site_container .active_work_container .work_item_container-3 .content_of_item .right').scroolly([
            {
                from: 'con-top = vp-bottom',
                to: 'con-bottom = vp-top',
                cssFrom:{ position :'relative', top :'220px'},
                cssTo:{ position :'relative', top :'1px'},
            },
        ]);

        $('.site_container .active_work_container .work_item_container-5 .content_of_item .right .img_2').scroolly([
            {
                from: 'con-top = vp-bottom',
                to: 'con-bottom = vp-top',
                cssFrom:{ top :'520px'},
                cssTo:{ top:'100px'},
            },
        ]);
        $('.site_container .active_work_container .work_item_container-5 .content_of_item .right .img_3').scroolly([
            {
                from: 'con-top = vp-bottom',
                to: 'con-bottom = vp-top',
                cssFrom:{ position : 'absolute', top :'100px'},
                cssTo:{ position : 'absolute', top :'1px'},
            },
        ]);
    })();

    /* Close Succes Conteiner */
    ( function () {
        console.log('44');
        if( $('.success_container').length ){
            console.log('11');
            $('.success_container .close_box').on('click', function (e) {
                $('.success_container').css({'display':'none'});
                $('body').removeClass('background_fixed');
            });
        }
    })();


});
