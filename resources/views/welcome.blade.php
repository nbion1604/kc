<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pakar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Logis/assets/img/malaria.png" rel="icon">
  <link href="Logis/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Logis/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Logis/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Logis/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Logis - v1.0.1
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Sistem Pakar</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/konsultasi" class="active">Tanya Pakar</a></li>
          <li><a href="/contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
		  	<ul class="dropdown-menu" aria-labelledby="dropdown02">
				@if (Auth::check())
				<li><a class="dropdown-item" href="/login">{{ Auth::user()->name }}</a></li>
				<li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				@endif
				@if (!Auth::check())
				<li><a class="dropdown-item" href="/login">Login</a></li>
				<li><a class="dropdown-item" href="/register">Daftar Akun</a></li>
				@endif
				@if (Auth::check()&& Auth::user()->level == 'admin')
				<li><a class="dropdown-item" href="/admin-home">Admin Panel</a></li>
				@endif					
			</ul>
          </li>
          @if (!Auth::check())
          <li><a class="get-a-quote" href="/login">Login</a></li>
          @endif
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">Diagnosis Penyakit Disebabkan Oleh Nyamuk</h2>
          <p data-aos="fade-up" data-aos-delay="100">Perhatian..!, Bagi pasien yang ingin melakukan konsultasi masalah keluhan yang dialami, terlebih dulu melakukan pengisian data yang telah diminta, isi data sesuai prosedur dan keterangan yang ada.</p>

          <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
            <input type="text" class="form-control" placeholder="ZIP code or CitY">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1320" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="1353" data-purecounter-duration="1" class="purecounter"></span>
                <p>Support</p>
              </div>
            </div><!-- End Stats Item -->

            <div class="col-lg-3 col-6">
              <div class="stats-item text-center w-100 h-100">
                <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
                <p>Workers</p>
              </div>
            </div><!-- End Stats Item -->

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-4 hero-img" data-aos="zoom-out">
          <img src="Logis/assets/img/nyamuk.webp" class="img-fluid mb-3 mb-lg-0" alt="">
        </div>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Pertanyaan Yang Sering Diajukan</span>
          <h2>Pertanyaan Yang Sering Diajukan</h2>

        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-10">

            <div class="accordion accordion-flush" id="faqlist">

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa Pengobatan Pada Malaria?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
				  	Jahe Salah satu perawatan umum dan terkenal untuk malaria adalah jahe. Jahe dapat dengan mudah mengakses ke sejumlah besar daerah tropis dan dijadikan sebagai ramuan kuat untuk memperkuat kekebalan dan membantu memulihkan proses dari terinfeksi. Kedua jahe dan bahan aktif sendiri bertindak sebagai agen anti-inflamasi dan anti-bakteri dalam tubuh yang memungkinkan untuk menjadi salah satu pengobatan rumah yang paling alami dan efektif untuk malaria. 
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa Yang Menyebabkan Malaria?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
				  Malaria di sebabkan oleh infeksi dari 5 protozoa yang berbeda; Plasmodium falciparum, Plasmodium vivax, Plasmodium knowlesi, Plasmodium malariae dan Plasmodium ovale. Selain mereka di kenal sebagai penyebab malaria, mereka punya karateristik yang unik.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa Obat Malaria Yang Terbaik Untuk Dikonsumsi?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
				  	Malawi memiliki daya tahan terhadap klorokuin, jadi yang direkomendasikan adalah doxycyline, mefloquine, atau ata-pro (malarone)
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <i class="bi bi-question-circle question-icon"></i>
                    Apa Perbedaan Antara Malaria Dan Demam Berdarah?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    <i class="bi bi-question-circle question-icon"></i>
                    Demam berdarah :  Demam berdarah dapat diperiksa secara menyeluruh melalui proses kimia. Dua tes yang dapat mendiagnosis demam berdarah adalah tes Antigen dan tes Antibodi.
					<br><br>Malaria : Malaria diperiksa dengan tes mikroskopis dari penampakan virus. Mengetahui penyebab chikungunya. Virus ini ditularkan melalui nyamuk dan baru-baru ini dinyatakkan sebagai sebuah ancaman kesehatan global yang berbahaya.
                  </div>
                </div>
              </div><!-- # Faq item-->

              <div class="accordion-item">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <i class="bi bi-question-circle question-icon"></i>
                    Bagaimana Proses Seseorang Terkena Penyakit Malaria ?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
				  	Malaria adalah penyakit yang di tularkan oleh nyamuk dari manusia dan hewan lainnya yang disebabkan oleh protozoa parasit (sekelonpok mikroganisme bersel tunggal) dalam tipe plasmodium malaria menyebabkan gejala yang biasanya termasuk demam, kelelahan, muntah dan salut kepala 
                  </div>
                </div>
              </div><!-- # Faq item-->

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Sistem Pakar</span>
          </a>
          <p>Malaria merupakan penyakit yang disebabkan oleh parasit Plasomodium. Penyakit ini ditularkan melalui gigitan nyamuk Anopheles betina yang terinfeksi parasit tersebut. </p>
          <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Malang <br>
            ,Jawa Timur<br>
            Indonesia <br><br>
            <strong>Phone:</strong> 0895366602581<br>
            <strong>Company:</strong> Serverkoding <br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Sistem Pakar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="Logis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Logis/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="Logis/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="Logis/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="Logis/assets/vendor/aos/aos.js"></script>
  <script src="Logis/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Logis/assets/js/main.js"></script>

</body>

</html>