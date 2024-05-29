<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dara Aceh APP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        {{-- <img src="assets/img/logo.png" alt=""> --}}
        <span>Dara Aceh</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Souvenir</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">Souvenir Khas Aceh</h1>
            {{-- <h1 data-aos="fade-up">Selamat Datang di Dara Aceh, Rasa Asli Aceh di Setiap Sentuhan</h1> --}}
            <h2 data-aos="fade-up" data-aos-delay="400" class="fw-bold">Selamat Datang di Dara Aceh, Rasa Asli Aceh di Setiap Sentuhan</h2> <br>
            <h4 data-aos="fade-up" data-aos-delay="400" class="fw-bold">Dive into the Heart of Aceh</h4> <br>
            <h4 data-aos="fade-up" data-aos-delay="400">Jelajahi Koleksi Unik Kami</h4>

          <h4 data-aos="fade-up" data-aos-delay="400">Di Dara Aceh, kami mengajak anda untuk menyelami kekayaan budaya Aceh melalui koleksi souvenir kami yang otentik. Setiap produk kami adalah cerita, warisan, dan kecintaan yang dijalin dalam kerajinan tangan yang memukau.</h4>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/hero-img.jpeg" class="img-fluid" alt="" width="80%">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">
            <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/about.jpeg" class="img-fluid" alt="">
              </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h3>About Aceh</h3>
              {{-- <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.</h2> --}}
              <p>
                Aceh, provinsi yang terletak di ujung barat pulau Sumatera. Memiliki kekayaan budaya yang tercermin dalam kerajinan tangan khasnya. Rencong, senjata tradisional Aceh menjadi simbol keberanian dan kebanggaan masyarakat. Songket Aceh, kan tenun mewah dengan motif-motif rumit, menggmbarkan keindahan seni dan keterampilan tangan tradisional. Selain itu, perhiasan Pinto, tas Aceh, dan kupiah meukeutop Aceh yang unik menunjukan kekayaan warisan budaya dan keindahan seni rupa Aceh. Dengan kerajinan tangan kahs ini, Aceh mempertahankan dan mempromosikan warisan budaya yang kaya dan beragam.
              </p>
            </div>
          </div>



        </div>
      </div>

    </section><!-- End About Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Souvenir</h2>
          <p>Check our latest product</p>
        </header>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
          @foreach ($data as $d)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="storage/{{ $d->attachment	}}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $d->name }}</h4>
                {{-- <p>App</p> --}}
                <div class="portfolio-links">
                  <a href="storage/{{ $d->attachment	}}" 
                    data-gallery="portfolioGallery" 
                    class="portfokio-lightbox" 
                    title="{{$d->content}}"
                    ><i class="bi bi-plus"></i></a>
                </div>
              </div>
            </div>
          </div>
              
          @endforeach

          

        </div>

      </div>

    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>123 Anywhere ST,<br>Banda ACeh, ST 123456, Indonesia</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>hello@daraaceh.com<br>help@daraaceh.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dara Aceh</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>