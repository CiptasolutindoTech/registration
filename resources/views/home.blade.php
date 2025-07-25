<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Sekata Entrepreneur Consulting</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  {{-- <link href="{{ asset('') }}iLanding-1.0.0/assets/img/favicon.png" rel="icon"> --}}
  <link href="{{ asset('') }}image/logo.png" rel="icon">
  {{-- <link href="{{ asset('') }}iLanding-1.0.0/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('') }}iLanding-1.0.0/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('') }}iLanding-1.0.0/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('') }}iLanding-1.0.0/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{ asset('') }}iLanding-1.0.0/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ asset('') }}iLanding-1.0.0/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('') }}iLanding-1.0.0/assets/css/main.css" rel="stylesheet">
    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  {{-- corousel --}}
  <link rel="stylesheet" href="{{ asset('') }}css/owl.carousel.min.css">

  <!-- CSS Styling -->
<style>
  /* General Carousel Styling */
  .carousel-inner {
    min-height: 300px;
  }

  .carousel-item {
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .carousel-caption {
    position: relative;
    padding: 2rem 1rem;
  }

  /* Batasi lebar carousel caption agar tidak terlalu lebar di desktop */
  @media (min-width: 992px) {
    .carousel-caption {
      max-width: 1140px;
      margin: 0 auto;
    }

    .carousel-caption .col-md-7 {
      padding-left: 2rem;
    }
  }

  /* Responsive layout untuk mobile */
  @media (max-width: 767px) {
    .carousel-item .row {
      flex-direction: column-reverse;
    }

    .carousel-caption img {
      margin-bottom: 1rem;
    }

    .zon_text h3 {
      font-size: 1.5rem;
    }
  }

  /* Tombol panah kustom */
  .carousel-control-prev,
  .carousel-control-next {
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    display: flex !important;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
  }

  .carousel-control-prev {
    left: -40px;
  }

  .carousel-control-next {
    right: -40px;
  }

  @media (max-width: 768px) {
    .carousel-control-prev {
      left: 10px !important;
    }

    .carousel-control-next {
      right: 10px !important;
    }
  }

  /* Typography */
  .zon_text h3 {
    font-size: 2rem;
    color: #333;
  }

  .zon_text p {
    font-size: 1rem;
    color: #555;
  }
</style>


  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        {{-- <!-- <img src="{{ asset('') }}iLanding-1.0.0/assets/img/logo.png" alt=""> --> --}}
        <h1 class="sitename">Sekata</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#services">Gallery</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="/regristration">Daftar</a>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
              <div class="company-badge mb-4">
                <i class="bi bi-gear-fill me-2"></i>
                Working for your success
              </div>

              <h1 class="mb-4">
                  <span class="accent-text">Sekata</span>
                  <br>
                 Entrepreneur Consulting
              </h1>

              <p class="mb-4 mb-md-5">
                Bertumbuh, Berbuah, Berbagi
              </p>

              <div class="hero-buttons">
                <a href="/regristration" class="btn btn-primary me-0 me-sm-2 mx-1">Daftar</a>
                {{-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn btn-link mt-2 mt-sm-0 glightbox">
                  <i class="bi bi-play-circle me-1"></i>
                  Play Video
                </a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
              <img src="{{ asset('') }}image/logo.png" alt="Hero Image" class="img-fluid">

              {{-- <div class="customers-badge">
                <div class="customer-avatars">
                  <img src="{{ asset('') }}iLanding-1.0.0/assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                  <img src="{{ asset('') }}iLanding-1.0.0/assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                  <img src="{{ asset('') }}iLanding-1.0.0/assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                  <img src="{{ asset('') }}iLanding-1.0.0/assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                  <img src="{{ asset('') }}iLanding-1.0.0/assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                  <span class="avatar more">12+</span>
                </div>
                <p class="mb-0 mt-2">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div> --}}
            </div>
          </div>
        </div>

        <div class="row stats-row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="500">
        <div class="col-lg-4 col-md-6">
            <div class="stat-item text-center">
            <div class="stat-icon mb-2">
                <i class="bi bi-award"></i>
            </div>
            <div class="stat-content">
                <h4>BNSP Certification</h4>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="stat-item text-center">
            <div class="stat-icon mb-2">
                <i class="bi bi-sunrise"></i>
            </div>
            <div class="stat-content">
                <h4>Training Center</h4>
            </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="stat-item text-center">
            <div class="stat-icon mb-2">
                <i class="bi bi-shield-check"></i>
            </div>
            <div class="stat-content">
                <h4>Coaching & Pendampingan</h4>
            </div>
            </div>
        </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center justify-content-between">

          <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
            <span class="about-meta">Tentang Sekata</span>
            <h2 class="about-title">Fokus Pengembangan Sumber Daya Manusia.</h2>
            <p class="about-description">Sekata Entrepreneur Consulting adalah Lembaga Pelatihan, Sertifikasi,
            Konsultasi dan Pendampingan yang Berfokus Pada Pengembangan Sumber
            Daya Manusia, UMKM dan Administrasi Perkantoran.</p>

            <div class="row feature-list-wrapper">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check-circle-fill"></i> Pelatihan/Training</li>
                  <li><i class="bi bi-check-circle-fill"></i> Pendampingan usaha dan coaching</li>
                  <li><i class="bi bi-check-circle-fill"></i> Sertifikasi kompetensi</li>
                </ul>
              </div>
            </div>

            <div class="info-wrapper">
              <div class="row gy-4">
                <div class="col-lg-7">
                  <div class="contact-info d-flex align-items-center gap-2">
                    <i class="bi bi-telephone-fill"></i>
                    <div>
                      <p class="contact-label">Call us anytime</p>
                      <p class="contact-number">+62877-7110-7292</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
            <div class="image-wrapper">
              <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                <img src="{{ asset('') }}iLanding-1.0.0/assets/img/about-5.webp" alt="Business Meeting" class="img-fluid main-image rounded-4">
                <img src="{{ asset('') }}iLanding-1.0.0/assets/img/about-2.webp" alt="Team Discussion" class="img-fluid small-image rounded-4">
              </div>
              {{-- <div class="experience-badge floating">
                <h3>15+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div> --}}
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section py-5 bg-light">
    <div class="container section-title text-center mb-4" data-aos="fade-up">
        <h2>Features</h2>
        <p>Berikut adalah layanan unggulan yang kami tawarkan.</p>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-12">
            <div id="carouselFeaturesSekata" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselFeaturesSekata" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselFeaturesSekata" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselFeaturesSekata" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                <div class="carousel-caption d-block text-start">
                    <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="zon_text">
                        <h3 class="fw-bold mb-3">TRAINING CENTER</h3>
                        <p>
                            Melayani pelatihan-pelatihan untuk mandiri/perorangan, instansi dan perusahaan dalam bentuk in house training maupun workshop/seminar dengan materi TOT untuk instruktur KKNI level 3-6, MSDM, Kewirausahaan, IT dan Administrasi perkantoran.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-7 text-center">
                        <img src="{{ asset('') }}image/marketing.png" class="img-fluid rounded" alt="Training Center">
                    </div>
                    </div>
                </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                <div class="carousel-caption d-block text-start">
                    <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="zon_text">
                        <h3 class="fw-bold mb-3">BNSP CERTIFICATION</h3>
                        <p>
                            Melayani sertifikasi kompetensi BNSP sebagai muara dari pelatihan-pelatihan yang diselenggarakan baik untuk perorangan/mandiri, instansi maupun perusahaan.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-7 text-center">
                        <img src="{{ asset('') }}image/folder_.png" class="img-fluid rounded" alt="BNSP Sertifikasi">
                    </div>
                    </div>
                </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item">
                <div class="carousel-caption d-block text-start">
                    <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="zon_text">
                        <h3 class="fw-bold mb-3">COACHING</h3>
                        <p>
                            Melayani pendampingan untuk wirausahawan dan UMKM yang baru memulai usaha maupun yang akan meningkatkan dan mengembangkan usahanya, juga coaching untuk perusahaan secara manajemen.
                        </p>
                        </div>
                    </div>
                    <div class="col-md-7 text-center">
                        <img src="{{ asset('') }}image/kerja.png" class="img-fluid rounded" alt="Coaching">
                    </div>
                    </div>
                </div>
                </div>

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFeaturesSekata" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselFeaturesSekata" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>

            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Call To Action Section -->
    <section id="call-to-action
    " class="call-to-action section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row content justify-content-center align-items-center position-relative">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="display-4 mb-4">Tertarik? Segera Hubungi Kami Ada Penawaran Menarik</h2>
            <a href="#contact" class="btn btn-cta">Hubungi Sekarang</a>
          </div>

          <!-- Abstract Background Elements -->
          <div class="shape shape-1">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z" transform="translate(100 100)"></path>
            </svg>
          </div>

          <div class="shape shape-2">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z" transform="translate(100 100)"></path>
            </svg>
          </div>

          <!-- Dot Pattern Groups -->
          <div class="dots dots-1">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <pattern id="dot-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              </pattern>
              <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
            </svg>
          </div>

          <div class="dots dots-2">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
              <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
              </pattern>
              <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
            </svg>
          </div>

          <div class="shape shape-3">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z" transform="translate(100 100)"></path>
            </svg>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Clients Section -->
    {{-- <section id="clients" class="clients section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{ asset('') }}iLanding-1.0.0/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Clients Section --> --}}

    <!-- Testimonials Section -->
    {{-- <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row g-5">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <img src="{{ asset('') }}iLanding-1.0.0/assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <img src="{{ asset('') }}iLanding-1.0.0/assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <img src="{{ asset('') }}iLanding-1.0.0/assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <img src="{{ asset('') }}iLanding-1.0.0/assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- End testimonial item -->

        </div>

      </div>

    </section><!-- /Testimonials Section --> --}}

    <!-- Services Section -->
    <section id="services" class="features section py-5">
    <div class="container section-title text-center mb-4" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Berikut adalah gallery kami.</p>
    </div>

    <div class="container position-relative">
        <div id="featuresCarousel" class="carousel slide carousel-fade position-relative" data-bs-ride="carousel" data-bs-interval="5000">

        <!-- Dots Indicators -->
        <div class="carousel-indicators">
            @foreach ($galleries as $index => $gallery)
            <button type="button" data-bs-target="#featuresCarousel" data-bs-slide-to="{{ $index }}"
            class="{{ $index === 0 ? 'active' : '' }}"
            aria-current="{{ $index === 0 ? 'true' : 'false' }}"
            aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        <!-- Carousel Items -->
        <div class="carousel-inner">
            @foreach ($galleries as $index => $gallery)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
            <div class="row align-items-center gx-5 gy-4 px-3">
                <!-- Text -->
                <div class="col-lg-6 order-2 order-lg-1">
                <div class="text-start">
                    <h3 class="fw-bold mb-3">{{ $gallery->title }}</h3>
                    <p class="fst-italic text-muted">{!! nl2br(e($gallery->description)) !!}</p>
                </div>
                </div>

                <!-- Image -->
                <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('image/' . $gallery->image) }}"
                    alt="{{ $gallery->title }}"
                    class="img-fluid rounded shadow"
                    style="max-height: 420px; object-fit: contain;">
                </div>
            </div>
            </div>
            @endforeach
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev custom-carousel-btn" type="button" data-bs-target="#featuresCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next custom-carousel-btn" type="button" data-bs-target="#featuresCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        </div>
    </div>
    </section>

    <div class="container-fluid">
        <div class="row justify-content-center">
        @foreach ($posters as $gallery)
        <div class="col-md-4 mb-4">
            <div class="service_box text_align_center">
            <div class="ser_img">
                <figure>
                <img src="{{ asset('image/' . $gallery->image) }}" alt="{{ $gallery->title }}" class="img-fluid" />
                </figure>
            </div>
            <h5 class="mt-3">{{ $gallery->title }}</h5>
            <a class="read_more btn btn-primary mt-2" href="{{ url('regristration') }}">Daftarkan Sekarang</a>
            </div>
        </div>
        @endforeach
        </div>
    </div>

    </section>
    <!-- /Services Section -->

    <!-- Faq Section -->
    {{-- <section class="faq-9 faq section light-background" id="faq">

      <div class="container">
        <div class="row">

          <div class="col-lg-5" data-aos="fade-up">
            <h2 class="faq-title">Have a question? Check out the FAQ</h2>
            <p class="faq-description">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum.</p>
            <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
              <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
              </svg>
            </div>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
            <div class="faq-container">

              <div class="faq-item faq-active">
                <h3>Non consectetur a erat nam at lectus urna duis?</h3>
                <div class="faq-content">
                  <p>Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Feugiat scelerisque varius morbi enim nunc faucibus?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Dolor sit amet consectetur adipiscing elit pellentesque?</h3>
                <div class="faq-content">
                  <p>Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h3>
                <div class="faq-content">
                  <p>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Tempus quam pellentesque nec nam aliquam sem et tortor?</h3>
                <div class="faq-content">
                  <p>Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3>Perspiciatis quod quo quos nulla quo illum ullam?</h3>
                <div class="faq-content">
                  <p>Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>
          </div>

        </div>
      </div>
    </section><!-- /Faq Section --> --}}

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
          <div class="col-lg-5">
            <div class="info-box" data-aos="fade-up" data-aos-delay="200">
              <h3>Contact Info</h3>
              <p>Terima kasih atas minat Anda pada SAKATA CONSULTING Untuk mempelajari lebih lanjut tentang layanan yang kami tawarkan, silakan isi formulir kosong, tim kami akan menghubungi Anda secara langsung. Kunjungi halaman hubungi kami kapan saja. Kami akan membantu Anda dengan senang hati.</p>

              <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="content">
                  <h4>Our Location</h4>
                  <p>Sanggir Lor, Paulan, Kec. Colomadu,</p>
                  <p>Kabupaten Karanganyar, Jawa Tengah 57176</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="content">
                  <h4>Phone Number</h4>
                  <p>+62877-7110-7292</p>
                </div>
              </div>

              <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box">
                  <i class="bi bi-envelope"></i>
                </div>
                <div class="content">
                  <h4>Email Address</h4>
                  <p>sekataconsulting7292@gmail.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
              <h3>Get In Touch</h3>

              <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                  <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>

                  <div class="col-md-6 ">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>

                  <div class="col-12">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                  </div>

                  <div class="col-12">
                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                  </div>

                  <div class="col-12 text-center">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>

                    <button type="submit" class="btn">Send Message</button>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="/" class="logo d-flex align-items-center">
            <span class="sitename">Sekata</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Sanggir Lor, Paulan, Kec. Colomadu,</p>
            <p>Kabupaten Karanganyar, Jawa Tengah 57176</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62877-7110-7292</span></p>
            <p><strong>Email:</strong> <span>sekataconsulting7292@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="#"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100094426865230&mibextid=ZbWKwL"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/sekata_consulting"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Page</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>About us</h4>
          <ul>
            <li><a href="#">About</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Services</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Contact</h4>
          <ul>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Sekata</strong> <span>Consulting</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('') }}iLanding-1.0.0/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('') }}iLanding-1.0.0/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ asset('') }}iLanding-1.0.0/assets/vendor/aos/aos.js"></script>
  <script src="{{ asset('') }}iLanding-1.0.0/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ asset('') }}iLanding-1.0.0/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('') }}iLanding-1.0.0/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ asset('') }}js/owl.carousel.min.js"></script>

  <!-- Main JS File -->
  <script src="{{ asset('') }}iLanding-1.0.0/assets/js/main.js"></script>

</body>

</html>
