@extends('layout.layout')

@section('content')

<!-- Mot du Directeur Général -->
<div class="container py-5 mt-6">
    <div class="row align-items-center g-5">
        <div class="col-md-5 text-center">
            <img src="https://images.unsplash.com/photo-1573497491208-6b1acb260507?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Directeur Général" class="img-fluid rounded-4 shadow" style="max-height: 400px;">
        </div>
        <div class="col-md-7">
            <div class="bg-light p-4 rounded-4 shadow">
                <h3 class="fw-bold mb-3 text-primary">Mot du Directeur Général</h3>
                <p class="text-muted" style="text-align: justify;">
                    L’Institut Supérieur Roosevelt est né d’un rêve : celui de bâtir une génération de jeunes diplômés africains capables de relever les défis économiques et technologiques de demain.
                    À travers nos filières BTS professionnalisantes, nous préparons nos étudiants à intégrer immédiatement le monde du travail, avec rigueur, compétence et esprit d’initiative.
                </p>
                <p class="text-muted" style="text-align: justify;">
                    Je vous souhaite la bienvenue dans un cadre d'excellence où chaque étudiant est suivi, écouté et valorisé. Ensemble, bâtissons une Afrique forte par la formation supérieure de qualité.
                </p>
                <div class="mt-4 text-end">
                    <strong class="text-dark">Dr. KOUADIO Yao</strong><br>
                    <span class="text-secondary">Directeur Général</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Objectifs & Vision -->
<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                <h4 class="text-primary fw-bold mb-3">🎯 Objectifs</h4>
                <p class="text-muted" style="text-align: justify;">
                    Former des techniciens supérieurs compétents, prêts à répondre aux besoins des entreprises locales et internationales. Développer l’esprit entrepreneurial chez les jeunes diplômés africains.
                </p>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="p-4 border rounded-4 shadow-sm h-100 bg-white">
                <h4 class="text-success fw-bold mb-3">🌍 Vision</h4>
                <p class="text-muted" style="text-align: justify;">
                    Devenir un pôle d’excellence en Afrique francophone dans la formation BTS, reconnu pour son sérieux, ses résultats et son impact social.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Taux de réussite -->
<div class="container py-5 text-center bg-success text-white rounded-4 shadow">
    <h2 class="fw-bold">🎓 96,7% de réussite au BTS (2024)</h2>
    <p class="lead mt-2">Une réussite bâtie sur l’encadrement, la rigueur et l’innovation pédagogique.</p>
</div>

<!-- Galerie défilante d'étudiants africains BTS -->
<div class="container py-5">
    <h4 class="fw-bold mb-4 text-center text-primary">Nos étudiants en action</h4>
    <div class="d-flex overflow-auto gap-4 pb-2">
        @php
            $etudiants = [
                'https://images.unsplash.com/photo-1612361160500-87b5a6f1c337?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1598935885388-ea2671c3bca4?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1620121699450-1e4c3f6fb1b1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1631217865276-51236d7f8bd2?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1579425436509-3f9b14745f84?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
                'https://images.unsplash.com/photo-1580894732444-1ff49a1d1f55?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
            ];
        @endphp
        @foreach ($etudiants as $image)
            <div class="flex-shrink-0 text-center">
                <img src="{{ $image }}" class="rounded-4 shadow" width="160" height="160" alt="Étudiant" style="object-fit: cover;">
            </div>
        @endforeach
    </div>
</div>

@endsection
