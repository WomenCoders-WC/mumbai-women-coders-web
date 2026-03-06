import type { Metadata } from "next";
import Link from 'next/link';

export const metadata: Metadata = {
    title: "About Our Community | Mumbai Women Coders",
    description: "Learn about Mumbai Women Coders, our origin, mission, values, and the team behind the community.",
};

const leadership = [
    {
        name: 'Manjula Dube',
        role: 'Manager @ Vanguard',
        designation: 'Founder',
        img: '/assets/images/organizers/manjula-dube.jpg',
        link: 'https://www.linkedin.com/in/manjula-dube-9b5b3550/'
    },
    {
        name: 'Nandini Singh',
        role: 'Software Developer, AI Enthusiast, Freelancer',
        designation: 'Organizer',
        img: '/assets/images/organizers/nandini-singh.jpg',
        link: 'https://www.linkedin.com/in/nandinisingh18/'
    },
    {
        name: 'Khusheeta Attarde',
        role: 'ASE @ QAD INDIA',
        designation: 'Organizer',
        img: '/assets/images/organizers/khusheeta-attrde.jpg',
        link: 'https://www.linkedin.com/in/khusheeta-attarde-69a60a215/'
    }
];

export default function AboutPage() {
    return (
        <main>
            {/* Hero Section */}
            <header className="hero-section d-flex align-items-center">
                <div className="container hero-container-inner">
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-10 animate__animated animate__fadeIn">
                            {/* Fancy Breadcrumb */}
                            <nav aria-label="breadcrumb" className="d-inline-block mb-3">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Our Story</li>
                                </ol>
                            </nav>

                            <h1 className="display-1 fw-bolder mb-3 lh-1">
                                Empowering <br />
                                <span className="text-gradient">Women in Tech</span>
                            </h1>
                            <p className="lead mb-4 hero-desc">
                                A community driven by passion, technical excellence, and the relentless pursuit of gender parity in the digital world.
                            </p>
                            <div className="d-flex gap-3 justify-content-center">
                                <a href="#story" className="btn btn-premium btn-lg shadow-lg">Learn More <i className="fa-solid fa-arrow-down ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            {/* Story Section */}
            <section id="story" className="about-wave-bg pb-4">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-6 mb-5 mb-lg-0 fade-up-trigger">
                            <div className="position-relative p-2">
                                {/* Unique Rectangular Image Approach: Layered Offset */}
                                <div className="position-relative">
                                    <div className="position-absolute bg-lavender rounded-4 opacity-10 img-offset-bg"></div>
                                    <div className="img-premium-container shadow-2xl border-0 rounded-4 overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?auto=format&fit=crop&q=80&w=1200" className="d-block w-100 h-480-cover" alt="Story of Women Coders" />
                                    </div>
                                    <div className="position-absolute bottom-0 start-0 m-3 p-3 bg-white rounded-3 shadow-sm d-flex align-items-center gap-2 border-start border-4 border-royal-violet">
                                        <i className="fa-solid fa-star text-royal-violet fs-4"></i>
                                        <span className="fw-bold small">Founded in 2015</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6 ps-lg-5 fade-up-trigger">
                            <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-2">Our Origin</h6>
                            <h2 className="display-4 fw-bold mb-3">Built for Women, <br />By Women.</h2>
                            <div className="story-content">
                                <p className="mb-3 fs-5 about-desc">
                                    Women Coders was born from a simple observation: the tech industry needed a dedicated space for female talent to thrive.
                                </p>
                                <p className="mb-4 text-muted">
                                    We started as a small group of engineers who wanted to share knowledge without barriers. Today,
                                    we are the most active community for women in technology, providing the mentorship and
                                    visibility needed to reach leadership roles.
                                </p>
                                <div className="row g-4 pt-2">
                                    <div className="col-md-6">
                                        <div className="d-flex align-items-center gap-3">
                                            <div className="bg-lavender bg-opacity-10 rounded-circle p-2 text-royal-violet">
                                                <i className="fa-regular fa-circle-check fs-5"></i>
                                            </div>
                                            <span className="fw-bold">Tech Leadership</span>
                                        </div>
                                    </div>
                                    <div className="col-md-6">
                                        <div className="d-flex align-items-center gap-3">
                                            <div className="bg-lavender bg-opacity-10 rounded-circle p-2 text-royal-violet">
                                                <i className="fa-regular fa-circle-check fs-5"></i>
                                            </div>
                                            <span className="fw-bold">Peer Mentorship</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Purpose & Vision Section */}
            <section id="vision" className="bg-surface-variant py-5">
                <div className="container">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-2">Our Foundation</h6>
                        <h2 className="display-4 fw-bold">Mission Control</h2>
                        <p className="lead text-muted mx-auto mx-w-600">
                            Driving the future of technology through strategic pillars of growth and innovation.
                        </p>
                    </div>

                    <div className="row g-4">
                        {/* Vision Card (Large) */}
                        <div className="col-lg-6 fade-up-trigger">
                            <div className="glass-card-premium p-5 d-flex flex-column justify-content-center h-100">
                                <div className="icon-box-glow mb-4">
                                    <i className="fa-regular fa-eye"></i>
                                </div>
                                <h3 className="fw-bold mb-3">The Vision</h3>
                                <p className="text-muted fs-5 mb-4">
                                    "To create a world where women are equally represented in technical leadership positions,
                                    driving innovation and shaping the digital future."
                                </p>
                                <div className="mt-auto">
                                    <div className="d-flex gap-2">
                                        <span className="badge bg-lavender-subtle text-royal-violet p-2 rounded-pill">Leadership</span>
                                        <span className="badge bg-lavender-subtle text-royal-violet p-2 rounded-pill">Innovation</span>
                                        <span className="badge bg-lavender-subtle text-royal-violet p-2 rounded-pill">Equality</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Purpose Cards (Grid) */}
                        <div className="col-lg-6">
                            <div className="row g-4 h-100">
                                <div className="col-md-6 fade-up-trigger delay-1">
                                    <div className="glass-card-premium p-4 text-center">
                                        <div className="icon-box-glow mx-auto">
                                            <i className="fa-solid fa-graduation-cap"></i>
                                        </div>
                                        <h5 className="fw-bold mb-2">Education</h5>
                                        <p className="small text-muted mb-0">Bridging the gap between academia and industry.</p>
                                    </div>
                                </div>
                                <div className="col-md-6 fade-up-trigger delay-2">
                                    <div className="glass-card-premium p-4 text-center">
                                        <div className="icon-box-glow mx-auto">
                                            <i className="fa-solid fa-code"></i>
                                        </div>
                                        <h5 className="fw-bold mb-2">Skill Building</h5>
                                        <p className="small text-muted mb-0">Hands-on workshops in Cloud, AI, and Dev.</p>
                                    </div>
                                </div>
                                <div className="col-md-6 fade-up-trigger delay-3">
                                    <div className="glass-card-premium p-4 text-center">
                                        <div className="icon-box-glow mx-auto">
                                            <i className="fa-regular fa-heart"></i>
                                        </div>
                                        <h5 className="fw-bold mb-2">Support</h5>
                                        <p className="small text-muted mb-0">A safe space for questions and growth.</p>
                                    </div>
                                </div>
                                <div className="col-md-6 fade-up-trigger delay-4">
                                    <div className="glass-card-premium p-4 text-center">
                                        <div className="icon-box-glow mx-auto">
                                            <i className="fa-solid fa-arrow-trend-up"></i>
                                        </div>
                                        <h5 className="fw-bold mb-2">Career</h5>
                                        <p className="small text-muted mb-0">Referrals and mentorship for job readiness.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Community Audience */}
            <section id="audience" className="bg-cosmic-theme py-5">
                <div className="container-fluid px-lg-5">
                    <div className="row g-0 rounded-4 overflow-hidden shadow-2xl border border-white border-opacity-25">
                        {/* Visual Side (Left) */}
                        <div className="col-lg-6 d-none d-lg-block position-relative">
                            <img src="/assets/images/support-us.webp" className="w-100 h-100 object-fit-cover" alt="Community Interaction" />
                            <div className="position-absolute inset-0 bg-dark-amethyst opacity-50"></div>
                        </div>
                        {/* Content Side (Right) */}
                        <div className="col-lg-6 p-5 p-md-5 d-flex flex-column justify-content-center">
                            <h6 className="text-white-50 fw-bold text-uppercase ls-2 mb-3">Who Can Join?</h6>
                            <h2 className="display-4 fw-bold text-white mb-4">A Community for Everyone.</h2>
                            <p className="text-white-50 fs-5 mb-5 opacity-75">
                                We believe real change happens when everyone is part of the conversation. Our doors are open to
                                those who support our mission.
                            </p>

                            <div className="row g-4">
                                <div className="col-md-6">
                                    <div className="p-3 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 h-100 hover-opacity-100 transition-all">
                                        <h5 className="text-white fw-bold mb-3 d-flex align-items-center gap-2">
                                            <i className="fa-solid fa-user text-mauve"></i> Women
                                        </h5>
                                        <p className="text-white-50 small mb-0">Access exclusive mentorship, leadership tracks, and a safe learning environment.</p>
                                    </div>
                                </div>
                                <div className="col-md-6">
                                    <div className="p-3 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 h-100 hover-opacity-100 transition-all">
                                        <h5 className="text-white fw-bold mb-3 d-flex align-items-center gap-2">
                                            <i className="fa-solid fa-users text-mauve"></i> Allies (Men)
                                        </h5>
                                        <p className="text-white-50 small mb-0">Attend open meetups, share technical expertise, and advocate for gender equity.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Values Section */}
            <section id="values" className="bg-body py-5 overflow-hidden">
                <div className="container">
                    <div className="row align-items-center mb-5">
                        <div className="col-lg-6 fade-up-trigger">
                            <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-2">Our Culture</h6>
                            <h2 className="display-4 fw-bold">Unwavering Values</h2>
                        </div>
                        <div className="col-lg-6 fade-up-trigger text-lg-end">
                            <p className="lead text-muted mb-0">
                                Built on transparency, respect, and technical rigor.
                            </p>
                        </div>
                    </div>

                    <div className="row g-4">
                        <div className="col-lg-4 fade-up-trigger">
                            <div className="m-card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all bg-soft-lavender">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-solid fa-heart-pulse"></i>
                                </div>
                                <h4 className="fw-bold mb-3">Radical Inclusion</h4>
                                <p className="text-muted small">We welcome all women who code, regardless of background, seniority, or education. Inclusion is our default state.</p>
                            </div>
                        </div>
                        <div className="col-lg-4 fade-up-trigger">
                            <div className="m-card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all bg-soft-lavender">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-solid fa-bolt-lightning"></i>
                                </div>
                                <h4 className="fw-bold mb-3">Technical Rigor</h4>
                                <p className="text-muted small">We don't just talk about tech; we build it. Our culture is defined by hands-on creation and constant review.</p>
                            </div>
                        </div>
                        <div className="col-lg-4 fade-up-trigger">
                            <div className="m-card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all bg-soft-lavender">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-solid fa-shield-halved"></i>
                                </div>
                                <h4 className="fw-bold mb-3">Growth Mindset</h4>
                                <p className="text-muted small">We foster a community where asking questions is encouraged and "failing forward" is the standard.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Community Organizers Section */}
            <section id="organizers" className="bg-cosmic-theme py-5">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-white-50 fw-bold text-uppercase ls-2 mb-3">The Core Team</h6>
                        <h2 className="display-4 fw-bold text-white">Our Team</h2>
                        <p className="lead text-white-50 mx-auto mx-w-700 opacity-75">
                            Meet the passionate individuals driving the Women Coders community forward.
                        </p>
                    </div>

                    <div className="row g-4 justify-content-center mt-5">
                        {leadership.map((o, idx) => (
                            <div key={idx} className="col-lg-4 col-md-6 fade-up-trigger pt-5 mt-4 pt-lg-0 mt-lg-0">
                                <div className="h-100 bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 d-flex flex-column transition-all hover-opacity-100 text-center p-4 pt-5 mt-5">
                                    <div className="speaker-img-wrapper">
                                        <div className="speaker-img-glow"></div>
                                        <img src={o.img} alt={o.name} />
                                    </div>
                                    <h4 className="text-white">{o.name}</h4>
                                    <span className="speaker-designation text-white opacity-75 border-0 bg-transparent">{o.designation}</span>
                                    <p className="text-white-50 small mb-2">{o.role}</p>
                                    <div className="speaker-socials mt-auto">
                                        <a href={o.link} target="_blank" rel="noreferrer" title="LinkedIn" className="text-white border-0 bg-transparent fs-4">
                                            <i className="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* Extra CTA Section */}
            <section className="cta-section py-5">
                <div className="container text-center">
                    <div className="cta-box-refined cta-box-gradient shadow-lg border-0 fade-up-trigger">
                        <div className="position-relative z-2">
                            <h2 className="display-4 fw-bold mb-3">Start Your Journey Today</h2>
                            <p className="lead mb-4 mx-auto mx-w-600">
                                Whether you're looking for mentorship or want to contribute to the community, your seat is waiting.
                            </p>
                            <div className="d-inline-flex gap-3 justify-content-center align-items-center flex-column flex-sm-row">
                                <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank" rel="noreferrer" className="btn btn-white-filled btn-lg px-5">Join our Meetup</a>
                                <Link href="/contact" className="btn btn-outline-white-custom btn-lg px-5">Contact Us</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    );
}
