@extends('layouts.guest-app')

@section('content')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active ">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Penerimaan Mahasiswa <span>Baru</span></h2>
          <h3 class="animate__animated animate__fadeInUp">UNIVERSITAS SURAKARTA</h3>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto"><strong>DAFTAR</strong></a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">DAFTAR</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
          <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">DAFTAR</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
<<<<<<< Updated upstream
    
    <br>
    <br>
    <br>
    <br>
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
    
=======

   
>>>>>>> Stashed changes

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
  
          <div class="row">
  
            <div class="col-lg-6 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
  
              <div class="content">
                <h3><strong>ALUR PENDAFTARAN </strong></h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                </p>
              </div>
  
              <div class="accordion-list">
                <ul>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>GELOMBANG 1</span> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                      </p>
                    </div>
                  </li>
  
                  <li>
                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>GELOMBANG 2</span><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                      <p>
                        Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                      </p>
                    </div>
                  </li>
  
                </ul>
              </div>
  
            </div>
  
            <div class="col-lg-6 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">
              <img src="{{ asset ('assets/img/alur.jpg') }}" class="img-thumbnail rounded mx-auto">
            </div>
          </div>
  
        </div>
      </section><!-- End Why Us Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Pendaftaran Mahasiswa Baru</h3>
            <p> Universitas Surakarta menerima Pendaftaran Mahasiswa Baru Tahun Akademik 2018/2019.
              Proses pendaftaran dilayani secara online maupun offline.
              Bagi pendaftar yang sudah melakukan pendaftaran secara online, untuk selanjutnya segera konfirmasi pendaftaran sekaligus mengumpulkan berkas pendaftaran ke :<br>
              Unit Informasi Universitas Surakarta Gedung Unit 2 Jl. Raya Palur Km 5 Surakarta<br>
              Hari Senin s/d Jumat Jam 09.00 -15.30 WIB<br>
              Contact person : 0857 0180 2017; 082311571998.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Daftar Sekarang</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

        <!-- ======= Icon Boxes Section ======= -->
        <section id="berita" class="berita">
          <div class="container">
    
            <div class="row">
              <div class="col-md-6 col-lg-4 d-flex  justify-content-center video-box align-items-stretch position-relative" data-aos="fade-up">
                <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                <div class="icon-box">
    
                  <h4 class="title"><a href="">JADWAL PEMBEKALAN DAN PKKMB MAHASISWA BARU T.A 2021/2022</a></h4>
                  <div class="row">
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                    </div>
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </div>
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-bookmark"></i> <a href="blog-single.html">Informasi</a></li>
                    </div>
                      
                  </div>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
    
                  <h4 class="title"><a href="">JADWAL PEMBEKALAN DAN PKKMB MAHASISWA BARU T.A 2021/2022</a></h4>
                  <div class="row">
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                    </div>
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </div>
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-bookmark"></i> <a href="blog-single.html">Informasi</a></li>
                    </div>
                      
                  </div>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div>
    
              <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                <div class="icon-box">
    
                  <h4 class="title"><a href="">JADWAL PEMBEKALAN DAN PKKMB MAHASISWA BARU T.A 2021/2022</a></h4>
                  <div class="row">
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                    </div>
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-calendar"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    </div>
                    <div class="col-md-4">
                      <li class="d-flex align-items-center"><i class="bi bi-bookmark"></i> <a href="blog-single.html">Informasi</a></li>
                    </div>
                      
                  </div>
                  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                </div>
              </div>
              
    
            </div>
    
          </div>
        </section><!-- End Icon Boxes Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

          <div class="col-lg-5">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Alamat:</h4>
                <p>Jl. Raya Palur No.5, Jurug, Ngringo, Kec. Jaten, Kabupaten Karanganyar, Jawa Tengah 57772</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@unsa.ac.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefon :</h4>
                <p>(0271) 825117</p>
              </div>

            </div>

          </div>

          <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
            <iframe width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
            src="https://maps.google.com/maps?&q=UNSA+Universitas+Surakarta&t=&z=12&ie=UTF8&iwloc=&output=embed">
            </iframe>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection

@section('script')

  <!-- Vendor JS Files -->
  <script type="text/javascript" src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>


  <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

@endsection