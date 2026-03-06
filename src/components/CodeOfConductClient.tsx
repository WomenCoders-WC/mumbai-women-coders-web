"use client";

import { useState } from 'react';
import Link from 'next/link';

const CodeOfConductClient = () => {
    const [activeTab, setActiveTab] = useState('mumbai');

    return (
        <main>
            {/* Hero Section */}
            <section className="hero-section hero-conduct text-center">
                <div className="hero-bg-1"></div>
                <div className="hero-bg-2"></div>
                <div className="container position-relative z-3">
                    <div className="row justify-content-center">
                        <div className="col-lg-10 animate__animated animate__fadeInDown">
                            {/* Breadcrumb Section */}
                            <div className="mb-4">
                                <nav aria-label="breadcrumb" className="d-inline-block">
                                    <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                        <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                        <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Code of Conduct</li>
                                    </ol>
                                </nav>
                            </div>

                            <h1 className="display-2 fw-bold mb-4 text-gradient-light">Code of Conduct</h1>
                            <p className="lead hero-desc mb-0 mx-auto text-white-50">
                                Our commitment to providing a friendly, safe and welcoming environment for everyone.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {/* Main Global Standards Section */}
            <section className="py-5 position-relative">
                <div className="hero-bg-1 bg-aura-soft"></div>
                <div className="container py-5 position-relative z-2">
                    <div className="row justify-content-center">
                        <div className="col-lg-10">

                            {/* Purpose Card */}
                            <div className="m-card-gradient mb-5 animate-fade-up text-center border-lavender-subtle">
                                <h2 className="fw-bold mb-4 text-white">Purpose</h2>
                                <p className="lead text-white mb-4 mx-auto">
                                    A primary goal of Women Coders is to be inclusive to the largest number of contributors, with the most varied and diverse backgrounds possible.
                                </p>
                                <p className="text-white text-opacity-75 mb-0 mx-auto">
                                    We are committed to providing a friendly, safe and welcoming environment for all, regardless of gender, sexual orientation, ability, ethnicity, socioeconomic status and religion.
                                </p>
                            </div>

                            {/* Global Standards Grid */}
                            <div className="m-card-gradient mb-5 animate-fade-up border-lavender-subtle">
                                <h3 className="fw-bold mb-5 text-center text-white">Global Standards</h3>
                                <div className="row g-5">
                                    <div className="col-md-6">
                                        <div className="p-4 rounded-4 bg-white border-0 h-100 shadow-sm">
                                            <h4 className="fw-bold text-indigo-ink mb-4"><i className="fa-solid fa-shield-halved text-success me-2"></i>Expected</h4>
                                            <ul className="list-unstyled mb-0">
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-check text-success me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Participate in an authentic and active way</span>
                                                </li>
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-check text-success me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Exercise consideration and respect</span>
                                                </li>
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-check text-success me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Attempt collaboration before conflict</span>
                                                </li>
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-check text-success me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Refrain from demeaning or harassing behavior</span>
                                                </li>
                                                <li className="mb-0 d-flex"><i className="fa-solid fa-check text-success me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Be mindful of your surroundings</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div className="col-md-6">
                                        <div className="p-4 rounded-4 bg-white border-0 h-100 shadow-sm">
                                            <h4 className="fw-bold text-indigo-ink mb-4"><i className="fa-solid fa-shield text-danger me-2"></i>Unacceptable</h4>
                                            <ul className="list-unstyled mb-0">
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-xmark text-danger me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Intimidating or abusive speech</span>
                                                </li>
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-xmark text-danger me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Discriminatory or derogatory actions</span>
                                                </li>
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-xmark text-danger me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Inappropriate use of nudity or sexual images</span>
                                                </li>
                                                <li className="mb-3 d-flex"><i className="fa-solid fa-xmark text-danger me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Violence depictions or sustained disruption</span>
                                                </li>
                                                <li className="mb-0 d-flex"><i className="fa-solid fa-xmark text-danger me-3 mt-1"></i>
                                                    <span className="text-dark-amethyst fw-semibold">Unwelcome sexual attention or physical contact</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Consequences Section */}
                            <div className="bg-white p-4 p-md-5 rounded-5 mb-5 animate-fade-up border border-lavender-subtle shadow-sm">
                                <div className="row align-items-center">
                                    <div className="col-md-8">
                                        <h3 className="fw-bold mb-4 text-indigo-ink">Consequences</h3>
                                        <p className="text-dark-amethyst mb-0 fw-medium">
                                            Unacceptable behavior from any community member, including sponsors and those with decision-making authority, will not be tolerated. Anyone asked to stop unacceptable behavior is expected to comply immediately. Community organizers may take any action they deem appropriate, up to and including a temporary ban or permanent expulsion.
                                        </p>
                                    </div>
                                    <div className="col-md-4 text-center d-none d-md-block">
                                        <div className="display-1 text-lavender-purple opacity-25">
                                            <i className="fa-solid fa-gavel"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {/* Local Specifics & Reporting */}
                            <div className="mb-4 text-center animate-fade-up">
                                <h2 className="fw-bold text-indigo-ink mb-4">Local Reporting</h2>
                                <p className="text-dark-amethyst mb-5 fw-medium">Select a chapter to see location-specific reporting details.</p>

                                <ul className="nav nav-pills justify-content-center gap-3 mb-5" id="locationsTab" role="tablist">
                                    <li className="nav-item" role="presentation">
                                        <button className={`nav-link rounded-pill px-4 ${activeTab === 'mumbai' ? 'active' : ''}`} onClick={() => setActiveTab('mumbai')} type="button" role="tab">🇮🇳 Mumbai</button>
                                    </li>
                                    <li className="nav-item" role="presentation">
                                        <button className={`nav-link rounded-pill px-4 ${activeTab === 'london' ? 'active' : ''}`} onClick={() => setActiveTab('london')} type="button" role="tab">🇬🇧 London</button>
                                    </li>
                                    <li className="nav-item" role="presentation">
                                        <button className={`nav-link rounded-pill px-4 ${activeTab === 'berlin' ? 'active' : ''}`} onClick={() => setActiveTab('berlin')} type="button" role="tab">🇩🇪 Berlin</button>
                                    </li>
                                </ul>

                                <div className="tab-content" id="locationsTabContent">
                                    {/* Mumbai */}
                                    <div className={`tab-pane fade ${activeTab === 'mumbai' ? 'show active' : ''}`} role="tabpanel">
                                        <div className="m-card-gradient text-start">
                                            <div className="row gy-4">
                                                <div className="col-md-8 text-white">
                                                    <h4 className="fw-bold mb-3">Mumbai Chapter</h4>
                                                    <p className="text-white text-opacity-75 mb-4">Guidelines for all local events in Mumbai, Navi Mumbai, and Thane.</p>
                                                    <div className="d-flex align-items-center">
                                                        <div className="me-3 fs-3 text-white"><i className="fa-solid fa-envelope"></i></div>
                                                        <div>
                                                            <small className="text-white text-opacity-50 d-block text-uppercase ls-1">Direct Report</small>
                                                            <a href="mailto:mumbaiwomencoders@gmail.com" className="text-white text-decoration-none fw-bold h5">mumbaiwomencoders@gmail.com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="col-md-4 text-md-center pt-3 pt-md-0 border-start-md border-white border-opacity-25">
                                                    <div className="p-3 rounded-4 bg-white shadow-sm">
                                                        <small className="text-indigo-ink d-block mb-1 fw-bold text-uppercase badge-sm">Local Lead</small>
                                                        <span className="text-dark-amethyst fw-bold">Mumbai Chapter Team</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {/* London */}
                                    <div className={`tab-pane fade ${activeTab === 'london' ? 'show active' : ''}`} role="tabpanel">
                                        <div className="m-card-gradient text-start">
                                            <div className="row gy-4">
                                                <div className="col-md-8 text-white">
                                                    <h4 className="fw-bold mb-3">London Chapter</h4>
                                                    <p className="text-white text-opacity-75 mb-4">Adhering to UK Equality Act standards for all UK events.</p>
                                                    <div className="d-flex align-items-center">
                                                        <div className="me-3 fs-3 text-white"><i className="fa-solid fa-envelope"></i></div>
                                                        <div>
                                                            <small className="text-white text-opacity-50 d-block text-uppercase ls-1">Direct Report</small>
                                                            <a href="mailto:mumbaiwomencoders@gmail.com" className="text-white text-decoration-none fw-bold h5">mumbaiwomencoders@gmail.com</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="col-md-4 text-md-center pt-3 pt-md-0 border-start-md border-white border-opacity-25">
                                                    <div className="p-3 rounded-4 bg-white shadow-sm">
                                                        <small className="text-indigo-ink d-block mb-1 fw-bold text-uppercase badge-sm">Compliant With</small>
                                                        <span className="text-dark-amethyst fw-bold">UK Equality Act 2010</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {/* Berlin */}
                                    <div className={`tab-pane fade ${activeTab === 'berlin' ? 'show active' : ''}`} role="tabpanel">
                                        <div className="m-card-gradient text-start">
                                            <div className="row gy-4">
                                                <div className="col-md-8 text-white">
                                                    <h4 className="fw-bold mb-3">Berlin Chapter</h4>
                                                    <p className="text-white text-opacity-75 mb-4">Strictly following the standards of the <a href="https://berlincodeofconduct.org/en" target="_blank" rel="noreferrer" className="text-white fw-bold text-decoration-underline">Berlin Code of Conduct</a>.</p>
                                                    <div className="d-flex align-items-center">
                                                        <div className="me-3 fs-3 text-white"><i className="fa-solid fa-envelope"></i></div>
                                                        <div>
                                                            <small className="text-white text-opacity-50 d-block text-uppercase ls-1">Direct Report</small>
                                                            <span className="text-white text-decoration-none fw-bold h5">Berlin Team</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div className="col-md-4 text-md-center pt-3 pt-md-0 border-start-md border-white border-opacity-25">
                                                    <div className="p-3 rounded-4 bg-white shadow-sm">
                                                        <small className="text-indigo-ink d-block mb-1 fw-bold text-uppercase badge-sm">Standard</small>
                                                        <span className="text-dark-amethyst fw-bold">berlincodeofconduct.org</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

export default CodeOfConductClient;
