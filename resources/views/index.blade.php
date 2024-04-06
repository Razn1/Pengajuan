<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Pengajuan Judul Laporan</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/i.png') }}" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <style>
        .container {
            margin-top: 0;
        }

        #log {
            font-family: 'Fantasque Sans Mono', monospace;
            font-size: 40px;
            font-weight: 700;
            color: white;
            transition: color 0.3s ease-in-out;
        }

        .sticky #log img,
        .navbar-area #log img {
            content: url('{{ asset('assets/img/i.png') }}');
        }

        .hero-image {
            display: flex;
            justify-content: right;
        }

        .hero-image img {
            max-width: 120%;
        }

        .scroll-color-change {
            color: white;
        }

        .scroll-color-change.active {
            color: #0d0f8f;
        }

        /* Center align content within section */
        .hero-content {
            text-align: center;
        }

        .hero-content h1,
        .hero-content p,
        .hero-content .button {
            margin-left: auto;
            margin-right: auto;
        }

        .hero-content .button a {
            display: block;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->
    <!-- Start Header Area -->
    <header class="header navbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="nav-inner">
                        <!-- Start Navbar -->
                        <nav class="navbar navbar-expand-lg">
                            <a id="log" class="navbar-brand" href="index.html">
                                <img src="{{ asset('assets/img/i.png') }}" alt="Logo">
                                <label id="label-pengajuan" class="scroll-color-change">PENGAJUAN</label>
                            </a>
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            </div>
                            <div class="button add-list-button">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="/home" class="page-scroll active"
                                            aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/home" aria-label="Toggle navigation">Sign In</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- End Navbar -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Hero Area -->
    <section id="home" class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s">Temukan kemudahan dalam </h1>
                        <h1 class="wow fadeInLeft" data-wow-delay=".4s"> mengajukan judul laporan Anda dengan kami.</h1>
                        <p class="wow fadeInLeft" data-wow-delay=".6s">
                            Nikmati kemudahan dan keunggulan dalam proses Pengajuan Judul Laporan. Kami hadir untuk
                            mendukung setiap langkah kreatifitas dan penelitian Anda dengan sistem yang terintegrasi.</p>
                        {{-- <div class="button wow fadeInLeft" data-wow-delay=".8s">
                            <a href="javascript:void(0)" class="btn"><i class="lni lni-apple"></i> App Store</a>
                            <a href="javascript:void(0)" class="btn btn-alt"><i class="lni lni-play-store"></i>
                                Google
                                Play</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img src="{{ asset('assets/img/buku.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Scroll Top Button -->
    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- JS -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        // Add scroll event listener
        window.addEventListener('scroll', function() {
            var scrollPosition = window.scrollY;
            var label = document.getElementById('label-pengajuan');

            // Add or remove 'active' class based on scroll position
            if (scrollPosition > 50) {
                label.classList.add('active');
            } else {
                label.classList.remove('active');
            }
        });
    </script>
</body>

</html>
