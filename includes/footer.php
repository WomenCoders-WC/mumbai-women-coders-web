<footer class="modern-footer">
    <div class="footer-curve-top"></div>
    <div class="container position-relative z-2">
        <div class="row gy-5">
            <!-- Brand Section -->
            <div class="col-lg-4 col-md-12">
                <div class="footer-brand-fancy mb-4">
                    <img src="<?php echo $root ?? ''; ?>assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo"
                        class="footer-logo-main mb-3">
                    <h3 class="fw-bold text-white mb-2">Women <span class="text-gradient-lavender">Coders</span>
                    </h3>
                    <div class="brand-line"></div>
                </div>
                <p class="footer-bio mb-4 opacity-75">
                    Building the most powerful ecosystem for women in tech. Join our community of 2500+ members to
                    learn, lead, and innovate.
                </p>
                <div class="footer-social-cluster">

                    <a href="https://www.linkedin.com/company/mumbai-women-coders/" target="_blank"
                        class="social-badge"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/mumbaiwomencoders/" target="_blank" class="social-badge"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://meetup.com/mumbai-women-coders/" target="_blank" class="social-badge"><i
                            class="fa-brands fa-meetup"></i></a>
                    <a href="https://x.com/WomenCoders01" target="_blank" class="social-badge"><i
                            class="fa-brands fa-x-twitter"></i></a>

                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-4 col-12 text-center text-md-start">
                <div class="footer-nav-block d-flex flex-column align-items-center align-items-md-start">
                    <h5 class="footer-heading mb-4">Explore</h5>
                    <ul class="list-unstyled fancy-menu">
                        <li><a href="<?php echo $root ?? ''; ?>index.php">Home</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>about.php">About Us</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>events.php">Events</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>chapters/">City Chapters</a></li>
                    </ul>
                </div>
            </div>

            <!-- Support -->
            <div class="col-lg-2 col-md-4 col-12 text-center text-md-start">
                <div class="footer-nav-block d-flex flex-column align-items-center align-items-md-start">
                    <h5 class="footer-heading mb-4">Community</h5>
                    <ul class="list-unstyled fancy-menu">
                        <li><a href="<?php echo $root ?? ''; ?>chapters/start.php">Start a Chapter</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>support-us.php">Support Us</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>contact.php">Contact Us</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>sitemap.php">Sitemap</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact & Newsletter -->
            <div class="col-lg-4 col-md-4 col-12 text-center text-md-start">
                <h5 class="footer-heading mb-4">Get in Touch</h5>
                <div class="contact-strip mb-4 d-flex flex-column align-items-center align-items-md-start">
                    <div
                        class="contact-item d-flex align-items-center mb-3 w-100 justify-content-center justify-content-md-start">
                        <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                        <span class="small opacity-75">Global Community</span>
                    </div>
                    <div
                        class="contact-item d-flex align-items-center w-100 justify-content-center justify-content-md-start">
                        <div class="contact-icon"><i class="fa-regular fa-envelope"></i></div>
                        <span class="small opacity-75">hello@womencoders.com</span>
                    </div>
                </div>

                <div class="newsletter-fancy shadow-lg">
                    <h6 class="mb-3 fw-bold text-white">Newsletter</h6>
                    <form class="newsletter-form">
                        <div class="input-glass-group">
                            <input type="email" placeholder="Your email..." required>
                            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom-fancy mt-5 pt-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0 small opacity-50">&copy; <?php echo date('Y'); ?> Women Coders. Engineered
                        with <i class="fa-solid fa-bolt text-warning"></i> by the community.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-legal-links">
                        <a href="<?php echo $root ?? ''; ?>legal/privacy-policy.php">Privacy</a>
                        <span class="dot"></span>
                        <a href="#">Terms</a>
                        <span class="dot"></span>
                        <a href="<?php echo $root ?? ''; ?>legal/code-of-conduct.php">Code of Conduct</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Support Us Creative Popup -->
<div class="support-popup-overlay" id="supportUsPopup">
    <div class="support-popup-card shadow-premium border-lavender">
        <button class="support-popup-close" id="closeSupportPopup" aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <div class="support-popup-icon mb-3">
            <div class="mx-auto support-popup-logo-container">
                <img src="<?php echo $root ?? ''; ?>assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo"
                    class="support-popup-logo-img">
            </div>
        </div>
        <h4 class="fw-bold mb-2 text-dark">Empower Women in Tech</h4>
        <p class="small text-muted mb-4 px-2">
            Help us build the most powerful ecosystem for women coders. Your support helps us host more events,
            workshops, and build a stronger community!
        </p>
        <a href="https://forms.gle/te5xWA5ZcHABkr3A9" target="_blank" class="btn btn-premium w-100 mb-2">
            Support Us Today <i class="fa-solid fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>

<!-- Scripts -->
<script src="<?php echo $root ?? ''; ?>assets/js/jquery-3.7.1.min.js"></script>
<script src="<?php echo $root ?? ''; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $root ?? ''; ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo $root ?? ''; ?>assets/js/main.js"></script>

<script>
    $(document).ready(function () {
        new Swiper('.speaker-swiper', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 5,
                stretch: 0,
                depth: 100,
                modifier: 2,
                slideShadows: false,
            },
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            speed: 1000,
            mousewheel: {
                invert: false,
                forceToAxis: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });

        // Support Us Popup Logic
        const supportPopup = document.getElementById('supportUsPopup');
        const closeSupportBtn = document.getElementById('closeSupportPopup');

        if (supportPopup && closeSupportBtn) {
            function showSupportPopup() {
                supportPopup.classList.add('show');
            }

            function checkAndShowSupportPopup() {
                const lastClosed = sessionStorage.getItem('supportPopupClosedTime');
                const now = Date.now();

                if (!lastClosed) {
                    // Show after 20 seconds (20000 ms)
                    setTimeout(showSupportPopup, 20000);
                } else {
                    // Check if 10 min (600,000 ms) has passed
                    const timePassed = now - parseInt(lastClosed);
                    if (timePassed > 600000) {
                        showSupportPopup();
                    } else {
                        setTimeout(showSupportPopup, 600000 - timePassed);
                    }
                }
            }

            closeSupportBtn.addEventListener('click', function () {
                supportPopup.classList.remove('show');
                sessionStorage.setItem('supportPopupClosedTime', Date.now().toString());
                // Schedule next showing in 10 minutes (600000 ms)
                setTimeout(showSupportPopup, 600000);
            });

            checkAndShowSupportPopup();
        }
    });
</script>

</body>

</html>