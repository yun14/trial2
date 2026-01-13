<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Trial - Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 5 (CDN) -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" /> --}}

    <!-- Font Awesome 6 (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="template/lib/animate/animate.min.css" />
    <link href="template/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="template/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="template/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="template/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <x-topbar />
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <x-navbar />
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    {{-- <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords"
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i
                                class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Modal Search End -->

    @yield('content')


    <!-- Footer Start -->
    {{-- <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-xl-9">
                    <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Address</h4>
                                                <p class="mb-0">123 Street New York.USA</p>
                                            </div>
                                        </div>

                                        <div class="footer-item">
                                            <a href="index.html" class="p-0">
                                                <h3 class="text-white"><i class="fab fa-slack me-3"></i> LifeSure</h3>
                                                <img src="img/logo.png" alt="Logo">
                                            </a>
                                            <p class="text-white mb-4">Dolor amet sit justo amet elitr clita ipsum elitr
                                                est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                            <div class="footer-btn d-flex">
                                                <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                        class="fab fa-facebook-f"></i></a>
                                                <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                        class="fab fa-twitter"></i></a>
                                                <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                        class="fab fa-instagram"></i></a>
                                                <a class="btn btn-md-square rounded-circle me-0" href="#"><i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Mail Us</h4>
                                                <p class="mb-0">info@example.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Telephone</h4>
                                                <p class="mb-0">(+012) 3456 7890</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-5">
                                <div class="footer-item">
                                    <a href="index.html" class="p-0">
                                        <h3 class="text-white"><i class="fab fa-slack me-3"></i> LifeSure</h3>
                                        <img src="img/logo.png" alt="Logo">
                                    </a>
                                    <p class="text-white mb-4">Dolor amet sit justo amet elitr clita ipsum elitr
                                        est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                                    <div class="footer-btn d-flex">
                                        <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                class="fab fa-twitter"></i></a>
                                        <a class="btn btn-md-square rounded-circle me-3" href="#"><i
                                                class="fab fa-instagram"></i></a>
                                        <a class="btn btn-md-square rounded-circle me-0" href="#"><i
                                                class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                        <div class="row g-0">
                            <div class="col-12">
                                <div class="row g-4">
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fas fa-map-marker-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Address</h4>
                                                <p class="mb-0">123 Street New York.USA</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fas fa-envelope fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Mail Us</h4>
                                                <p class="mb-0">info@example.com</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-xl-4">
                                        <div class="d-flex">
                                            <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                <i class="fa fa-phone-alt fa-2x"></i>
                                            </div>
                                            <div>
                                                <h4 class="text-white">Telephone</h4>
                                                <p class="mb-0">(+012) 3456 7890</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Footer End -->

    <!-- Footer Coba GPT -->

    <footer class="footer-modern text-light pt-5 pb-4">
        <div class="container">
            <div class="row">

                <!-- Kolom 1: Dashboard Command Center -->
                <div class="col-lg-6 mb-4">
                    <h5 class="fw-semibold mb-3 text-white text-center">Dashboard Command Center</h5>
                    <p>
                        Sistem terpadu yang menampilkan data dan informasi dari berbagai sumber dalam satu tampilan
                        terpusat untuk memantau,
                        mengelola, dan menganalisis kinerja pemerintah Kabupaten Blora sebagai upaya pengambilan
                        keputusan
                        yang cepat dan akurat.
                    </p>
                </div>



                <!-- Kolom 2: Portal Media -->
                <div class="col-lg-6 mb-4">
                    <h5 class="fw-semibold mb-3 text-white text-center">Portal Media</h5>

                    <div class="portal-wrapper">

                        <div class="portal-col">
                            <a href="https://www.facebook.com/pemkabblora" target="_blank" class="social-item">
                                <i class="fab fa-facebook-f"></i> facebook.com/pemkabblora
                            </a>
                            <a href="https://www.x.com/Pemkab_Blora" target="_blank" class="social-item">
                                <i class="fab fa-twitter"></i> x.com/Pemkab_Blora
                            </a>
                            <a href="https://www.instagram.com/pemkabblora" target="_blank" class="social-item">
                                <i class="fab fa-instagram"></i> instagram.com/pemkabblora
                            </a>
                        </div>
                        <div class="portal-col">
                            <a href="http://www.youtube.com/@dinaskominfoblora" target="_blank" class="social-item">
                                <i class="fab fa-youtube"></i> youtube.com/@dinaskominfoblora
                            </a>
                            <a href="https://www.blorakab.go.id" target="_blank" class="social-item">
                                <i class="fa fa-globe"></i> blorakab.go.id
                            </a>
                            <a href="https://databox.blorakab.go.id" target="_blank" class="social-item">
                                <i class="fas fa-database"></i> databox.blorakab.go.id
                            </a>
                        </div>
                    </div>
                </div>


        </div>
            <hr class="mt-4 border-light-subtle">
            <div class="text-center small mt-3">
                © 2025 Dashboard Command Center by Sekretariat Daerah Kabupaten Blora
                <a href="#" class="contact-item"><i class="fa fa-map-marker-alt"></i> Jalan Pemuda No. 12, Blora, Jawa
                    Tengah </a>
                <a href="#" class="contact-item"><i class="fa fa-envelope"></i> setda@blorakab.go.id </a>
                <a href="#" class="contact-item"><i class="fa fa-phone"></i> (0296) 531028 </a>
            </div>
        </div>
    </footer>


    <!-- Footer End -->

    <!-- Copyright Start -->
    {{-- <div class="container-fluid copyright py-4">

            <hr class="mt-4 border-light-subtle">
            <div class="text-center small mt-3">
                © 2025 Dashboard Command Center by Sekretariat Daerah Kabupaten Blora
                <a href="#" class="contact-item"><i class="fa fa-map-marker-alt"></i> Jalan Pemuda No. 12, Blora, Jawa
                    Tengah </a>
                <a href="#" class="contact-item"><i class="fa fa-envelope"></i> setda@blorakab.go.id </a>
                <a href="#" class="contact-item"><i class="fa fa-phone"></i> (0296) 531028 </a>
            </div>

    </div> --}}
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="template/lib/wow/wow.min.js"></script>
    <script src="template/lib/easing/easing.min.js"></script>
    <script src="template/lib/waypoints/waypoints.min.js"></script>
    <script src="template/lib/counterup/counterup.min.js"></script>
    <script src="template/lib/lightbox/js/lightbox.min.js"></script>
    <script src="template/lib/owlcarousel/owl.carousel.min.js"></script>


    <!-- Template Javascript -->
    <script src="template/js/main.js"></script>

    {{-- <script>
        $('.header-carousel').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: true,     // WAJIB: mengaktifkan dots
            nav: false      // mematikan next/prev
        });
    </script> --}}

</body>

</html>
