<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <title>ISPR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description optimisée -->
    <meta name="description" content="L’Institut Supérieur Roosevelt (ISPR) est une école supérieure de formation professionnelle en Côte d’Ivoire. Nous offrons des programmes de qualité dans divers domaines tels que la gestion, l’informatique, la finance, et bien plus encore, avec une pédagogie axée sur la pratique et l’innovation.">

    <meta name="keywords" content="ISPR, Institut Supérieur Roosevelt, École Supérieure, Formation, Côte d'Ivoire, Université, Éducation, Informatique, Gestion, Études Supérieures, BTS, Licence, Master">

    <!-- Favicon -->
    <link href="{{ asset('ispr_logo.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&amp;family=Rubik:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Animation Style -->
    <style>
        @keyframes marquee {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>


<body>



    <!-- Topbar Start -->
    <div class="container-fluid px-4 d-none d-lg-block" style="background-color: #002147;">
        <div class="row gx-0">
            <div class="col-lg-9 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white" style="height: 45px;">
                    <small class="me-4">
                        <i class="fa fa-map-marker-alt me-2"></i>
                        Abobo Akékoï, Abidjan - Côte d'Ivoire
                    </small>
                    <small class="me-4">
                        <i class="fa fa-phone-alt me-2"></i>
                        <a href="https://wa.me/22508192382" target="_blank" rel="noopener noreferrer"
                            class="text-decoration-none text-light">
                            +225 08 19 23 82
                        </a>
                        &nbsp;/&nbsp; 05 56 56 59 75
                    </small>

                    <small>
                        <i class="fa fa-envelope me-2"></i>
                        institut.ispr@gmail.com
                    </small>
                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-end">
                <div class="overflow-hidden" style="height: 45px; position: relative; background-color: transparent;">
                    <div class="scrolling-text text-white fw-bold"
                        style="
            white-space: nowrap;
            display: inline-block;
            position: absolute;
            will-change: transform;
            animation: marquee 15s linear infinite;
            font-size: 1rem;
        ">
                        ▶ Ouverture de l’Institut Roosevelt à Daloa - Une nouvelle page d’excellence s’ouvre pour la
                        région !
                    </div>
                </div>
            </div>



        </div>
    </div>


    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ route('home') }}" class="navbar-brand p-0">
                <h1 class="m-0"><img class='logouts' src="{{ asset('ispr_logo.png') }}" style="height:70px;"
                        alt="Image"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>



                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Formation</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{route('finance.banque')}}" class="dropdown-item">Finance et
                                Banque</a>
                            <a href="{{route('finance.comptabilite')}}"
                                class="dropdown-item">Finance Comptabilité</a>
                            <a href="{{route('audit.controle.gestion')}}" class="dropdown-item">Audit et
                                Contrôle de Gestion</a>
                            <a href="{{route('science.economique')}}" class="dropdown-item">Sciences
                                Economiques et de Gestion</a>
                            <a href="{{route('genie.logiciel')}}" class="dropdown-item">Génie
                                logiciel</a>
                            <a href="{{route('rit')}}"
                                class="dropdown-item">Réséau Informatique et Télécommunications</a>
                            <a href="{{route('science.juridique')}}"
                                class="dropdown-item">Sciences Juridiques Administratives et Politiques</a>
                        </div>
                    </div>
                    <a href="{{ route('auth.login') }}" class="nav-item nav-link">Espace membres</a>
                    <a href="{{ route('presentation') }}" class="nav-item nav-link">A propos</a>
                    <a href="{{ route('auth.login') }}" class="nav-item nav-link">Actualités</a>
                </div>
                <a href="{{ route('contact') }}" class="btn btn-primary py-2 px-4 ms-3">Contactez-nous</a>
            </div>
        </nav>

        @yield('content')

    </div>



    <!-- Footer -->
    <div class="container-fluid text-light mt-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #002147;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white">Institut ROOSEVELT</h1>
                        </a>
                        <p class="mt-3 mb-4">
                            L’Institut Supérieur Polytechnique ROOSEVELT (ISPR) est situé à Abobo Akékoï et vous
                            accueille dans un environnement propice à l’excellence.
                        </p>
                        <form action="#">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3"
                                    placeholder="Votre email">
                                <button class="btn btn-dark">Souscrire</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-8 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-white mb-0">Adresses</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-white me-2"></i>
                                <p class="mb-0">Abobo Akékoï, Abidjan – Côte d’Ivoire</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-white me-2"></i>
                                <p class="mb-0">institut.ispr@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-white me-2"></i>
                                <p class="mb-0">+225 08 19 23 82 / 56 56 59 75</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-outline-light btn-square me-2" href="#"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-square me-2" href="#"><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-square me-2" href="#"><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-white mb-0">Liens rapides</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-white mb-2" href="{{ route('home') }}"><i
                                        class="bi bi-arrow-right text-white me-2"></i>Accueil</a>
                                <a class="text-white mb-2" href="{{ route('presentation') }}"><i
                                        class="bi bi-arrow-right text-white me-2"></i>À propos</a>
                                <a class="text-white mb-2" href="#"><i
                                        class="bi bi-arrow-right text-white me-2"></i>Actualités</a>
                                <a class="text-white mb-2" href="{{ route('auth.login') }}"><i
                                        class="bi bi-arrow-right text-white me-2"></i>Espace membres</a>
                                <a class="text-white" href="{{ route('contact') }}"><i
                                        class="bi bi-arrow-right text-white me-2"></i>Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="container-fluid text-white py-3" style="background-color: #001931;">
        <div class="container text-center">
            <p class="mb-0">
                &copy; <a class="text-white border-bottom" href="#">Institut ROOSEVELT</a> - Tous droits
                réservés.
                Développé par <a class="text-white border-bottom fw-bold" href="https://kgsinformatique.net"
                    target="_blank">KGS Informatique</a>
            </p>
        </div>
    </div>

    <!-- Footer End -->

    <script src="{{ asset('jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap.bundle.min.js') }}"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('main.js') }}"></script>
    <script src="{{ asset('jquery-1.11.1.min.js') }}"></script>
    <!-- Back to Top -->
    <a href="#"
        class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top d-flex align-items-center justify-content-center shadow">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrow-up"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M8 12a.5.5 0 0 0 .5-.5V4.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4-.007-.007a.498.498 0 0 0-.7.007l-4 4a.5.5 0 0 0 .708.708L7.5 4.707V11.5A.5.5 0 0 0 8 12z" />
        </svg>
    </a>

    <script>
        $('.testimonial_owlCarousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
            autoplay: false,
            smartSpeed: 3000,
            autoplayTimeout: 4000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

    <script>
        $(document).ready(function() {
            //FANCYBOX
            //https://github.com/fancyapps/fancyBox
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
    </script>
    <!-- JavaScript Libraries -->


</body>

</html>
