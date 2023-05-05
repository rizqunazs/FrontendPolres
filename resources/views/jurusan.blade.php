@extends('layouts.guest-app')

@section('content')
  <br><br>
  <main id="main">

    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">
        <div class="row">

          

            <div class="content">
              <h3><strong>FAKULTAS DAN JURUSAN</strong></h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
            </div>

            <div class="accordion-list">
              <ul>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>FAKULTAS ILMU SOSIAL DAN POLITIK</span> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Ilmu Administrasi Negara</a>
                    </p>
                    <p>
                      <a href="">Komunikasi</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>FAKULTAS EKONOMI</span> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Akuntansi</a>
                    </p>
                    <p>
                      <a href="">Manajemen</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>FAKULTAS HUKUM</span> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Hukum</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-4" class="collapsed"><span>FAKULTAS BAHASA DAN SASTRA</span> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-4" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Bahasa Inggris</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-5" class="collapsed"><span>FAKULTAS TEKNOLOGI INDUSTRI<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-5" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Teknik Mesin</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-6S" class="collapsed"><span>FAKULTAS ELEKTRO DAN INFORMATIKA<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-6" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Teknik Elektro</a>
                    </p>
                    <p>
                      <a href="">Teknik Informatika</a>
                    </p>
                    <p>
                      <a href="">Sistem Komputer</a>
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1" class="collapsed"><span>FAKULTAS SIPIL DAN PERENCANAAN<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-7" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      <a href="">Teknik Sipil</a>
                    </p>
                    <p>
                      <a href="">Arsitektur</a>
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          

        <!--  <div class="col-lg-6 align-items-stretch order-1 order-lg-2 img" data-aos="zoom-in" data-aos-delay="150">
            <img src="/assets/img/alur.jpg" class="img-thumbnail rounded mx-auto">
          </div> -->
        </div>

      </div>
    </section><!-- End Why Us Section -->


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



