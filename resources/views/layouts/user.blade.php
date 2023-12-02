<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Pakar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Logis/assets/img/favicon.png" rel="icon">
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Konsultasi Keluhan</h2>
              
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

	@yield('page-content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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
            Katapang <br>
            Bandung, Jawa Barat<br>
            Indonesia <br><br>
            <strong>Phone:</strong> 087730426513<br>
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