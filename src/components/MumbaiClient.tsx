"use client";

import { useState, useEffect } from 'react';
import Link from 'next/link';

const MumbaiClient = () => {
    const [pastEvents, setPastEvents] = useState<any[]>([]);
    const [activeTab, setActiveTab] = useState('upcoming');

    useEffect(() => {
        // Fetch past events data
        fetch('/assets/json/past-events.json')
            .then(res => res.json())
            .then(data => {
                let eventsArray = [];
                if (Array.isArray(data)) {
                    eventsArray = data;
                } else if (data && data.data && data.data.groupByUrlname && data.data.groupByUrlname.events) {
                    const edges = data.data.groupByUrlname.events.edges || [];
                    eventsArray = edges.map((edge: any) => edge.node).filter(Boolean);
                }
                setPastEvents(eventsArray);
            })
            .catch(err => console.error("Error fetching past events: ", err));

    }, []);

    // Helper functions for date
    const getDay = (dateString: string) => {
        const d = new Date(dateString);
        return isNaN(d.getTime()) ? '' : d.getDate().toString().padStart(2, '0');
    };

    const getMonth = (dateString: string) => {
        const d = new Date(dateString);
        return isNaN(d.getTime()) ? '' : d.toLocaleString('en-us', { month: 'short' });
    };

    const leadership = [
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

    return (
        <main>
            {/* Chapter Hero */}
            <section className="hero-section text-center hero-fixed-bg mumbai-hero-bg">
                <div className="container position-relative z-3">
                    <div className="animate__animated animate__fadeInDown">
                        {/* Breadcrumb Section */}
                        <div className="mb-4">
                            <nav aria-label="breadcrumb" className="d-inline-block">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item"><Link href="/chapters" className="text-white text-decoration-none opacity-75 hover-opacity-100">Chapters</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Mumbai</li>
                                </ol>
                            </nav>
                        </div>
                        <span className="badge hero-badge px-3 py-2 mb-4">
                            <small className="text-uppercase fw-bold ls-1">India 🇮🇳</small>
                        </span>
                        <h1 className="display-1 fw-bold mb-4 text-gradient-light">Mumbai Chapter</h1>
                        <p className="lead hero-desc mb-5">
                            The founding hub of Women Coders, fostering innovation and inclusion in the heart of India's Silicon Valley alternative.
                        </p>
                        <div className="d-flex flex-wrap justify-content-center gap-3">
                            <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank" rel="noreferrer" className="btn btn-premium">Join on Meetup</a>
                            <a href="#about" className="btn btn-m-outline">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>

            {/* About Section */}
            <section id="about" className="bg-mesh-light py-5">
                <div className="container">
                    <div className="row align-items-center g-5">
                        <div className="col-lg-6 animate-fade-up">
                            <div className="position-relative">
                                <div className="position-absolute z-3 start-0 top-0 translate-middle-x translate-middle-y support-popup-logo-container d-none d-md-flex mt-3 ms-3">
                                    <img src="/assets/images/logo/dark/4.png" alt="Women Coders Logo" className="support-popup-logo-img" />
                                </div>
                                <div id="mumbaiCarousel" className="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
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
                            </div>
                        </div>
                        <div className="col-lg-6 animate-fade-up">
                            <h2 className="display-5 fw-bold mb-4">About the <span className="text-royal-violet">Mumbai Chapter</span></h2>
                            <p className="lead text-muted mb-4">
                                Mumbai Women Coders is a vibrant tech community in Mumbai for women & men in technology and their allies, creating lasting change in the tech ecosystem. <br /><br />
                                Our community welcomes everyone: students, professionals, experienced developers, and allies committed to inclusive tech spaces. <br /><br />
                                We are open, inclusive, and focused on individual and collective growth.
                            </p>
                            <div className="row g-4 mt-2">
                                <div className="col-sm-6">
                                    <div className="d-flex align-items-center gap-3">
                                        <div className="icon-box-glow mb-0 icon-box-md">
                                            <i className="fa-solid fa-user-group"></i>
                                        </div>
                                        <div>
                                            <h5 className="fw-bold mb-0">2100+</h5>
                                            <small className="text-muted">Members</small>
                                        </div>
                                    </div>
                                </div>
                                <div className="col-sm-6">
                                    <div className="d-flex align-items-center gap-3">
                                        <div className="icon-box-glow mb-0 icon-box-md">
                                            <i className="fa-regular fa-calendar-days"></i>
                                        </div>
                                        <div>
                                            <h5 className="fw-bold mb-0">40+</h5>
                                            <small className="text-muted">Events Held</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Community Organizers Section */}
            <section id="organizers" className="bg-cosmic-theme py-5">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h2 className="display-4 fw-bold text-white">Chapter Leads</h2>
                        <p className="lead text-white-50 mx-auto mx-w-700 opacity-75">
                            Meet the passionate individuals driving the Mumbai Women Coders community forward.
                        </p>
                    </div>

                    <div className="row g-4 justify-content-center mt-5">
                        {leadership.map((o, index) => (
                            <div key={index} className="col-lg-4 col-md-6 fade-up-trigger pt-5 mt-4 pt-lg-0 mt-lg-0">
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

            {/* Upcoming Events Section */}
            <section id="upcoming" className="bg-white position-relative py-5">
                <div className="events-dot-pattern opacity-5"></div>
                <div className="container py-5 position-relative z-2">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Save the Date</h6>
                        <h2 className="display-4 fw-bold">Our Mumbai Chapter Events</h2>
                        <p className="lead text-muted mx-auto mx-w-700">
                            Secure your spot in our upcoming sessions and accelerate your technical journey with the tech community.
                        </p>
                    </div>

                    <ul className="nav nav-pills justify-content-center mb-5 fade-up-trigger" id="eventsTab" role="tablist">
                        <li className="nav-item" role="presentation">
                            <button className={`nav-link rounded-pill px-4 py-2 fw-bold ${activeTab === 'upcoming' ? 'active' : ''}`} onClick={() => setActiveTab('upcoming')} type="button" role="tab" aria-selected={activeTab === 'upcoming'}>Upcoming Events</button>
                        </li>
                        <li className="nav-item" role="presentation">
                            <button className={`nav-link rounded-pill px-4 py-2 fw-bold ms-3 ${activeTab === 'past' ? 'active' : ''}`} onClick={() => setActiveTab('past')} type="button" role="tab" aria-selected={activeTab === 'past'}>Past Events</button>
                        </li>
                    </ul>

                    <div className="tab-content" id="eventsTabContent">
                        {/* Upcoming Events Pane */}
                        <div className={`tab-pane fade ${activeTab === 'upcoming' ? 'show active' : ''}`} role="tabpanel">
                            <div className="events-list">
                                {/* Event 1 */}
                                <div className="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                                    <div className="row g-0">
                                        <div className="col-md-3">
                                            <div className="event-img-container position-relative">
                                                <span className="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay">Mumbai Chapter</span>
                                                <img src="/assets/images/events/mwc-8-3-26.jpg" className="event-preview-img" alt="International Women's Day" />
                                                <div className="event-img-overlay"></div>
                                            </div>
                                        </div>
                                        <div className="col-md-9">
                                            <div className="row align-items-center g-0 p-4 h-100">
                                                <div className="col-md-2 text-center">
                                                    <div className="event-date-box mx-auto mb-3 mb-md-0">
                                                        <span className="d-block h2 fw-800 mb-0">8</span>
                                                        <span className="text-uppercase fw-bold ls-1 small">MARCH</span>
                                                    </div>
                                                </div>
                                                <div className="col-md-10 ps-md-4">
                                                    <div className="row align-items-center">
                                                        <div className="col-lg-7">
                                                            <h3 className="h4 fw-800 mb-1 text-gradient">International Women's Day Celebration</h3>
                                                            <div className="text-muted small"><i className="fa-solid fa-location-dot text-primary"></i> ITM Institute of Design and Media, Andheri (W),Mumbai</div>
                                                        </div>
                                                        <div className="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                            <div className="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">Community Event</div>
                                                            <div className="text-muted small d-block">
                                                                <i className="fa-solid fa-laptop me-1"></i> In-Person
                                                            </div>
                                                        </div>
                                                        <div className="col-12 mt-3">
                                                            <a href="https://luma.com/kta9xsx4?utm_content=latest_event&utm_medium=direct&utm_source=website" target="_blank" rel="noreferrer" className="btn btn-premium-sm">Register Now <i className="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {/* Event 1 */}
                                <div className="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                                    <div className="row g-0">
                                        <div className="col-md-3">
                                            <div className="event-img-container position-relative">
                                                <span className="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay">Mumbai Chapter</span>
                                                <img src="/assets/images/events/mwc-8-3/mwc-8-3-26.jpg" className="event-preview-img" alt="International Women's Day" />
                                                <div className="event-img-overlay"></div>
                                            </div>
                                        </div>
                                        <div className="col-md-9">
                                            <div className="row align-items-center g-0 p-4 h-100">
                                                <div className="col-md-2 text-center">
                                                    <div className="event-date-box mx-auto mb-3 mb-md-0">
                                                        <span className="d-block h2 fw-800 mb-0">8</span>
                                                        <span className="text-uppercase fw-bold ls-1 small">MARCH</span>
                                                    </div>
                                                </div>
                                                <div className="col-md-10 ps-md-4">
                                                    <div className="row align-items-center">
                                                        <div className="col-lg-7">
                                                            <h3 className="h4 fw-800 mb-1 text-gradient">SheBuilds on Lovable x International Women's Day(Mumbai)</h3>
                                                            <div className="text-muted small"><i className="fa-solid fa-location-dot text-primary"></i> ITM Institute of Design and Media, Andheri (W),Mumbai</div>
                                                        </div>
                                                        <div className="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                            <div className="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">Buildathon</div>
                                                            <div className="text-muted small d-block">
                                                                <i className="fa-solid fa-laptop me-1"></i> In-Person
                                                            </div>
                                                        </div>
                                                        <div className="col-12 mt-3">
                                                            <a href="https://luma.com/mxykzefr?utm_content=latest_event&utm_medium=direct&utm_source=website" target="_blank" rel="noreferrer" className="btn btn-premium-sm">Register Now <i className="fa-solid fa-arrow-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {/* Past Events Pane */}
                        <div className={`tab-pane fade ${activeTab === 'past' ? 'show active' : ''}`} role="tabpanel">
                            <div className="events-list" id="past-events-container">
                                {pastEvents.map((event, index) => {
                                    const day = getDay(event.dateTime);
                                    const month = getMonth(event.dateTime);
                                    const title = event.title;
                                    const venueName = event.venue?.name || 'Online event';
                                    const eventType = event.eventType === 'ONLINE' ? 'Online' : 'In-Person';
                                    const eventIcon = event.eventType === 'ONLINE' ? 'fa-laptop' : 'fa-users';
                                    const eventUrl = event.eventUrl;
                                    const isMumbai = event.venue?.city && event.venue.city.toLowerCase() === 'mumbai';
                                    const locationBadge = isMumbai ? 'Mumbai Chapter' : 'Global / Online';

                                    let imgSrc = 'https://images.unsplash.com/photo-1543269865-cbf427effbad?auto=format&fit=crop&q=80&w=800';
                                    if (event.featuredEventPhoto?.highResUrl) {
                                        imgSrc = event.featuredEventPhoto.highResUrl;
                                    } else if (event.featuredEventPhoto?.baseUrl) {
                                        imgSrc = event.featuredEventPhoto.baseUrl;
                                    }

                                    return (
                                        <div key={index} className="event-card-row mb-5 fade-up-trigger animate-fade-up text-center text-md-start past-event-item">
                                            <div className="row g-0">
                                                <div className="col-md-3">
                                                    <div className="event-img-container position-relative">
                                                        <span className="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay">{locationBadge}</span>
                                                        <img src={imgSrc} className="event-preview-img event-preview-img-custom" alt="Event Image" />
                                                        <div className="event-img-overlay"></div>
                                                    </div>
                                                </div>
                                                <div className="col-md-9">
                                                    <div className="row align-items-center g-0 p-4 h-100">
                                                        <div className="col-md-2 text-center">
                                                            <div className="event-date-box mx-auto mb-3 mb-md-0">
                                                                <span className="d-block h2 fw-800 mb-0">{day}</span>
                                                                <span className="text-uppercase fw-bold ls-1 small">{month}</span>
                                                            </div>
                                                        </div>
                                                        <div className="col-md-10 ps-md-4">
                                                            <div className="row align-items-center">
                                                                <div className="col-lg-7">
                                                                    <h3 className="h4 fw-800 mb-1 text-gradient">{title}</h3>
                                                                    <div className="text-muted small"><i className="fa-solid fa-location-dot text-primary"></i> {venueName}</div>
                                                                </div>
                                                                <div className="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                                    <div className="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">Community Event</div>
                                                                    <div className="text-muted small d-block">
                                                                        <i className={`fa-solid ${eventIcon} me-1`}></i> {eventType}
                                                                    </div>
                                                                </div>
                                                                <div className="col-12 mt-3">
                                                                    <a href={eventUrl} target="_blank" rel="noreferrer" className="btn btn-premium-sm">View Details <i className="fa-solid fa-arrow-right"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    );
                                })}

                                {pastEvents.length === 0 && (
                                    <div className="text-center text-muted p-5">
                                        <p>No past events found.</p>
                                    </div>
                                )}
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Community Links */}
            <section className="bg-chapter-cosmic text-white py-5 position-relative overflow-hidden">
                <div className="hero-bg-1 opacity-3"></div>
                <div className="container py-4">
                    <div className="glass-card-premium p-5 text-center bg-transparent border-white-50">
                        <h2 className="fw-bold mb-4">Connect with Mumbai Women Coders</h2>
                        <div className="mt-2">
                            <div className="d-flex justify-content-center gap-3">
                                <a href="https://chat.whatsapp.com/Izg9LXqH4996RYJpuWFgZc" target="_blank" rel="noreferrer" className="btn btn-outline-light btn-social-round shadow-sm"><i className="fa-brands fa-whatsapp"></i></a>
                                <a href="https://www.linkedin.com/company/mumbai-women-coders/" target="_blank" rel="noreferrer" className="btn btn-outline-light btn-social-round shadow-sm"><i className="fa-brands fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/mumbaiwomencoders/" target="_blank" rel="noreferrer" className="btn btn-outline-light btn-social-round shadow-sm"><i className="fa-brands fa-instagram"></i></a>
                                <a href="https://x.com/WomenCoders01" target="_blank" rel="noreferrer" className="btn btn-outline-light btn-social-round shadow-sm"><i className="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    );
};

export default MumbaiClient;
