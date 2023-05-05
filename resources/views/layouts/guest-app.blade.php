<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Penerimaaan Mahasiswa Baru UNSA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href={{ asset('assets/img/favicon.png') }} rel="icon">
  <link href={{ asset('assets/img/apple-touch-icon.png') }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link type="text/css" href={{ asset('assets/vendor/animate.css/animate.min.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">
  <link type="text/css" href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">


  <!-- Template Main CSS File -->
  <link type="text/css" href={{ asset('assets/css/style.css') }} rel="stylesheet">

</head>

<body>
   <!-- ======= Top Bar ======= -->
   <div id="topbar" class="fixed-top d-flex align-items-center topbar-inner-pages">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="cta d-none d-md-block">
        <a href=login class="scrollto">Login</a>
      </div>
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-inner-pages ">
    <div class="container d-flex align-items-center justify-content-between">
     
      <h1 class="logo"><a href="https://unsa.ac.id">UNSA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li class=""><a class="nav-link scrollto {{ (request()->is('demo/home')) ? 'active' : '' }}" href=home>Home</a></li>
          <li class="dropdown"><a class="{{ (request()->is('demo/jurusan','demo/berita')) ? 'active' : '' }}" href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class=""><a class="{{ (request()->is('demo/jurusan')) ? 'active' : '' }}" href=jurusan>Fakultas dan Jurusan</a></li>
              <li class=""><a class="{{ (request()->is('demo/berita')) ? 'active' : '' }}" href=berita>Berita</a></li>
            </ul>
          <li class=""><a class="nav-link scrollto {{ (request()->is('demo/info-daftar')) ? 'active' : '' }}" href="info-daftar">Pendaftaran</a></li>
          <li class="dropdown"><a href="#"><span>Link Terkait</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="https://unsa.ac.id/">Website Univeritas Surakarta</a></li>
            </ul>
         
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  @yield('content')

   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Informasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pendaftaran</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Website Universitas Surakarta</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Kontak Kami</h4>
            <p>
              Jl. Raya Palur Km.5 Surakarta
            <br>
            Karanganyar, <br>
            Indonesia 57772 <br><br>
              <strong>Phone:</strong> (0271) 825117<br>
              <strong>Email:</strong> info@unsa.ac.id<br>
            </p>

          </div>

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Pertanyaan</h3>
            <p>Pertanyaan atau Informasi lebih lanjut silahkan menghubungi Bagian Informasi Pendaftaran Mahasiswa Baru What's Apps (WA) Panitia PMB UNSA 082311571998</p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/humasunsaofficial/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/unsaofficial/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.youtube.com/channel/UCKFzwp_Rx1fVipIsiCzfUfA" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/"></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @yield('script')

</body>

</html>