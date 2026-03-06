import type { Metadata } from "next";
import Link from 'next/link';

export const metadata: Metadata = {
    title: "Global Chapters | Mumbai Women Coders",
    description: "Join our growing global network of tech-passionate women. Find a community near you and start your journey with Women Coders.",
};

export default function ChaptersPage() {
    return (
        <main>
            {/* Hero Section */}
            <section className="hero-section d-flex align-items-center text-center">
                <div className="hero-bg-1"></div>
                <div className="hero-bg-2"></div>
                <div className="container position-relative z-3">
                    <div className="animate__animated animate__fadeInDown">
                        {/* Breadcrumb Section */}
                        <div className="mb-4">
                            <nav aria-label="breadcrumb" className="d-inline-block">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Chapters</li>
                                </ol>
                            </nav>
                        </div>
                        <div className="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm hero-badge text-white">
                            <small className="text-uppercase fw-bold ls-1">Global Community</small>
                        </div>
                        <h1 className="display-1 fw-bold mb-4 text-gradient-light">Our Chapters</h1>
                        <p className="lead hero-desc mb-5 text-white-50">
                            Join our growing global network of tech-passionate women. Find a community near you and start your journey with Women Coders.
                        </p>
                        <div className="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#explore" className="btn btn-premium">Explore Chapters</a>
                            <Link href="/chapters/start" className="btn btn-m-outline">Start a Chapter</Link>
                        </div>
                    </div>
                </div>
            </section>

            {/* Chapters Overview */}
            <section id="explore" className="bg-mesh-light py-5">
                <div className="container">
                    <div className="row align-items-center mb-5">
                        <div className="col-lg-6 animate-fade-up">
                            <h2 className="display-5 fw-bold mb-4">Empowering Women <span className="text-royal-violet">Across the Globe</span></h2>
                            <p className="lead text-muted">
                                Women Coders is expanding its reach. Our chapters are local communities led by passionate individuals who want to bridge the gender gap in tech through mentorship, events, and a supportive environment.
                            </p>
                        </div>
                        <div className="col-lg-6 text-center animate-fade-up">
                            <div className="glass-card-premium p-4 d-inline-block">
                                <div className="d-flex align-items-center gap-4 text-start">
                                    <div className="icon-box-glow mb-0">
                                        <i className="fa-solid fa-globe"></i>
                                    </div>
                                    <div>
                                        <h4 className="fw-bold mb-1 font-black">3 Cities</h4>
                                        <p className="mb-0 text-muted">Active Global Chapters</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="row g-4">
                        {/* Mumbai Chapter */}
                        <div className="col-md-4 animate-fade-up">
                            <div className="glass-card-premium h-100 p-0 overflow-hidden">
                                <div className="position-relative h-250">
                                    <img src="/assets/images/chapters/backgrounds/mumbai.webp" className="w-100 h-100 object-fit-cover" alt="Mumbai" />
                                    <div className="position-absolute top-0 end-0 p-3">
                                        <span className="fi fi-in fis fs-4 rounded shadow-sm"></span>
                                    </div>
                                </div>
                                <div className="p-4">
                                    <h3 className="fw-bold h4">Mumbai, India</h3>
                                    <p className="text-muted small mb-4">The heartbeat of our community, Mumbai Women Coders is where it all began. Empowering thousands of women in India's financial capital.</p>
                                    <Link href="/chapters/mumbai" className="btn btn-outline-primary btn-sm rounded-pill px-4 stretched-link">Visit Chapter</Link>
                                </div>
                            </div>
                        </div>

                        {/* London Chapter */}
                        <div className="col-md-4 animate-fade-up delay-2">
                            <div className="glass-card-premium h-100 p-0 overflow-hidden grayscale-filter">
                                <div className="position-relative h-250">
                                    <img src="/assets/images/chapters/backgrounds/london.webp" className="w-100 h-100 object-fit-cover" alt="London" />
                                    <div className="position-absolute top-0 end-0 p-3">
                                        <span className="fi fi-gb fis fs-4 rounded shadow-sm"></span>
                                    </div>
                                    <div className="position-absolute top-50 start-50 translate-middle">
                                        <span className="badge bg-dark px-3 py-2">Coming Soon</span>
                                    </div>
                                </div>
                                <div className="p-4 opacity-75">
                                    <h3 className="fw-bold h4">London, UK</h3>
                                    <p className="text-muted small mb-4">Connecting tech-passionate women in the heart of the UK. We are currently preparing to launch our London chapter.</p>
                                    <Link href="/chapters/london" className="btn btn-outline-secondary btn-sm rounded-pill px-4 stretched-link">Preview Details</Link>
                                </div>
                            </div>
                        </div>

                        {/* Berlin Chapter */}
                        <div className="col-md-4 animate-fade-up delay-4">
                            <div className="glass-card-premium h-100 p-0 overflow-hidden grayscale-filter">
                                <div className="position-relative h-250">
                                    <img src="/assets/images/chapters/backgrounds/berlin.webp" className="w-100 h-100 object-fit-cover" alt="Berlin" />
                                    <div className="position-absolute top-0 end-0 p-3">
                                        <span className="fi fi-de fis fs-4 rounded shadow-sm"></span>
                                    </div>
                                    <div className="position-absolute top-50 start-50 translate-middle">
                                        <span className="badge bg-dark px-3 py-2">Coming Soon</span>
                                    </div>
                                </div>
                                <div className="p-4 opacity-75">
                                    <h3 className="fw-bold h4">Berlin, Germany</h3>
                                    <p className="text-muted small mb-4">Innovation meets community in the hub of European tech. Join our waitlist for the upcoming Berlin chapter launch.</p>
                                    <Link href="/chapters/berlin" className="btn btn-outline-secondary btn-sm rounded-pill px-4 stretched-link">Preview Details</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Call to Action */}
            <section className="py-5 bg-chapter-cosmic position-relative overflow-hidden text-center">
                <div className="hero-bg-2 opacity-5"></div>
                <div className="container py-4 text-center">
                    <div className="cta-box-refined animate-fade-up">
                        <h2 className="display-5 fw-bold mb-4">Don't see your city?</h2>
                        <p className="lead text-muted mb-5 px-lg-5">
                            Take the lead and bring Women Coders to your local community. We provide the branding, resources, and support you need to make an impact.
                        </p>
                        <div className="d-flex justify-content-center gap-3">
                            <Link href="/chapters/start" className="btn btn-premium px-5">Start a Chapter</Link>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    );
}
