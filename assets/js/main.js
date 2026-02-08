$(document).ready(function () {
    const navbar = $('.navbar');
    const mobileOverlay = $('.mobile-overlay-menu');
    const toggleBtn = $('.mobile-nav-toggle');
    const closeBtn = $('.mobile-menu-close');

    // Navbar Scroll (Desktop)
    $(window).on('scroll', function () {
        const scrollPos = $(window).scrollTop();
        const heroHeight = $('.hero-section').outerHeight() - 100; // Trigger slightly before end of hero section

        if (scrollPos > heroHeight) {
            navbar.addClass('scrolled shadow-lg');
        } else {
            navbar.removeClass('scrolled shadow-lg');
        }

        // Fade up animations
        $('.fade-up-trigger').each(function () {
            const topOfElement = $(this).offset().top;
            const bottomOfWindow = $(window).scrollTop() + $(window).height();

            if (bottomOfWindow > topOfElement + 100) {
                $(this).addClass('animate-fade-up');
            }
        });
    });

    // Mobile Menu Interaction
    toggleBtn.on('click', function () {
        mobileOverlay.addClass('active');
        $('body').css('overflow', 'hidden'); // Prevent scroll when menu is open
    });

    closeBtn.on('click', function () {
        mobileOverlay.removeClass('active');
        $('body').css('overflow', 'auto');
    });

    // Close on link click
    $('.mobile-nav-links a').on('click', function () {
        mobileOverlay.removeClass('active');
        $('body').css('overflow', 'auto');
    });

    $(window).trigger('scroll');
});
