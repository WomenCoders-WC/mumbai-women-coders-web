<?php
$pageTitle = "London Chapter";
$metaDescription = "Connecting tech-passionate women in the heart of the UK. Join the Mumbai Women Coders London chapter for networking, workshops, and mentorship. Coming soon in 2026.";
$root = '../';
include '../includes/header.php';
include '../includes/navigation.php';
?>

<!-- Chapter Hero -->
<section class="hero-section text-center"
    style="background: linear-gradient(rgba(15, 5, 41, 0.85), rgba(15, 5, 41, 0.95)), url('../assets/images/chapters/backgrounds/london.webp'); background-size: cover; background-position: center; background-attachment: fixed;">
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
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">London</li>
                    </ol>
                </nav>
            </div>
            <span class="badge bg-warning text-dark px-3 py-2 mb-4 animate__animated animate__pulse animate__infinite">
                <small class="text-uppercase fw-bold ls-1">Coming Soon to London 🇬🇧</small>
            </span>
            <h1 class="display-1 fw-bold mb-4 text-gradient-light">London Chapter</h1>
            <p class="lead hero-desc mb-5">
                We are bringing the Women Coders movement to the tech capital of Europe. London's vibrant tech ecosystem
                will soon have a dedicated space for women to thrive, innovate, and lead.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="#notify" class="btn btn-premium">Notify Me on Launch</a>
                <a href="../chapters/" class="btn btn-m-outline">Back to Chapters</a>
            </div>
        </div>
    </div>
</section>

<!-- SEO & About Section -->
<section id="about" class="bg-mesh-light py-5">
    <div class="container py-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 animate-fade-up">
                <div class="img-premium-container grayscale-filter">
                    <img src="../assets/images/chapters/backgrounds/london.webp" alt="London Tech Community"
                        class="img-fluid img-premium w-100" style="object-fit: cover; filter: grayscale(50%);">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <div class="glass-card p-4 text-center">
                            <h2 class="fw-bold mb-0">2026</h2>
                            <p class="small text-muted mb-0">Official Launch</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 animate-fade-up">
                <h2 class="display-5 fw-bold mb-4">The Future of <span class="text-royal-violet">Women in London
                        Tech</span></h2>
                <p class="lead text-muted mb-4">
                    London is home to thousands of brilliant women in technology. From Shoreditch startups to Canary
                    Wharf enterprises, the need for a supportive, inclusive community is greater than ever.
                </p>
                <p class="text-secondary mb-4">
                    Our London chapter will focus on high-impact networking, technical workshops, and career
                    acceleration programs tailored for the UK's unique tech landscape. We are currently scouting for
                    chapter leads and venue partners.
                </p>
                <div class="glass-card-premium p-4">
                    <h5 class="fw-bold mb-3"><i class="bi bi-info-circle text-royal-violet me-2"></i> What to expect:
                    </h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> Monthly Technical Workshops</li>
                        <li class="mb-2"><i class="bi bi-check2 text-success me-2"></i> Industry Mentor Matchmaking</li>
                        <li><i class="bi bi-check2 text-success me-2"></i> Exclusive Career Opportunities</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Notify Section -->
<section id="notify" class="bg-chapter-cosmic py-5 position-relative overflow-hidden">
    <div class="hero-bg-1" style="opacity: 0.05;"></div>
    <div class="container py-4 text-center">
        <div class="cta-box-refined animate-fade-up">
            <h2 class="display-5 fw-bold mb-4">Get Notified</h2>
            <p class="lead text-muted mb-5">Be the first to know when we launch in London. We'll send you an invitation
                to our kickoff event.</p>
            <form action="#" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="email" class="form-control rounded-pill p-3" placeholder="Enter your email address"
                        required>
                </div>
                <div class="col-md-auto">
                    <button type="submit" class="btn btn-premium px-5 py-3">Keep Me Updated</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>