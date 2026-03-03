<?php
$pageTitle = "Empowering Women in Tech";
$metaDescription = "Join Women Coders, a community dedicated to inspiring and empowering women to excel in technology through mentorship, workshops, and networking.";
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<header class="hero-section d-flex align-items-center ">
    <div class="container hero-container-inner">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 animate__animated animate__fadeIn">
                <div class="mb-4 hero-logo-wrapper">
                    <img src="assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo" class="hero-logo">
                </div>
                <div class="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm hero-badge">
                    <small class="fw-bold text-gradient text-uppercase ls-2">Women Coders Community</small>
                </div>
                <h1 class="display-1 fw-bolder mb-3 lh-1">
                    Inspiring <span class="text-gradient">Women</span> <br>
                    to Excel in Tech.
                </h1>
                <p class="lead mb-5 hero-desc">
                    Empowering the next generation of female technical leaders through community, mentorship, and
                    hands-on innovation.
                </p>
                <div class="d-flex gap-3 gap-md-4 flex-column flex-sm-row justify-content-center mb-4 pb-2">
                    <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank"
                        class="btn btn-premium btn-lg shadow-lg">
                        Join a Chapter <i class="fa-solid fa-user-group ms-2"></i>
                    </a>
                    <a href="chapters/" class="btn btn-m-outline btn-lg">
                        Explore Chapters <i class="fa-regular fa-compass ms-2"></i>
                    </a>
                    <a href="support-us.php" class="btn btn-m-outline btn-lg">
                        Support Us <i class="fa-regular fa-heart ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Counter Section -->
<section id="stats" class="bg-surface-variant py-5">
    <div class="container">
        <div class="row text-center g-4 fade-up-trigger">
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-4 mb-1 text-gradient">2500+</h2>
                <p class="text-muted small text-uppercase fw-bolder ls-1 mb-0">Tech Women</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-4 mb-1 text-gradient">40+</h2>
                <p class="text-muted small text-uppercase fw-bolder ls-1 mb-0">Meetups Held</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-4 mb-1 text-gradient">50+</h2>
                <p class="text-muted small text-uppercase fw-bolder ls-1 mb-0">Key Speakers</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-4 mb-1 text-gradient">20+</h2>
                <p class="text-muted small text-uppercase fw-bolder ls-1 mb-0">Global Partners</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-wave-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-up-trigger">
                <div class="position-relative p-2">
                    <div id="aboutCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-inner img-premium-container shadow-lg">
                            <div class="carousel-item active">
                                <img src="assets/images/sliders/slider1.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 1">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/sliders/slider2.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 2">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/sliders/slider3.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 3">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/images/sliders/slider4.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 4">
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card -->
                    <div class="m-card position-absolute d-none d-md-block shadow-lg about-floating-card">
                        <h6 class="fw-bold text-gradient mb-2"><i class="fa-solid fa-quote-left me-2"></i>Our Vision
                        </h6>
                        <p class="small mb-0">"Proportional representation of women in tech leadership roles globally."
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 fade-up-trigger">
                <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Building the Ecosystem</h6>
                <h2 class="display-4 fw-bold mb-4">Empowering Women in the Tech Scene</h2>
                <p class="mb-4 fs-5 about-desc">
                    Women Coders is a vibrant tech community for women & men in technology and their
                    allies, creating lasting change in the tech ecosystem. <br>
                    Our community welcomes everyone: students, professionals, experienced developers, and allies
                    committed to inclusive tech spaces. <br>
                    We are open, inclusive, and focused on individual and collective growth.
                </p>
                <div class="row g-4 mb-5">
                    <div class="col-sm-6 text-center text-sm-start">
                        <i class="fa-solid fa-shield-halved text-gradient fs-1 mb-2 d-block"></i>
                        <h5 class="fw-bold">Safe Space</h5>
                        <p class="small">Inclusive learning environment for all skill levels.</p>
                    </div>
                    <div class="col-sm-6 text-center text-sm-start">
                        <i class="fa-solid fa-user-group text-gradient fs-1 mb-2 d-block"></i>
                        <h5 class="fw-bold">Global Network</h5>
                        <p class="small">Connect with professionals across the globe.</p>
                    </div>
                </div>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="about.php" class="btn btn-premium px-5">READ OUR STORY</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- What We Do Section -->
<section id="what-we-do" class="bg-cosmic-theme">
    <div class="container py-5">
        <div class="text-center mb-5 pb-3 fade-up-trigger">
            <header class="d-flex flex-column align-items-center mb-5 fade-up-trigger">
                <div class="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm bg-white">
                    <span class="text-gradient fw-bold text-uppercase ls-2 small">Community Initiatives</span>
                </div>
                <h2 class="display-4 fw-bold text-white">How We Empower Women in Technology</h2>
            </header>
            <p class="lead text-white-50 mx-auto mx-w-750">
                Women Coders provides a comprehensive ecosystem for female developers and technical leaders to
                excel through specialized programs in engineering, leadership, and hands-on innovation.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Events -->
            <article class="col-lg-3 col-md-6 fade-up-trigger">
                <div class="m-card-dark h-100">
                    <div class="pillar-icon-box mb-4">
                        <i class="fa-regular fa-calendar-days" aria-hidden="true"></i>
                    </div>
                    <h3 class="h4 fw-bold text-white mb-3">Tech Events & Meetups</h3>
                    <p class="text-white-50 small mb-0">
                        Join our monthly technical meetups, hackathons, and flagship conferences designed to
                        foster collaboration and showcase female technical excellence.
                    </p>
                </div>
            </article>

            <!-- Learning -->
            <article class="col-lg-3 col-md-6 fade-up-trigger">
                <div class="m-card-dark h-100">
                    <div class="pillar-icon-box mb-4">
                        <i class="fa-solid fa-code" aria-hidden="true"></i>
                    </div>
                    <h3 class="h4 fw-bold text-white mb-3">Hands-on Technical Learning</h3>
                    <p class="text-white-50 small mb-0">
                        Accelerate your skills with peer-led study groups, code-alongs, and technical deep-dives into
                        Full-Stack Development, Data Science, and Artificial Intelligence.
                    </p>
                </div>
            </article>

            <!-- Networking -->
            <article class="col-lg-3 col-md-6 fade-up-trigger">
                <div class="m-card-dark h-100">
                    <div class="pillar-icon-box mb-4">
                        <i class="fa-solid fa-comment-dots" aria-hidden="true"></i>
                    </div>
                    <h3 class="h4 fw-bold text-white mb-3">Professional Networking</h3>
                    <p class="text-white-50 small mb-0">
                        Build meaningful connections within a safe, inclusive space. Access mentorship from industry
                        veterans and grow your network within the tech ecosystem.
                    </p>
                </div>
            </article>

            <!-- Opportunities -->
            <article class="col-lg-3 col-md-6 fade-up-trigger">
                <div class="m-card-dark h-100">
                    <div class="pillar-icon-box mb-4">
                        <i class="fa-solid fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h3 class="h4 fw-bold text-white mb-3">Career Growth Opportunities</h3>
                    <p class="text-white-50 small mb-0">
                        Unlock high-impact career pathways through exclusive job boards, resume-building workshops, and
                        direct referrals to top-tier technology partners.
                    </p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Upcoming Events Section -->
<section id="upcoming-events" class="bg-cosmic-theme">
    <div class="events-dot-pattern"></div>
    <!-- Animated Particles -->
    <div class="events-particle-container">
        <div class="floating-particle particle-1"></div>
        <div class="floating-particle particle-2"></div>
        <div class="floating-particle particle-3"></div>
    </div>
    <div class="container py-5 position-relative z-2">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Save the Date</h6>
            <h2 class="display-4 fw-bold">Upcoming Community Events</h2>
            <p class="lead text-muted mx-auto mx-w-700">
                Secure your spot in our upcoming sessions and accelerate your technical journey with the tech
                community.
            </p>
        </div>

        <div class="events-list">
            <!-- Event 1 -->
            <div class="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                <div class="row g-0">
                    <!-- Image Column -->
                    <div class="col-md-3">
                        <div class="event-img-container">
                            <img src="assets/images/events/mwc-8-3-26.jpg" class="event-preview-img"
                                alt="International Women's Day">
                            <div class="event-img-overlay"></div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="col-md-9">
                        <div class="row align-items-center g-0 p-4 h-100">
                            <div class="col-md-2 text-center">
                                <div class="event-date-box mx-auto mb-3 mb-md-0">
                                    <span class="d-block h2 fw-800 mb-0">8</span>
                                    <span class="text-uppercase fw-bold ls-1 small">MARCH</span>
                                </div>
                            </div>
                            <div class="col-md-10 ps-md-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <h3 class="h4 fw-800 mb-1 text-gradient">International Women's Day
                                        </h3>
                                        <div class="text-muted small"><i
                                                class="fa-solid fa-location-dot text-primary"></i>
                                            Mumbai</div>
                                    </div>
                                    <div class="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                        <div
                                            class="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">
                                            Community Event</div>
                                    </div>
                                    <div class="text-muted small d-block">
                                        <i class="fa-solid fa-laptop me-1"></i> In-Person
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <a href="https://luma.com/kta9xsx4?utm_content=latest_event&utm_medium=direct&utm_source=website"
                                        target="_blank" class="btn btn-premium-sm">Register Now <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <!-- Image Column -->
                    <div class="col-md-3">
                        <div class="event-img-container">
                            <img src="assets/images/events/mwc-8-3/mwc-8-3-26.jpg" class="event-preview-img"
                                alt="SheBuilds on Lovable x International Women's Day(Mumbai)">
                            <div class="event-img-overlay"></div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="col-md-9">
                        <div class="row align-items-center g-0 p-4 h-100">
                            <div class="col-md-2 text-center">
                                <div class="event-date-box mx-auto mb-3 mb-md-0">
                                    <span class="d-block h2 fw-800 mb-0">8</span>
                                    <span class="text-uppercase fw-bold ls-1 small">MARCH</span>
                                </div>
                            </div>
                            <div class="col-md-10 ps-md-4">
                                <div class="row align-items-center">
                                    <div class="col-lg-7">
                                        <h3 class="h4 fw-800 mb-1 text-gradient">SheBuilds on Lovable x International
                                            Women's Day(Mumbai)
                                        </h3>
                                        <div class="text-muted small"><i
                                                class="fa-solid fa-location-dot text-primary"></i>
                                            Mumbai</div>
                                    </div>
                                    <div class="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                        <div
                                            class="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">
                                            Bulidathon</div>
                                    </div>
                                    <div class="text-muted small d-block">
                                        <i class="fa-solid fa-laptop me-1"></i> In-Person
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <a href="https://luma.com/mxykzefr?utm_content=latest_event&utm_medium=direct&utm_source=website"
                                        target="_blank" class="btn btn-premium-sm">Register Now <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event 2 -->

    </div>

    <div class="text-center mt-5">
        <a href="events/" class="btn btn-premium px-5">EXPLORE ALL EVENTS</a>
    </div>
    </div>
</section>

<!-- Chapters Overview -->
<section id="explore" class="bg-mesh-light py-5">
    <div class="container">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Global Network</h6>
            <h2 class="display-4 fw-bold mb-4">Women Coders <span class="text-royal-violet">Chapters</span></h2>
            <p class="lead text-muted mx-auto mx-w-750">
                Women Coders is expanding its reach. Our chapters are local communities led by passionate
                individuals who want to bridge the gender gap in tech through mentorship, events, and a supportive
                environment.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Mumbai Chapter -->
            <div class="col-md-4 animate-fade-up">
                <div class="glass-card-premium h-100">
                    <div class="position-relative overflow-hidden h-250">
                        <img src="assets/images/chapters/backgrounds/mumbai.webp" class="w-100 h-100 object-fit-cover"
                            alt="Mumbai">
                        <div class="position-absolute top-0 end-0 p-3">
                            <span class="fi fi-in fis fs-4 rounded shadow-sm"></span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="fw-bold h4">Mumbai, India</h3>
                        <p class="text-muted small mb-4">The heartbeat of our community, Mumbai Women Coders is where it
                            all began. Empowering thousands of women in India's financial capital.</p>
                        <a href="chapters/mumbai"
                            class="btn btn-outline-primary btn-sm rounded-pill px-4 stretched-link">Visit Chapter</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Member Success Stories (Dark Section) -->
<section id="success-stories" class="bg-cosmic-theme py-5">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Community Impact</h6>
            <h2 class="display-4 fw-bold text-white">Member Success Stories</h2>
            <p class="lead text-white-50 mx-auto mx-w-750">
                Witness the transformative journeys of our members who have leveraged the Women Coders ecosystem
                to reach new heights in their technical careers.
            </p>
        </div>

        <div class="row g-5 mt-4">
            <!-- Story 1 -->
            <div class="col-lg-6 fade-up-trigger">
                <div class="story-card h-100">
                    <i class="fa-solid fa-quote-left story-quote-icon"></i>
                    <div class="member-avatar-ring">
                        <img src="https://ui-avatars.com/api/?name=Shruti+Deshmukh&background=9d4edd&color=fff&size=128"
                            alt="Shruti Deshmukh">
                    </div>
                    <h3 class="h4 fw-bold text-white mb-2">Shruti Deshmukh</h3>
                    <p class="text-gradient small fw-bold text-uppercase mb-3">Tech Lead @ Google</p>
                    <p class="text-white-50 mb-0">
                        "Joining this community was a turning point. The mentorship I received during the Open Source
                        workshops directly helped me land my first engineering role. Today, I'm proud to lead teams and
                        give back to the next generation."
                    </p>
                </div>
            </div>
            <!-- Story 2 -->
            <div class="col-lg-6 fade-up-trigger delay-2">
                <div class="story-card h-100">
                    <i class="fa-solid fa-quote-left story-quote-icon"></i>
                    <div class="member-avatar-ring">
                        <img src="https://ui-avatars.com/api/?name=Sneha+Rao&background=7b2cbf&color=fff&size=128"
                            alt="Sneha Rao">
                    </div>
                    <h3 class="h4 fw-bold text-white mb-2">Sneha Rao</h3>
                    <p class="text-gradient small fw-bold text-uppercase mb-3">Data Scientist @ Microsoft</p>
                    <p class="text-white-50 mb-0">
                        "I was struggling to switch from QA to Data Science. The study groups here provided the
                        structure and support I needed. The hands-on projects we did together became the highlight of my
                        portfolio."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Speaker Profiles (Light Section) -->
<section id="speakers" class="bg-surface-variant py-5">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Expert Insights</h6>
            <h2 class="display-4 fw-bold">Recent Speaker Profiles</h2>
            <p class="lead text-muted mx-auto mx-w-700">
                Learn from industry veterans and researchers who share their knowledge at our flagship tech talks and
                leadership summits.
            </p>
        </div>

        <!-- Speaker Slider -->
        <div class="swiper speaker-swiper fade-up-trigger">
            <div class="swiper-wrapper">
                <?php
                $speakers = [
                    [
                        'name' => 'Ramyashree Shetty',
                        'role' => 'Data Engineer @ Radix',
                        'img' => 'assets/images/speakers/ramyashree-shetty.webp',
                        'link' => 'https://www.linkedin.com/in/ramyashree-shetty/'
                    ],
                    [
                        'name' => 'Taazeen Ansari',
                        'role' => 'Computer Engineering Student @ SIES',
                        'img' => 'assets/images/speakers/taazeen-ansari.webp',
                        'link' => 'https://www.linkedin.com/in/taazeenansari/'
                    ],
                    [
                        'name' => 'Nikita Goswami',
                        'role' => 'AI/ML Research Intern @ Monash University',
                        'img' => 'assets/images/speakers/nikita-goswami.webp',
                        'link' => 'https://www.linkedin.com/in/nikitagoswami3/'
                    ]
                ];

                // Render twice to ensure Swiper has enough slides for a seamless infinite loop
                foreach (array_merge($speakers, $speakers) as $s): ?>
                    <div class="swiper-slide">
                        <div class="speaker-card">
                            <div class="speaker-img-wrapper">
                                <div class="speaker-img-glow"></div>
                                <img src="<?= $s['img'] ?>" alt="<?= $s['name'] ?>">
                            </div>
                            <h4><?= $s['name'] ?></h4>
                            <span class="speaker-designation">Featured Speaker</span>
                            <p class="text-muted small">
                                <?= $s['role'] ?>
                            </p>
                            <div class="speaker-socials">
                                <a href="<?= $s['link'] ?>" target="_blank" title="LinkedIn"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <!-- Navigation & Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!-- Chapter Lead Journeys (Dark Section) -->
<!-- <section id="lead-journeys" class="bg-cosmic-theme py-5">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Path to Leadership</h6>
            <h2 class="display-4 fw-bold text-white">Chapter Lead Journeys</h2>
            <p class="lead text-white-50 mx-auto mx-w-750">
                Our community is powered by leaders who started exactly where you are. Explore how they grew from
                members to driving impact at scale.
            </p>
        </div>

        <div class="row mt-5">
            <div class="col-lg-8 mx-auto">
               
                <div class="journey-segment fade-up-trigger">
                    <div class="journey-node"><i class="fa-solid fa-star"></i></div>
                    <div class="journey-card">
                        <h4 class="text-white fw-bold mb-2">Phase 1: Active Contribution</h4>
                        <p class="text-white-50 mb-0 small">
                            Megha joined as a volunteer for the Tech Summit. By managing logistics and supporting
                            attendees, she learned the core values of Women Coders.
                        </p>
                    </div>
                </div>
                
                <div class="journey-segment fade-up-trigger delay-1">
                    <div class="journey-node"><i class="fa-solid fa-bolt-lightning"></i></div>
                    <div class="journey-card">
                        <h4 class="text-white fw-bold mb-2">Phase 2: Mentorship & Growth</h4>
                        <p class="text-white-50 mb-0 small">
                            She moved into a Content Curator role, where she started leading study groups for Python and
                            Cloud Computing, impacting 100+ members.
                        </p>
                    </div>
                </div>
                
                <div class="journey-segment fade-up-trigger delay-2">
                    <div class="journey-node"><i class="fa-solid fa-rocket"></i></div>
                    <div class="journey-card">
                        <h4 class="text-white fw-bold mb-2">Phase 3: Chapter Leadership</h4>
                        <p class="text-white-50 mb-0 small">
                            Today, Megha leads the chapter, overseeing events, partnerships, and a core team
                            of 15 volunteers.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5 fade-up-trigger">
            <p class="text-white-50 mb-4">Inspired by these journeys? Start your own today.</p>
            <a href="volunteer" class="btn btn-premium px-5">VOLUNTEER WITH US</a>
        </div>
    </div>
</section> -->

<!-- Partners Section -->
<section class="partners-section">
    <div class="container text-center">
        <div class="mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Our Past Collaborations</h6>
            <h2 class="display-5 fw-bold mb-4">Empowering <span class="text-gradient">Together</span></h2>
            <div class="mx-auto divider-accent"></div>
        </div>

        <div class="partners-marquee fade-up-trigger">
            <div class="marquee-content" id="partner-marquee">
                <!-- Unique Partners Only -->
                <div class="partner-card"><img src="assets/images/partner/microsoft.png" alt="Microsoft Logo"
                        class="partner-logo"></div>
                <div class="partner-card"><img src="assets/images/partner/gdg-mumbai.webp" alt="GDG Logo"
                        class="partner-logo"></div>
            </div>
        </div>
    </div>
</section>

<!-- Auto-Cloning Script for Infinite Marquee -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const marquee = document.getElementById("partner-marquee");
        if (marquee) {
            const items = marquee.innerHTML;
            // Clone items enough times to fill the screen and animate smoothly
            for (let i = 0; i < 8; i++) {
                marquee.innerHTML += items;
            }
        }
    });
</script>

<!-- FAQ Section -->
<section id="faq" class="bg-faq-soft py-5">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Got Questions?</h6>
            <h2 class="display-4 fw-bold">Frequently Asked Questions</h2>
            <p class="lead text-muted mx-auto mx-w-700">
                Everything you need to know about joining and growing with the Women Coders community. Can't find
                an answer? Feel free to reach out!
            </p>
        </div>

        <div class="faq-container fade-up-trigger">
            <!-- FAQ 1 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Who can join Women Coders</h4>
                    <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p>
                        We are a dedicated community focused on empowering and supporting women in the technology
                        sector. We welcome everyone who are passionate about coding, leadership, and professional growth
                        in the tech ecosystem. </p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h4>Is there a membership fee?</h4>
                    <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p>
                        No, joining Women Coders is completely free! Our core technical meetups, study groups,
                        and community platforms are accessible to everyone without any charge.
                    </p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h4>How can I become a speaker at a Women Coders event?</h4>
                    <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p>
                        We're always looking for fresh perspectives! You can apply to speak by filling out our "Call for
                        Speakers" form available on our events page, or by reaching out to our chapter leads during any
                        of our monthly meetups.
                    </p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h4>What kind of technical topics do you cover?</h4>
                    <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p>
                        We cover a wide spectrum including Full-Stack Web Development, Data Science, AI/ML, Cloud
                        Infrastructure (AWS/Azure), Cybersecurity, and even soft skills like Technical Leadership and
                        Salary Negotiation.
                    </p>
                </div>
            </div>


            <!-- FAQ 5 -->
            <div class="faq-item">
                <div class="faq-question">
                    <h4>How can I become a volunteer at Women Coders</h4>
                    <div class="faq-icon"><i class="fa-solid fa-chevron-down"></i></div>
                </div>
                <div class="faq-answer">
                    <p>
                        Connect with us on our social media channels, join our WhatsApp community, and explore
                        opportunities shared in our channels. Complete the Volunteer Form, and our team will get in
                        touch with the next steps. <a href="https://forms.gle/LQjaPqYjzjGJ9FYT9" target="_blank">Join
                            Today</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            const isActive = item.classList.contains('active');

            // Close all other items
            document.querySelectorAll('.faq-item').forEach(otherItem => {
                otherItem.classList.remove('active');
            });

            // Toggle current item
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
</script>

<!-- FAQ Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Who can join Women Coders?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We are a dedicated community focused on empowering and supporting women in the technology sector. We welcome all women who are passionate about coding, leadership, and professional growth in the tech ecosystem."
    }
  }, {
    "@type": "Question",
    "name": "Is there a membership fee?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "No, joining Women Coders is completely free! Our core technical meetups, study groups, and community platforms are accessible to everyone without any charge."
    }
  }, {
    "@type": "Question",
    "name": "How can I become a speaker at a Women Coders event?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We're always looking for fresh perspectives! You can apply to speak by filling out our 'Call for Speakers' form available on our events page, or by reaching out to our chapter leads during any of our monthly meetups."
    }
  }, {
    "@type": "Question",
    "name": "What kind of technical topics do you cover?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We cover a wide spectrum including Full-Stack Web Development, Data Science, AI/ML, Cloud Infrastructure (AWS/Azure), Cybersecurity, and even soft skills like Technical Leadership and Salary Negotiation."
    }
  }, {
    "@type": "Question",
    "name": "How do I volunteer for Women Coders?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You can start by joining our Slack/Discord channels and checking the #volunteers-needed channel. We have various roles from event management and social media to technical mentoring and content creation."
    }
  },
  {
    "@type": "Question",
    "name": "Who can join Women Coders?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "We are a dedicated community focused on empowering and supporting women in the technology sector. We welcome all women who are passionate about coding, leadership, and professional growth in the tech ecosystem."
    }
  }
]
}
</script>

<?php include 'includes/footer.php'; ?>