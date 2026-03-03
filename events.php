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
<section id="upcoming" class="bg-white position-relative py-5">
    <div class="events-dot-pattern opacity-5"></div>
    <div class="container py-5 position-relative z-2">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Save the Date</h6>
            <h2 class="display-4 fw-bold">Our Community Events</h2>
            <p class="lead text-muted mx-auto mx-w-700">
                Secure your spot in our upcoming sessions and accelerate your technical journey with the tech
                community.
            </p>
        </div>

        <ul class="nav nav-pills justify-content-center mb-5 fade-up-trigger" id="eventsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active rounded-pill px-4 py-2 fw-bold" id="upcoming-tab" data-bs-toggle="pill"
                    data-bs-target="#upcoming-events-pane" type="button" role="tab" aria-controls="upcoming-events-pane"
                    aria-selected="true">Upcoming Events</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-pill px-4 py-2 fw-bold ms-3" id="past-tab" data-bs-toggle="pill"
                    data-bs-target="#past-events-pane" type="button" role="tab" aria-controls="past-events-pane"
                    aria-selected="false">Past Events</button>
            </li>
        </ul>

        <div class="tab-content" id="eventsTabContent">
            <!-- Upcoming Events Pane -->
            <div class="tab-pane fade show active" id="upcoming-events-pane" role="tabpanel"
                aria-labelledby="upcoming-tab">
                <div class="events-list">
                    <!-- Event 1 -->
                    <div class="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                        <div class="row g-0">
                            <!-- Image Column -->
                            <div class="col-md-3">
                                <div class="event-img-container position-relative">
                                    <span
                                        class="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay">Mumbai
                                        Chapter</span>
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
                                                    Celebration
                                                </h3>
                                                <div class="text-muted small"><i
                                                        class="fa-solid fa-location-dot text-primary"></i>
                                                    Mumbai</div>
                                            </div>
                                            <div class="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                <div
                                                    class="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">
                                                    Community Event
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
                        </div>
                    </div>


                    <!-- Event 2 -->

                    <div class="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                        <div class="row g-0">
                            <!-- Image Column -->
                            <div class="col-md-3">
                                <div class="event-img-container position-relative">
                                    <span
                                        class="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay">Mumbai
                                        Chapter</span>
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
                                                    Celebration
                                                </h3>
                                                <div class="text-muted small"><i
                                                        class="fa-solid fa-location-dot text-primary"></i>
                                                    Mumbai</div>
                                            </div>
                                            <div class="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                <div
                                                    class="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">
                                                    Community Event
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
                        </div>
                    </div>

                </div> <!-- /events-list -->
            </div> <!-- /tab-pane upcoming -->

            <!-- Past Events Pane -->
            <div class="tab-pane fade" id="past-events-pane" role="tabpanel" aria-labelledby="past-tab">
                <div class="events-list" id="past-events-container">
                    <?php
                    $pastEventsData = @file_get_contents(__DIR__ . '/past-events.json');
                    $pastEventsArr = json_decode($pastEventsData, true);
                    if (!$pastEventsArr)
                        $pastEventsArr = [];
                    foreach ($pastEventsArr as $index => $event):
                        $dateTime = strtotime($event['dateTime']);
                        $day = date('d', $dateTime);
                        $month = date('M', $dateTime);
                        $title = htmlspecialchars($event['title']);
                        $venueName = htmlspecialchars($event['venue']['name'] ?? 'Online event');
                        $eventType = $event['eventType'] === 'ONLINE' ? 'Online' : 'In-Person';
                        $eventIcon = $event['eventType'] === 'ONLINE' ? 'bi-laptop' : 'bi-people-fill';
                        $eventUrl = htmlspecialchars($event['eventUrl']);
                        $isMumbai = isset($event['venue']['city']) && strtolower($event['venue']['city']) === 'mumbai';
                        $locationBadge = $isMumbai ? 'Mumbai Chapter' : 'Global / Online';

                        $imgSrc = 'https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=800';
                        if (isset($event['featuredEventPhoto']['highResUrl'])) {
                            $imgSrc = $event['featuredEventPhoto']['highResUrl'];
                        } elseif (isset($event['featuredEventPhoto']['baseUrl'])) {
                            $imgSrc = $event['featuredEventPhoto']['baseUrl'];
                        }

                        $displayStyle = $index >= 4 ? 'd-none' : '';
                        $eventClasses = $index >= 4 ? 'past-event-item hidden' : 'past-event-item';
                        ?>
                        <div
                            class="event-card-row mb-5 fade-up-trigger animate-fade-up text-center text-md-start <?php echo $eventClasses; ?> <?php echo $displayStyle; ?>">
                            <div class=" row g-0">
                                <div class="col-md-3">
                                    <div class="event-img-container position-relative">
                                        <span
                                            class="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay"><?php echo $locationBadge; ?></span>
                                        <img src="<?php echo htmlspecialchars($imgSrc); ?>"
                                            class="event-preview-img event-preview-img-custom" alt="Event Image">
                                        <div class="event-img-overlay"></div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row align-items-center g-0 p-4 h-100">
                                        <div class="col-md-2 text-center">
                                            <div class="event-date-box mx-auto mb-3 mb-md-0">
                                                <span class="d-block h2 fw-800 mb-0"><?php echo $day; ?></span>
                                                <span class="text-uppercase fw-bold ls-1 small"><?php echo $month; ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-10 ps-md-4">
                                            <div class="row align-items-center">
                                                <div class="col-lg-7">
                                                    <h3 class="h4 fw-800 mb-1 text-gradient"><?php echo $title; ?></h3>
                                                    <div class="text-muted small"><i
                                                            class="fa-solid fa-location-dot text-primary"></i>
                                                        <?php echo $venueName; ?></div>
                                                </div>
                                                <div class="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                    <div
                                                        class="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">
                                                        Community Event
                                                    </div>
                                                    <div class="text-muted small d-block">
                                                        <i class="bi <?php echo $eventIcon; ?> me-1"></i>
                                                        <?php echo $eventType; ?>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-3">
                                                    <a href="<?php echo $eventUrl; ?>" target="_blank"
                                                        class="btn btn-premium-sm">View Details <i
                                                            class="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php if (empty($pastEventsArr)): ?>
                        <div class="text-center text-muted p-5">
                            <p>No past events found.</p>
                        </div>
                    <?php endif; ?>
                </div> <!-- /past-events-container -->

                <?php if (count($pastEventsArr) > 4): ?>
                    <div class="text-center mt-2 mb-4">
                        <button id="load-more-btn" class="btn btn-m-outline load-more-btn rounded-pill px-4 py-2">Load More
                            <i class="fa-solid fa-chevron-down ms-1"></i></button>
                    </div>
                <?php endif; ?>
            </div> <!-- /tab-pane past -->
        </div> <!-- /tab-content -->

    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const loadMoreBtn = document.getElementById('load-more-btn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function () {
                const hiddenEvents = document.querySelectorAll('.past-event-item.hidden');
                let count = 0;
                hiddenEvents.forEach(function (eventCard) {
                    if (count < 4) {
                        eventCard.classList.remove('hidden');
                        eventCard.classList.remove('d-none');
                        count++;
                    }
                });

                if (document.querySelectorAll('.past-event-item.hidden').length === 0) {
                    loadMoreBtn.style.display = 'none';
                }
            });
        }
    });
</script>

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
                <div class="chapter-card-fancy chapter-card-mumbai">
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
                <div class="chapter-card-fancy chapter-card-london">
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
                <div class="chapter-card-fancy chapter-card-berlin">
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
            <div class="col-md-6 col-lg-8 fade-up-trigger delay-0-2">
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