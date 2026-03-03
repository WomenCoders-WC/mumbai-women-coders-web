<?php
$pageTitle = "Mumbai Chapter";
$metaDescription = "The founding hub of Mumbai Women Coders. Join our vibrant community in Mumbai for technical workshops, mentorship, and networking events.";
$root = '../';
include '../includes/header.php';
include '../includes/navigation.php';
?>

<!-- Chapter Hero -->
<section class="hero-section text-center hero-fixed-bg mumbai-hero-bg">
    <div class="container position-relative z-3">
        <div class="animate__animated animate__fadeInDown">
            <!-- Fancy Breadcrumb -->
            <!-- Breadcrumb Section -->
            <div class="mb-4">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ol
                        class="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                        <li class="breadcrumb-item"><a href="../index.php"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item"><a href="../chapters/"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Chapters</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Mumbai</li>
                    </ol>
                </nav>
            </div>
            <span class="badge hero-badge px-3 py-2 mb-4">
                <small class="text-uppercase fw-bold ls-1">India 🇮🇳</small>
            </span>
            <h1 class="display-1 fw-bold mb-4 text-gradient-light">Mumbai Chapter</h1>
            <p class="lead hero-desc mb-5">
                The founding hub of Women Coders, fostering innovation and inclusion in the heart of India's Silicon
                Valley alternative.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank" class="btn btn-premium">Join on
                    Meetup</a>
                <a href="#about" class="btn btn-m-outline">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="bg-mesh-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 animate-fade-up">
                <div class="position-relative">
                    <div
                        class="position-absolute z-3 start-0 top-0 translate-middle-x translate-middle-y support-popup-logo-container d-none d-md-flex mt-3 ms-3">
                        <img src="../assets/images/logo/dark/4.png" alt="Women Coders Logo"
                            class="support-popup-logo-img">
                    </div>
                    <div id="mumbaiCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-inner img-premium-container shadow-lg">
                            <div class="carousel-item active">
                                <img src="../assets/images/sliders/slider1.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 1">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/sliders/slider2.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 2">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/sliders/slider3.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 3">
                            </div>
                            <div class="carousel-item">
                                <img src="../assets/images/sliders/slider4.webp" class="d-block w-100 img-premium"
                                    alt="Community Event 4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 animate-fade-up">
                <h2 class="display-5 fw-bold mb-4">About the <span class="text-royal-violet">Mumbai Chapter</span></h2>
                <p class="lead text-muted mb-4">
                    Mumbai Women Coders is a vibrant tech community in Mumbai for women & men in technology and their
                    allies, creating lasting change in the tech ecosystem. <br><br>
                    Our community welcomes everyone: students, professionals, experienced developers, and allies
                    committed to inclusive tech spaces. <br><br>
                    We are open, inclusive, and focused on individual and collective growth.
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-glow mb-0 icon-box-md">
                                <i class="fa-solid fa-user-group"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">2100+</h5>
                                <small class="text-muted">Members</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-glow mb-0 icon-box-md">
                                <i class="fa-regular fa-calendar-days"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">40+</h5>
                                <small class="text-muted">Events Held</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chapter Leads -->
<!-- Community Organizers Section -->
<section id="organizers" class="bg-cosmic-theme py-5">
    <div class="container py-5">
        <div class="text-center mb-5 fade-up-trigger">

            <h2 class="display-4 fw-bold text-white">Chapter Leads</h2>
            <p class="lead text-white-50 mx-auto mx-w-700 opacity-75">
                Meet the passionate individuals driving the Mumbai Women Coders community forward.
            </p>
        </div>

        <!-- Leadership Section -->
        <div class="row g-4 justify-content-center mt-5">
            <?php
            $leadership = [

                [
                    'name' => 'Nandini Singh',
                    'role' => 'Software Developer, AI Enthusiast, Freelancer',
                    'designation' => 'Organizer',
                    'img' => '../assets/images/organizers/nandini-singh.jpg',
                    'link' => 'https://www.linkedin.com/in/nandinisingh18/'
                ],
                [
                    'name' => 'Khusheeta Attarde',
                    'role' => 'ASE @ QAD INDIA',
                    'designation' => 'Organizer',
                    'img' => '../assets/images/organizers/khusheeta-attrde.jpg',
                    'link' => 'https://www.linkedin.com/in/khusheeta-attarde-69a60a215/'
                ]
            ];

            foreach ($leadership as $o): ?>
                <div class="col-lg-4 col-md-6 fade-up-trigger pt-5 mt-4 pt-lg-0 mt-lg-0">
                    <div
                        class="h-100 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 d-flex flex-column transition-all hover-opacity-100 text-center p-4 pt-5 mt-5">
                        <div class="speaker-img-wrapper">
                            <div class="speaker-img-glow"></div>
                            <img src="<?= $o['img'] ?>" alt="<?= $o['name'] ?>">
                        </div>
                        <h4 class="text-white"><?= $o['name'] ?></h4>
                        <span
                            class="speaker-designation text-white opacity-75 border-0 bg-transparent"><?= $o['designation'] ?></span>
                        <p class="text-white-50 small mb-2">
                            <?= $o['role'] ?>
                        </p>
                        <div class="speaker-socials mt-auto">
                            <a href="<?= $o['link'] ?>" target="_blank" title="LinkedIn"
                                class="text-white border-0 bg-transparent fs-4"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Core Team Section -->
        <!-- <div class="text-center mt-5 pt-5 mb-5 fade-up-trigger">
            <h2 class="display-5 fw-bold text-white mb-5">Core Team</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $coreTeam = [

                [
                    'name' => '',
                    'role' => '',
                    'designation' => 'Core Team',
                    'img' => '',
                    'link' => ''
                ],

            ];

            foreach ($coreTeam as $o): ?>
                <div class="col-lg-4 col-md-6 fade-up-trigger pt-5 mt-4 pt-lg-0 mt-lg-0">
                    <div
                        class="h-100 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 d-flex flex-column transition-all hover-opacity-100 text-center p-4 pt-5 mt-5">
                        <div class="speaker-img-wrapper">
                            <div class="speaker-img-glow"></div>
                            <img src="<?= $o['img'] ?>" alt="<?= $o['name'] ?>">
                        </div>
                        <h4 class="text-white"><?= $o['name'] ?></h4>
                        <span
                            class="speaker-designation text-white opacity-75 border-0 bg-transparent"><?= $o['designation'] ?></span>
                        <p class="text-white-50 small mb-2">
                            <?= $o['role'] ?>
                        </p>
                        <div class="speaker-socials mt-auto">
                            <a href="<?= $o['link'] ?>" target="_blank" title="LinkedIn"
                                class="text-white border-0 bg-transparent fs-4"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div> -->
    </div>
</section>


<!-- Events Section -->
<!-- Upcoming Events Section -->
<section id="upcoming" class="bg-white position-relative py-5">
    <div class="events-dot-pattern opacity-5"></div>
    <div class="container py-5 position-relative z-2">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Save the Date</h6>
            <h2 class="display-4 fw-bold">Our Mumbai Chapter Events</h2>
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
                                    <img src="../assets/images/events/mwc-8-3-26.jpg" class="event-preview-img"
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
<!-- Community Links -->
<section class="bg-chapter-cosmic text-white py-5 position-relative overflow-hidden">
    <div class="hero-bg-1 opacity-3"></div>
    <div class="container py-4">
        <div class="glass-card-premium p-5 text-center bg-transparent border-white-50">
            <h2 class="fw-bold mb-4">Connect with Mumbai Women Coders</h2>
            <div class="mt-2">

                <div class="d-flex justify-content-center gap-3">
                    <a href="https://chat.whatsapp.com/Izg9LXqH4996RYJpuWFgZc"
                        class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.linkedin.com/company/mumbai-women-coders/"
                        class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.instagram.com/mumbaiwomencoders/"
                        class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/WomenCoders01" class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="fa-brands fa-x-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>