<?php
$pageTitle = "Support Our Mission";
$metaDescription = "Help Mumbai Women Coders empower more women in technology. Explore sponsorship opportunities and ways to give back to the community.";
$root = '';
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Hero Section -->
<header class="hero-section d-flex align-items-center">
    <div class="hero-bg-1"></div>
    <div class="hero-bg-2"></div>

    <div class="container hero-container-inner position-relative z-2">
        <div class="row justify-content-center text-center">
            <div class="col-lg-10 animate__animated animate__fadeIn">
                <nav aria-label="breadcrumb" class="d-inline-block mb-3">
                    <ol
                        class="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25">
                        <li class="breadcrumb-item"><a href="index.php"
                                class="text-white text-decoration-none opacity-75 hover-opacity-100">Home</a></li>
                        <li class="breadcrumb-item active text-white fw-bold" aria-current="page">Support Us</li>
                    </ol>
                </nav>

                <h1 class="display-1 fw-bolder mb-3 lh-1">
                    Empower <span class="text-gradient">Potential</span>,<br>Shape the Future.
                </h1>
                <p class="lead mb-5 hero-desc">
                    By supporting Women Coders, you're not just funding a community; you're investing in the next
                    generation of technical leaders and innovators.
                </p>
                <div class="d-flex gap-3 justify-content-center">
                    <a href="#contact" class="btn btn-premium btn-lg">Partner With Us</a>
                    <a href="#ways-to-support" class="btn btn-m-outline btn-lg">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Why Support Section -->
<section id="why-support" class="bg-surface-variant overflow-hidden">
    <div class="container">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">The Mission</h6>
            <h2 class="display-4 fw-bold">Why Support Women Coders?</h2>
            <p class="lead text-muted mx-auto mx-w-800">
                Bridging the gender gap in technology requires collective action. Your support enables us to provide the
                resources, mentorship, and opportunities women need to excel.
            </p>
        </div>

        <div class="row align-items-center g-5 mt-2">
            <div class="col-lg-6 fade-up-trigger">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="glass-card-premium p-4">
                            <div class="icon-box-glow">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Close the Talent Gap</h4>
                            <p class="text-muted mb-0">Diverse teams are more innovative. We help companies connect with
                                and
                                nurture high-potential female technical talent.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="glass-card-premium p-4">
                            <div class="icon-box-glow">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Mentorship at Scale</h4>
                            <p class="text-muted mb-0">Your support funds programs that connect industry veterans with
                                junior
                                developers, accelerating career growth for hundreds.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 fade-up-trigger">
                <div class="img-premium-container shadow-lg">
                    <img src="<?php echo $root ?? ''; ?>assets/images/support-us.webp" class="img-premium w-100"
                        alt="Group of diverse women working together on tech projects in a collaborative workspace">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Metrics Section -->
<section id="impact-stats" class="bg-cosmic-theme py-5 position-relative overflow-hidden">
    <div class="hero-bg-1 opacity-5"></div>
    <div class="container py-5 position-relative z-2">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Community Impact</h6>
            <h2 class="display-5 fw-bold text-white">Our Growing Reach</h2>
        </div>
        <div class="row text-center g-4 fade-up-trigger">
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-3 mb-1 text-gradient">5000+</h2>
                <p class="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Active Members</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-3 mb-1 text-gradient">15+</h2>
                <p class="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Global Chapters</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-3 mb-1 text-gradient">250+</h2>
                <p class="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Technical Workshops</p>
            </div>
            <div class="col-6 col-md-3">
                <h2 class="fw-bold display-3 mb-1 text-gradient">100k+</h2>
                <p class="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Monthly Reach</p>
            </div>
        </div>
    </div>
</section>

<!-- Ways to Support Section -->
<section id="ways-to-support" class="bg-white">
    <div class="container">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Engagement</h6>
            <h2 class="display-4 fw-bold">Ways to Support</h2>
            <p class="lead text-muted mx-auto mx-w-700">
                Choose a partnership model that aligns with your organization's goals and values.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Sponsorship -->
            <div class="col-lg-3 col-md-6 fade-up-trigger">
                <div class="m-card text-center h-100 p-4">
                    <div class="pillar-icon-box mx-auto mb-4">
                        <i class="bi bi-award"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Sponsorship</h4>
                    <p class="text-muted small mb-0">Direct financial support for our global summits, local meetups, and
                        technical hackathons.</p>
                </div>
            </div>
            <!-- Partnerships -->
            <div class="col-lg-3 col-md-6 fade-up-trigger delay-1">
                <div class="m-card text-center h-100 p-4">
                    <div class="pillar-icon-box mx-auto mb-4">
                        <i class="bi bi-hand-thumbs-up"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Partnerships</h4>
                    <p class="text-muted small mb-0">Long-term collaboration on strategic initiatives, curriculum
                        development, and co-branded events.</p>
                </div>
            </div>
            <!-- Grants -->
            <div class="col-lg-3 col-md-6 fade-up-trigger delay-2">
                <div class="m-card text-center h-100 p-4">
                    <div class="pillar-icon-box mx-auto mb-4">
                        <i class="bi bi-bank"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Grants</h4>
                    <p class="text-muted small mb-0">Project-specific funding for research, educational materials, and
                        scholarships for members.</p>
                </div>
            </div>
            <!-- In-kind -->
            <div class="col-lg-3 col-md-6 fade-up-trigger delay-3">
                <div class="m-card text-center h-100 p-4">
                    <div class="pillar-icon-box mx-auto mb-4">
                        <i class="bi bi-box-seam"></i>
                    </div>
                    <h4 class="fw-bold mb-3">In-kind</h4>
                    <p class="text-muted small mb-0">Pro-bono services, software licenses, venue hosting, or technical
                        equipment contributions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sponsor Benefits Section -->
<section id="benefits" class="bg-cosmic-theme py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0 fade-up-trigger">
                <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Value Add</h6>
                <h2 class="display-4 fw-bold text-white mb-4">Partner Benefits</h2>
                <p class="text-white-50 mb-4 fs-5">
                    We believe in mutually beneficial partnerships. As a support, your organization gains direct value
                    while giving back.
                </p>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-gradient me-3"></i> Direct access to a pool of 5000+
                        technical women.</li>
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-gradient me-3"></i> Brand visibility across tech summits
                        and social media.</li>
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-gradient me-3"></i> Recruitment opportunities at
                        exclusive job stalls.</li>
                    <li class="mb-3 d-flex align-items-center"><i
                            class="bi bi-check-circle-fill text-gradient me-3"></i> Employee engagement through
                        mentorship roles.</li>
                </ul>
            </div>
            <div class="col-lg-4 fade-up-trigger order-lg-1 order-2">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="m-card-dark p-4">
                            <h5 class="text-white fw-bold mb-2">Talent Pool</h5>
                            <p class="text-white-50 small mb-0">Resume database access and direct talent referrals.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="m-card-dark p-4">
                            <h5 class="text-white fw-bold mb-2">Visibility</h5>
                            <p class="text-white-50 small mb-0">Logo placement on website, event banners, and swag.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 fade-up-trigger order-lg-2 order-1 mb-4 mb-lg-0">
                <div class="img-organic shadow-lg">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=600"
                        class="w-100 h-400-cover"
                        alt="A professional team of women discussing strategic technology partnerships around a table">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sponsors & Testimonials Section -->
<section class="bg-surface-variant overflow-hidden">
    <div class="container">
        <div class="text-center mb-5 fade-up-trigger">
            <h6 class="text-gradient fw-bold text-uppercase ls-2 mb-3">Our Network</h6>
            <h2 class="display-5 fw-bold mb-4">Trusted by Industry Leaders</h2>
        </div>

        <div class="partners-grid fade-up-trigger mb-5">
            <div class="partner-card">
                <img src="assets/images/partner/microsoft.png" alt="Microsoft" class="partner-logo">
            </div>
            <div class="partner-card">
                <img src="assets/images/partner/gdg-mumbai.webp" alt="GDG Mumbai" class="partner-logo">
            </div>
            <!-- Placeholder logos if others don't exist -->
            <div class="partner-card">
                <div class="fw-bold opacity-25">GLOBAL TECH CO</div>
            </div>
            <div class="partner-card">
                <div class="fw-bold opacity-25">INNOVATION LABS</div>
            </div>
        </div>

        <div class="row mt-5 pt-4">
            <div class="col-lg-10 mx-auto fade-up-trigger">
                <div class="story-card text-center p-5 position-relative overflow-hidden">
                    <!-- Background Decoration -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 bg-lavender-subtle opacity-25 z-n1"></div>

                    <div class="row align-items-center">
                        <div class="col-md-2 d-none d-md-block">
                            <i class="bi bi-quote text-gradient opacity-25 quote-icon-lg"></i>
                        </div>
                        <div class="col-md-10 text-md-start">
                            <p class="fs-4 italic mb-4 lh-base">
                                "Partnering with Mumbai Women Coders has been an incredible journey. The quality of
                                talent and
                                the vibrancy of the community are unmatched. We've hired three amazing engineers through
                                their
                                network this year alone."
                            </p>
                            <div class="d-flex align-items-center mt-4">
                                <div class="me-3 shadow position-relative z-1 avatar-medium">
                                    <img src="https://ui-avatars.com/api/?name=David+Chen&background=7b2cbf&color=fff&size=100"
                                        alt="David Chen, CTO of HyperTech Solutions"
                                        class="w-100 h-100 object-fit-cover rounded-pill border border-3 border-white">
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0 text-dark">David Chen</h5>
                                    <p class="text-gradient small fw-bold text-uppercase mb-0 ls-1">CTO, HyperTech
                                        Solutions</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Inquiry Form Section -->
<section id="contact" class="bg-deep-space position-relative overflow-hidden py-6">
    <!-- Animated Decorative Background Shapes -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden pointer-none z-1">
        <div class="position-absolute bg-primary rounded-circle opacity-10 animate-pulse blur-80 blob-support-1"></div>
        <div class="position-absolute bg-secondary rounded-circle opacity-10 animate-pulse blur-60 blob-support-2">
        </div>
        <div class="position-absolute bg-lavender rounded-circle opacity-5 blur-40 blob-support-3"></div>
    </div>

    <div class="container position-relative z-2">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="m-card shadow-2xl overflow-hidden p-0 border-0 bg-white shadow-premium">
                    <div class="row g-0">
                        <div
                            class="col-md-5 bg-gradient-cosmic p-5 d-flex flex-column justify-content-center position-relative overflow-hidden text-center text-md-start">
                            <!-- Background Shapes for Left Panel -->
                            <div class="position-absolute top-0 start-0 w-100 h-100 opacity-20 radial-top-left"></div>
                            <div class="position-absolute bottom-0 end-0 w-100 h-100 opacity-20 radial-bottom-right">
                            </div>

                            <div class="mb-4 position-relative z-1">
                                <img src="assets/images/logo.png" alt="MWC Logo"
                                    class="img-fluid mb-3 max-h-70 drop-shadow-glow">
                            </div>
                            <h2 class="display-5 fw-bold text-white mb-4 position-relative z-1">Start a Legacy.</h2>
                            <p class="text-white-50 mb-4 position-relative z-1 fs-5">
                                Ready to make an impact? Fill out the form and our partnership team will reach out
                                within 48 hours.
                            </p>
                            <div class="text-white position-relative z-1">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-circle-m me-3"><i class="bi bi-envelope-fill"></i></div>
                                    <span>partnerships@womencoders.org</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="icon-circle-m me-3"><i class="bi bi-geo-alt-fill"></i></div>
                                    <span>Mumbai | London | Berlin</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 p-5 bg-white">
                            <h4 class="fw-bold mb-4 text-dark position-relative d-inline-block">
                                Partnership Inquiry
                                <span
                                    class="position-absolute bottom-0 start-0 w-50 bg-primary title-underline-m"></span>
                            </h4>
                            <form action="#" method="POST" class="mt-4">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label small fw-bold text-uppercase ls-1 text-muted">Full
                                                Name</label>
                                            <input type="text"
                                                class="form-control rounded-pill px-4 py-3 border-light shadow-sm"
                                                placeholder="Jane Doe" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label small fw-bold text-uppercase ls-1 text-muted">Work
                                                Email</label>
                                            <input type="email"
                                                class="form-control rounded-pill px-4 py-3 border-light shadow-sm"
                                                placeholder="jane@company.com" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label
                                                class="form-label small fw-bold text-uppercase ls-1 text-muted">Organization</label>
                                            <input type="text"
                                                class="form-control rounded-pill px-4 py-3 border-light shadow-sm"
                                                placeholder="Company Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label
                                                class="form-label small fw-bold text-uppercase ls-1 text-muted">Support
                                                Interest</label>
                                            <select class="form-select rounded-pill px-4 py-3 border-light shadow-sm">
                                                <option selected>Select an option</option>
                                                <option value="sponsorship">Sponsorship</option>
                                                <option value="partnership">Strategic Partnership</option>
                                                <option value="grants">Grants</option>
                                                <option value="inkind">In-kind Contribution</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label
                                                class="form-label small fw-bold text-uppercase ls-1 text-muted">Message</label>
                                            <textarea class="form-control rounded-4 px-4 py-3 border-light shadow-sm"
                                                rows="4" placeholder="How can we collaborate?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end mt-4">
                                        <button type="submit" class="btn btn-premium btn-lg w-100 py-3 shadow-lg">Send
                                            Inquiry <i class="bi bi-send ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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