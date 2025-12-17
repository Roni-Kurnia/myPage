<main class="bg-dark">
    <section class="hero-section py-5">
        <div class="container">
            <div class="row align-items-center min-vh-75 py-5">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="text-content" data-aos="fade-right">
                        <h1 class="display-4 fw-bold text-white mb-3">
                            Hi, Saya <span class="text-info">Roni</span>
                        </h1>
                        <h3 class="text-white-50 mb-4">Mahasiswa Informatika & Calon Web Developer</h3>
                        <blockquote class="lead text-white-50 mb-4 border-start border-info border-4 ps-3">
                            Saya senang membangun website yang fungsional, rapi, dan mudah digunakan, 
                            sambil terus belajar teknologi baru untuk meningkatkan skill saya.
                        </blockquote>
                        <div class="d-flex gap-3 flex-wrap">
                            <a href="<?= BASEURL; ?>/project" class="btn btn-info btn-lg px-4">
                                Lihat Project
                            </a>
                            <a href="<?= BASEURL; ?>/about" class="btn btn-outline-info btn-lg px-4">
                                Tentang Saya
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="text-center" data-aos="fade-left">
                        <div class="image-wrapper position-relative">
                            <img 
                                class="img-fluid rounded-3 shadow-lg" 
                                src="<?= BASEURL; ?>/asset/foto/r-bw-1.jpg" 
                                alt="Roni Kurnia" 
                                style="max-width: 400px; width: 100%; border: 3px solid #17a2b8;"
                            >
                            <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3" 
                                style="background: linear-gradient(135deg, rgba(23,162,184,0.1) 0%, rgba(23,162,184,0) 100%); 
                                        pointer-events: none;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5" style="background: linear-gradient(180deg, #1a1a1a 0%, #2a2a2a 100%);">
        <div class="container">
            <h2 class="text-center text-white mb-5">Skills & Tools</h2>
            <div class="row g-4">
                <div class="col-md-6 col-sm-6">
                    <div class="text-center p-4 rounded-3 h-100" style="background: rgba(255,255,255,0.05); transition: all 0.3s;">
                        <div class="fs-1 mb-3 text-info">💻</div>
                        <h5 class="text-white">Frontend</h5>
                        <p class="text-white-50 small">HTML, CSS, JavaScript, Bootstrap</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="text-center p-4 rounded-3 h-100" style="background: rgba(255,255,255,0.05); transition: all 0.3s;">
                        <div class="fs-1 mb-3 text-info">⚙️</div>
                        <h5 class="text-white">Backend</h5>
                        <p class="text-white-50 small text-left">PHP, MySQL, Laravel</p>
                    </div>
                </div>
                <!-- <div class="col-md-3 col-sm-6">
                    <div class="text-center p-4 rounded-3 h-100" style="background: rgba(255,255,255,0.05); transition: all 0.3s;">
                        <div class="fs-1 mb-3 text-info">🎨</div>
                        <h5 class="text-white">Design</h5>
                        <p class="text-white-50 small">UI/UX, Responsive Design</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="text-center p-4 rounded-3 h-100" style="background: rgba(255,255,255,0.05); transition: all 0.3s;">
                        <div class="fs-1 mb-3 text-info">🚀</div>
                        <h5 class="text-white">Tools</h5>
                        <p class="text-white-50 small">Git, VS Code, Figma</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <style>
        .min-vh-75 {
            min-height: 75vh;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
        }
        
        .text-content h1 {
            line-height: 1.2;
        }
        
        .btn {
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23,162,184,0.3);
        }
        
        .image-wrapper img {
            transition: transform 0.3s ease;
        }
        
        .image-wrapper:hover img {
            transform: scale(1.05);
        }
        
        @media (max-width: 768px) {
            .display-4 {
                font-size: 2rem;
            }
            
            h3 {
                font-size: 1.2rem;
            }
            
            .image-wrapper img {
                max-width: 300px;
            }
        }
    </style>
</main>