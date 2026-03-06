import type { Metadata } from "next";
import Link from 'next/link';

export const metadata: Metadata = {
    title: "Start a Chapter | Mumbai Women Coders",
    description: "Bring the Women Coders community to your city. Empower local talent, build a network, and lead the change in your tech ecosystem.",
};

export default function StartChapterPage() {
    return (
        <main>
            {/* Hero Section */}
            <section className="hero-section text-center">
                <div className="hero-bg-1"></div>
                <div className="hero-bg-2"></div>
                <div className="container position-relative z-3">
                    <div className="animate__animated animate__fadeInDown">
                        {/* Breadcrumb Section */}
                        <div className="mb-4">
                            <nav aria-label="breadcrumb" className="d-inline-block">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item"><Link href="/chapters" className="text-white text-decoration-none opacity-75 hover-opacity-100">Chapters</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Start a Chapter</li>
                                </ol>
                            </nav>
                        </div>
                        <div className="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm hero-badge text-white">
                            <small className="fw-bold text-gradient text-uppercase ls-2">Join the Movement</small>
                        </div>
                        <h1 className="display-1 fw-bold mb-4 text-gradient-light">Start a Chapter</h1>
                        <p className="lead hero-desc mb-5 text-white-50">
                            Bring the Women Coders community to your city. Empower local talent, build a network, and lead the change in your tech ecosystem.
                        </p>
                        <div className="d-flex justify-content-center gap-3">
                            <a href="#eligibility" className="btn btn-premium">View Eligibility</a>
                            <a href="#apply" className="btn btn-m-outline">Apply Now</a>
                        </div>
                    </div>
                </div>
            </section>

            {/* Why Start Section */}
            <section id="eligibility" className="bg-mesh-light py-5">
                <div className="container py-4">
                    <div className="row align-items-center mb-5">
                        <div className="col-lg-6 animate-fade-up">
                            <h2 className="display-5 fw-bold mb-4">Who Can <span className="text-royal-violet">Start a Chapter?</span></h2>
                            <p className="lead text-muted mb-4">
                                We are looking for passionate, driven individuals who are committed to our mission of empowering women in technology.
                            </p>
                            <ul className="list-unstyled">
                                <li className="mb-3 d-flex gap-3 align-items-start">
                                    <div className="icon-box-glow mb-0 icon-box-sm">
                                        <i className="fa-solid fa-check"></i>
                                    </div>
                                    <div>
                                        <h6 className="fw-bold mb-1">Tech Enthusiasts</h6>
                                        <p className="small text-muted">Whether you're a developer, designer, or PM, your passion for tech is what matters.</p>
                                    </div>
                                </li>
                                <li className="mb-3 d-flex gap-3 align-items-start">
                                    <div className="icon-box-glow mb-0 icon-box-sm">
                                        <i className="fa-solid fa-check"></i>
                                    </div>
                                    <div>
                                        <h6 className="fw-bold mb-1">Community Builders</h6>
                                        <p className="small text-muted">People who love bringing others together and fostering a supportive environment.</p>
                                    </div>
                                </li>
                                <li className="mb-3 d-flex gap-3 align-items-start">
                                    <div className="icon-box-glow mb-0 icon-box-sm">
                                        <i className="fa-solid fa-check"></i>
                                    </div>
                                    <div>
                                        <h6 className="fw-bold mb-1">Leaders</h6>
                                        <p className="small text-muted">Individuals ready to take responsibility and represent Women Coders in their city.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div className="col-lg-6 animate-fade-up">
                            <div className="glass-card-premium p-5">
                                <h3 className="fw-bold mb-4">Eligibility & Expectations</h3>
                                <div className="mb-4">
                                    <h6 className="fw-bold"><i className="fa-solid fa-shield-halved text-royal-violet me-2"></i> Commitment</h6>
                                    <p className="small text-muted">Able to commit at least 5-10 hours per month for chapter activities and events.</p>
                                </div>
                                <div className="mb-4">
                                    <h6 className="fw-bold"><i className="fa-solid fa-shield-halved text-royal-violet me-2"></i> Values</h6>
                                    <p className="small text-muted">Strong alignment with our Code of Conduct and inclusivity mission.</p>
                                </div>
                                <div>
                                    <h6 className="fw-bold"><i className="fa-solid fa-shield-halved text-royal-violet me-2"></i> Local Presence</h6>
                                    <p className="small text-muted">Currently living in the city where you want to start the chapter.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* What We Provide */}
            <section className="bg-chapter-premium text-white py-5 position-relative overflow-hidden text-center">
                <div className="hero-bg-1 opacity-5"></div>
                <div className="container py-4">
                    <div className="text-center mb-5 animate-fade-up">
                        <h2 className="display-5 fw-bold">What <span className="text-gradient-light">Women Coders Provides</span></h2>
                        <p className="text-muted-white text-white-50 lead">We're here to support you every step of the way.</p>
                    </div>
                    <div className="row g-4">
                        <div className="col-md-3 animate-fade-up">
                            <div className="m-card-dark text-center h-100">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-briefcase"></i>
                                </div>
                                <h5 className="fw-bold text-white">Resources & Playbooks</h5>
                                <p className="small text-white-50">Access to our event planning guides, sponsorship templates, and community tools.</p>
                            </div>
                        </div>
                        <div className="col-md-3 animate-fade-up delay-0-1">
                            <div className="m-card-dark text-center h-100">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-star"></i>
                                </div>
                                <h5 className="fw-bold text-white">Global Brand</h5>
                                <p className="small text-white-50">Immediate credibility by being part of a recognized global movement.</p>
                            </div>
                        </div>
                        <div className="col-md-3 animate-fade-up delay-0-2">
                            <div className="m-card-dark text-center h-100">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-bullhorn"></i>
                                </div>
                                <h5 className="fw-bold text-white">Visibility</h5>
                                <p className="small text-white-50">Featured on our website and social media channels to help grow your local base.</p>
                            </div>
                        </div>
                        <div className="col-md-3 animate-fade-up delay-0-3">
                            <div className="m-card-dark text-center h-100">
                                <div className="pillar-icon-box mx-auto mb-4">
                                    <i className="fa-solid fa-users"></i>
                                </div>
                                <h5 className="fw-bold text-white">Mentor Network</h5>
                                <p className="small text-white-50">Connect with other chapter leads and access our pool of industrial mentors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Process Section (Sticky Scroll) */}
            <section className="py-5 overflow-hidden">
                <div className="container py-4">
                    <div className="row">
                        {/* Sticky Header (Desktop) */}
                        <div className="col-lg-5 mb-5 mb-lg-0">
                            <div className="sticky-top fade-up-trigger d-flex flex-column justify-content-center sticky-vertical-center">
                                <h2 className="display-4 fw-bold mb-4">Step-by-Step <span className="text-royal-violet">Process</span></h2>
                                <p className="lead text-muted mb-4">
                                    Your journey from applicant to chapter lead is designed to be smooth, supportive, and empowering.
                                </p>
                                <div className="d-none d-lg-block">
                                    <a href="#apply" className="btn btn-premium px-4">Start Application <i className="fa-solid fa-arrow-down ms-2"></i></a>
                                </div>
                            </div>
                        </div>

                        {/* Scrollable Steps */}
                        <div className="col-lg-6 offset-lg-1">
                            <div className="process-timeline">
                                {/* Line connector */}
                                <div className="process-line"></div>

                                {/* Step 1 */}
                                <div className="process-step-card mb-5 fade-up-trigger">
                                    <div className="d-flex position-relative z-2">
                                        <div className="process-marker me-4 mt-1">
                                            <span className="fw-bold">01</span>
                                        </div>
                                        <div className="glass-card-premium p-4 w-100 border-0 bg-white shadow-sm">
                                            <div className="mb-3">
                                                <i className="fa-regular fa-file-lines text-royal-violet fs-2"></i>
                                            </div>
                                            <h4 className="fw-bold mb-2">Application</h4>
                                            <p className="text-muted mb-0">Submit your details and share your vision. Tell us why you want to bring Women Coders to your city.</p>
                                        </div>
                                    </div>
                                </div>

                                {/* Step 2 */}
                                <div className="process-step-card mb-5 fade-up-trigger">
                                    <div className="d-flex position-relative z-2">
                                        <div className="process-marker me-4 mt-1">
                                            <span className="fw-bold">02</span>
                                        </div>
                                        <div className="glass-card-premium p-4 w-100 border-0 bg-white shadow-sm">
                                            <div className="mb-3">
                                                <i className="fa-solid fa-video text-royal-violet fs-2"></i>
                                            </div>
                                            <h4 className="fw-bold mb-2">Interview</h4>
                                            <p className="text-muted mb-0">A casual 30-minute chat with our global leads. We discuss your local tech scene and how we can support you.</p>
                                        </div>
                                    </div>
                                </div>

                                {/* Step 3 */}
                                <div className="process-step-card mb-5 fade-up-trigger">
                                    <div className="d-flex position-relative z-2">
                                        <div className="process-marker me-4 mt-1">
                                            <span className="fw-bold">03</span>
                                        </div>
                                        <div className="glass-card-premium p-4 w-100 border-0 bg-white shadow-sm">
                                            <div className="mb-3">
                                                <i className="fa-solid fa-box text-royal-violet fs-2"></i>
                                            </div>
                                            <h4 className="fw-bold mb-2">Onboarding</h4>
                                            <p className="text-muted mb-0">Receive your Chapter Starter Kit: branding assets, event playbooks, and access to the leads' workspace.</p>
                                        </div>
                                    </div>
                                </div>

                                {/* Step 4 */}
                                <div className="process-step-card mb-5 fade-up-trigger">
                                    <div className="d-flex position-relative z-2">
                                        <div className="process-marker me-4 mt-1">
                                            <span className="fw-bold">04</span>
                                        </div>
                                        <div className="glass-card-premium p-4 w-100 border-0 bg-white shadow-sm">
                                            <div className="mb-3">
                                                <i className="fa-solid fa-rocket text-royal-violet fs-2"></i>
                                            </div>
                                            <h4 className="fw-bold mb-2">Launch</h4>
                                            <p className="text-muted mb-0">Announce your chapter! We'll help promote your first meetup to our global network.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Application Form */}
            <section id="apply" className="bg-chapter-cosmic py-5 position-relative overflow-hidden text-center">
                <div className="hero-bg-1 opacity-5"></div>
                <div className="container py-4">
                    <div className="cta-box-refined animate-fade-up">
                        <h2 className="display-5 fw-bold mb-4 text-dark">Ready to Lead?</h2>
                        <p className="lead mb-5 text-main text-muted">Fill out the application form below and we'll be in touch.</p>

                        <form action="#" method="POST" className="text-start">
                            <div className="row g-4">
                                <div className="col-md-6">
                                    <label className="form-label fw-bold">Full Name</label>
                                    <input type="text" className="form-control rounded-pill p-3" placeholder="Enter your name" required />
                                </div>
                                <div className="col-md-6">
                                    <label className="form-label fw-bold">Email Address</label>
                                    <input type="email" className="form-control rounded-pill p-3" placeholder="Enter your email" required />
                                </div>
                                <div className="col-md-6">
                                    <label className="form-label fw-bold">City</label>
                                    <input type="text" className="form-control rounded-pill p-3" placeholder="Which city?" required />
                                </div>
                                <div className="col-md-6">
                                    <label className="form-label fw-bold">Country</label>
                                    <input type="text" className="form-control rounded-pill p-3" placeholder="Which country?" required />
                                </div>
                                <div className="col-12">
                                    <label className="form-label fw-bold">Why do you want to start a chapter?</label>
                                    <textarea className="form-control rounded-3 p-3" rows={4} placeholder="Tell us about your motivation..." required></textarea>
                                </div>
                                <div className="col-12 text-center mt-4">
                                    <button type="submit" className="btn btn-premium px-5 py-3 shadow-lg">Submit Application</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    );
}
