import type { Metadata } from "next";
import Link from 'next/link';

export const metadata: Metadata = {
    title: "Contact Us | Mumbai Women Coders",
    description: "Get in touch with the Mumbai Women Coders team. Reach out to collaborate, volunteer, or partner with us.",
};

export default function ContactPage() {
    return (
        <main>
            {/* Contact Hero Section */}
            <header className="hero-section contact-header d-flex align-items-center">
                <div className="hero-bg-1"></div>
                <div className="hero-bg-2"></div>

                <div className="container hero-container-inner position-relative z-2">
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-10 animate__animated animate__fadeIn">
                            {/* Fancy Breadcrumb */}
                            <nav aria-label="breadcrumb" className="d-inline-block mb-3">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Contact</li>
                                </ol>
                            </nav>

                            <h1 className="display-1 fw-bolder mb-3 lh-1">
                                Let's <span className="text-gradient">Connect</span>
                            </h1>
                            <p className="lead mb-5 hero-desc">
                                Whether you have a question about events, want to partner with us, or just want to say hello, we're here to help.
                            </p>
                            <div className="d-flex gap-3 justify-content-center">
                                <a href="#contact-categories" className="btn btn-premium btn-lg">General Inquiry</a>
                                <Link href="/support-us" className="btn btn-m-outline btn-lg">Partnership</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            {/* Contact Categories Section */}
            <section id="contact-categories" className="py-6 bg-surface-variant position-relative">
                <div className="container">
                    <div className="row g-4 justify-content-center">
                        {/* Partnerships */}
                        <div className="col-md-6 col-lg-6 animate__animated animate__fadeInUp delay-2">
                            <div className="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 bg-dark-premium text-white theme-gradient-border rounded-4">
                                <div className="card-body d-flex flex-column align-items-center">
                                    <div className="icon-box mb-4 rounded-circle bg-white bg-opacity-10 d-flex align-items-center justify-content-center icon-80">
                                        <i className="fa-solid fa-briefcase text-gradient fs-1"></i>
                                    </div>
                                    <h4 className="fw-bold mb-2 text-white">Partnerships</h4>
                                    <p className="text-white-50 small mb-4 flex-grow-1">
                                        Interested in sponsoring an event or collaborating on a workshop? Let's build something together.
                                    </p>
                                    <a href="https://forms.gle/te5xWA5ZcHABkr3A9" target="_blank" rel="noreferrer" className="btn btn-light rounded-pill px-4 w-100 fw-bold border-0 text-primary">
                                        Partner With Us <i className="fa-solid fa-arrow-right ms-2 transition-icon"></i>
                                    </a>
                                </div>
                                <div className="card-footer bg-transparent border-0 pt-0 pb-4">
                                    <small className="text-white-50 fs-7">For organizations & brands</small>
                                </div>
                            </div>
                        </div>

                        {/* Chapter Support */}
                        <div className="col-md-6 col-lg-6 animate__animated animate__fadeInUp delay-3">
                            <div className="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 backdrop-blur rounded-4">
                                <div className="card-body d-flex flex-column align-items-center">
                                    <div className="icon-box mb-4 rounded-circle bg-soft-info d-flex align-items-center justify-content-center icon-80">
                                        <i className="fa-solid fa-user-group text-info fs-1"></i>
                                    </div>
                                    <h4 className="fw-bold mb-2">Chapter Support</h4>
                                    <p className="text-muted small mb-4 flex-grow-1">
                                        Need help joining a chapter or want to start a new one in your area? Get specialized support.
                                    </p>
                                    <a href="https://docs.google.com/forms/" target="_blank" rel="noreferrer" className="btn btn-outline-info rounded-pill px-4 w-100 fw-bold">
                                        Get Support <i className="fa-solid fa-arrow-right ms-2 transition-icon"></i>
                                    </a>
                                </div>
                                <div className="card-footer bg-transparent border-0 pt-0 pb-4">
                                    <small className="text-muted fs-7">For current & new members</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Visual Section */}
            <section className="py-5 bg-white overflow-hidden">
                <div className="container">
                    <div className="row align-items-center g-5">
                        <div className="col-lg-6 order-lg-2 animate__animated animate__fadeInRight">
                            <div className="position-relative">
                                <img src="/assets/images/women-coding-community.png" alt="Community Interaction" className="img-fluid rounded-4 shadow-lg position-relative z-1" />
                                <div className="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle opacity-10 blob-contact-1"></div>
                                <div className="position-absolute bottom-0 end-0 translate-middle bg-secondary rounded-circle opacity-10 blob-contact-2"></div>
                            </div>
                        </div>
                        <div className="col-lg-6 order-lg-1 animate__animated animate__fadeInLeft">
                            <h2 className="display-5 fw-bold mb-4">Build Connections That Matter</h2>
                            <p className="lead text-muted mb-4">
                                Our community thrives on communication and collaboration. Whether online or offline, every conversation is an opportunity to learn and grow.
                            </p>
                            <div className="d-flex align-items-center gap-4">
                                <div className="d-flex align-items-center text-primary">
                                    <i className="fa-solid fa-location-dot fs-3 me-2"></i>
                                    <div>
                                        <span className="d-block fw-bold text-dark">Mumbai, India</span>
                                        <small className="text-muted">Headquarters</small>
                                    </div>
                                </div>
                                <div className="d-flex align-items-center text-primary">
                                    <i className="fa-solid fa-envelope fs-3 me-2"></i>
                                    <div>
                                        <span className="d-block fw-bold text-dark">mumbaiwomencoders@gmail.com</span>
                                        <small className="text-muted">Email Support</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Speaker CFP Section */}
            <section id="speaker-cfp" className="py-6 bg-gradient-cosmic position-relative overflow-hidden">
                {/* Animated background elements (Cosmic Theme) */}
                <div className="position-absolute top-0 start-0 w-100 h-100 overflow-hidden pointer-none z-1">
                    <div className="position-absolute bg-primary rounded-circle opacity-10 animate-pulse blur-80 blob-speaker-1"></div>
                    <div className="position-absolute bg-secondary rounded-circle opacity-10 animate-pulse blur-60 blob-speaker-2"></div>
                </div>

                <div className="container position-relative z-2">
                    <div className="row align-items-center g-5">
                        <div className="col-lg-6 fade-up-trigger">
                            <div className="speaker-illustration position-relative">
                                <div className="card p-5 rounded-4 shadow-premium">
                                    <div className="d-flex align-items-center gap-4 mb-4">
                                        <div className="icon-box-speaker mb-0 rounded-circle d-flex align-items-center justify-content-center icon-80 flex-shrink-0 shadow-sm">
                                            <i className="fa-solid fa-microphone text-gradient-lavender fs-1"></i>
                                        </div>
                                        <div>
                                            <h3 className="mb-0">Become a <br /><span className="text-gradient">Speaker</span></h3>
                                            <p className="mb-0 text-lavender-speaker">Share your expertise</p>
                                        </div>
                                    </div>
                                    <p className="mb-4 fs-5 speaker-desc">
                                        We are always looking for passionate speakers to share their knowledge with our community.
                                        Whether you're a seasoned pro or a first-time speaker, we provide a supportive platform for your voice.
                                    </p>
                                    <div className="row g-3">
                                        <div className="col-sm-6">
                                            <div className="d-flex align-items-center gap-2 speaker-feature">
                                                <i className="fa-solid fa-circle-check text-gradient-lavender fs-5"></i>
                                                <span>Technical Workshops</span>
                                            </div>
                                        </div>
                                        <div className="col-sm-6">
                                            <div className="d-flex align-items-center gap-2 speaker-feature">
                                                <i className="fa-solid fa-circle-check text-gradient-lavender fs-5"></i>
                                                <span>Career Talks</span>
                                            </div>
                                        </div>
                                        <div className="col-sm-6">
                                            <div className="d-flex align-items-center gap-2 speaker-feature">
                                                <i className="fa-solid fa-circle-check text-gradient-lavender fs-5"></i>
                                                <span>Panel Discussions</span>
                                            </div>
                                        </div>
                                        <div className="col-sm-6">
                                            <div className="d-flex align-items-center gap-2 speaker-feature">
                                                <i className="fa-solid fa-circle-check text-gradient-lavender fs-5"></i>
                                                <span>Lightning Talks</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6 fade-up-trigger delay-1">
                            <div className="ps-lg-5">
                                <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Call for Proposals</h6>
                                <h2 className="display-4 fw-bold text-white mb-4">Your Voice <br /><span className="text-gradient">Matters</span></h2>
                                <p className="lead text-white-50 mb-5">
                                    Inspire the next generation of women in tech. Submit your proposal today and help us build a more diverse and knowledgeable community.
                                </p>
                                <div className="d-flex flex-column flex-sm-row gap-3">
                                    <a href="https://forms.gle/681mhMw16wNvGKW59" target="_blank" rel="noreferrer" className="btn btn-premium btn-lg">
                                        Submit Proposal <i className="fa-solid fa-paper-plane ms-2"></i>
                                    </a>
                                    <Link href="/events" className="btn btn-m-outline btn-lg">View Past Events</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Join as Volunteer Section */}
            <section id="join-volunteer" className="py-6 bg-white position-relative overflow-hidden">
                <div className="container position-relative z-2">
                    <div className="row align-items-center g-5">
                        <div className="col-lg-6 order-lg-2 animate__animated animate__fadeInRight">
                            <div className="position-relative">
                                <img src="/assets/images/volunteer.png" alt="MWC Volunteers Team" className="img-fluid rounded-4 shadow-lg position-relative z-1 hover-lift volunteer-img-rotate" />
                                <div className="position-absolute top-0 end-0 translate-middle bg-warning rounded-circle opacity-10 blur-80 blob-volunteer-1"></div>
                                <div className="position-absolute bottom-0 start-0 translate-middle bg-info rounded-circle opacity-10 blur-60 blob-volunteer-2"></div>
                                <div className="position-absolute top-50 start-50 translate-middle border border-primary opacity-10 rounded-circle volunteer-circle-border"></div>
                            </div>
                        </div>
                        <div className="col-lg-6 order-lg-1 animate__animated animate__fadeInLeft">
                            <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Community First</h6>
                            <h2 className="display-4 fw-bold mb-4">Join as a <span className="text-gradient">Volunteer</span></h2>
                            <p className="lead text-muted mb-4">
                                Be the heartbeat of our events. Whether it's managing registration, guiding attendees, or helping with logistics, your contribution makes a massive difference in creating inclusive tech spaces.
                            </p>
                            <ul className="list-unstyled mb-5">
                                <li className="d-flex align-items-center mb-3">
                                    <i className="fa-solid fa-circle-check text-primary me-3 fs-5"></i>
                                    <span>Gain exclusive behind-the-scenes access</span>
                                </li>
                                <li className="d-flex align-items-center mb-3">
                                    <i className="fa-solid fa-circle-check text-primary me-3 fs-5"></i>
                                    <span>Network with industry leaders and speakers</span>
                                </li>
                                <li className="d-flex align-items-center">
                                    <i className="fa-solid fa-circle-check text-primary me-3 fs-5"></i>
                                    <span>Get cool swag and community recognition</span>
                                </li>
                            </ul>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLScfkHDuCeWdmgsrlACmILNx41LhS47eNKHMaOAX2LKkSQL54g/viewform/" target="_blank" rel="noreferrer" className="btn btn-premium btn-lg hover-lift">
                                Apply to Volunteer <i className="fa-solid fa-arrow-right ms-2 transition-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            {/* Follow Journey Section */}
            <section className="py-5 bg-deep-space position-relative">
                <div className="container text-center text-white position-relative z-2">
                    <h3 className="mb-4 text-white">Follow Our Journey</h3>
                    <div className="row g-3 justify-content-center">
                        <div className="col-6 col-md-3">
                            <div className="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                                <img src="/assets/images/sliders/slider1.webp" className="img-fluid h-200-cover" alt="Event Moment 1" />
                            </div>
                        </div>
                        <div className="col-6 col-md-3">
                            <div className="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                                <img src="/assets/images/sliders/slider2.webp" className="img-fluid h-200-cover" alt="Event Moment 2" />
                            </div>
                        </div>
                        <div className="col-6 col-md-3">
                            <div className="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                                <img src="/assets/images/sliders/slider3.webp" className="img-fluid h-200-cover" alt="Event Moment 3" />
                            </div>
                        </div>
                        <div className="col-6 col-md-3">
                            <div className="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                                <img src="/assets/images/sliders/slider4.webp" className="img-fluid h-200-cover" alt="Event Moment 4" />
                            </div>
                        </div>
                    </div>
                    <div className="mt-4">
                        <a href="https://instagram.com" target="_blank" rel="noreferrer" className="btn btn-outline-light rounded-pill px-4">
                            <i className="fa-brands fa-instagram me-2"></i> Follow @MumbaiWomenCoders
                        </a>
                    </div>
                </div>
            </section>
        </main>
    );
}
