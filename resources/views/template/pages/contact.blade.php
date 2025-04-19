@extends('base')

@section('body')

<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h1>Contact</h1>
            <p class="mb-0">
              Pour toute question, collaboration ou prise de contact officielle avec PCA OUATTARA Clément, veuillez utiliser les informations ci-dessous.
            </p>
          </div>
        </div>
      </div>
    </div>
    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ route('home') }}">Accueil</a></li>
          <li class="current">Contact</li>
        </ol>
      </div>
    </nav>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
            <i class="icon bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Adresse</h3>
              <p>Abidjan, Côte d'Ivoire</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
            <i class="icon bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Téléphone</h3>
              <p>(+225) 07 58 13 61 88</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
            <i class="icon bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email</h3>
              <p>socialmedia@cna-escom.ci</p>
            </div>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
            <i class="icon bi bi-share flex-shrink-0"></i>
            <div>
              <h3>Réseaux sociaux</h3>
              <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=61573917903934" target="_blank"><i class="bi bi-facebook"></i></a>
                <a href="https://www.linkedin.com/in/ouattara-clement-24447a355/" target="_blank"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.youtube.com/@CNA-ESCOM-CI" class="instagram"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>
        </div><!-- End Info Item -->

      </div>

    </div>

  </section><!-- /Contact Section -->

</main>
@endsection
