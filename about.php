<?php
$pageTitle = "About Our Community";
$metaDescription = "Our mission is to increase the representation of women in tech leadership. Learn about our story, vision, and the values that drive our community.";
$root = '';
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<header class="hero-section d-flex align-items-center">
    <div class="container hero-container-inner">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 animate__animated animate__fadeIn">
                <!-- Fancy Breadcrumb -->
                <nav aria-label="breadcrumb" class="d-inline-block mb-3">
                    <ol
                        class="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25">
                        <li class="breadcrumb-item"><a href="index.php"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Our Story</li>
                    </ol>
                </nav>

                <h1 class="display-1 fw-bolder mb-3 lh-1">
                    Empowering <br>
                    <span class="text-gradient">Women in Tech</span>
                </h1>
                <p class="lead mb-4 hero-desc">
                    A community driven by passion, technical excellence, and the relentless pursuit of gender parity in
                    the digital world.
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="#story" class="btn btn-premium btn-lg shadow-lg">Learn More <i
                            class="bi bi-arrow-down ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Story Section -->
<section id="story" class="about-wave-bg pb-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 fade-up-trigger">
                <div class="position-relative p-2">
                    <!-- Unique Rectangular Image Approach: Layered Offset -->
                    <div class="position-relative">
                        <div class="position-absolute bg-lavender rounded-4 opacity-10 img-offset-bg"></div>
                        <div class="img-premium-container shadow-2xl border-0 rounded-4 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=1200"
                                class="d-block w-100 h-480-cover" alt="Story of MWC">
                        </div>
                        <div
                            class="position-absolute bottom-0 start-0 m-3 p-3 bg-white rounded-3 shadow-sm d-flex align-items-center gap-2 border-start border-4 border-royal-violet">
                            <i class="bi bi-stars text-royal-violet fs-4"></i>
                            <span class="fw-bold small">Founded in 2018</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5 fade-up-trigger">
                <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-2">Our Origin</h6>
                <h2 class="display-4 fw-bold mb-3">Built for Women, <br>By Women.</h2>
                <div class="story-content">
                    <p class="mb-3 fs-5 about-desc">
                        Mumbai Women Coders was born from a simple observation: the tech industry in Mumbai needed a
                        dedicated space for female talent to thrive.
                    </p>
                    <p class="mb-4 text-muted">
                        We started as a small group of engineers who wanted to share knowledge without barriers. Today,
                        we are Mumbai's most active community for women in technology, providing the mentorship and
                        visibility needed to reach leadership roles.
                    </p>
                    <div class="row g-4 pt-2">
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-lavender bg-opacity-10 rounded-circle p-2 text-royal-violet">
                                    <i class="bi bi-check2-circle fs-5"></i>
                                </div>
                                <span class="fw-bold">Tech Leadership</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="bg-lavender bg-opacity-10 rounded-circle p-2 text-royal-violet">
                                    <i class="bi bi-check2-circle fs-5"></i>
                                </div>
                                <span class="fw-bold">Peer Mentorship</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Purpose & Vision Section (Animation & Fancy Redesign) -->
<section id="vision" class="bg-surface-variant py-5">
    <div class="container">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-2">Our Foundation</h6>
            <h2 class="display-4 fw-bold">Mission Control</h2>
            <p class="lead text-muted mx-auto mx-w-600">
                Driving the future of technology through strategic pillars of growth and innovation.
            </p>
        </div>

        <div class="row g-4">
            <!-- Vision Card (Large) -->
            <div class="col-lg-6 fade-up-trigger">
                <div class="glass-card-premium p-5 d-flex flex-column justify-content-center h-100">
                    <div class="icon-box-glow mb-4">
                        <i class="bi bi-eye"></i>
                    </div>
                    <h3 class="fw-bold mb-3">The Vision</h3>
                    <p class="text-muted fs-5 mb-4">
                        "To create a world where women are equally represented in technical leadership positions,
                        driving innovation and shaping the digital future."
                    </p>
                    <div class="mt-auto">
                        <div class="d-flex gap-2">
                            <span class="badge bg-lavender-subtle text-royal-violet p-2 rounded-pill">Leadership</span>
                            <span class="badge bg-lavender-subtle text-royal-violet p-2 rounded-pill">Innovation</span>
                            <span class="badge bg-lavender-subtle text-royal-violet p-2 rounded-pill">Equality</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Purpose Cards (Grid) -->
            <div class="col-lg-6">
                <div class="row g-4 h-100">
                    <div class="col-md-6 fade-up-trigger delay-1">
                        <div class="glass-card-premium p-4 text-center">
                            <div class="icon-box-glow mx-auto">
                                <i class="bi bi-mortarboard"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Education</h5>
                            <p class="small text-muted mb-0">Bridging the gap between academia and industry.</p>
                        </div>
                    </div>
                    <div class="col-md-6 fade-up-trigger delay-2">
                        <div class="glass-card-premium p-4 text-center">
                            <div class="icon-box-glow mx-auto">
                                <i class="bi bi-braces"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Skill Building</h5>
                            <p class="small text-muted mb-0">Hands-on workshops in Cloud, AI, and Dev.</p>
                        </div>
                    </div>
                    <div class="col-md-6 fade-up-trigger delay-3">
                        <div class="glass-card-premium p-4 text-center">
                            <div class="icon-box-glow mx-auto">
                                <i class="bi bi-heart"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Support</h5>
                            <p class="small text-muted mb-0">A safe space for questions and growth.</p>
                        </div>
                    </div>
                    <div class="col-md-6 fade-up-trigger delay-4">
                        <div class="glass-card-premium p-4 text-center">
                            <div class="icon-box-glow mx-auto">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h5 class="fw-bold mb-2">Career</h5>
                            <p class="small text-muted mb-0">Referrals and mentorship for job readiness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Audience (Dark Gradient Update) -->
<section id="audience" class="bg-cosmic-theme py-5">
    <div class="container-fluid px-lg-5">
        <div class="row g-0 rounded-4 overflow-hidden shadow-2xl border border-white border-opacity-25">
            <!-- Visual Side (Left) -->
            <div class="col-lg-6 d-none d-lg-block position-relative">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=1200"
                    class="w-100 h-100 object-fit-cover" alt="Community Interaction">
                <div class="position-absolute inset-0 bg-dark-amethyst opacity-50"></div>
                <div class="position-absolute bottom-0 start-0 p-5">
                    <div
                        class="glass-morphism p-4 rounded-4 border border-white border-opacity-20 text-white backdrop-blur">
                        <h4 class="fw-bold mb-1">Inclusive by Design</h4>
                        <p class="small mb-0 opacity-75">Join 2500+ members in Mumbai's most vibrant tech circle.</p>
                    </div>
                </div>
            </div>
            <!-- Content Side (Right) -->
            <div class="col-lg-6 p-5 p-md-5 d-flex flex-column justify-content-center">
                <h6 class="text-white-50 fw-bold text-uppercase ls-2 mb-3">Who Can Join?</h6>
                <h2 class="display-4 fw-bold text-white mb-4">A Community for Everyone.</h2>
                <p class="text-white-50 fs-5 mb-5 opacity-75">
                    We believe real change happens when everyone is part of the conversation. Our doors are open to
                    those who support our mission.
                </p>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div
                            class="p-3 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 h-100 hover-opacity-100 transition-all">
                            <h5 class="text-white fw-bold mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-person-fill text-mauve"></i> Women
                            </h5>
                            <p class="text-white-50 small mb-0">Access exclusive mentorship, leadership tracks, and a
                                safe learning environment.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div
                            class="p-3 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 h-100 hover-opacity-100 transition-all">
                            <h5 class="text-white fw-bold mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-people-fill text-mauve"></i> Allies (Men)
                            </h5>
                            <p class="text-white-50 small mb-0">Attend open meetups, share technical expertise, and
                                advocate for gender equity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section (Staggered Cards) -->
<section id="values" class="bg-body py-5 overflow-hidden">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 fade-up-trigger">
                <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-2">Our Culture</h6>
                <h2 class="display-4 fw-bold">Unwavering Values</h2>
            </div>
            <div class="col-lg-6 fade-up-trigger text-lg-end">
                <p class="lead text-muted mb-0">
                    Built on transparency, respect, and technical rigor.
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 fade-up-trigger">
                <div class="m-card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all bg-soft-lavender">
                    <div class="pillar-icon-box mb-4">
                        <i class="bi bi-heart-pulse"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Radical Inclusion</h4>
                    <p class="text-muted small">We welcome all women who code, regardless of background, seniority, or
                        education. Inclusion is our default state.</p>
                </div>
            </div>
            <div class="col-lg-4 fade-up-trigger">
                <div class="m-card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all bg-soft-lavender">
                    <div class="pillar-icon-box mb-4">
                        <i class="bi bi-lightning-charge"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Technical Rigor</h4>
                    <p class="text-muted small">We don't just talk about tech; we build it. Our culture is defined by
                        hands-on creation and constant review.</p>
                </div>
            </div>
            <div class="col-lg-4 fade-up-trigger">
                <div class="m-card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all bg-soft-lavender">
                    <div class="pillar-icon-box mb-4">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Growth Mindset</h4>
                    <p class="text-muted small">We foster a community where asking questions is encouraged and "failing
                        forward" is the standard.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Community Organizers Section -->
<section id="organizers" class="bg-cosmic-theme py-5">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-white-50 fw-bold text-uppercase ls-2 mb-3">The Core Team</h6>
            <h2 class="display-4 fw-bold text-white">Our Team</h2>
            <p class="lead text-white-50 mx-auto mx-w-700 opacity-75">
                Meet the passionate individuals driving the Mumbai Women Coders community forward.
            </p>
        </div>

        <!-- Leadership Section -->
        <div class="row g-4 justify-content-center mt-5">
            <?php
            $leadership = [
                [
                    'name' => 'Manjula Dube',
                    'role' => 'Manager @ Vanguard',
                    'designation' => 'Founder',
                    'img' => 'assets/images/organizers/manjula-dube.jpg',
                    'link' => 'https://www.linkedin.com/in/manjula-dube-9b5b3550/'
                ],
                [
                    'name' => 'Nandini Singh',
                    'role' => 'Software Developer, AI Enthusiast, Freelancer',
                    'designation' => 'Organizer',
                    'img' => 'assets/images/organizers/nandini-singh.jpg',
                    'link' => 'https://www.linkedin.com/in/nandinisingh18/'
                ],
                [
                    'name' => 'Khusheeta Attarde',
                    'role' => 'ASE @ QAD INDIA',
                    'designation' => 'Organizer',
                    'img' => 'assets/images/organizers/khusheeta-attrde.jpg',
                    'link' => 'https://www.linkedin.com/in/khusheeta-attarde-69a60a215/'
                ]
            ];

            foreach ($leadership as $o): ?>
                <div class="col-lg-4 col-md-6 fade-up-trigger">
                    <div
                        class="h-100 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 d-flex flex-column transition-all hover-opacity-100 text-center p-4 pt-5 mt-5">
                        <div class="speaker-img-wrapper">
                            <div class="speaker-img-glow"></div>
                            <img src="<?= $o['img'] ?>" alt="<?= $o['name'] ?>">
                        </div>
                        <h4 class="text-white"><?= $o['name'] ?></h4>
                        <span
                            class="speaker-designation text-white opacity-75 border-0 bg-transparent"><?= $o['designation'] ?></span>
                        <p class="text-white-50 small mb-4">
                            <?= $o['role'] ?>
                        </p>
                        <div class="speaker-socials mt-auto">
                            <a href="<?= $o['link'] ?>" target="_blank" title="LinkedIn"
                                class="text-white border-0 bg-transparent fs-4"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Core Team Section -->
        <div class="text-center mt-5 pt-5 mb-5 fade-up-trigger">
            <h2 class="display-5 fw-bold text-white mb-5">Core Team</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $coreTeam = [

                [
                    'name' => 'Taazeen Ansari',
                    'role' => 'Student @ SIES',
                    'designation' => 'Core Team',
                    'img' => 'assets/images/organizers/taazeen-ansari.webp',
                    'link' => 'https://www.linkedin.com/in/taazeenansari/'
                ],

            ];

            foreach ($coreTeam as $o): ?>
                <div class="col-lg-4 col-md-6 fade-up-trigger">
                    <div
                        class="h-100 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 d-flex flex-column transition-all hover-opacity-100 text-center p-4 pt-5 mt-5">
                        <div class="speaker-img-wrapper">
                            <div class="speaker-img-glow"></div>
                            <img src="<?= $o['img'] ?>" alt="<?= $o['name'] ?>">
                        </div>
                        <h4 class="text-white"><?= $o['name'] ?></h4>
                        <span
                            class="speaker-designation text-white opacity-75 border-0 bg-transparent"><?= $o['designation'] ?></span>
                        <p class="text-white-50 small mb-4">
                            <?= $o['role'] ?>
                        </p>
                        <div class="speaker-socials mt-auto">
                            <a href="<?= $o['link'] ?>" target="_blank" title="LinkedIn"
                                class="text-white border-0 bg-transparent fs-4"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Extra CTA Section (Spacing Fix) -->
<section class="cta-section py-5">
    <div class="container text-center">
        <div class="cta-box-refined cta-box-gradient shadow-lg border-0 fade-up-trigger">
            <div class="position-relative z-2">
                <h2 class="display-4 fw-bold mb-3">Start Your Journey Today</h2>
                <p class="lead mb-4 mx-auto mx-w-600">
                    Whether you're looking for mentorship or want to contribute to the community, your seat is waiting.
                </p>
                <div class="d-inline-flex gap-3 justify-content-center align-items-center flex-column flex-sm-row">
                    <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank"
                        class="btn btn-white-filled btn-lg px-5">Join our Meetup</a>
                    <a href="contact.php" class="btn btn-outline-white-custom btn-lg px-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>