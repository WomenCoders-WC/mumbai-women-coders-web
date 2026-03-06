"use client";

import { useState, useEffect } from 'react';
import Link from 'next/link';
import { upcomingEvents } from '@/data/upcoming-events';

const EventsClient = () => {
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
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Events</li>
                                </ol>
                            </nav>

                            <h1 className="display-1 fw-bolder mb-3 lh-1">
                                Community <span className="text-gradient">Events</span>
                            </h1>
                            <p className="lead mb-5 hero-desc">
                                Join our vibrant community gatherings, technical workshops, and global conferences. Whether you're in Mumbai, London, or Berlin, there's a place for you.
                            </p>
                        </div>
                    </div>
                </div>
            </header>

            {/* Upcoming Events Section */}
            <section id="upcoming" className="bg-white position-relative py-5">
                <div className="events-dot-pattern opacity-5"></div>
                <div className="container py-5 position-relative z-2">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Save the Date</h6>
                        <h2 className="display-4 fw-bold">Our Community Events</h2>
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
                                {upcomingEvents.map((event) => (
                                    <div key={event.id} className="event-card-row mb-5 animate-fade-up fade-up-trigger text-center text-md-start">
                                        <div className="row g-0">
                                            <div className="col-md-3">
                                                <div className="event-img-container position-relative">
                                                    {event.badge && <span className="position-absolute top-0 start-0 m-3 badge bg-white text-royal-violet fw-bold shadow-sm z-3 event-badge-overlay">{event.badge}</span>}
                                                    <img src={event.image} className="event-preview-img" alt={event.imageAlt} />
                                                    <div className="event-img-overlay"></div>
                                                </div>
                                            </div>
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
                                                                <div className="text-muted small"><i className="fa-solid fa-location-dot text-primary"></i> {event.locationFull}</div>
                                                            </div>
                                                            <div className="col-lg-5 text-center text-md-end mt-3 mt-lg-0">
                                                                <div className="d-inline-block px-3 py-1 rounded-pill bg-lavender-light text-primary fw-bold small mb-2">{event.eventType}</div>
                                                                <div className="text-muted small d-block">
                                                                    <i className={`fa-solid ${event.eventIcon} me-1`}></i> {event.eventFormat}
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
                                    </div>
                                ))}
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

            {/* Featured Chapters Section */}
            <section id="our-chapters" className="py-5 bg-white">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Local Communities</h6>
                        <h2 className="display-4 fw-bold">Explore Our Chapters</h2>
                        <p className="lead text-muted mx-auto mx-w-700">
                            Connect with your local tech ecosystem. Each chapter runs its own unique events, meetups, and workshops.
                        </p>
                    </div>

                    <div className="row g-4 justify-content-center">
                        {/* Mumbai Chapter */}
                        <div className="col-lg-4 col-md-6 fade-up-trigger">
                            <div className="chapter-card-fancy chapter-card-mumbai">
                                <div className="chapter-overlay"></div>
                                <div className="chapter-content">
                                    <div className="chapter-badge">Mumbai</div>
                                    <h3 className="chapter-title">The City of Dreams</h3>
                                    <p className="chapter-desc">Home to our largest community of developers and innovators.</p>
                                    <Link href="/chapters/mumbai" className="btn btn-sm btn-light rounded-pill fw-bold px-4">View Events</Link>
                                </div>
                            </div>
                        </div>

                        {/* London Chapter */}
                        <div className="col-lg-4 col-md-6 fade-up-trigger delay-2">
                            <div className="chapter-card-fancy chapter-card-london">
                                <div className="chapter-overlay"></div>
                                <div className="chapter-content">
                                    <div className="chapter-badge">London</div>
                                    <h3 className="chapter-title">Tech Hub of Europe</h3>
                                    <p className="chapter-desc">Bridging finance, art, and technology in the heart of the UK.</p>
                                    <Link href="/chapters/london" className="btn btn-sm btn-light rounded-pill fw-bold px-4">View Events</Link>
                                </div>
                            </div>
                        </div>

                        {/* Berlin Chapter */}
                        <div className="col-lg-4 col-md-6 fade-up-trigger delay-4">
                            <div className="chapter-card-fancy chapter-card-berlin">
                                <div className="chapter-overlay"></div>
                                <div className="chapter-content">
                                    <div className="chapter-badge">Berlin</div>
                                    <h3 className="chapter-title">Creative Capital</h3>
                                    <p className="chapter-desc">Where startups and creativity collide in a vibrant tech scene.</p>
                                    <Link href="/chapters/berlin" className="btn btn-sm btn-light rounded-pill fw-bold px-4">View Events</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Past Events Highlights */}
            <section id="past-highlights" className="bg-cosmic-theme py-5">
                <div className="container py-5">
                    <div className="row align-items-center mb-5">
                        <div className="col-lg-8 fade-up-trigger">
                            <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Flashback</h6>
                            <h2 className="display-4 fw-bold text-white">Past Highlights</h2>
                        </div>
                        <div className="col-lg-4 text-lg-end fade-up-trigger">
                            <a href="#" className="btn btn-outline-light rounded-pill px-4">View Archive</a>
                        </div>
                    </div>

                    <div className="row g-4">
                        <div className="col-md-6 col-lg-4 fade-up-trigger">
                            <div className="highlight-card">
                                <img src="https://images.unsplash.com/photo-1505373877841-8d25f7d46678?auto=format&fit=crop&q=80&w=600" className="highlight-img" alt="Tech Summit 2025" />
                                <div className="highlight-overlay">
                                    <div className="highlight-content">
                                        <span className="badge bg-primary mb-2">Summit</span>
                                        <h4 className="text-white fw-bold">Tech Summit 2025</h4>
                                        <p className="text-white-50 small">500+ attendees, 20 speakers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6 col-lg-8 fade-up-trigger delay-0-2">
                            <div className="highlight-card">
                                <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=1000" className="highlight-img" alt="Hackathon 2024" />
                                <div className="highlight-overlay">
                                    <div className="highlight-content">
                                        <span className="badge bg-success mb-2">Hackathon</span>
                                        <h4 className="text-white fw-bold">Code for Good Hackathon</h4>
                                        <p className="text-white-50 small">Building solutions for local NGOs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {/* Event Gallery */}
            <section id="gallery" className="py-5 bg-surface-variant">
                <div className="container py-5">
                    <div className="text-center mb-5 fade-up-trigger">
                        <h6 className="text-gradient fw-bold text-uppercase ls-2 mb-3">Memories</h6>
                        <h2 className="display-4 fw-bold">Captured Moments</h2>
                    </div>

                    <div className="row g-3 gallery-grid">
                        <div className="col-md-4 mb-3 mb-lg-0 fade-up-trigger">
                            <img src="/assets/images/gallery/1.webp" className="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Group Discussion" />
                            <img src="/assets/images/gallery/2.webp" className="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Coding Session" />
                        </div>

                        <div className="col-md-4 mb-3 mb-lg-0 fade-up-trigger delay-2">
                            <img src="/assets/images/gallery/3.webp" className="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Workshop" />
                            <img src="/assets/images/gallery/4.webp" className="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Team Meeting" />
                        </div>

                        <div className="col-md-4 mb-3 mb-lg-0 fade-up-trigger delay-4">
                            <img src="/assets/images/gallery/5.webp" className="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Conference" />
                            <img src="/assets/images/gallery/6.webp" className="w-100 shadow-1-strong rounded mb-4 gallery-item" alt="Networking" />
                        </div>
                    </div>
                </div>
            </section>
        </main>
    );
};

export default EventsClient;
