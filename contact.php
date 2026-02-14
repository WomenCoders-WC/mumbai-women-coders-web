<?php
$pageTitle = "Contact Us";
$metaDescription = "Have questions? Reach out to Mumbai Women Coders for partnership inquiries, event information, or community support.";
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Contact Hero Section -->
<header class="hero-section contact-header d-flex align-items-center">
    <div class="hero-bg-1"></div>
    <div class="hero-bg-2"></div>

    <div class="container hero-container-inner position-relative z-2">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 animate__animated animate__fadeIn">
                <!-- Fancy Breadcrumb -->
                <nav aria-label="breadcrumb" class="d-inline-block mb-3">
                    <ol
                        class="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                        <li class="breadcrumb-item"><a href="index.php"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Contact</li>
                    </ol>
                </nav>

                <h1 class="display-1 fw-bolder mb-3 lh-1">
                    Let's <span class="text-gradient">Connect</span>
                </h1>
                <p class="lead mb-5 hero-desc">
                    Whether you have a question about events, want to partner with us, or just want to say hello, we're
                    here to help.
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="#contact-categories" class="btn btn-premium btn-lg">General Inquiry</a>
                    <a href="support-us.php" class="btn btn-m-outline btn-lg">Partnership</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Contact Categories Section -->
<section id="contact-categories" class="py-6 bg-surface-variant position-relative">
    <div class="container">
        <div class="row g-4 justify-content-center">

            <!-- General Inquiries -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp delay-1">
                <div
                    class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 backdrop-blur rounded-4">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div
                            class="icon-box mb-4 rounded-circle bg-soft-primary d-flex align-items-center justify-content-center icon-80">
                            <i class="bi bi-chat-dots text-primary fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">General Inquiries</h4>
                        <p class="text-muted small mb-4 flex-grow-1">
                            Have questions about our mission, events, or community guidelines? We're here to answer
                            them.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank"
                            class="btn btn-outline-primary rounded-pill px-4 w-100 fw-bold group-hover-btn">
                            Fill Form <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-muted fs-7">Response time: ~24 hours</small>
                    </div>
                </div>
            </div>

            <!-- Partnerships -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp delay-2">
                <div
                    class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 bg-dark-premium text-white theme-gradient-border rounded-4">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div
                            class="icon-box mb-4 rounded-circle bg-white bg-opacity-10 d-flex align-items-center justify-content-center icon-80">
                            <i class="bi bi-briefcase text-gradient fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-white">Partnerships</h4>
                        <p class="text-white-50 small mb-4 flex-grow-1">
                            Interested in sponsoring an event or collaborating on a workshop? Let's build something
                            together.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank"
                            class="btn btn-light rounded-pill px-4 w-100 fw-bold border-0 text-primary">
                            Partner With Us <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-white-50 fs-7">For organizations & brands</small>
                    </div>
                </div>
            </div>

            <!-- Chapter Support -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp delay-3">
                <div
                    class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 backdrop-blur rounded-4">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div
                            class="icon-box mb-4 rounded-circle bg-soft-info d-flex align-items-center justify-content-center icon-80">
                            <i class="bi bi-people text-info fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Chapter Support</h4>
                        <p class="text-muted small mb-4 flex-grow-1">
                            Need help joining a chapter or want to start a new one in your area? Get specialized
                            support.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank"
                            class="btn btn-outline-info rounded-pill px-4 w-100 fw-bold">
                            Get Support <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-muted fs-7">For current & new members</small>
                    </div>
                </div>
            </div>

            <!-- Media & Press -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp delay-4">
                <div
                    class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 backdrop-blur rounded-4">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div
                            class="icon-box mb-4 rounded-circle bg-soft-danger d-flex align-items-center justify-content-center icon-80">
                            <i class="bi bi-newspaper text-danger fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Media & Press</h4>
                        <p class="text-muted small mb-4 flex-grow-1">
                            For press inquiries, tough questions, interviews, or media kit requests.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank"
                            class="btn btn-outline-danger rounded-pill px-4 w-100 fw-bold">
                            Media Contact <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-muted fs-7">For journalists & bloggers</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Visual Section / "Some Images" -->
<section class="py-5 bg-white overflow-hidden">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2 animate__animated animate__fadeInRight">
                <div class="position-relative">
                    <img src="assets/images/women-coding-community.png" alt="Community Interaction"
                        class="img-fluid rounded-4 shadow-lg position-relative z-1">
                    <!-- Decorative elements behind image -->
                    <div
                        class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle opacity-10 blob-contact-1">
                    </div>
                    <div
                        class="position-absolute bottom-0 end-0 translate-middle bg-secondary rounded-circle opacity-10 blob-contact-2">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 animate__animated animate__fadeInLeft">
                <h2 class="display-5 fw-bold mb-4">Build Connections That Matter</h2>
                <p class="lead text-muted mb-4">
                    Our community thrives on communication and collaboration. Whether online or offline, every
                    conversation is an opportunity to learn and grow.
                </p>
                <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center text-primary">
                        <i class="bi bi-geo-alt fs-3 me-2"></i>
                        <div>
                            <span class="d-block fw-bold text-dark">Mumbai, India</span>
                            <small class="text-muted">Headquarters</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center text-primary">
                        <i class="bi bi-envelope fs-3 me-2"></i>
                        <div>
                            <span class="d-block fw-bold text-dark">contact@mwc.org</span>
                            <small class="text-muted">Email Support</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Speaker CFP Section -->
<section id="speaker-cfp" class="py-6 bg-gradient-cosmic position-relative overflow-hidden">
    <!-- Animated background elements (Cosmic Theme) -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden pointer-none z-1">
        <div class="position-absolute bg-primary rounded-circle opacity-10 animate-pulse blur-80 blob-speaker-1"></div>
        <div class="position-absolute bg-secondary rounded-circle opacity-10 animate-pulse blur-60 blob-speaker-2">
        </div>
    </div>

    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 fade-up-trigger">
                <div class="speaker-illustration position-relative">
                    <div class="card p-5 rounded-4 shadow-premium">
                        <div class="d-flex align-items-center gap-4 mb-4">
                            <div
                                class="icon-box-speaker mb-0 rounded-circle d-flex align-items-center justify-content-center icon-80 flex-shrink-0 shadow-sm">
                                <i class="bi bi-mic text-gradient fs-1"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Become a <br><span class="text-gradient">Speaker</span>
                                </h3>
                                <p class="mb-0 text-lavender-speaker">Share your expertise</p>
                            </div>
                        </div>
                        <p class="mb-4 fs-5 speaker-desc">
                            We are always looking for passionate speakers to share their knowledge with our community.
                            Whether you're a seasoned pro or a first-time speaker, we provide a supportive platform for
                            your voice.
                        </p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2 speaker-feature">
                                    <i class="bi bi-check2-circle text-gradient fs-5"></i>
                                    <span>Technical Workshops</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2 speaker-feature">
                                    <i class="bi bi-check2-circle text-gradient fs-5"></i>
                                    <span>Career Talks</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2 speaker-feature">
                                    <i class="bi bi-check2-circle text-gradient fs-5"></i>
                                    <span>Panel Discussions</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2 speaker-feature">
                                    <i class="bi bi-check2-circle text-gradient fs-5"></i>
                                    <span>Lightning Talks</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-up-trigger delay-1">
                <div class="ps-lg-5">
                    <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Call for Proposals</h6>
                    <h2 class="display-4 fw-bold text-white mb-4">Your Voice <br><span
                            class="text-gradient">Matters</span>
                    </h2>
                    <p class="lead text-white-50 mb-5">
                        Inspire the next generation of women in tech. Submit your proposal today and help us build a
                        more diverse and knowledgeable community.
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScRTcS2iWIo0bYL8GLdoczm5Baf6vEHvxe_ZwuvAxBP-6oRDg/viewform"
                            target="_blank" class="btn btn-premium btn-lg">
                            Submit Proposal <i class="bi bi-send ms-2"></i>
                        </a>
                        <a href="events.php" class="btn btn-m-outline btn-lg">View Past Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join as Volunteer Section -->
<section id="join-volunteer" class="py-6 bg-white position-relative overflow-hidden">
    <div class="container position-relative z-2">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2 animate__animated animate__fadeInRight">
                <div class="position-relative">
                    <img src="assets/images/volunteer.png" alt="MWC Volunteers Team"
                        class="img-fluid rounded-4 shadow-lg position-relative z-1 hover-lift volunteer-img-rotate">
                    <!-- Creative Shapes -->
                    <div class="position-absolute top-0 end-0 translate-middle bg-warning rounded-circle opacity-10 blur-80 blob-volunteer-1"></div>
                    <div class="position-absolute bottom-0 start-0 translate-middle bg-info rounded-circle opacity-10 blur-60 blob-volunteer-2"></div>
                    <div class="position-absolute top-50 start-50 translate-middle border border-primary opacity-10 rounded-circle volunteer-circle-border"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 animate__animated animate__fadeInLeft">
                <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Community First</h6>
                <h2 class="display-4 fw-bold mb-4">Join as a <span class="text-gradient">Volunteer</span></h2>
                <p class="lead text-muted mb-4">
                    Be the heartbeat of our events. Whether it's managing registration, guiding attendees, or helping
                    with logistics, your contribution makes a massive difference in creating inclusive tech spaces.
                </p>
                <ul class="list-unstyled mb-5">
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>
                        <span>Gain exclusive behind-the-scenes access</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>
                        <span>Network with industry leaders and speakers</span>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-check-circle-fill text-primary me-3 fs-5"></i>
                        <span>Get cool swag and community recognition</span>
                    </li>
                </ul>
                <a href="https://docs.google.com/forms/d/e/1FAIpQLScfkHDuCeWdmgsrlACmILNx41LhS47eNKHMaOAX2LKkSQL54g/viewform/"
                    target="_blank" class="btn btn-premium btn-lg hover-lift">
                    Apply to Volunteer <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Follow Journey Section -->
<section class="py-5 bg-deep-space position-relative">
    <div class="container text-center text-white position-relative z-2">
        <h3 class="mb-4 text-white">Follow Our Journey</h3>
        <div class="row g-3 justify-content-center">
            <div class="col-6 col-md-3">
                <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                    <img src="assets/images/sliders/slider1.webp" class="img-fluid h-200-cover" alt="Event Moment 1">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                    <img src="assets/images/sliders/slider2.webp" class="img-fluid h-200-cover" alt="Event Moment 2">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                    <img src="assets/images/sliders/slider3.webp" class="img-fluid h-200-cover" alt="Event Moment 3">
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                    <img src="assets/images/sliders/slider4.webp" class="img-fluid h-200-cover" alt="Event Moment 4">
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="https://instagram.com" target="_blank" class="btn btn-outline-light rounded-pill px-4">
                <i class="bi bi-instagram me-2"></i> Follow @MumbaiWomenCoders
            </a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>