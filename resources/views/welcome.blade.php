@extends('layout.layout')

@section('content')
   <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img class="w-100" src="img/affiche3.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="display-1 text-white mb-md-4 slide_img animated zoomIn">
                        Institut Roosevelt, l’Excellence au Cœur de votre avenir
                    </h1>
                    <a href="{{route('presentation')}}" class="btn btn-xs btn-primary px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                    <a href="{{route('contact')}}" style='background:blue !important;border:1px solid blue' class="btn btn-outline-light px-md-5 animated slideInRight">Contactez-nous</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img class="w-100" src="img/affich2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="display-1 text-white mb-md-4 slide_img animated zoomIn">
                        Formez-vous aux métiers d’avenir avec des experts passionnés
                    </h1>
                    <a href="{{route('presentation')}}" class="btn btn-xs btn-primary px-md-5 me-3 animated slideInLeft">En savoir plus</a>
                    <a href="{{route('contact')}}" style='background:blue !important;border:1px solid blue' class="btn btn-outline-light px-md-5 animated slideInRight">Contactez-nous</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Navigation -->
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


    <div class="container py-5">
        <div class="row g-4 justify-content-center">

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-200 border-0 shadow-lg rounded-4 text-center">
                    <div class="card-body p-4 d-flex flex-column justify-content-between">
                        <div>
                            <div class="mb-4">
                                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mx-auto"
                                    style="width: 80px; height: 80px;">
                                    <i class="fa fa-chalkboard fa-2x"></i>
                                </div>
                            </div>
                            <h4 class="fw-bold text-primary mb-3">Cours en ligne</h4>

                        </div>
                    </div>
                </div>
            </div>



            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-200 border-0 shadow-lg rounded-4 text-center p-4">
                    <div class="mb-4">
                        <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center mx-auto"
                            style="width: 80px; height: 80px;">
                            <i class="fa fa-user-tie fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold text-success mb-3">Formation de qualité</h4>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-200 border-0 shadow-lg rounded-4 text-center p-4">
                    <div class="mb-4">
                        <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center mx-auto"
                            style="width: 80px; height: 80px;">
                            <i class="fa fa-certificate fa-2x"></i>
                        </div>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Diplômes reconnus</h4>

                </div>
            </div>

        </div>
    </div>


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="mb-5">
                        <h1 class="fw-bold text-uppercase text-primary mb-4">Institut des Cadres</h1>
                        <p class="text-muted fs-5" style="text-align: justify;">
                            L’Institut Roosevelt est un établissement d’enseignement supérieur qui forme des cadres
                            compétents et responsables,
                            en mettant l’accent sur la rigueur académique, les valeurs humaines et la performance
                            professionnelle.
                        </p>
                    </div>

                    <!-- Bloc Témoignage Fondateur -->
                    <div class="card shadow-lg border-0 rounded-4 mb-4 bg-light">
                        <div class="card-body p-4">
                            <div class="d-flex flex-column">
                                <blockquote class="blockquote text-muted mb-3" style="font-style: italic;">
                                    “L’Institut Roosevelt s’engage à offrir une formation de qualité pour préparer des
                                    jeunes leaders responsables
                                    et innovants, prêts à contribuer au développement de notre société.”
                                </blockquote>
                                <div class="text-end">
                                    <h6 class="mb-0 text-dark">Mr BRICE TIE</h6>
                                    <small class="text-secondary">Fondateur – Institut Roosevelt</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bouton -->
                    <a href="{{route('presentation')}}" class="btn btn-primary py-2 px-4 blue-dark-link">
                        En savoir plus
                    </a>

                    <!-- Style du bouton -->
                    <style>
                        .blue-dark-link {
                            background-color: #003366 !important;
                            border-color: #003366 !important;
                            color: #fff !important;
                            transition: background-color 0.3s ease;
                        }

                        .blue-dark-link:hover {
                            background-color: #002244 !important;
                            border-color: #002244 !important;
                        }
                    </style>
                </div>


                <div class="col-lg-5 mt-lg-0 mt-5">
                    <img src="{{ asset('gride-formation.jpeg') }}" alt="" style='margin-top:3em;'
                        class="radius-image img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Formations Section Start -->
    <div class="container py-5" style="background-color: #003366;">
        <div class="text-center mb-5">
            <h5 class="fw-bold text-uppercase" style="color: #99ccff;">SYSTÈME LMD</h5>
            <h2 class="text-white fw-bold">Nos formations</h2>
            <p class="text-white-50">Explorez nos départements spécialisés et les filières disponibles pour bâtir votre
                avenir.</p>
        </div>

        <div class="row g-4">
            <!-- Département Droit -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 bg-light border-0 shadow rounded-4">
                    <div class="card-body">
                        <h4 class="text-primary fw-bold mb-3">Département de Droit</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('science.juridique')}}"
                                    class="text-dark text-decoration-none">
                                    Sciences Juridiques, Administratives et Politiques
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Département Finance -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-300 bg-light border-0 shadow rounded-4">
                    <div class="card-body">
                        <h4 class="text-primary fw-bold mb-3">Département Finance et Gestion</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('finance.banque')}}"
                                    class="text-dark text-decoration-none">Finance et Banque</a>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('finance.comptabilite')}}"
                                    class="text-dark text-decoration-none">Finance Comptabilité</a>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('audit.controle.gestion')}}"
                                    class="text-dark text-decoration-none">Audit et Contrôle de Gestion</a>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('science.economique')}}"
                                    class="text-dark text-decoration-none">Sciences Économiques et de Gestion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Département Informatique -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 bg-light border-0 shadow rounded-4">
                    <div class="card-body">
                        <h4 class="text-primary fw-bold mb-3">Département Informatique</h4>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('genie.logiciel')}}"
                                    class="text-dark text-decoration-none">Génie Logiciel</a>
                            </li>
                            <li class="mb-2 d-flex align-items-start">
                                <i class="fa fa-check-circle text-success me-2"></i>
                                <a href="{{route('rit')}}"
                                    class="text-dark text-decoration-none">Réseau Informatique et Télécommunications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Formations Section End -->

    <!-- Blog Start -->
  <div class="container-fluid py-5" style="background-color: #f8f9fa;">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="fw-bold text-uppercase text-primary">ACTUALITÉS</h5>
            <h2 class="fw-bold">Les dernières nouvelles de l’Institut Roosevelt</h2>
            <p class="text-muted">Restez informé de nos activités, avancées pédagogiques et initiatives pour nos étudiants.</p>
        </div>

        <div class="row g-4">
            <!-- Actu 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-200 shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/news/enseignement-superieur--ouverture-de-la-2eme-journee--portes-ouvertes--pour-promouvoir-les-initiatives-de-lauf-3-3.jpg" class="img-fluid" alt="Portes ouvertes Institut">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill">26 Fév. 2023</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-dark">Journée Portes Ouvertes : Une immersion inspirante</h5>
                        <p class="text-muted flex-grow-1">L’Institut Roosevelt a ouvert ses portes aux futurs apprenants pour leur faire découvrir les parcours disponibles et notre vision de l’éducation.</p>
                        <a href="#" class="btn btn-outline-primary mt-3 align-self-start">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Actu 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-200 shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/news/mesrs--recherche-de-solutions-aux-problemes-de-lenseignement-superieur--le-ministre-adama-diawara-aux-cotes-de-la-fesci-2-2.jpg" class="img-fluid" alt="Ministre et FESCI">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill">26 Fév. 2023</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-dark">Dialogue avec les autorités : Roosevelt à l’écoute</h5>
                        <p class="text-muted flex-grow-1">Notre direction participe activement aux réflexions nationales sur l’amélioration de l’enseignement supérieur en Côte d’Ivoire.</p>
                        <a href="#" class="btn btn-outline-primary mt-3 align-self-start">Lire plus</a>
                    </div>
                </div>
            </div>

            <!-- Actu 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-200 shadow-lg border-0 rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="assets/news/enseignement-superieur--le-gouvernement-prend-des-mesures-pour-lamelioration-des-conditions-de-travail-et-de-vie-des-etudiants-1-1.jpg" class="img-fluid" alt="Conditions étudiants">
                        <span class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill">18 Sept. 2022</span>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-dark">Conditions étudiantes : des progrès notables</h5>
                        <p class="text-muted flex-grow-1">L’amélioration du cadre de vie et des infrastructures pédagogiques est une priorité partagée par notre administration.</p>
                        <a href="#" class="btn btn-outline-primary mt-3 align-self-start">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
