"use client";

import { useEffect } from 'react';
import Link from 'next/link';
import { upcomingEvents } from '@/data/upcoming-events';

const HomeClient = () => {
    useEffect(() => {
        // Swiper initialization
        let swiperInstance: any = null;
        let swiperTimeout: any;

        const initSwiper = () => {
            if ((window as any).Swiper) {
                swiperInstance = new (window as any).Swiper('.speaker-swiper', {
                    effect: 'coverflow',
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: 'auto',
                    coverflowEffect: {
                        rotate: 5,
                        stretch: 0,
                        depth: 100,
                        modifier: 2,
                        slideShadows: false,
                    },
                    loop: true,
                    autoplay: {
                        delay: 3500,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    speed: 1000,
                    mousewheel: {
                        invert: false,
                        forceToAxis: true,
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                        dynamicBullets: true,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });

                // Trigger scroll to refresh main.js animations now that swiper is rendered
                setTimeout(() => {
                    window.dispatchEvent(new Event('scroll'));
                }, 100);
            } else {
                swiperTimeout = setTimeout(initSwiper, 100);
            }
        };

        initSwiper();

        // Auto-Cloning Script for Infinite Marquee
        const marquee = document.getElementById("partner-marquee");
        if (marquee && marquee.children.length === 2) {
            const items = marquee.innerHTML;
            for (let i = 0; i < 8; i++) {
                marquee.innerHTML += items;
            }
        }

        // FAQ logic
        const faqs = document.querySelectorAll('.faq-question');
        const handleFaqClick = (e: any) => {
            const question = e.currentTarget;
            const item = question.parentElement;
            const isActive = item.classList.contains('active');

            document.querySelectorAll('.faq-item').forEach((otherItem: any) => {
                otherItem.classList.remove('active');
            });

            if (!isActive) {
                item.classList.add('active');
            }
        };

        faqs.forEach(question => {
            question.addEventListener('click', handleFaqClick);
        });

        return () => {
            if (swiperTimeout) {
                clearTimeout(swiperTimeout);
            }
            if (swiperInstance) {
                swiperInstance.destroy(true, true);
            }
            faqs.forEach(question => {
                question.removeEventListener('click', handleFaqClick);
            });
        };
    }, []);

    const speakers = [
        {
            name: 'Ramyashree Shetty',
            role: 'Data Engineer @ Radix',
            img: '/assets/images/speakers/ramyashree-shetty.webp',
            link: 'https://www.linkedin.com/in/ramyashree-shetty/'
        },
        {
            name: 'Taazeen Ansari',
            role: 'Computer Engineering Student @ SIES',
            img: '/assets/images/speakers/taazeen-ansari.webp',
            link: 'https://www.linkedin.com/in/taazeenansari/'
        },
        {
            name: 'Nikita Goswami',
            role: 'AI/ML Research Intern @ Monash University',
            img: '/assets/images/speakers/nikita-goswami.webp',
            link: 'https://www.linkedin.com/in/nikitagoswami3/'
        }
    ];

    return (
        <main>
            {/* Hero Section */}
            <header className="hero-section d-flex align-items-center ">
                <div className="container hero-container-inner">
                    <div className="row justify-content-center text-center">
                        <div className="col-lg-10 animate__animated animate__fadeIn">
                            <div className="mb-4 hero-logo-wrapper">
                                <img src="/assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo" className="hero-logo" />
                            </div>
                            <div className="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm hero-badge">
                                <small className="fw-bold text-gradient text-uppercase ls-2">Women Coders Community</small>
                            </div>
                            <h1 className="display-1 fw-bolder mb-3 lh-1">
                                Inspiring <span className="text-gradient">Women</span> <br />
                                to Excel in Tech.
                            </h1>
                            <p className="lead mb-5 hero-desc">
                                Empowering the next generation of female technical leaders through community, mentorship, and hands-on innovation.
                            </p>
                            <div className="d-flex gap-3 gap-md-4 flex-column flex-sm-row justify-content-center mb-4 pb-2">
                                <a href="#upcoming-events" className="btn btn-premium btn-lg shadow-lg">
                                    Upcoming Events <i className="fa-solid fa-user-group ms-2"></i>
                                </a>
                                <Link href="/chapters" className="btn btn-m-outline btn-lg">
                                    Explore Chapters <i className="fa-regular fa-compass ms-2"></i>
                                </Link>
                                <Link href="/support-us" className="btn btn-m-outline btn-lg">
                                    Support Us <i className="fa-regular fa-heart ms-2"></i>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            {/* Counter Section */}
            <section id="stats" className="bg-surface-variant py-5">
                <div className="container">
                    <div className="row text-center g-4 fade-up-trigger">
                        <div className="col-6 col-md-3">
                            <h2 className="fw-bold display-4 mb-1 text-gradient">2500+</h2>
                            <p className="text-muted small text-uppercase fw-bolder ls-1 mb-0">Tech Women</p>
                        </div>
                        <div className="col-6 col-md-3">
                            <h2 className="fw-bold display-4 mb-1 text-gradient">40+</h2>
                            <p className="text-muted small text-uppercase fw-bolder ls-1 mb-0">Meetups Held</p>
                        </div>
                        <div className="col-6 col-md-3">
                            <h2 className="fw-bold display-4 mb-1 text-gradient">50+</h2>
                            <p className="text-muted small text-uppercase fw-bolder ls-1 mb-0">Key Speakers</p>
                        </div>
                        <div className="col-6 col-md-3">
                            <h2 className="fw-bold display-4 mb-1 text-gradient">20+</h2>
                            <p className="text-muted small text-uppercase fw-bolder ls-1 mb-0">Global Partners</p>
                        </div>
                    </div>
                </div>
            </section>

            {/* About Section */}
            <section id="about" className="about-wave-bg">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-lg-6 mb-5 mb-lg-0 fade-up-trigger">
                            <div className="position-relative p-2">
                                <div id="aboutCarousel" className="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div className="carousel-inner img-premium-container shadow-lg">
                                        <div className="carousel-item active">
                                            <img src="/assets/images/sliders/slider1.webp" className="d-block w-100 img-premium" alt="Community Event 1" />
                                        </div>
                                        <div className="carousel-item">
                                            <img src="/assets/images/sliders/slider2.webp" className="d-block w-100 img-premium" alt="Community Event 2" />
                                        </div>
                                        <div className="carousel-item">
                                            <img src="/assets/images/sliders/slider3.webp" className="d-block w-100 img-premium" alt="Community Event 3" />
                                        </div>
                                        <div className="carousel-item">
                                            <img src="/assets/images/sliders/slider4.webp" className="d-block w-100 img-premium" alt="Community Event 4" />
                                        </div>
                                    </div>
                                </div>

                                {/* Floating Card */}
                                <div className="m-card position-absolute d-none d-md-block shadow-lg about-floating-card">
                                    <h6 className="fw-bold text-gradient mb-2"><i className="fa-solid fa-quote-left me-2"></i>Our Vision</h6>
                                    <p className="small mb-0">"Proportional representation of women in tech leadership roles globally."</p>
                                </div>
                            </div>
                        </div>
                        <div className="col-lg-6 ps-lg-5 fade-up-trigger">
                            <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Building the Ecosystem</h6>
                            <h2 className="display-4 fw-bold mb-4">Empowering Women in the Tech Scene</h2>
                            <p className="mb-4 fs-5 about-desc">
                                Women Coders is a vibrant tech community for women & men in technology and their
                                allies, creating lasting change in the tech ecosystem. <br />
                                Our community welcomes everyone: students, professionals, experienced developers, and allies
                                committed to inclusive tech spaces. <br />
                                We are open, inclusive, and focused on individual and collective growth.
                            </p>
                            <div className="row g-4 mb-5">
                                <div className="col-sm-6 text-center text-sm-start">
                                    <i className="fa-solid fa-shield-halved text-gradient fs-1 mb-2 d-block"></i>
                                    <h5 className="fw-bold">Safe Space</h5>
                                    <p className="small">Inclusive learning environment for all skill levels.</p>
                                </div>
                                <div className="col-sm-6 text-center text-sm-start">
                                    <i className="fa-solid fa-user-group text-gradient fs-1 mb-2 d-block"></i>
                                    <h5 className="fw-bold">Global Network</h5>
                                    <p className="small">Connect with professionals across the globe.</p>
                                </div>
                            </div>
                            <div className="d-flex justify-content-center justify-content-lg-start">
                                <Link href="/about" className="btn btn-premium px-5">READ OUR STORY</Link>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* What We Do Section */}
            <section id="what-we-do" className="bg-cosmic-theme">
                <div className="container py-5">
                    <div className="text-center mb-5 pb-3 fade-up-trigger">
                        <header className="d-flex flex-column align-items-center mb-5 fade-up-trigger">
                            <div className="d-inline-flex align-items-center mb-4 px-4 py-2 rounded-pill shadow-sm bg-white">
                                <span className="text-gradient fw-bold text-uppercase ls-2 small">Community Initiatives</span>
                            </div>
                            <h2 className="display-4 fw-bold text-white">How We Empower Women in Technology</h2>
                        </header>
                        <p className="lead text-white-50 mx-auto mx-w-750">
                            Women Coders provides a comprehensive ecosystem for female developers and technical leaders to
                            excel through specialized programs in engineering, leadership, and hands-on innovation.
                        </p>
                    </div>

                    <div className="row g-4 justify-content-center">
                        {/* Events */}
                        <article className="col-lg-3 col-md-6 fade-up-trigger">
                            <div className="m-card-dark h-100">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-regular fa-calendar-days" aria-hidden="true"></i>
                                </div>
                                <h3 className="h4 fw-bold text-white mb-3">Tech Events & Meetups</h3>
                                <p className="text-white-50 small mb-0">
                                    Join our monthly technical meetups, hackathons, and flagship conferences designed to
                                    foster collaboration and showcase female technical excellence.
                                </p>
                            </div>
                        </article>

                        {/* Learning */}
                        <article className="col-lg-3 col-md-6 fade-up-trigger">
                            <div className="m-card-dark h-100">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-solid fa-code" aria-hidden="true"></i>
                                </div>
                                <h3 className="h4 fw-bold text-white mb-3">Hands-on Technical Learning</h3>
                                <p className="text-white-50 small mb-0">
                                    Accelerate your skills with peer-led study groups, code-alongs, and technical deep-dives into
                                    Full-Stack Development, Data Science, and Artificial Intelligence.
                                </p>
                            </div>
                        </article>

                        {/* Networking */}
                        <article className="col-lg-3 col-md-6 fade-up-trigger">
                            <div className="m-card-dark h-100">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-solid fa-comment-dots" aria-hidden="true"></i>
                                </div>
                                <h3 className="h4 fw-bold text-white mb-3">Professional Networking</h3>
                                <p className="text-white-50 small mb-0">
                                    Build meaningful connections within a safe, inclusive space. Access mentorship from industry
                                    veterans and grow your network within the tech ecosystem.
                                </p>
                            </div>
                        </article>

                        {/* Opportunities */}
                        <article className="col-lg-3 col-md-6 fade-up-trigger">
                            <div className="m-card-dark h-100">
                                <div className="pillar-icon-box mb-4">
                                    <i className="fa-solid fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <h3 className="h4 fw-bold text-white mb-3">Career Growth Opportunities</h3>
                                <p className="text-white-50 small mb-0">
                                    Unlock high-impact career pathways through exclusive job boards, resume-building workshops, and
                                    direct referrals to top-tier technology partners.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </section>

            {/* Chapters Overview */}
            <section id="explore" className="bg-mesh-light py-5">
                <div className="container">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Global Network</h6>
                        <h2 className="display-4 fw-bold mb-4">Women Coders <span className="text-royal-violet">Chapters</span></h2>
                        <p className="lead text-muted mx-auto mx-w-750">
                            Women Coders is expanding its reach. Our chapters are local communities led by passionate
                            individuals who want to bridge the gender gap in tech through mentorship, events, and a supportive
                            environment.
                        </p>
                    </div>

                    <div className="row g-4 justify-content-center">
                        {/* Mumbai Chapter */}
                        <div className="col-md-4 animate-fade-up">
                            <div className="glass-card-premium h-100">
                                <div className="position-relative overflow-hidden h-250">
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
                    </div>
                </div>
            </section>

            {/* Upcoming Events Section */}
            <section id="upcoming-events" className="bg-cosmic-theme">
                <div className="events-dot-pattern"></div>
                {/* Animated Particles */}
                <div className="events-particle-container">
                    <div className="floating-particle particle-1"></div>
                    <div className="floating-particle particle-2"></div>
                    <div className="floating-particle particle-3"></div>
                </div>
                <div className="container py-5 position-relative z-2">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Save the Date</h6>
                        <h2 className="display-4 fw-bold">Upcoming Community Events</h2>
                        <p className="lead text-muted mx-auto mx-w-700">
                            Secure your spot in our upcoming sessions and accelerate your technical journey with the tech community.
                        </p>
                    </div>

                    <div className="events-list">
                        {upcomingEvents.map((event) => (
                            <div key={event.id} className="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                                <div className="row g-0">
                                    {/* Image Column */}
                                    <div className="col-md-3">
                                        <div className="event-img-container">
                                            {event.badge && <span className="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay d-md-none d-lg-block">{event.badge}</span>}
                                            <img src={event.image} className="event-preview-img" alt={event.imageAlt} />
                                            <div className="event-img-overlay"></div>
                                        </div>
                                    </div>
                                    {/* Content Column */}
                                    <div className="col-md-9">
                                        <div className="row align-items-center g-0 p-4 h-100">
                                            <div className="col-md-2 text-center">
                                                <div className="event-date-box mx-auto mb-3 mb-md-0">
                                                    <span className="d-block h2 fw-800 mb-0">{event.dateDay}</span>
                                                    <span className="text-uppercase fw-bold ls-1 small">{event.dateMonth}</span>
                                                </div>
                                            </div>
                                            <div className="col-md-10 ps-md-4">
                                                <div className="row align-items-center">
                                                    <div className="col-lg-7">
                                                        <h3 className="h4 fw-800 mb-1 text-gradient">{event.title}</h3>
                                                        <div className="text-muted small"><i className="fa-solid fa-location-dot text-primary"></i> {event.locationShort}</div>
                                                    </div>
                                                    <div className="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                        <div className="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">{event.eventType}</div>
                                                        <div className="text-muted small d-block">
                                                            <i className={`fa-solid ${event.eventIcon} me-1`}></i> {event.eventFormat}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="col-12 mt-3">
                                                    <a href={event.registrationLink} target="_blank" rel="noreferrer" className="btn btn-premium-sm">Register Now <i className="fa-solid fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>

                    <div className="text-center mt-5">
                        <Link href="/events" className="btn btn-premium px-5">EXPLORE ALL EVENTS</Link>
                    </div>
                </div>
            </section>



            {/* Speaker Profiles */}
            <section id="speakers" className="bg-surface-variant py-5">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Expert Insights</h6>
                        <h2 className="display-4 fw-bold">Recent Speaker Profiles</h2>
                        <p className="lead text-muted mx-auto mx-w-700">
                            Learn from industry veterans and researchers who share their knowledge at our flagship tech talks and leadership summits.
                        </p>
                    </div>

                    <div className="swiper speaker-swiper fade-up-trigger">
                        <div className="swiper-wrapper">
                            {[...speakers, ...speakers].map((s, i) => (
                                <div className="swiper-slide" key={i}>
                                    <div className="speaker-card">
                                        <div className="speaker-img-wrapper">
                                            <div className="speaker-img-glow"></div>
                                            <img src={s.img} alt={s.name} />
                                        </div>
                                        <h4>{s.name}</h4>
                                        <span className="speaker-designation">Featured Speaker</span>
                                        <p className="text-muted small">
                                            {s.role}
                                        </p>
                                        <div className="speaker-socials">
                                            <a href={s.link} target="_blank" rel="noreferrer" title="LinkedIn"><i className="fa-brands fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>
                        <div className="swiper-pagination"></div>
                        <div className="swiper-button-next"></div>
                        <div className="swiper-button-prev"></div>
                    </div>
                </div>
            </section>

            {/* Member Success Stories */}
            <section id="success-stories" className="bg-cosmic-theme py-5">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Community Impact</h6>
                        <h2 className="display-4 fw-bold text-white">Member Success Stories</h2>
                        <p className="lead text-white-50 mx-auto mx-w-750">
                            Witness the transformative journeys of our members who have leveraged the Women Coders ecosystem
                            to reach new heights in their technical careers.
                        </p>
                    </div>

                    <div className="row g-5 mt-4">
                        {/* Story 1 */}
                        <div className="col-lg-6 fade-up-trigger">
                            <div className="story-card h-100">
                                <i className="fa-solid fa-quote-left story-quote-icon"></i>
                                <div className="member-avatar-ring">
                                    <img src="/assets/images/speakers/ramyashree-shetty.webp" alt="Shruti Deshmukh" />
                                </div>
                                <h3 className="h4 fw-bold text-white mb-2">Ramyashree Shetty</h3>
                                <p className="text-gradient small fw-bold text-uppercase mb-3">Data Engineer @ Radix</p>
                                <p className="text-white-50 mb-0">
                                    "Speaking at Mumbai Women Coders was such a fun and energizing experience. It’s a community built by women, for everyone who is open, curious, and full of great questions. I loved sharing “Selective AI is a Skill” and the lively conversations that followed. Truly a space where ideas flow freely and everyone feels welcome."
                                </p>
                            </div>
                        </div>
                        {/* Story 2 */}
                        <div className="col-lg-6 fade-up-trigger delay-2">
                            <div className="story-card h-100">
                                <i className="fa-solid fa-quote-left story-quote-icon"></i>
                                <div className="member-avatar-ring">
                                    <img src="/assets/images/speakers/taazeen-ansari.webp" alt="Sneha Rao" />
                                </div>
                                <h3 className="h4 fw-bold text-white mb-2">Taazeen Ansari</h3>
                                <p className="text-gradient small fw-bold text-uppercase mb-3">Student @ SIES</p>
                                <p className="text-white-50 mb-0">
                                    "For me, speaking at the first Mumbai Women Coders meetup of 2026 wasn’t just about delivering a session - it was about being part of something bigger. The energy in the room, the conversations we shared, and the questions we explored together made it feel personal and meaningful. What I loved most was how we weren’t just listening - we were thinking, reflecting, and growing as a community. It felt like a space where all of us could openly question, learn, and support each other."
                                </p>
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
                        <div className="marquee-content" id="partner-marquee">
                            {/* Unique Partners Only */}
                            <div className="partner-card"><img src="/assets/images/partner/microsoft.png" alt="Microsoft Logo" className="partner-logo" /></div>
                            <div className="partner-card"><img src="/assets/images/partner/gdg-mumbai.webp" alt="GDG Logo" className="partner-logo" /></div>
                        </div>
                    </div>
                </div>
            </section>

            {/* FAQ Section */}
            <section id="faq" className="bg-faq-soft py-5">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Got Questions?</h6>
                        <h2 className="display-4 fw-bold">Frequently Asked Questions</h2>
                        <p className="lead text-muted mx-auto mx-w-700">
                            Everything you need to know about joining and growing with the Women Coders community. Can't find an answer? Feel free to reach out!
                        </p>
                    </div>

                    <div className="faq-container fade-up-trigger">
                        <div className="faq-item">
                            <div className="faq-question">
                                <h4>Who can join Women Coders</h4>
                                <div className="faq-icon"><i className="fa-solid fa-chevron-down"></i></div>
                            </div>
                            <div className="faq-answer">
                                <p>
                                    We are a dedicated community focused on empowering and supporting women in the technology sector. We welcome everyone who are passionate about coding, leadership, and professional growth in the tech ecosystem.
                                </p>
                            </div>
                        </div>

                        <div className="faq-item">
                            <div className="faq-question">
                                <h4>Is there a membership fee?</h4>
                                <div className="faq-icon"><i className="fa-solid fa-chevron-down"></i></div>
                            </div>
                            <div className="faq-answer">
                                <p>
                                    No, joining Women Coders is completely free! Our core technical meetups, study groups, and community platforms are accessible to everyone without any charge.
                                </p>
                            </div>
                        </div>

                        <div className="faq-item">
                            <div className="faq-question">
                                <h4>How can I become a speaker at a Women Coders event?</h4>
                                <div className="faq-icon"><i className="fa-solid fa-chevron-down"></i></div>
                            </div>
                            <div className="faq-answer">
                                <p>
                                    We're always looking for fresh perspectives! You can apply to speak by filling out our "Call for Speakers" form available on our events page, or by reaching out to our chapter leads during any of our monthly meetups.
                                </p>
                            </div>
                        </div>

                        <div className="faq-item">
                            <div className="faq-question">
                                <h4>What kind of technical topics do you cover?</h4>
                                <div className="faq-icon"><i className="fa-solid fa-chevron-down"></i></div>
                            </div>
                            <div className="faq-answer">
                                <p>
                                    We cover a wide spectrum including Full-Stack Web Development, Data Science, AI/ML, Cloud Infrastructure (AWS/Azure), Cybersecurity, and even soft skills like Technical Leadership and Salary Negotiation.
                                </p>
                            </div>
                        </div>

                        <div className="faq-item">
                            <div className="faq-question">
                                <h4>How can I become a volunteer at Women Coders</h4>
                                <div className="faq-icon"><i className="fa-solid fa-chevron-down"></i></div>
                            </div>
                            <div className="faq-answer">
                                <p>
                                    Connect with us on our social media channels, join our WhatsApp community, and explore opportunities shared in our channels. Complete the Volunteer Form, and our team will get in touch with the next steps. <a href="https://forms.gle/LQjaPqYjzjGJ9FYT9" target="_blank" rel="noreferrer">Join Today</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    );
};

export default HomeClient;
