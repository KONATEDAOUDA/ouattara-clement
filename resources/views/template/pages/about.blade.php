@extends('base')

@section('body')
<main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="{{ route('home') }}">Accueil</a></li>
                    <li class="current">À propos</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section style="padding-top: 1px" id="about" class="about section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/img/profile-img.jpg') }}" style="width: 70%;" class="img-fluid" alt="Portrait de OUATTARA Clément">
                </div>
                <div class="col-lg-8 content">
                    <h2>PCA OUATTARA CLÉMENT</h2>
                    <p class="fst-italic py-3">
                        PCA OUATTARA Clément, un visionnaire autodidacte, s'est forgé une réputation inégalée en tant
                        que leader charismatique et innovant dans le domaine de la santé communautaire en Côte d'Ivoire.
                        Sa passion pour l'amélioration des soins de santé de proximité l'a conduit à établir
                        la Confédération Nationale des Établissements de Santé Communautaire (CNA-ESCOM),
                        une organisation vouée à la transformation et à l'optimisation des structures sanitaires locales.
                        À travers ses initiatives audacieuses et son dévouement sans faille,
                        il s'est affirmé comme une figure incontournable dans la structuration
                        et le pilotage efficace des établissements de santé communautaire.
                        Son approche unique, alliant humanité, modernité et accessibilité,
                        assure que chaque individu, indépendamment de son statut social ou économique,
                        ait accès à des soins de qualité. En promouvant l'innovation technologique et en collaborant
                        avec divers partenaires locaux et internationaux, PCA OUATTARA Clément continue de
                        révolutionner le paysage sanitaire ivoirien, garantissant ainsi un avenir plus sain et
                        plus équitable pour tous les citoyens.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /About Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">
        <div class="container">
            <div class="row">
                <!-- Colonne Gauche -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Résumé</h3>
                    <div class="resume-item pb-0">
                        <h4>OUATTARA Clément</h4>
                        <p>
                            <em>
                                Manager autodidacte, OUATTARA Clément est un pionnier de la santé communautaire en Côte d’Ivoire.
                                 Il s’est illustré par sa capacité à fédérer des établissements sanitaires autour d’une vision commune
                                 : rendre les soins accessibles, durables et de qualité.
                                Doté d’un sens aigu de l’organisation, il assure la coordination stratégique,
                                 humaine et administrative de l’ensemble du réseau CNA-ESCOM.
                            </em>
                        </p>
                        <ul>
                            <li>Abidjan, Côte d’Ivoire</li>
                            <li>(+225) 07 58 13 61 88</li>
                            <li>socialmedia@cna-escom.ci</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Formation & Certifications</h3>
                    <div class="resume-item">
                        <h4>Management des organisations de santé</h4>
                        <h5>2008 - 2010</h5>
                        <p><em>Institut National de Santé Publique (INSP), Côte d’Ivoire</em></p>
                        <p>Spécialisation dans la gestion des structures sanitaires communautaires et le pilotage stratégique des projets de santé publique.</p>
                    </div>
                </div>

                <!-- Colonne Droite -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="resume-title">Expérience Professionnelle</h3>
                    <div class="resume-item">
                        <h4>Fondateur & Président du Conseil d’Administration</h4>
                        <h5>Depuis 2017</h5>
                        <p><em>Confédération Nationale des Établissements de Santé Communautaire (CNA-ESCOM)</em></p>
                        <ul>
                            <li>Mise en réseau de plus de 40 établissements de santé communautaire à travers la Côte d’Ivoire.</li>
                            <li>Développement de stratégies pour l’amélioration de la qualité des soins et la formation continue des personnels de santé.</li>
                            <li>Promotion de l’innovation technologique en milieu sanitaire : digitalisation des dossiers, téléconsultation, systèmes d’alerte SMS, etc.</li>
                            <li>Représentation institutionnelle auprès des partenaires publics et internationaux.</li>
                        </ul>
                    </div>

                    <div class="resume-item">
                        <h4>Consultant & Formateur en Santé Communautaire</h4>
                        <h5>2012 - 2016</h5>
                        <p><em>Organisations nationales et ONG partenaires</em></p>
                        <ul>
                            <li>Formation de cadres sanitaires sur les questions de gouvernance et de participation communautaire.</li>
                            <li>Élaboration de guides et politiques internes pour les centres de santé urbains et ruraux.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /Resume Section -->
</main>
@endsection
