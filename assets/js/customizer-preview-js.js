(function ($) {


    /*===========================================
     * 01 - General
     ============================================*/

    /* Blog list Thumbnail style */
    wp.customize('asycom_global_bloglist_thumbnail', function (value) {
        value.bind(function (newVal) {

            $('.bw-post__img').css("background-size", newVal);
        });
    });




    /*===========================================
     * 02 - Header
     ============================================*/

    // Header alignment
    wp.customize('asycom_header_alignment', function (value) {
        value.bind(function (newVal) {

            $('#bw-navbar').removeClass("bw-header-right-align").removeClass("bw-header-center-align").removeClass("bw-header-left-align");
            var newHeaderClass = "bw-header-" + newVal + "-align";
            $('#bw-navbar').addClass(newHeaderClass);
        });
    });


    //Header Background Color
    wp.customize('asycom_header_background_color', function (value) {
        value.bind(function (newVal) {

            $('#bw-navbar').css("background-color", newVal);

        });
    });

    //asycom_header_nav_color
    wp.customize('asycom_header_nav_color', function (value) {
        value.bind(function (newVal) {
            $('body ul.slimmenu li.menu-item a').css("color", newVal);
        });
    });


    /*===========================================
     * 03 - Hero
     ============================================*/

    //Hero Title
    wp.customize('asycom_main_hero_title', function (value) {
        value.bind(function (newVal) {
            $('.bw-hero .bw-hero__title').html(newVal);
        });
    });


    //Hero Sub-Title
    wp.customize('asycom_hero_sub_title', function (value) {
        value.bind(function (newVal) {
            $('.bw-hero .bw-hero__desc').html(newVal);
        });
    });

    //Hero bg image asycom_hero_bg
    wp.customize('asycom_hero_bg', function (value) {
        value.bind(function (newVal) {
            if (newVal !== '') {
                $('.bw-hero').css("background-image", "url(" + newVal + ")");
            } else {
                $('.bw-hero').css("background-image", "none");
            }
        });
    });


    //Hero REad More Button Text asycom_hero_btn_txt
    wp.customize('asycom_hero_btn_txt', function (value) {
        value.bind(function (newVal) {

            $('.bw-hero .bw-hero__btn').html(newVal);

        });
    });

    //Hero REad More Button URL
    wp.customize('asycom_hero_btn_url', function (value) {
        value.bind(function (newVal) {

            $('.bw-hero .bw-hero__btn').attr("href", newVal);

        });
    });

    /*===========================================
     * 04 - Services
     ============================================*/


//Services Title
    wp.customize('asycom_main_services_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-services .bw-section__title').html(newVal);
        });
    });


    //Services Sub-Title
    wp.customize('asycom_services_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-services .bw-section__description').html(newVal);
        });
    });


    /*===========================================
     * 05 - About
     ============================================*/

    //About Us Main Title
    wp.customize('asycom_main_about_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-about-us .bw-section__title').html(newVal);
        });
    });


    //About Us Sub-Title
    wp.customize('asycom_about_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-about-us .bw-section__description').html(newVal);
        });
    });


    //asycom_about_bg
    wp.customize('asycom_about_bg', function (value) {
        value.bind(function (newVal) {
            if (newVal !== '') {
                $('#bw-about-us').css("background-image", "url(" + newVal + ")");
            } else {
                $('#bw-about-us').css("background-image", "none");
            }
        });
    });


    //bw-about-us__overlay asycom_about_bg_color
    wp.customize('asycom_about_bg_color', function (value) {
        value.bind(function (newVal) {

            $('#bw-about-us .bw-about-us__overlay').css("background-color", newVal);

        });
    });


    //asycom_about_img
    wp.customize('asycom_about_img', function (value) {
        value.bind(function (newVal) {
            if (newVal !== '') {
                $('.bw-about-us__img img').attr("src", newVal);
            } else {
                $('.bw-about-us__img img').attr("src", "");
            }
        });
    });


    //asycom_about_skill_title_1
    wp.customize('asycom_about_skill_title_1', function (value) {
        value.bind(function (newVal) {
            $('#bw-about-us .bw-about-us__skill--1 .bw-about-us__skill-title').html(newVal);
        });
    });

    //asycom_about_skill_title_2
    wp.customize('asycom_about_skill_title_2', function (value) {
        value.bind(function (newVal) {
            $('#bw-about-us .bw-about-us__skill--2 .bw-about-us__skill-title').html(newVal);
        });
    });

    //asycom_about_skill_title_3
    wp.customize('asycom_about_skill_title_3', function (value) {
        value.bind(function (newVal) {
            $('#bw-about-us .bw-about-us__skill--3 .bw-about-us__skill-title').html(newVal);
        });
    });

    //asycom_about_skill_title_4
    wp.customize('asycom_about_skill_title_4', function (value) {
        value.bind(function (newVal) {
            $('#bw-about-us .bw-about-us__skill--4 .bw-about-us__skill-title').html(newVal);
        });
    });






    /*===========================================
     * 06 - Our Portfolio
     ============================================*/

//asycom_main_portfolio_title
    wp.customize('asycom_main_portfolio_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-portfolio .bw-section__title').html(newVal);
        });
    });


//asycom_portfolio_sub_title
    wp.customize('asycom_portfolio_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-portfolio .bw-section__description').html(newVal);
        });
    });

//asycom_portfolio_bg
    wp.customize('asycom_portfolio_bg', function (value) {
        value.bind(function (newVal) {
            if (newVal !== '') {
                $('#bw-portfolio').css("background-image", "url(" + newVal + ")");
            } else {
                $('#bw-portfolio').css("background-image", "none");
            }
        });
    });

//asycom_portfolio_btn_text
    wp.customize('asycom_portfolio_btn_text', function (value) {
        value.bind(function (newVal) {

            $('#bw-portfolio .bw-hero__btn--portfolio').html(newVal);

        });
    });


//asycom_portfolio_btn_url
    wp.customize('asycom_portfolio_btn_url', function (value) {
        value.bind(function (newVal) {

            $('#bw-portfolio .bw-hero__btn--portfolio').attr("href", newVal);

        });
    });


    /*===========================================
     * 07 - Blog
     ============================================*/
    //asycom_main_blog_title
    wp.customize('asycom_main_blog_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-blog .bw-section__title').html(newVal);
        });
    });


//asycom_blog_sub_title
    wp.customize('asycom_blog_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-blog .bw-section__description').html(newVal);
        });
    });

//asycom_blog_bg
    wp.customize('asycom_blog_bg', function (value) {
        value.bind(function (newVal) {
            if (newVal !== '') {
                $('#bw-blog').css("background-image", "url(" + newVal + ")");
            } else {
                $('#bw-blog').css("background-image", "none");
            }
        });
    });

//asycom_blog_btn_text
    wp.customize('asycom_blog_btn_text', function (value) {
        value.bind(function (newVal) {

            $('#bw-blog .bw-hero__btn--blog').html(newVal);

        });
    });


//asycom_blog_btn_url
    wp.customize('asycom_blog_btn_url', function (value) {
        value.bind(function (newVal) {

            $('#bw-blog .bw-hero__btn--blog').attr("href", newVal);

        });
    });


    /*===========================================
     * 08 - Testimonials
     ============================================*/

//asycom_main_testimonial_title
    wp.customize('asycom_main_testimonial_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-testimonials .bw-section__title').html(newVal);
        });
    });


//asycom_testimonial_sub_title
    wp.customize('asycom_testimonial_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-testimonials .bw-section__description').html(newVal);
        });
    });



    /*===========================================
     * 09 - CTA
     ============================================*/

    //asycom_cta_bg
    wp.customize('asycom_cta_bg', function (value) {
        value.bind(function (newVal) {
            if (newVal !== '') {
                $('#bw-cta').css("background-image", "url(" + newVal + ")");
            } else {
                $('#bw-cta').css("background-image", "none");
            }
        });
    });

    //asycom_cta_over_bg_color
    wp.customize('asycom_cta_over_bg_color', function (value) {
        value.bind(function (newVal) {

            $('#bw-cta .bw-call-to-action__overlay').css("background-color", newVal);

        });
    });

    //asycom_cta_btn_text
    wp.customize('asycom_cta_btn_text', function (value) {
        value.bind(function (newVal) {

            $('#bw-cta .bw-call-to-action__btn').html(newVal);

        });
    });

    /*===========================================
     * 10 - Team
     *===========================================*/
    
    //asycom_main_team_title
    wp.customize('asycom_main_team_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-our-team .bw-section__title').html(newVal);
        });
    });


    //asycom_team_sub_title
    wp.customize('asycom_team_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-our-team .bw-section__description').html(newVal);
        });
    });
    
    /*===========================================
     * 10 - Client
     ============================================*/

     //asycom_main_client_title
    wp.customize('asycom_main_client_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-ourclient .bw-section__title').html(newVal);
        });
    });


    //asycom_client_sub_title
    wp.customize('asycom_client_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-ourclient .bw-section__description').html(newVal);
        });
    });

    /*===========================================
     * 11 - Contact
     ============================================*/
    
    //asycom_main_client_title
    wp.customize('asycom_main_client_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-oursocialnetworks .bw-section__title').html(newVal);
        });
    });

    //asycom_client_sub_title
    wp.customize('asycom_client_sub_title', function (value) {
        value.bind(function (newVal) {
            $('#bw-oursocialnetworks .bw-section__description').html(newVal);
        });
    });
    

})(jQuery);