<?php
$pageTitle = "Contact Us";
include 'includes/header.php';
include 'includes/navigation.php';
?>

<!-- Contact Hero Section -->
<header class="bg-deep-space text-white text-center position-relative overflow-hidden contact-header">
    <!-- Animated Background Elements -->
    <div class="position-absolute top-0 start-0 w-100 h-100 opacity-10" style="background: radial-gradient(circle at 10% 20%, rgba(98, 70, 234, 0.4) 0%, rgba(0, 0, 0, 0) 50%); z-index: 1;"></div>
    <div class="position-absolute bottom-0 end-0 w-100 h-100 opacity-10" style="background: radial-gradient(circle at 90% 80%, rgba(236, 72, 153, 0.4) 0%, rgba(0, 0, 0, 0) 50%); z-index: 1;"></div>

    <div class="container position-relative" style="z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-8 animate__animated animate__fadeInDown">
                <span class="d-inline-block py-1 px-3 rounded-pill bg-white bg-opacity-10 text-white border border-white border-opacity-25 small text-uppercase mb-3 fw-bold ls-2">
                    Connect With Us
                </span>
                <h1 class="display-3 fw-bold mb-3 text-white">We'd <span class="text-gradient">Love</span> to Hear From You</h1>
                <p class="lead text-white-50 mx-auto" style="max-width: 600px;">
                    Whether you have a question about events, want to partner with us, or just want to say hello, we're here to help.
                </p>
            </div>
        </div>
    </div>
</header>

<!-- Contact Categories Section -->
<section class="py-6 bg-surface-variant position-relative">
    <div class="container">
        <div class="row g-4 justify-content-center">
            
            <!-- General Inquiries -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                <div class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4" style="border-radius: 20px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="icon-box mb-4 rounded-circle bg-soft-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-chat-dots text-primary fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">General Inquiries</h4>
                        <p class="text-muted small mb-4 flex-grow-1">
                            Have questions about our mission, events, or community guidelines? We're here to answer them.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank" class="btn btn-outline-primary rounded-pill px-4 w-100 fw-bold group-hover-btn">
                            Fill Form <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                    <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-muted fs-7">Response time: ~24 hours</small>
                    </div>
                </div>
            </div>

            <!-- Partnerships -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                <div class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4 bg-dark-premium text-white theme-gradient-border" style="border-radius: 20px;">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="icon-box mb-4 rounded-circle bg-white bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-briefcase text-gradient fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2 text-white">Partnerships</h4>
                        <p class="text-white-50 small mb-4 flex-grow-1">
                            Interested in sponsoring an event or collaborating on a workshop? Let's build something together.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank" class="btn btn-light rounded-pill px-4 w-100 fw-bold border-0 text-primary">
                            Partner With Us <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                     <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-white-50 fs-7">For organizations & brands</small>
                    </div>
                </div>
            </div>

            <!-- Chapter Support -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                <div class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4" style="border-radius: 20px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="icon-box mb-4 rounded-circle bg-soft-info d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-people text-info fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Chapter Support</h4>
                        <p class="text-muted small mb-4 flex-grow-1">
                            Need help joining a chapter or want to start a new one in your area? Get specialized support.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank" class="btn btn-outline-info rounded-pill px-4 w-100 fw-bold">
                            Get Support <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                     <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-muted fs-7">For current & new members</small>
                    </div>
                </div>
            </div>

            <!-- Media & Press -->
            <div class="col-md-6 col-lg-3 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                <div class="card border-0 shadow-lg h-100 hover-lift overflow-hidden text-center p-4" style="border-radius: 20px; background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(10px);">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="icon-box mb-4 rounded-circle bg-soft-danger d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="bi bi-newspaper text-danger fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-2">Media & Press</h4>
                        <p class="text-muted small mb-4 flex-grow-1">
                            For press inquiries, tough questions, interviews, or media kit requests.
                        </p>
                        <a href="https://docs.google.com/forms/" target="_blank" class="btn btn-outline-danger rounded-pill px-4 w-100 fw-bold">
                            Media Contact <i class="bi bi-arrow-right ms-2 transition-icon"></i>
                        </a>
                    </div>
                     <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                        <small class="text-muted fs-7">For journalists & bloggers</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Visual Section / "Some Images" -->
<section class="py-5 bg-white overflow-hidden">
    <div class="container">
         <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2 animate__animated animate__fadeInRight">
                <div class="position-relative">
                    <img src="assets/images/women-coding-community.png" alt="Community Interaction" class="img-fluid rounded-4 shadow-lg position-relative z-1">
                     <!-- Decorative elements behind image -->
                    <div class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle opacity-10" style="width: 200px; height: 200px; z-index: 0;"></div>
                    <div class="position-absolute bottom-0 end-0 translate-middle bg-secondary rounded-circle opacity-10" style="width: 150px; height: 150px; z-index: 0;"></div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 animate__animated animate__fadeInLeft">
                 <h2 class="display-5 fw-bold mb-4">Build Connections That Matter</h2>
                 <p class="lead text-muted mb-4">
                     Our community thrives on communication and collaboration. Whether online or offline, every conversation is an opportunity to learn and grow.
                 </p>
                 <div class="d-flex align-items-center gap-4">
                     <div class="d-flex align-items-center text-primary">
                         <i class="bi bi-geo-alt fs-3 me-2"></i>
                         <div>
                             <span class="d-block fw-bold text-dark">Mumbai, India</span>
                             <small class="text-muted">Headquarters</small>
                         </div>
                     </div>
                      <div class="d-flex align-items-center text-primary">
                         <i class="bi bi-envelope fs-3 me-2"></i>
                         <div>
                             <span class="d-block fw-bold text-dark">contact@mwc.org</span>
                             <small class="text-muted">Email Support</small>
                         </div>
                     </div>
                 </div>
            </div>
         </div>
    </div>
</section>

<!-- Additional "Fancy" Image Section as requested -->
<section class="py-5 bg-deep-space position-relative">
     <div class="container text-center text-white position-relative" style="z-index: 2;">
         <h3 class="mb-4 text-white">Follow Our Journey</h3>
         <div class="row g-3 justify-content-center">
              <!-- Using placeholders for grid if sliders aren't perfectly square, adapting to 4 cols -->
              <div class="col-6 col-md-3">
                  <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                      <img src="assets/images/sliders/slider1.webp" class="img-fluid" alt="Event Moment 1" style="object-fit: cover; height: 200px; width: 100%;">
                  </div>
              </div>
               <div class="col-6 col-md-3">
                  <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                      <img src="assets/images/sliders/slider2.webp" class="img-fluid" alt="Event Moment 2" style="object-fit: cover; height: 200px; width: 100%;">
                  </div>
              </div>
               <div class="col-6 col-md-3">
                  <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                      <img src="assets/images/sliders/slider3.webp" class="img-fluid" alt="Event Moment 3" style="object-fit: cover; height: 200px; width: 100%;">
                  </div>
              </div>
               <div class="col-6 col-md-3">
                  <div class="rounded-3 overflow-hidden shadow-sm hover-zoom text-center">
                      <img src="assets/images/sliders/slider4.webp" class="img-fluid" alt="Event Moment 4" style="object-fit: cover; height: 200px; width: 100%;">
                  </div>
              </div>
         </div>
         <div class="mt-4">
             <a href="https://instagram.com" target="_blank" class="btn btn-outline-light rounded-pill px-4">
                 <i class="bi bi-instagram me-2"></i> Follow @MumbaiWomenCoders
             </a>
         </div>
     </div>
</section>

<style>
/* Custom Styles for Contact Page items */
.contact-header {
    padding-top: 180px !important;
    padding-bottom: 80px !important;
}
@media (max-width: 991px) {
    .contact-header {
        padding-top: 140px !important;
        padding-bottom: 60px !important;
    }
}

.hover-lift {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-lift:hover {
    transform: translateY(-10px);
    box-shadow: 0 1rem 3rem rgba(0,0,0,.175) !important;
}
.bg-soft-primary { background-color: rgba(13, 110, 253, 0.1); }
.bg-soft-info { background-color: rgba(13, 202, 240, 0.1); }
.bg-soft-danger { background-color: rgba(220, 53, 69, 0.1); }
.fs-7 { font-size: 0.85rem; }

.theme-gradient-border {
    position: relative;
    z-index: 1;
}
.theme-gradient-border::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 20px; 
    padding: 2px; 
    background: linear-gradient(45deg, #6246ea, #ec4899); 
    -webkit-mask: 
       linear-gradient(#fff 0 0) content-box, 
       linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
            mask-composite: exclude; 
    z-index: -1;
}
.hover-zoom img {
    transition: transform 0.5s ease;
}
.hover-zoom:hover img {
    transform: scale(1.1);
}
.transition-icon {
    transition: transform 0.3s ease;
}
.group-hover-btn:hover .transition-icon {
    transform: translateX(5px);
}
</style>

<?php include 'includes/footer.php'; ?>
