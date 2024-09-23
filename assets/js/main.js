

// Navigation Scripts to Show Header on Scroll-Up
jQuery(document).ready(function ($) {



    inView('.bw-service')
            .on('enter', el => {
                $('.bw-service').addClass("animated slideInUp");

            });



    inView('.bw-about-us__skill-title')
            .on('enter', el => {

                $("#circle-1").percircle();
                $("#circle-2").percircle();
                $("#circle-3").percircle();
                $("#circle-4").percircle();

            });


    inView('.bw-section__title')
            .on('enter', el => {

                $(el).addClass("animated pulse");
                $('.bw-section__description').addClass("animated pulse");

            });


    inView('.bw-testimonial-item')
            .on('enter', el => {
                $(el).addClass("animated fadeInLeft");
            });



    inView('.bw-team-item')
            .on('enter', el => {
                $(el).addClass("animated fadeInUp");
            });


//bw-call-to-action bw-section
    inView('.bw-call-to-action')
            .on('enter', el => {
                $(".bw-call-to-action__title").addClass("animated fadeInUp delay-03s ");
                $(".bw-call-to-action__description").addClass("animated fadeInUp delay-05s ");
                $(".bw-call-to-action__btn-container").addClass("animated fadeInUp delay-07s ");
            });



    var MQL = 1170;

    //search
    $('a[href="#bw-search"]').on('click', function (event) {
        event.preventDefault();
        $('#bw-search').addClass('bw-open');
        $('#bw-search > form > input[type="search"]').focus();
    });

    $('#bw-search, #bw-search button.bw-close').on('click keyup', function (event) {
        if (event.target == this || event.target.className == 'bw-close' || event.keyCode == 27) {
            $(this).removeClass('bw-open');
        }
    });



    //responsive menu
    $('.slimmenu').slimmenu({
                resizeWidth: '768',
                collapserTitle: '',
                animSpeed: 'medium',
                indentChildren: true,
                childrenIndenter: '&raquo;'
            });






    $('.bw-masonry-blog-grid').masonry({
        itemSelector: '.bw-post-item-selector',
        columnWidth: '.bw-grid-sizer',
        percentPosition: true
    }).masonry('reload');

    function asycom_fix_blog_height() {
        if (jQuery('#bw-blog .bw-masonry-blog-grid').length) {
            jQuery('#bw-blog .bw-masonry-blog-grid').css('min-height', jQuery('.bw-post-item').height() + 50);
        }
    }
    setTimeout(asycom_fix_blog_height, 1000);

});
