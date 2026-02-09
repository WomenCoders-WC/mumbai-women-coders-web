<?php
$pageTitle = "Mumbai Chapter";
$root = '../';
include '../includes/header.php';
include '../includes/navigation.php';
?>

<!-- Chapter Hero -->
<section class="hero-section text-center"
    style="background: linear-gradient(rgba(15, 5, 41, 0.9), rgba(15, 5, 41, 0.95)), url('../assets/images/chapters/backgrounds/mumbai.webp'); background-size: cover; background-position: center; background-attachment: fixed;">
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
                    Established in 2023, the Mumbai chapter has grown into a vibrant ecosystem for women in tech. We
                    focus on bridging the gap between education and industry through hands-on workshops and networking.
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-glow mb-0" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="bi bi-people"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">1200+</h5>
                                <small class="text-muted">Members</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center gap-3">
                            <div class="icon-box-glow mb-0" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="bi bi-calendar-event"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">15+</h5>
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
<section class="bg-chapter-premium text-white position-relative overflow-hidden">
    <div class="hero-bg-1" style="opacity: 0.05;"></div>
    <div class="container py-5 text-center">
        <h2 class="display-5 fw-bold mb-5">Chapter <span class="text-gradient-light">Leads</span></h2>
        <div class="row justify-content-center g-4">
            <div class="col-md-4 animate-fade-up">
                <div class="m-card-dark text-center">
                    <div class="mb-4">
                        <img src="../assets/images/speakers/ramyashree-shetty.webp" alt="Lead"
                            class="rounded-circle border border-3 border-lavender"
                            style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h4 class="fw-bold">Ramyashree Shetty</h4>
                    <p class="text-lavender-light mb-3">Founder & Lead</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-fade-up" style="animation-delay: 0.2s;">
                <div class="m-card-dark text-center">
                    <div class="mb-4">
                        <img src="../assets/images/speakers/taazeen-ansari.webp" alt="Lead"
                            class="rounded-circle border border-3 border-lavender"
                            style="width: 150px; height: 150px; object-fit: cover;">
                    </div>
                    <h4 class="fw-bold">Taazeen Ansari</h4>
                    <p class="text-lavender-light mb-3">Chapter Co-Lead</p>
                    <div class="d-flex justify-content-center gap-3 mt-3">
                        <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white fs-5"><i class="bi bi-twitter-x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h2 class="display-5 fw-bold mb-2">Events</h2>
                <p class="text-secondary">Stay updated with our latest activities in Mumbai.</p>
            </div>
            <a href="../events" class="btn btn-outline-primary rounded-pill px-4 mb-3">View All Events</a>
        </div>

        <div class="row g-4">
            <!-- Upcoming Event -->
            <div class="col-lg-6 animate-fade-up">
                <div class="glass-card-premium p-4 border-primary">
                    <div class="badge bg-primary mb-3">Upcoming</div>
                    <h3 class="fw-bold h4 mb-3">Advanced Web Dev Workshop</h3>
                    <p class="text-muted mb-4">Join us for an intensive deep dive into React & Next.js scaling patterns.
                    </p>
                    <div class="d-flex align-items-center gap-4 text-muted small mb-4">
                        <span><i class="bi bi-calendar3 me-2"></i>March 15, 2026</span>
                        <span><i class="bi bi-geo-alt me-2"></i>Andheri East, Mumbai</span>
                    </div>
                    <a href="#" class="btn btn-premium btn-sm">Register Now</a>
                </div>
            </div>

            <!-- Past Event -->
            <div class="col-lg-6 animate-fade-up" style="animation-delay: 0.2s;">
                <div class="glass-card-premium p-4 opacity-75">
                    <div class="badge bg-secondary mb-3">Past</div>
                    <h3 class="fw-bold h4 mb-3">Women in Tech Networking Mixer</h3>
                    <p class="text-muted mb-4">A successful evening connecting local developers with industry mentors.
                    </p>
                    <div class="d-flex align-items-center gap-4 text-muted small mb-4">
                        <span><i class="bi bi-calendar3 me-2"></i>Jan 20, 2026</span>
                        <span><i class="bi bi-geo-alt me-2"></i>BKC, Mumbai</span>
                    </div>
                    <a href="#" class="btn btn-m-outline text-royal-violet btn-sm">View Recap</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Community Links -->
<section class="bg-chapter-cosmic text-white py-5 position-relative overflow-hidden">
    <div class="hero-bg-1" style="opacity: 0.03;"></div>
    <div class="container py-4">
        <div class="glass-card-premium p-5 text-center bg-transparent border-white-50">
            <h2 class="fw-bold mb-4">Connect with Mumbai</h2>
            <div class="d-flex flex-wrap justify-content-center gap-4">
                <a href="#" class="btn btn-m-outline"><i class="bi bi-whatsapp me-2"></i>WhatsApp Group</a>
                <a href="#" class="btn btn-m-outline"><i class="bi bi-telegram me-2"></i>Telegram Channel</a>
                <a href="#" class="btn btn-m-outline"><i class="bi bi-discord me-2"></i>Discord Room</a>
            </div>
            <div class="mt-5">
                <p class="text-lavender-light mb-3">Follow us on Social Media</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="bi bi-linkedin"></i></a>
                    <a href="#" class="btn btn-outline-light btn-social-round shadow-sm"><i
                            class="bi bi-facebook"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>