<?php
$pageTitle = "Upcoming Tech Events";
$metaDescription = "Stay updated with our technical workshops, meetups, and conferences. Join our upcoming events to learn and grow with the Mumbai tech community.";
$root = '';
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<header class="hero-section d-flex align-items-center">
    <!-- Overlay/Background Effect -->
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
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Events</li>
                    </ol>
                </nav>

                <h1 class="display-1 fw-bolder mb-3 lh-1">
                    Community <span class="text-gradient">Events</span>
                </h1>
                <p class="lead mb-5 hero-desc">
                    Join our vibrant community gatherings, technical workshops, and global conferences. Whether you're
                    in Mumbai, London, or Berlin, there's a place for you.
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Upcoming Events Section -->
<section id="upcoming" class="bg-surface-variant position-relative overflow-hidden">
    <div class="container position-relative z-2">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Calendar</h6>
            <h2 class="display-4 fw-bold">Upcoming Events</h2>
        </div>

        <!-- Global vs Chapter Tabs -->
        <ul class="nav nav-pills justify-content-center mb-5 fade-up-trigger" id="eventsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-pill px-4 fw-bold" id="global-tab" data-bs-toggle="pill"
                    data-bs-target="#global" type="button" role="tab" aria-controls="global" aria-selected="true">Global
                    / Online</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill px-4 fw-bold" id="chapters-tab" data-bs-toggle="pill"
                    data-bs-target="#chapters-list" type="button" role="tab" aria-controls="chapters-list"
                    aria-selected="false">Chapter Events</button>
            </li>
        </ul>

        <div class="tab-content" id="eventsTabContent">
            <!-- Global Events -->
            <div class="tab-pane fade show active" id="global" role="tabpanel" aria-labelledby="global-tab">
                <div class="row g-4 justify-content-center">
                    <!-- Event 1 -->
                    <div class="col-lg-4 col-md-6 fade-up-trigger">
                        <div class="event-card-modern h-100">
                            <div class="event-card-img-wrapper">
                                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?auto=format&fit=crop&q=80&w=800"
                                    alt="Global Webinar">
                                <div class="event-date-badge">
                                    <span class="d-block fw-bold h4 mb-0">20</span>
                                    <small class="text-uppercase">APR</small>
                                </div>
                            </div>
                            <div class="event-card-body p-4">
                                <span class="badge bg-lavender-subtle text-primary mb-3">Webinar</span>
                                <h4 class="fw-bold mb-2">Future of AI in Healthcare</h4>
                                <p class="text-muted small mb-3"><i class="bi bi-clock me-2"></i>18:00 - 19:30 UTC</p>
                                <p class="text-secondary mb-4 small">Join top researchers discussing the ethical
                                    implications and advancements of AI in medical fields.</p>
                                <a href="#" class="btn btn-outline-primary rounded-pill w-100 fw-bold">Register Now</a>
                            </div>
                        </div>
                    </div>
                    <!-- Event 2 -->
                    <div class="col-lg-4 col-md-6 fade-up-trigger delay-1">
                        <div class="event-card-modern h-100">
                            <div class="event-card-img-wrapper">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=800"
                                    alt="Networking">
                                <div class="event-date-badge">
                                    <span class="d-block fw-bold h4 mb-0">05</span>
                                    <small class="text-uppercase">MAY</small>
                                </div>
                            </div>
                            <div class="event-card-body p-4">
                                <span class="badge bg-lavender-subtle text-primary mb-3">Networking</span>
                                <h4 class="fw-bold mb-2">Global Virtual Coffee</h4>
                                <p class="text-muted small mb-3"><i class="bi bi-clock me-2"></i>10:00 - 11:00 UTC</p>
                                <p class="text-secondary mb-4 small">Casual networking session to meet fellow women in
                                    tech from around the world. Bring your coffee!</p>
                                <a href="#" class="btn btn-outline-primary rounded-pill w-100 fw-bold">Join Waitlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chapter Events List (Placeholder/Mixed) -->
            <div class="tab-pane fade" id="chapters-list" role="tabpanel" aria-labelledby="chapters-tab">
                <div class="text-center py-5">
                    <p class="lead text-muted">Select a chapter below to see specific local events.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Chapters Section -->
<section id="our-chapters" class="py-5 bg-white">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Local Communities</h6>
            <h2 class="display-4 fw-bold">Explore Our Chapters</h2>
            <p class="lead text-muted mx-auto mx-w-700">
                Connect with your local tech ecosystem. Each chapter runs its own unique events, meetups, and workshops.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Mumbai Chapter -->
            <div class="col-lg-4 col-md-6 fade-up-trigger">
                <div class="chapter-card-fancy" style="background-image: url('assets/images/chapters/mumbai.png');">
                    <div class="chapter-overlay"></div>
                    <div class="chapter-content">
                        <div class="chapter-badge">Mumbai</div>
                        <h3 class="chapter-title">The City of Dreams</h3>
                        <p class="chapter-desc">Home to our largest community of developers and innovators.</p>
                        <a href="chapters/mumbai" class="btn btn-sm btn-light rounded-pill fw-bold px-4">View Events</a>
                    </div>
                </div>
            </div>

            <!-- London Chapter -->
            <div class="col-lg-4 col-md-6 fade-up-trigger delay-2">
                <div class="chapter-card-fancy" style="background-image: url('assets/images/chapters/london.png');">
                    <div class="chapter-overlay"></div>
                    <div class="chapter-content">
                        <div class="chapter-badge">London</div>
                        <h3 class="chapter-title">Tech Hub of Europe</h3>
                        <p class="chapter-desc">Bridging finance, art, and technology in the heart of the UK.</p>
                        <a href="chapters/london" class="btn btn-sm btn-light rounded-pill fw-bold px-4">View Events</a>
                    </div>
                </div>
            </div>

            <!-- Berlin Chapter -->
            <div class="col-lg-4 col-md-6 fade-up-trigger delay-4">
                <div class="chapter-card-fancy" style="background-image: url('assets/images/chapters/berlin.png');">
                    <div class="chapter-overlay"></div>
                    <div class="chapter-content">
                        <div class="chapter-badge">Berlin</div>
                        <h3 class="chapter-title">Creative Capital</h3>
                        <p class="chapter-desc">Where startups and creativity collide in a vibrant tech scene.</p>
                        <a href="chapters/berlin" class="btn btn-sm btn-light rounded-pill fw-bold px-4">View Events</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Past Events Highlights -->
<section id="past-highlights" class="bg-cosmic-theme py-5">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-8 fade-up-trigger">
                <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Flashback</h6>
                <h2 class="display-4 fw-bold text-white">Past Highlights</h2>
            </div>
            <div class="col-lg-4 text-lg-end fade-up-trigger">
                <a href="#" class="btn btn-outline-light rounded-pill px-4">View Archive</a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Highlight 1 -->
            <div class="col-md-6 col-lg-4 fade-up-trigger">
                <div class="highlight-card">
                    <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&q=80&w=600"
                        class="highlight-img" alt="Tech Summit 2025">
                    <div class="highlight-overlay">
                        <div class="highlight-content">
                            <span class="badge bg-primary mb-2">Summit</span>
                            <h4 class="text-white fw-bold">Tech Summit 2025</h4>
                            <p class="text-white-50 small">500+ attendees, 20 speakers</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Highlight 2 -->
            <div class="col-md-6 col-lg-8 fade-up-trigger" style="animation-delay: 0.2s;">
                <div class="highlight-card">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=1000"
                        class="highlight-img" alt="Hackathon 2024">
                    <div class="highlight-overlay">
                        <div class="highlight-content">
                            <span class="badge bg-success mb-2">Hackathon</span>
                            <h4 class="text-white fw-bold">Code for Good Hackathon</h4>
                            <p class="text-white-50 small">Building solutions for local NGOs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Event Gallery -->
<section id="gallery" class="py-5 bg-surface-variant">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Memories</h6>
            <h2 class="display-4 fw-bold">Captured Moments</h2>
        </div>

        <div class="row g-3 gallery-grid">
            <div class="col-md-4 mb-3 mb-lg-0 fade-up-trigger">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=600"
                    class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Group Discussion" />
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=600"
                    class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Coding Session" />
            </div>

            <div class="col-md-4 mb-3 mb-lg-0 fade-up-trigger delay-2">
                <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?auto=format&fit=crop&q=80&w=600"
                    class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Workshop" />
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600"
                    class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Team Meeting" />
            </div>

            <div class="col-md-4 mb-3 mb-lg-0 fade-up-trigger delay-4">
                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&q=80&w=600"
                    class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Conference" />
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=600"
                    class="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Networking" />
            </div>
        </div>
    </div>
</section>

<script>
    // Fade-up animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-up-trigger').forEach(el => {
        observer.observe(el);
    });
</script>

<?php include 'includes/footer.php'; ?>