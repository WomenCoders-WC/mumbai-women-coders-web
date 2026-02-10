<?php
$pageTitle = "Chapters";
$root = '../';
include '../includes/header.php';
include '../includes/navigation.php';
?>

<!-- Hero Section -->
<section class="hero-section d-flex align-items-center text-center">
    <div class="hero-bg-1"></div>
    <div class="hero-bg-2"></div>
    <div class="container position-relative z-3">
        <div class="animate__animated animate__fadeInDown">
            <!-- Breadcrumb Section -->
            <div class="mb-4">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ol
                        class="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                        <li class="breadcrumb-item"><a href="../index.php"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Chapters</li>
                    </ol>
                </nav>
            </div>
            <div class="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm hero-badge">
                <small class="text-uppercase fw-bold ls-1">Global Community</small>
            </div>
            <h1 class="display-1 fw-bold mb-4 text-gradient-light">Our Chapters</h1>
            <p class="lead hero-desc mb-5">
                Join our growing global network of tech-passionate women. Find a community near you and start your
                journey with Women Coders.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#explore" class="btn btn-premium">Explore Chapters</a>
                <a href="start" class="btn btn-m-outline">Start a Chapter</a>
            </div>
        </div>
    </div>
</section>

<!-- Chapters Overview -->
<section id="explore" class="bg-mesh-light py-5">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 animate-fade-up">
                <h2 class="display-5 fw-bold mb-4">Empowering Women <span class="text-royal-violet">Across the
                        Globe</span></h2>
                <p class="lead text-muted">
                    Women Coders is expanding its reach. Our chapters are local communities led by passionate
                    individuals who want to bridge the gender gap in tech through mentorship, events, and a supportive
                    environment.
                </p>
            </div>
            <div class="col-lg-6 text-center animate-fade-up">
                <div class="glass-card-premium p-4 d-inline-block">
                    <div class="d-flex align-items-center gap-4 text-start">
                        <div class="icon-box-glow mb-0">
                            <i class="bi bi-globe"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold mb-1">3 Cities</h4>
                            <p class="mb-0 text-muted">Active Global Chapters</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Mumbai Chapter -->
            <div class="col-md-4 animate-fade-up">
                <div class="glass-card-premium h-100">
                    <div class="position-relative overflow-hidden h-250">
                        <img src="../assets/images/chapters/backgrounds/mumbai.webp"
                            class="w-100 h-100 object-fit-cover" alt="Mumbai">
                        <div class="position-absolute top-0 end-0 p-3">
                            <span class="fs-2">🇮🇳</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="fw-bold h4">Mumbai, India</h3>
                        <p class="text-muted small mb-4">The heartbeat of our community, Mumbai Women Coders is where it
                            all began. Empowering thousands of women in India's financial capital.</p>
                        <a href="mumbai.php"
                            class="btn btn-outline-primary btn-sm rounded-pill px-4 stretched-link">Visit Chapter</a>
                    </div>
                </div>
            </div>

            <!-- London Chapter -->
            <div class="col-md-4 animate-fade-up delay-2">
                <div class="glass-card-premium h-100 grayscale-filter">
                    <div class="position-relative overflow-hidden h-250">
                        <img src="../assets/images/chapters/backgrounds/london.webp"
                            class="w-100 h-100 object-fit-cover" alt="London">
                        <div class="position-absolute top-0 end-0 p-3">
                            <span class="fs-2">🇬🇧</span>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <span class="badge bg-dark px-3 py-2">Coming Soon</span>
                        </div>
                    </div>
                    <div class="p-4 opacity-75">
                        <h3 class="fw-bold h4">London, UK</h3>
                        <p class="text-muted small mb-4">Connecting tech-passionate women in the heart of the UK. We are
                            currently preparing to launch our London chapter.</p>
                        <a href="london.php"
                            class="btn btn-outline-secondary btn-sm rounded-pill px-4 stretched-link">Preview
                            Details</a>
                    </div>
                </div>
            </div>

            <!-- Berlin Chapter -->
            <div class="col-md-4 animate-fade-up delay-4">
                <div class="glass-card-premium h-100 grayscale-filter">
                    <div class="position-relative overflow-hidden h-250">
                        <img src="../assets/images/chapters/backgrounds/berlin.webp"
                            class="w-100 h-100 object-fit-cover" alt="Berlin">
                        <div class="position-absolute top-0 end-0 p-3">
                            <span class="fs-2">🇩🇪</span>
                        </div>
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <span class="badge bg-dark px-3 py-2">Coming Soon</span>
                        </div>
                    </div>
                    <div class="p-4 opacity-75">
                        <h3 class="fw-bold h4">Berlin, Germany</h3>
                        <p class="text-muted small mb-4">Innovation meets community in the hub of European tech. Join
                            our waitlist for the upcoming Berlin chapter launch.</p>
                        <a href="berlin.php"
                            class="btn btn-outline-secondary btn-sm rounded-pill px-4 stretched-link">Preview
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-chapter-cosmic position-relative overflow-hidden">
    <div class="hero-bg-2 opacity-5"></div>
    <div class="container py-4 text-center">
        <div class="cta-box-refined animate-fade-up">
            <h2 class="display-5 fw-bold mb-4">Don't see your city?</h2>
            <p class="lead text-muted mb-5 px-lg-5">
                Take the lead and bring Women Coders to your local community. We provide the branding, resources, and
                support you need to make an impact.
            </p>
            <div class="d-flex justify-content-center gap-3">
                <a href="start.php" class="btn btn-premium px-5">Start a Chapter</a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>