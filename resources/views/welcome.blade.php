<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EasyTeacher-46</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Add this line to include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">ET 46</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#">Dashboard</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="getstarted scrollto" href="{{ route('register') }}">Register</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Teacher Administration</h1>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('login') }}" class="btn-get-started scrollto">Login</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('frontend/assets/img/hero-img.png') }}" class="img-fluid animated"
                        alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">



                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container aos-init aos-animate" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Aplikasi</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Apa itu aplikasi E.T.46, adalah kependekan dari kalimat Easy Teacher 46 merupakan aplikasi
                            web atau perangkat lunak untuk memudahkan guru dalam mengelolah administrasi guru dari
                            program semester, program tahunan, kriteria ketuntasan tujuan pembelajaran, serta penilaian
                            seperti nilai ulangan harian, nilai asesmen tengah dan akhir semester serta banyak lagi,
                            dengan begitu insha allah akan lebih baik lagi sehingga dapat menghasilkan peserta didik
                            yang berkualitas, prestasi serta karakter yang baik.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Adapun Fitur-fitur yang dimiliki, sebagai berikut :
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i>Administrasi Guru yang sederhana</li>
                            <li><i class="ri-check-double-line"></i>Bisa diakses dimana saja</li>
                            <li><i class="ri-check-double-line"></i>Availabilty, selalu tersedia kapan dan dimanapun
                                berada</li>
                        </ul>
                        <ul>
                            <li><i class="ri-check-double-line"></i>Paperless, hanya jika memang diperlukan untuk
                                dicetak</li>
                            <li><i class="ri-check-double-line"></i></li>
                            <li><i class="ri-check-double-line"></i>Portofolio hasil karya peserta didik kompentensi RPL
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>| Team RPL | SMKN 46 |</span></strong>All Rights Reserved
            </div>
            <div class="credits">
                Leader Project : <a href="https://kusnadi.setiabudipamulang.info/"> Kusnadi</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
