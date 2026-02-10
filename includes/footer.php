<footer class="modern-footer">
    <div class="footer-curve-top"></div>
    <div class="container position-relative z-2">
        <div class="row gy-5">
            <!-- Brand Section -->
            <div class="col-lg-4 col-md-12">
                <div class="footer-brand-fancy mb-4">
                    <img src="<?php echo $root ?? ''; ?>assets/images/logo.png" alt="MWC Logo"
                        class="footer-logo-main mb-3">
                    <h3 class="fw-bold text-white mb-2">Mumbai Women <span class="text-gradient-lavender">Coders</span>
                    </h3>
                    <div class="brand-line"></div>
                </div>
                <p class="footer-bio mb-4 opacity-75">
                    Building Mumbai's most powerful ecosystem for women in tech. Join our community of 2500+ members to
                    learn, lead, and innovate.
                </p>
                <div class="footer-social-cluster">
                    <a href="https://x.com/WomenCoders01" target="_blank" class="social-badge"><i
                            class="bi bi-twitter-x"></i></a>
                    <a href="https://www.linkedin.com/company/mumbai-women-coders/" target="_blank"
                        class="social-badge"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com/mumbaiwomencoders/" target="_blank" class="social-badge"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-4 col-12 text-center text-md-start">
                <div class="footer-nav-block d-flex flex-column align-items-center align-items-md-start">
                    <h5 class="footer-heading mb-4">Explore</h5>
                    <ul class="list-unstyled fancy-menu">
                        <li><a href="<?php echo $root ?? ''; ?>about.php">Our Story</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>events/">Tech Events</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>chapters/">City Chapters</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>spotlight">Spotlight</a></li>
                    </ul>
                </div>
            </div>

            <!-- Support -->
            <div class="col-lg-2 col-md-4 col-12 text-center text-md-start">
                <div class="footer-nav-block d-flex flex-column align-items-center align-items-md-start">
                    <h5 class="footer-heading mb-4">Community</h5>
                    <ul class="list-unstyled fancy-menu">
                        <li><a href="<?php echo $root ?? ''; ?>contact.php">Contact</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>support">Sponsorship</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>programs">Programs</a></li>
                        <li><a href="<?php echo $root ?? ''; ?>resources">Resources</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact & Newsletter -->
            <div class="col-lg-4 col-md-4 col-12 text-center text-md-start">
                <h5 class="footer-heading mb-4">Get in Touch</h5>
                <div class="contact-strip mb-4 d-flex flex-column align-items-center align-items-md-start">
                    <div
                        class="contact-item d-flex align-items-center mb-3 w-100 justify-content-center justify-content-md-start">
                        <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
                        <span class="small opacity-75">Mumbai, Maharashtra, India</span>
                    </div>
                    <div
                        class="contact-item d-flex align-items-center w-100 justify-content-center justify-content-md-start">
                        <div class="contact-icon"><i class="bi bi-envelope"></i></div>
                        <span class="small opacity-75">hello@mumbaiwomencoders.com</span>
                    </div>
                </div>

                <div class="newsletter-fancy shadow-lg">
                    <h6 class="mb-3 fw-bold">Newsletter</h6>
                    <form class="newsletter-form">
                        <div class="input-glass-group">
                            <input type="email" placeholder="Your email..." required>
                            <button type="submit"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom-fancy mt-5 pt-4">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="mb-0 small opacity-50">&copy; <?php echo date('Y'); ?> Mumbai Women Coders. Engineered
                        with <i class="bi bi-lightning-fill text-warning"></i> by the community.</p>
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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
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
    });
</script>

</body>

</html>