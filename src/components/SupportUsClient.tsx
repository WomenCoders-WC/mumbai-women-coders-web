"use client";

import { useEffect } from 'react';
import Link from 'next/link';

const SupportUsClient = () => {
    useEffect(() => {
        // Auto-Cloning Script for Infinite Marquee
        const marquee = document.getElementById("partner-marquee-support");
        if (marquee) {
            // clear it out to avoid duplication on re-renders
            const logos = marquee.querySelectorAll('.partner-card');
            if (logos.length === 2 && marquee.children.length === 2) {
                const items = marquee.innerHTML;
                for (let i = 0; i < 8; i++) {
                    marquee.innerHTML += items;
                }
            }
        }
    }, []);

    return (
        <main>
            {/* Hero Section */}
            <header className="hero-section d-flex align-items-center">
                <div className="hero-bg-1"></div>
                <div className="hero-bg-2"></div>

                <div className="container hero-container-inner position-relative z-2">
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-10 animate__animated animate__fadeIn">
                            <nav aria-label="breadcrumb" className="d-inline-block mb-3">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Support Us</li>
                                </ol>
                            </nav>

                            <h1 className="display-1 fw-bolder mb-3 lh-1">
                                Empower <span className="text-gradient">Potential</span>,<br />Shape the Future.
                            </h1>
                            <p className="lead mb-5 hero-desc">
                                By supporting Women Coders, you're not just funding a community; you're investing in the next generation of technical leaders and innovators.
                            </p>
                            <div className="d-flex gap-3 justify-content-center">
                                <a href="#contact" className="btn btn-premium btn-lg">Partner With Us</a>
                                <a href="#ways-to-support" className="btn btn-m-outline btn-lg">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            {/* Why Support Section */}
            <section id="why-support" className="bg-surface-variant overflow-hidden">
                <div className="container">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">The Mission</h6>
                        <h2 className="display-4 fw-bold">Why Support Women Coders?</h2>
                        <p className="lead text-muted mx-auto mx-w-800">
                            Bridging the gender gap in technology requires collective action. Your support enables us to provide the resources, mentorship, and opportunities women need to excel.
                        </p>
                    </div>

                    <div className="row align-items-center g-5 mt-2">
                        <div className="col-lg-6 fade-up-trigger">
                            <div className="row g-4">
                                <div className="col-12">
                                    <div className="glass-card-premium p-4">
                                        <div className="icon-box-glow">
                                            <i className="fa-solid fa-arrow-trend-up"></i>
                                        </div>
                                        <h4 className="fw-bold mb-3">Close the Talent Gap</h4>
                                        <p className="text-muted mb-0">Diverse teams are more innovative. We help companies connect with and nurture high-potential female technical talent.</p>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="glass-card-premium p-4">
                                        <div className="icon-box-glow">
                                            <i className="fa-solid fa-user-check"></i>
                                        </div>
                                        <h4 className="fw-bold mb-3">Mentorship at Scale</h4>
                                        <p className="text-muted mb-0">Your support funds programs that connect industry veterans with junior developers, accelerating career growth for hundreds.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6 fade-up-trigger">
                            <div className="img-premium-container shadow-lg">
                                <img src="/assets/images/support-us.webp" className="img-premium w-100" alt="Support Us" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Impact Metrics Section */}
            <section id="impact-stats" className="bg-cosmic-theme py-5 position-relative overflow-hidden">
                <div className="hero-bg-1 opacity-5"></div>
                <div className="container py-5 position-relative z-2">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Community Impact</h6>
                        <h2 className="display-5 fw-bold text-white">Our Growing Reach</h2>
                    </div>
                    <div className="row text-center g-4 fade-up-trigger">
                        <div className="col-6 col-md-4">
                            <h2 className="fw-bold display-3 mb-1 text-gradient">2500+</h2>
                            <p className="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Active Members</p>
                        </div>
                        <div className="col-6 col-md-4">
                            <h2 className="fw-bold display-3 mb-1 text-gradient">30+</h2>
                            <p className="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Global Chapters</p>
                        </div>
                        <div className="col-6 col-md-4">
                            <h2 className="fw-bold display-3 mb-1 text-gradient">50+</h2>
                            <p className="text-white-50 small text-uppercase fw-bolder ls-1 mb-0">Speakers</p>
                        </div>
                    </div>
                </div>
            </section>

            {/* Ways to Support Section */}
            <section id="ways-to-support" className="bg-white">
                <div className="container">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Engagement</h6>
                        <h2 className="display-4 fw-bold">Ways to Support</h2>
                        <p className="lead text-muted mx-auto mx-w-700">
                            Choose a partnership model that aligns with your organization's goals and values.
                        </p>
                    </div>

                    <div className="row g-4 justify-content-center">
                        <div className="col-lg-3 col-md-6 fade-up-trigger">
                            <div className="m-card text-center h-100 p-4">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-award"></i>
                                </div>
                                <h4 className="fw-bold mb-3">Sponsorship</h4>
                                <p className="text-muted small mb-0">Direct financial support for our global summits, local meetups, and technical hackathons.</p>
                            </div>
                        </div>
                        <div className="col-lg-3 col-md-6 fade-up-trigger delay-1">
                            <div className="m-card text-center h-100 p-4">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-regular fa-thumbs-up"></i>
                                </div>
                                <h4 className="fw-bold mb-3">Partnerships</h4>
                                <p className="text-muted small mb-0">Long-term collaboration on strategic initiatives, curriculum development, and co-branded events.</p>
                            </div>
                        </div>
                        <div className="col-lg-3 col-md-6 fade-up-trigger delay-2">
                            <div className="m-card text-center h-100 p-4">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-building-columns"></i>
                                </div>
                                <h4 className="fw-bold mb-3">Grants</h4>
                                <p className="text-muted small mb-0">Project-specific funding for research, educational materials, and scholarships for members.</p>
                            </div>
                        </div>
                        <div className="col-lg-3 col-md-6 fade-up-trigger delay-3">
                            <div className="m-card text-center h-100 p-4">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-box"></i>
                                </div>
                                <h4 className="fw-bold mb-3">In-kind</h4>
                                <p className="text-muted small mb-0">Pro-bono services, software licenses, venue hosting, or technical equipment contributions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Sponsor Benefits Section */}
            <section id="benefits" className="bg-cosmic-theme py-5">
                <div className="container py-5">
                    <div className="row align-items-center">
                        <div className="col-lg-5 mb-5 mb-lg-0 fade-up-trigger">
                            <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Value Add</h6>
                            <h2 className="display-4 fw-bold text-white mb-4">Partner Benefits</h2>
                            <p className="text-white-50 mb-4 fs-5">
                                We believe in mutually beneficial partnerships. As a support, your organization gains direct value while giving back.
                            </p>
                            <ul className="list-unstyled text-white-50">
                                <li className="mb-3 d-flex align-items-center"><i className="fa-solid fa-circle-check text-gradient me-3"></i> Direct access to a pool of 5000+ technical women.</li>
                                <li className="mb-3 d-flex align-items-center"><i className="fa-solid fa-circle-check text-gradient me-3"></i> Brand visibility across tech summits and social media.</li>
                                <li className="mb-3 d-flex align-items-center"><i className="fa-solid fa-circle-check text-gradient me-3"></i> Recruitment opportunities at exclusive job stalls.</li>
                                <li className="mb-3 d-flex align-items-center"><i className="fa-solid fa-circle-check text-gradient me-3"></i> Employee engagement through mentorship roles.</li>
                            </ul>
                        </div>
                        <div className="col-lg-4 fade-up-trigger order-lg-1 order-2">
                            <div className="row g-3">
                                <div className="col-12">
                                    <div className="m-card-dark p-4">
                                        <h5 className="text-white fw-bold mb-2">Talent Pool</h5>
                                        <p className="text-white-50 small mb-0">Resume database access and direct talent referrals.</p>
                                    </div>
                                </div>
                                <div className="col-12">
                                    <div className="m-card-dark p-4">
                                        <h5 className="text-white fw-bold mb-2">Visibility</h5>
                                        <p className="text-white-50 small mb-0">Logo placement on website, event banners, and swag.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-3 fade-up-trigger order-lg-2 order-1 mb-4 mb-lg-0">
                            <div className="img-organic shadow-lg">
                                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=600" className="w-100 h-400-cover" alt="Team discussing" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Partners Section */}
            <section className="partners-section">
                <div className="container text-center">
                    <div className="mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Our Past Collaborations</h6>
                        <h2 className="display-5 fw-bold mb-4">Empowering <span className="text-gradient">Together</span></h2>
                        <div className="mx-auto divider-accent"></div>
                    </div>

                    <div className="partners-marquee fade-up-trigger">
                        <div className="marquee-content" id="partner-marquee-support">
                            <div className="partner-card"><img src="/assets/images/partner/microsoft.png" alt="Microsoft Logo" className="partner-logo" /></div>
                            <div className="partner-card"><img src="/assets/images/partner/gdg-mumbai.webp" alt="GDG Logo" className="partner-logo" /></div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Inquiry Form Section */}
            <section id="contact" className="bg-deep-space position-relative overflow-hidden py-6">
                <div className="position-absolute top-0 start-0 w-100 h-100 overflow-hidden pointer-none z-1">
                    <div className="position-absolute bg-primary rounded-circle opacity-10 animate-pulse blur-80 blob-support-1"></div>
                    <div className="position-absolute bg-secondary rounded-circle opacity-10 animate-pulse blur-60 blob-support-2"></div>
                    <div className="position-absolute bg-lavender rounded-circle opacity-5 blur-40 blob-support-3"></div>
                </div>

                <div className="container position-relative z-2">
                    <div className="row justify-content-center">
                        <div className="col-lg-11">
                            <div className="m-card shadow-2xl overflow-hidden p-0 border-0 bg-white shadow-premium">
                                <div className="row g-0">
                                    <div className="col-md-5 bg-gradient-cosmic p-5 d-flex flex-column justify-content-center position-relative overflow-hidden text-center text-md-start">
                                        <div className="position-absolute top-0 start-0 w-100 h-100 opacity-20 radial-top-left"></div>
                                        <div className="position-absolute bottom-0 end-0 w-100 h-100 opacity-20 radial-bottom-right"></div>

                                        <div className="mb-4 position-relative z-1">
                                            <img src="/assets/images/logo/dark/logo-main.webp" alt="MWC Logo" className="img-fluid mb-3 max-h-70 drop-shadow-glow" />
                                        </div>
                                        <h2 className="display-5 fw-bold text-white mb-4 position-relative z-1">Start a Legacy.</h2>
                                        <p className="text-white-50 mb-4 position-relative z-1 fs-5">
                                            Ready to make an impact? Fill out the form and our partnership team will reach out within 48 hours.
                                        </p>
                                        <div className="text-white position-relative z-1">
                                            <div className="d-flex align-items-center mb-3">
                                                <div className="icon-circle-m me-3"><i className="fa-solid fa-envelope"></i></div>
                                                <span>partnerships@womencoders.org</span>
                                            </div>
                                            <div className="d-flex align-items-center">
                                                <div className="icon-circle-m me-3"><i className="fa-solid fa-location-dot"></i></div>
                                                <span>Mumbai | London | Berlin</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="col-md-7 p-5 bg-white">
                                        <h4 className="fw-bold mb-4 text-dark position-relative d-inline-block">
                                            Partnership Inquiry
                                            <span className="position-absolute bottom-0 start-0 w-50 bg-primary title-underline-m"></span>
                                        </h4>
                                        <form action="#" method="POST" className="mt-4">
                                            <div className="row g-3">
                                                <div className="col-md-6">
                                                    <div className="mb-3">
                                                        <label className="form-label small fw-bold text-uppercase ls-1 text-muted">Full Name</label>
                                                        <input type="text" className="form-control rounded-pill px-4 py-3 border-light shadow-sm" placeholder="Jane Doe" required />
                                                    </div>
                                                </div>
                                                <div className="col-md-6">
                                                    <div className="mb-3">
                                                        <label className="form-label small fw-bold text-uppercase ls-1 text-muted">Work Email</label>
                                                        <input type="email" className="form-control rounded-pill px-4 py-3 border-light shadow-sm" placeholder="jane@company.com" required />
                                                    </div>
                                                </div>
                                                <div className="col-md-12">
                                                    <div className="mb-3">
                                                        <label className="form-label small fw-bold text-uppercase ls-1 text-muted">Organization</label>
                                                        <input type="text" className="form-control rounded-pill px-4 py-3 border-light shadow-sm" placeholder="Company Name" required />
                                                    </div>
                                                </div>
                                                <div className="col-md-12">
                                                    <div className="mb-3">
                                                        <label className="form-label small fw-bold text-uppercase ls-1 text-muted">Support Interest</label>
                                                        <select className="form-select rounded-pill px-4 py-3 border-light shadow-sm" defaultValue="">
                                                            <option value="" disabled>Select an option</option>
                                                            <option value="sponsorship">Sponsorship</option>
                                                            <option value="partnership">Strategic Partnership</option>
                                                            <option value="grants">Grants</option>
                                                            <option value="inkind">In-kind Contribution</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div className="col-md-12">
                                                    <div className="mb-3">
                                                        <label className="form-label small fw-bold text-uppercase ls-1 text-muted">Message</label>
                                                        <textarea className="form-control rounded-4 px-4 py-3 border-light shadow-sm" rows={4} placeholder="How can we collaborate?"></textarea>
                                                    </div>
                                                </div>
                                                <div className="col-md-12 text-end mt-4">
                                                    <button type="submit" className="btn btn-premium btn-lg w-100 py-3 shadow-lg">Send Inquiry <i className="fa-regular fa-paper-plane ms-2"></i></button>
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
        </main>
    );
};

export default SupportUsClient;
