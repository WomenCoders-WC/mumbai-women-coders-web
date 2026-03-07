"use client";

import { useEffect } from 'react';
import Link from 'next/link';

const Footer = () => {
    useEffect(() => {
        // Support Us Popup Logic
        const supportPopup = document.getElementById('supportUsPopup');
        const closeSupportBtn = document.getElementById('closeSupportPopup');

        if (supportPopup && closeSupportBtn) {
            const showSupportPopup = () => {
                supportPopup.classList.add('show');
            };

            const checkAndShowSupportPopup = () => {
                const lastClosed = sessionStorage.getItem('supportPopupClosedTime');
                const now = Date.now();

                if (!lastClosed) {
                    // Show after 20 seconds (20000 ms)
                    setTimeout(showSupportPopup, 20000);
                } else {
                    // Check if 10 min (600,000 ms) has passed
                    const timePassed = now - parseInt(lastClosed);
                    if (timePassed > 600000) {
                        showSupportPopup();
                    } else {
                        setTimeout(showSupportPopup, 600000 - timePassed);
                    }
                }
            };

            const handleClose = () => {
                supportPopup.classList.remove('show');
                sessionStorage.setItem('supportPopupClosedTime', Date.now().toString());
                // Schedule next showing in 10 minutes (600000 ms)
                setTimeout(showSupportPopup, 600000);
            };

            closeSupportBtn.addEventListener('click', handleClose);
            checkAndShowSupportPopup();

            return () => {
                closeSupportBtn.removeEventListener('click', handleClose);
            };
        }
    }, []);

    return (
        <>
            <footer className="modern-footer">
                <div className="footer-curve-top"></div>
                <div className="container position-relative z-2">
                    <div className="row gy-5">
                        {/* Brand Section */}
                        <div className="col-lg-4 col-md-12">
                            <div className="footer-brand-fancy mb-4">
                                <img src="/assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo" className="footer-logo-main mb-3" />
                                <h3 className="fw-bold text-white mb-2">Women <span className="text-gradient-lavender">Coders</span></h3>
                                <div className="brand-line"></div>
                            </div>
                            <p className="footer-bio mb-4 opacity-75">
                                Building the most powerful ecosystem for women in tech. Join our community of 2500+ members to learn, lead, and innovate.
                            </p>
                            <div className="footer-social-cluster">
                                <a href="https://www.linkedin.com/company/mumbai-women-coders/" target="_blank" rel="noreferrer" className="social-badge"><i className="fa-brands fa-linkedin-in"></i></a>
                                <a href="https://www.instagram.com/mumbaiwomencoders/" target="_blank" rel="noreferrer" className="social-badge"><i className="fa-brands fa-instagram"></i></a>
                                <a href="https://meetup.com/mumbai-women-coders/" target="_blank" rel="noreferrer" className="social-badge"><i className="fa-brands fa-meetup"></i></a>
                                <a href="https://x.com/WomenCoders01" target="_blank" rel="noreferrer" className="social-badge"><i className="fa-brands fa-x-twitter"></i></a>
                            </div>
                        </div>

                        {/* Quick Links */}
                        <div className="col-lg-2 col-md-4 col-12 text-center text-md-start">
                            <div className="footer-nav-block d-flex flex-column align-items-center align-items-md-start">
                                <h5 className="footer-heading mb-4">Explore</h5>
                                <ul className="list-unstyled fancy-menu">
                                    <li><Link href="/">Home</Link></li>
                                    <li><Link href="/about">About Us</Link></li>
                                    <li><Link href="/events">Events</Link></li>
                                    <li><Link href="/chapters">City Chapters</Link></li>
                                </ul>
                            </div>
                        </div>

                        {/* Support */}
                        <div className="col-lg-2 col-md-4 col-12 text-center text-md-start">
                            <div className="footer-nav-block d-flex flex-column align-items-center align-items-md-start">
                                <h5 className="footer-heading mb-4">Community</h5>
                                <ul className="list-unstyled fancy-menu">
                                    <li><Link href="/chapters/start">Start a Chapter</Link></li>
                                    <li><Link href="/support-us">Support Us</Link></li>
                                    <li><Link href="/contact">Contact Us</Link></li>
                                    <li><Link href="/sitemap">Sitemap</Link></li>
                                </ul>
                            </div>
                        </div>

                        {/* Contact & Newsletter */}
                        <div className="col-lg-4 col-md-4 col-12 text-center text-md-start">
                            <h5 className="footer-heading mb-4">Get in Touch</h5>
                            <div className="contact-strip mb-4 d-flex flex-column align-items-center align-items-md-start">
                                <div className="contact-item d-flex align-items-center mb-3 w-100 justify-content-center justify-content-md-start">
                                    <div className="contact-icon"><i className="fa-solid fa-location-dot"></i></div>
                                    <span className="small opacity-75">Global Community</span>
                                </div>
                                <div className="contact-item d-flex align-items-center w-100 justify-content-center justify-content-md-start">
                                    <div className="contact-icon"><i className="fa-regular fa-envelope"></i></div>
                                    <span className="small opacity-75">mumbaiwomencoders@gmail.com</span>
                                </div>
                            </div>

                            {/* <div className="newsletter-fancy shadow-lg">
                                <h6 className="mb-3 fw-bold text-white">Newsletter</h6>
                                <form className="newsletter-form" onSubmit={(e) => e.preventDefault()}>
                                    <div className="input-glass-group">
                                        <input type="email" placeholder="Your email..." required />
                                        <button type="submit"><i className="fa-solid fa-arrow-right"></i></button>
                                    </div>
                                </form>
                            </div> */}
                        </div>
                    </div>

                    <div className="footer-bottom-fancy mt-5 pt-4">
                        <div className="row align-items-center">
                            <div className="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                <p className="mb-0 small opacity-50">&copy; {new Date().getFullYear()} Women Coders. Engineered with <i className="fa-solid fa-bolt text-warning"></i> by the community.</p>
                            </div>
                            <div className="col-md-6 text-center text-md-end">
                                <div className="footer-legal-links">
                                    <Link href="/legal/privacy-policy">Privacy</Link>
                                    <span className="dot"></span>
                                    <Link href="#">Terms</Link>
                                    <span className="dot"></span>
                                    <Link href="/legal/code-of-conduct">Code of Conduct</Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            {/* Support Us Creative Popup */}
            <div className="support-popup-overlay" id="supportUsPopup">
                <div className="support-popup-card shadow-premium border-lavender">
                    <button className="support-popup-close" id="closeSupportPopup" aria-label="Close">
                        <i className="fa-solid fa-xmark"></i>
                    </button>
                    <div className="support-popup-icon mb-3">
                        <div className="mx-auto support-popup-logo-container">
                            <img src="/assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo" className="support-popup-logo-img" />
                        </div>
                    </div>
                    <h4 className="fw-bold mb-2 text-dark">Empower Women in Tech</h4>
                    <p className="small text-muted mb-4 px-2">
                        Help us build the most powerful ecosystem for women coders. Your support helps us host more events, workshops, and build a stronger community!
                    </p>
                    <a href="https://forms.gle/te5xWA5ZcHABkr3A9" target="_blank" rel="noreferrer" className="btn btn-premium w-100 mb-2">
                        Support Us Today <i className="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </>
    );
};

export default Footer;
