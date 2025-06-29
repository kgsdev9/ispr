@extends('layout.layout')

@section('content')
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col text-center">
                <h2 class="display-5 fw-bold">Contactez l’Institut Roosevelt</h2>
                <p class="text-muted">Nous sommes disponibles pour répondre à toutes vos préoccupations.</p>
            </div>
        </div>

        <div class="row g-5">
            <!-- Coordonnées + Carte -->
            <div class="col-md-6">
                <div class="card shadow rounded-4 border-0 mb-4">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">📍 Adresse</h5>
                        <p class="mb-2"><i class="bi bi-geo-alt-fill text-primary"></i> Abobo Akékoï, Abidjan - Côte
                            d'Ivoire</p>

                        <h5 class="card-title mt-4">📞 Téléphones</h5>
                        <p class="mb-2"><i class="bi bi-telephone-fill text-primary"></i> +225 08 19 23 82 / 56 56 59 75
                        </p>

                        <h5 class="card-title mt-4">📧 Email</h5>
                        <p><i class="bi bi-envelope-fill text-primary"></i> institut.ispr@gmail.com</p>
                    </div>
                </div>

                <div class="ratio ratio-4x3 shadow rounded-4">
                    <iframe src="https://www.google.com/maps?q=Abobo%20Akékoï,%20Abidjan,%20Côte%20d'Ivoire&output=embed"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Formulaire de contact -->
            <div class="col-md-6">
                <div class="card shadow rounded-4 border-0">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-4">📬 Laissez-nous un message</h5>
                        <form action="" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" name="nom" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="prenom" class="form-label">Prénom</label>
                                <input type="text" name="prenom" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="telephone" class="form-label">Téléphone</label>
                                <input type="text" name="telephone" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" name="adresse" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="ville" class="form-label">Ville</label>
                                <input type="text" name="ville" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea name="message" rows="4" class="form-control" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary rounded-pill">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
