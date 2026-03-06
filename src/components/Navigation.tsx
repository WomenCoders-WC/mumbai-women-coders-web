"use client";

import Link from 'next/link';
import { usePathname } from 'next/navigation';

const Navigation = () => {
    const pathname = usePathname();

    const isActive = (path: string) => {
        return pathname.includes(path) ? 'active' : '';
    };

    return (
        <>
            <button className="mobile-nav-toggle d-lg-none" type="button" aria-label="Toggle Menu">
                <i className="fa-solid fa-bars"></i>
            </button>

            <nav className="navbar navbar-expand-lg d-none d-lg-flex">
                <div className="container-fluid justify-content-center">
                    <div className="collapse navbar-collapse show" id="navbarNav">
                        <ul className="navbar-nav mx-auto align-items-center">
                            <li className="nav-item">
                                <Link className={`nav-link ${pathname === '/' ? 'active' : ''}`} href="/">Home</Link>
                            </li>
                            <li className="nav-item">
                                <Link className={`nav-link ${isActive('/about')}`} href="/about">About</Link>
                            </li>
                            <li className="nav-item">
                                <Link className={`nav-link ${isActive('/events')}`} href="/events">Events</Link>
                            </li>
                            <li className="nav-item dropdown">
                                <Link className={`nav-link dropdown-toggle ${isActive('/chapters')}`} href="/chapters" id="chaptersDropdown" role="button" aria-expanded="false">
                                    Chapters
                                </Link>
                                <ul className="dropdown-menu border-0 shadow" aria-labelledby="chaptersDropdown">
                                    <li><Link className="dropdown-item" href="/chapters/mumbai">Mumbai</Link></li>
                                    <li><Link className="dropdown-item coming-soon" href="#">London <span>Soon</span></Link></li>
                                    <li><Link className="dropdown-item coming-soon" href="#">Berlin <span>Soon</span></Link></li>
                                    <li><hr className="dropdown-divider opacity-50" /></li>
                                    <li><Link className="dropdown-item" href="/chapters/start">Start a Chapter</Link></li>
                                    <li><Link className="dropdown-item small text-royal-violet" href="/chapters">All Chapters</Link></li>
                                </ul>
                            </li>
                            <li className="nav-item">
                                <Link className={`nav-link text-nowrap ${isActive('/support-us')}`} href="/support-us">Support Us</Link>
                            </li>
                            <li className="nav-item">
                                <Link className={`nav-link ${isActive('/contact')}`} href="/contact">Contact</Link>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div className="mobile-overlay-menu d-lg-none">
                <div className="mobile-menu-close">
                    <i className="fa-solid fa-xmark"></i>
                </div>
                <div className="text-center mb-5 mt-4">
                    <img src="/assets/images/logo/dark/logo-main.webp" alt="Women Coders Logo" height="50" />
                </div>
                <ul className="mobile-nav-links list-unstyled text-center">
                    <li><Link href="/" className={pathname === '/' ? 'active' : ''}>Home</Link></li>
                    <li><Link href="/about" className={isActive('/about')}>About</Link></li>
                    <li><Link href="/events" className={isActive('/events')}>Events</Link></li>
                    <li className="mobile-dropdown mb-4">
                        <div className="d-flex align-items-center justify-content-center">
                            <Link href="/chapters" className={`${isActive('/chapters')} mb-0`}>Chapters</Link>
                            <button className="mobile-dropdown-toggle" type="button" aria-label="Toggle Submenu">
                                <i className="fa-solid fa-chevron-down"></i>
                            </button>
                        </div>
                        <ul className="mobile-dropdown-menu list-unstyled small mt-2">
                            <li><Link href="/chapters/mumbai" className="py-2 d-block">Mumbai</Link></li>
                            <li><Link href="#" className="py-2 opacity-50 d-block">London (Coming Soon)</Link></li>
                            <li><Link href="#" className="py-2 opacity-50 d-block">Berlin (Coming Soon)</Link></li>
                        </ul>
                    </li>
                    <li><Link href="/support-us" className={isActive('/support-us')}>Support Us</Link></li>
                    <li><Link href="/contact" className={isActive('/contact')}>Contact</Link></li>
                </ul>
                <div className="mt-5 text-center px-4">
                    <a href="https://www.meetup.com/mumbai-women-coders/" target="_blank" rel="noreferrer" className="btn btn-premium w-100">Join Community</a>
                </div>
            </div>
        </>
    );
};

export default Navigation;
