window.initMainJS = function () {
    const navbar = $('.navbar');
    const mobileOverlay = $('.mobile-overlay-menu');
    const toggleBtn = $('.mobile-nav-toggle');
    const closeBtn = $('.mobile-menu-close');

    // Remove existing event listeners if any to avoid duplicates on re-renders
    $(window).off('scroll.mainjs');
    toggleBtn.off('click');
    closeBtn.off('click');
    $('.mobile-nav-links a').off('click');
    $('.mobile-dropdown-toggle').off('click');

    // Navbar Scroll (Desktop)
    $(window).on('scroll.mainjs', function () {
        const scrollPos = $(window).scrollTop();
        const heroSection = $('.hero-section');
        const heroHeight = heroSection.length ? heroSection.outerHeight() - 100 : 400;

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

    // Mobile Dropdown Toggle
    $('.mobile-dropdown-toggle').on('click', function (e) {
        e.preventDefault();
        e.stopPropagation();

        const $this = $(this);
        const $menu = $this.parent().next('.mobile-dropdown-menu');

        $this.toggleClass('expanded');
        $menu.slideToggle(300);
    });

    $(window).trigger('scroll.mainjs');
};

$(document).ready(function () {
    // Initial call might fail if React hasn't rendered yet
    setTimeout(() => {
        if (window.initMainJS) window.initMainJS();
    }, 500);
});
