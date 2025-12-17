<main style="background: linear-gradient(180deg, #1a1a1a 0%, #2d2d2d 100%); min-height: 100vh;">
    
    <!-- Hero Section -->
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h1 class="display-4 fw-bold text-white mb-3">
                    Tentang <span class="text-info">Saya</span>
                </h1>
                <p class="lead text-white-50">
                    Kenali lebih dekat perjalanan, passion, dan visi saya dalam dunia web development.
                </p>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Profile Card -->
                <div class="col-lg-4">
                    <div class="card border-0 shadow-lg h-100" 
                        style="background: linear-gradient(135deg, #2a2a2a 0%, #3a3a3a 100%);">
                        <div class="card-body text-center p-4">
                            <div class="mb-4">
                                <img src="<?= BASEURL; ?>/asset/foto/r-bw-2.jpg" 
                                    class="rounded-circle img-fluid shadow" 
                                    alt="Roni Kurnia" 
                                    style="width: 200px; height: 200px; object-fit: cover; border: 4px solid #17a2b8;">
                            </div>
                            <h3 class="text-white mb-2">Roni Kurnia</h3>
                            <p class="text-info mb-4">Web Developer</p>
                            
                            <div class="d-flex justify-content-center gap-3 mb-4">
                                <a href="#" class="btn btn-outline-info btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-github"><img src="<?= BASEURL; ?>/asset/icon/github.png" width="33"></i>
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-linkedin"><img src="<?= BASEURL; ?>/asset/icon/linkedin.png" width="33"></i>
                                </a>
                                <a href="#" class="btn btn-outline-info btn-sm rounded-circle" style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-instagram"><img src="<?= BASEURL; ?>/asset/icon/instagram.png" width="33"></i>
                                </a>
                            </div>
                            
                            <div class="text-start">
                                <h6 class="text-white mb-3">Info Singkat</h6>
                                <ul class="list-unstyled text-white-50 small">
                                    <li class="mb-2">
                                        <i class="bi bi-geo-alt-fill text-info me-2"></i>
                                        Jakarta, Indonesia
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-mortarboard-fill text-info me-2"></i>
                                        Mahasiswa Informatika
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-laptop-fill text-info me-2"></i>
                                        Web Developer
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-clock-fill text-info me-2"></i>
                                        Available for Projects
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About Details -->
                <div class="col-lg-8">
                    <div class="card border-0 shadow-lg h-100" 
                        style="background: linear-gradient(135deg, #2a2a2a 0%, #3a3a3a 100%);">
                        <div class="card-body p-4">
                            <h4 class="text-white mb-4 border-start border-info border-4 ps-3">
                                Profil Saya
                            </h4>
                            <p class="text-white-50 mb-4 lh-lg">
                                Halo! Saya <strong class="text-white">Roni Kurnia</strong>, seorang mahasiswa Informatika 
                                yang memiliki passion dalam web development. Saya sangat antusias dalam membangun 
                                aplikasi web yang tidak hanya berfungsi dengan baik, tetapi juga memiliki tampilan 
                                yang menarik dan user-friendly.
                            </p>
                            <p class="text-white-50 mb-4 lh-lg">
                                Perjalanan saya dalam dunia programming dimulai dari ketertarikan terhadap teknologi 
                                dan bagaimana website dapat mempengaruhi kehidupan sehari-hari. Sejak saat itu, 
                                saya terus belajar dan mengasah kemampuan dalam berbagai teknologi web.
                            </p>

                            <h5 class="text-white mb-3 mt-5">Keahlian Teknis</h5>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <div class="p-3 rounded" style="background: rgba(23,162,184,0.1);">
                                        <h6 class="text-info mb-2">Frontend Development</h6>
                                        <div class="mb-2">
                                            <small class="text-white-50">HTML & CSS</small>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 9%"></div>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <small class="text-white-50">JavaScript</small>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 75%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <small class="text-white-50">Bootstrap</small>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 85%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3 rounded" style="background: rgba(23,162,184,0.1);">
                                        <h6 class="text-info mb-2">Backend Development</h6>
                                        <div class="mb-2">
                                            <small class="text-white-50">PHP</small>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 80%"></div>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <small class="text-white-50">Laravel</small>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 70%"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <small class="text-white-50">MySQL</small>
                                            <div class="progress" style="height: 5px;">
                                                <div class="progress-bar bg-info" style="width: 75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 class="text-white mb-3 mt-4">Fokus & Tujuan</h5>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="text-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05);">
                                        <div class="fs-2 mb-2">🎯</div>
                                        <h6 class="text-white mb-2">Goal Oriented</h6>
                                        <small class="text-white-50">Fokus menyelesaikan project dengan hasil terbaik</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05);">
                                        <div class="fs-2 mb-2">📚</div>
                                        <h6 class="text-white mb-2">Fast Learner</h6>
                                        <small class="text-white-50">Cepat beradaptasi dengan teknologi baru</small>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-3 rounded h-100" style="background: rgba(255,255,255,0.05);">
                                        <div class="fs-2 mb-2">🤝</div>
                                        <h6 class="text-white mb-2">Team Player</h6>
                                        <small class="text-white-50">Senang berkolaborasi dalam tim</small>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 text-center">
                                <a href="<?= BASEURL; ?>/project" class="btn btn-info btn-lg px-5">
                                    Lihat Portfolio Saya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .progress {
            background-color: rgba(255,255,255,0.1);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(23,162,184,0.3);
            transition: all 0.3s ease;
        }
    </style>
</main>