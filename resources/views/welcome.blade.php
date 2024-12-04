<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SURATKITA - Best letter management</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('zen/assets/img/lgo.png') }}" rel="icon">
    <link href="{{ asset('zen/assets/img/lgo.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('zen/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('zen/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('zen/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('zen/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('zen/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="{{ asset('zen/assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="zen/assets/img/lgo.png" alt="">
                <h1 class="sitename">uratkita</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    @if (Auth::check())
                    <li>
                        <a href="{{route('home')}}" class="text-black md:text-white hover:underline">Dashboard</a>
                    </li>
                    @else
                    <li>
                        <a href="{{route('login')}}" class="text-black md:text-white hover:underline">Login</a>
                    </li>
                    <li>
                        <a href="{{route('register')}}" class="text-black md:text-white hover:underline">Register</a>
                    </li>
                    @endif
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="hero-bg">
                <img src="zen/assets/img/hero-bg-light.webp" alt="">
            </div>
            <div class="container text-center">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 data-aos="fade-up">Welcome to <span>SURATKITA</span></h1>
                    <p data-aos="fade-up" data-aos-delay="100">Kelola surat jadi lebih mudah<br></p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                    <img src="{{ asset('zen/assets/img/hero.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-out" data-aos-delay="300" width="500px" height="500px">
                </div>
            </div>

        </section><!-- /Hero Section -->



        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p class="who-we-are">Solusi Cerdas untuk Pengelolaan Surat Anda</p>
                        <h3>Mengelola surat-surat yang ada di tangan Anda bisa menjadi tantangan yang berat</h3>
                        <p class="fst-italic">
                            Sistem kami dirancang untuk memudahkan Anda.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>Mengurangi Risiko Kehilangan</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Lampiran yang Terintegrasi</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Penyimpanan Aman</span></li>
                        </ul>
                        <a href="{{route('home')}}" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="zen/assets/img/about-company-1 copy.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="zen/assets/img/orang-2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="zen/assets/img/orang-3.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- /About Section -->

        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="zen/assets/img/clients/biji.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="zen/assets/img/clients/fren.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="zen/assets/img/clients/lentera.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="zen/assets/img/clients/pro.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="zen/assets/img/clients/sneak.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="zen/assets/img/clients/mari.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Fitur Kami</h2>
                <p>kami menyediakan fitur yang dapat memudahkan pengguna</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row g-5">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item item-cyan position-relative">
                            <i class="bi bi-clipboard-data icon"></i>
                            <div>
                                <h3>Pengelolaan Surat Masuk dan Keluar</h3>
                                <p>Mempermudah pencarian dan pengarsipan surat, serta memberikan gambaran jelas tentang surat yang sedang diproses.</p>

                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item item-indigo position-relative">
                            <i class="bi bi-search icon"></i>
                            <div>
                                <h3>Pencarian dan Filter Surat</h3>
                                <p>Menghemat waktu dalam menemukan surat tertentu di antara banyaknya surat yang tersimpan.</p>

                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item item-orange position-relative">
                            <i class="bi bi-sort-down icon"></i>
                            <div>
                                <h3>Kategorisasi Surat</h3>
                                <p>Membantu pengguna untuk mengorganisir surat dengan lebih baik dan menemukan surat berdasarkan kategori yang relevan.</p>

                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item item-teal position-relative">
                            <i class="bi bi-shield-check icon"></i>
                            <div>
                                <h3>Keamanan dan Backup Data</h3>
                                <p>Fitur keamanan untuk melindungi data pengguna, termasuk enkripsi dan backup otomatis.</p>

                            </div>
                        </div>
                    </div><!-- End Service Item -->


                </div>

            </div>

        </section><!-- /Services Section -->



        <!-- Pricing Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item faq-active">
                                <h3> Apa itu Surat Kita ?</h3>
                                <div class="faq-content">
                                    <p>Surat Kita adalah platform yang dirancang untuk membantu pengguna mengelola dan mendata surat dengan lebih efisien.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apa saja fitur yang ditawarkan?</h3>
                                <div class="faq-content">
                                    <p>Kami menawarkan pengelolaan surat masuk dan keluar, pencarian cepat, notifikasi untuk surat penting, serta penyimpanan aman untuk dokumen terkait.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3> Apakah saya perlu mendaftar untuk menggunakan layanan ini?</h3>
                                <div class="faq-content">
                                    <p>Ya, pengguna perlu mendaftar untuk mendapatkan akses penuh ke semua fitur yang tersedia.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Bagaimana cara mengunggah surat ke sistem?</h3>
                                <div class="faq-content">
                                    <p>Anda dapat mengunggah surat melalui tombol "Tambah" yang tersedia di dashboard, lalu ikuti petunjuk yang diberikan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah data surat saya aman?</h3>
                                <div class="faq-content">
                                    <p>Kami menerapkan langkah-langkah keamanan yang ketat untuk melindungi data Anda, termasuk enkripsi dan sistem backup.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>Apakah ada biaya untuk menggunakan Surat Kita?</h3>
                                <div class="faq-content">
                                    <p>Surat Kita sepenuhnya gratis untuk digunakan. Anda dapat mengakses semua fitur tanpa biaya.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->





    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Suratkita</span>
                    </a>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Pendataan Surat</a></li>
                        <li><a href="#">Pengelolaan Surat</a></li>
                        <li><a href="#">Penyimpanan Surat</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form>
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Suratkita</strong><span>All Rights Reserved</span></p>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('zen/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('zen/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('zen/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('zen/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('zen/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('zen/assets/js/main.js') }}"></script>


</body>

</html>