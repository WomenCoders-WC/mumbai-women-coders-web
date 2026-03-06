import type { Metadata } from "next";
import Link from 'next/link';

export const metadata: Metadata = {
    title: "Berlin Chapter | Mumbai Women Coders",
    description: "Women Coders is coming to Berlin. A community for women in technology in Germany's capital.",
};

export default function BerlinChapterPage() {
    return (
        <main>
            <section className="hero-section text-center hero-fixed-bg" style={{ background: "linear-gradient(rgba(15, 5, 41, 0.85), rgba(15, 5, 41, 0.95)), url('/assets/images/chapters/backgrounds/berlin.webp')", backgroundSize: "cover", backgroundPosition: "center" }}>
                <div className="container position-relative z-3">
                    <div className="animate__animated animate__fadeInDown">
                        <div className="mb-4">
                            <nav aria-label="breadcrumb" className="d-inline-block">
                                <ol className="breadcrumb bg-white bg-opacity-10 backdrop-blur px-4 py-2 rounded-pill shadow-sm mb-0 border border-white border-opacity-25 justify-content-center">
                                    <li className="breadcrumb-item"><Link href="/" className="text-white text-decoration-none opacity-75 hover-opacity-100">Home</Link></li>
                                    <li className="breadcrumb-item"><Link href="/chapters" className="text-white text-decoration-none opacity-75 hover-opacity-100">Chapters</Link></li>
                                    <li className="breadcrumb-item active text-white fw-bold" aria-current="page">Berlin</li>
                                </ol>
                            </nav>
                        </div>
                        <span className="badge hero-badge px-3 py-2 mb-4 text-white">
                            <small className="text-uppercase fw-bold ls-1">Launching Soon in Berlin 🇩🇪</small>
                        </span>
                        <h1 className="display-1 fw-bold mb-4 text-gradient-light">Berlin Chapter</h1>
                        <p className="lead hero-desc mb-5 text-white-50">
                            The hub of European innovation is getting an empowering home for women and allies. Join Berlin's tech revolution with us.
                        </p>
                        <div className="d-flex flex-wrap justify-content-center gap-3">
                            <a href="#waitlist-berlin" className="btn btn-premium">Join the Waitlist</a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="about" className="bg-mesh-light py-5">
                <div className="container py-5">
                    <div className="row align-items-center g-5">
                        <div className="col-lg-6 animate-fade-up">
                            <div className="img-premium-container shadow-lg">
                                <img src="/assets/images/chapters/backgrounds/berlin.webp" alt="Berlin Startup Scene" className="img-premium w-100 h-400-cover" />
                            </div>
                        </div>
                        <div className="col-lg-6 animate-fade-up">
                            <h2 className="display-5 fw-bold mb-4">Empowering <span className="text-royal-violet">Berlin's Tech</span></h2>
                            <p className="lead text-muted mb-4">
                                Berlin is a global epicenter for startups, AI, and creative technology. We are building a chapter dedicated to empowering women working at the intersections of technology across Mitte.
                                <br /><br />
                                Whether you are an engineer at a scale-up in Mitte or a researcher at a technical university, Berlin's chapter welcomes everyone!
                            </p>
                            <div className="d-flex align-items-center gap-3 mt-4">
                                <div className="icon-box-glow mb-0 icon-box-md">
                                    <i className="fa-solid fa-code-merge"></i>
                                </div>
                                <div>
                                    <h5 className="fw-bold mb-0">Launch Horizon</h5>
                                    <small className="text-muted">Coming Soon</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="waitlist-berlin" className="bg-cosmic-theme py-6 position-relative overflow-hidden text-center text-white">
                <div className="container position-relative z-2">
                    <div className="row justify-content-center">
                        <div className="col-lg-8 fade-up-trigger">
                            <h2 className="display-5 fw-bold mb-4">Berlin Waitlist</h2>
                            <p className="lead text-white-50 mb-5">
                                Be part of the founding community in Berlin. We'll reach out directly with inaugural networking and startup event invites as soon as we're ready!
                            </p>
                            <form className="max-w-500 mx-auto bg-white bg-opacity-10 p-4 rounded-4 backdrop-blur border border-white border-opacity-10">
                                <div className="mb-3 text-start">
                                    <label className="form-label small fw-bold text-uppercase ls-1 text-white-50">Email Address</label>
                                    <input type="email" className="form-control rounded-pill px-4 py-3 bg-dark text-white border-secondary" placeholder="du@beispiel.de" required />
                                </div>
                                <button type="submit" className="btn btn-premium w-100 py-3 rounded-pill mt-2 shadow-lg">Notify Me <i className="fa-solid fa-arrow-right ms-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    );
}
