<?php
$pageTitle = "Berlin Chapter";
$metaDescription = "Women Coders is coming to Berlin. A community for women in technology in Germany's capital. Join us for networking, AI workshops, and leadership training. Launching soon.";
$root = '../';
include '../includes/header.php';
include '../includes/navigation.php';
?>

<!-- Chapter Hero -->
<section class="hero-section text-center hero-fixed-bg"
    style="background: linear-gradient(rgba(15, 5, 41, 0.85), rgba(15, 5, 41, 0.95)), url('../assets/images/chapters/backgrounds/berlin.webp');">
    <div class="container position-relative z-3">
        <div class="animate__animated animate__fadeInDown">
            <!-- Breadcrumb Section -->
            <div class="mb-4">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ol
                        class="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                        <li class="breadcrumb-item"><a href="../index.php"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item"><a href="../chapters/"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Chapters</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Berlin</li>
                    </ol>
                </nav>
            </div>
            <span class="badge bg-warning text-dark px-3 py-2 mb-4">
                <small class="text-uppercase fw-bold ls-1">Launching Soon in Berlin 🇩🇪</small>
            </span>
            <h1 class="display-1 fw-bold mb-4 text-gradient-light">Berlin Chapter</h1>
            <p class="lead hero-desc mb-5">
                The hub of European innovation is getting a new home for women in tech. Berlin's diverse and creative
                technical community will soon have its own Women Coders chapter.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#waitlist" class="btn btn-premium">Join the Waitlist</a>
                <a href="../chapters/" class="btn btn-m-outline">Explore Chapters</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="bg-mesh-light py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2 animate-fade-up">
                <div class="img-premium-container grayscale-filter">
                    <img src="../assets/images/chapters/backgrounds/berlin.webp" alt="Berlin Startup Scene"
                        class="img-fluid img-premium w-100 img-grayscale-50">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="glass-card p-4 text-center">
                            <h2 class="fw-bold mb-0">Coming</h2>
                            <p class="small text-muted mb-0">Stay Tuned</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 animate-fade-up">
                <h2 class="display-5 fw-bold mb-4">Empowering <span class="text-royal-violet">Berlin's Tech
                        Talent</span></h2>
                <p class="lead text-muted mb-4">
                    Berlin is a global epicenter for startups, AI, and creative technology. We are building a chapter
                    that reflects the city's unique blend of culture and technical excellence.
                </p>
                <p class="text-secondary mb-4">
                    Whether you are an engineer at a scale-up in Mitte or a researcher at a technical university, Berlin
                    Women Coders will provide the platform for you to connect with like-minded professionals and elevate
                    your career.
                </p>
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="glass-card p-3 border-0 bg-white">
                            <h6 class="fw-bold"><i class="bi bi-rocket-takeoff text-royal-violet me-2"></i> Startup Hub
                            </h6>
                            <p class="small text-muted mb-0">Connecting with the local VC and founder ecosystem.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="glass-card p-3 border-0 bg-white">
                            <h6 class="fw-bold"><i class="bi bi-cpu text-royal-violet me-2"></i> AI & Innovation</h6>
                            <p class="small text-muted mb-0">Workshops on the latest in Deep Tech and AI Ethics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Waitlist Section -->
<section id="waitlist" class="bg-chapter-cosmic py-5 position-relative overflow-hidden">
    <div class="hero-bg-1 opacity-5"></div>
    <div class="container py-4 text-center">
        <div class="cta-box-refined animate-fade-up">
            <h2 class="display-5 fw-bold mb-4">Berlin Waitlist</h2>
            <p class="lead text-muted mb-5">Be part of the founding community in Berlin. We'll reach out when we're
                ready to organize our first meetup.</p>
            <form action="#" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="email" class="form-control rounded-pill p-3" placeholder="Your email address" required>
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-premium px-5 py-3">Join Waitlist</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>