@extends('base')

@section('body')
<div class="page-wrapper"></div>
<!--About Two Start-->
<section class="about-two" style="padding-top: 120px">
    <div class="about-two__shape-3 float-bob-x"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="about-two__left">
                    <div class="about-two__img-box">
                        <div class="about-two__img">
                            <img style="width: 400px; height: auto" src="{{ asset('assets/images/pca/OUATTARA_CLEMENT_use.jpg')}}" alt="OUATTARA CLÉMENT">
                        </div>
                        <div class="about-two__img-2">
                            <img style="height: 400px" src="{{ asset('assets/images/pca/Image_wassakara_use.jpeg')}}" alt="">
                        </div>
                        <div class="about-two__shape-1"></div>
                        <div class="about-two__shape-2 img-bounce">
                            <img src="{{ asset('assets/images/shapes/about-two-shape-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
            <div class="about-two__right">
                <div class="section-title text-left">
                    <h2 class="section-title__title">
                        OUATTARA Clément
                    </h2>
                </div>
                <p class="about-two__text-1">
                    Président du conseil d'administration de la
                    Confédération Nationale des Associations des Établissements Sanitaires à base Communautaire de Côte d'Ivoire (CNAESCOM-CI)
                </p>
                <p class="about-two__text-2">
                    Un expert en Santé communautaire, un entrepreneur social,
                    un responsable d'association et une personnalité politique,
                    PCA OUATTARA CLÉMENT est un visionnaire autodidacte qui
                    a consacré sa vie au service de la communauté nationale
                    depuis plus de 30 ans.
                </p>
                <div class="about-two__progress">
                    <div class="about-two__progress-single">
                        <h4 class="about-two__progress-title">40 établissements de santé</h4>
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="90%">
                                <div class="count-text">Communautaires</div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="about-two__points list-unstyled">
                    <li>
                        <div class="about-two__points-title-box">
                            <div class="icon">
                                <span class="fa fa-arrow-right"></span>
                            </div>
                            <div class="title">
                                <h3>Expert en santé communautaire</h3>
                            </div>
                        </div>
                        <p class="about-two__points-text">
                            Expert en santé communautaire, PCA OUATTARA CLÉMENT
                            soutient les établissements sanitaires communautaires en
                            Côte d'Ivoire.
                        </p>
                    </li>

                    <li>
                        <div class="about-two__points-title-box">
                            <div class="icon">
                                <span class="fa fa-arrow-right"></span>
                            </div>
                            <div class="title">
                                <h3>Responsable d'association</h3>
                            </div>
                        </div>
                        <p class="about-two__points-text">
                            Responsable de la CNAESCOM-CI, PCA OUATTARA CLÉMENT soutient les
                            établissements sanitaires communautaires en Côte
                            d'Ivoire.
                        </p>
                    </li>
                </ul>
                <ul class="about-two__points list-unstyled">
                    <li>
                        <div class="about-two__points-title-box">
                            <div class="icon">
                                <span class="fa fa-arrow-right"></span>
                            </div>
                            <div class="title">
                                <h3>Entrepreneur social</h3>
                            </div>
                        </div>
                        <p class="about-two__points-text">
                            Entrepreneur social, PCA OUATTARA CLÉMENT crée des
                            emplois et assure l'accès à des soins de santé de
                            qualité pour des millions de personnes en Côte
                            d'Ivoire.
                        </p>
                    </li>
                    <li>
                        <div class="about-two__points-title-box">
                            <div class="icon">
                                <span class="fa fa-arrow-right"></span>
                            </div>
                            <div class="title">
                                <h3>Personnalité politique</h3>
                            </div>
                        </div>
                        <p class="about-two__points-text">
                            Personnalité politique engagée, PCA OUATTARA CLÉMENT
                            dédie sa vie au service de la communauté nationale
                            en Côte d'Ivoire.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--About Two End-->

<!--Counter One Start-->
<section class="counter-one">
    <div class="counter-one__bg" style="background-image: url(assets/images/pca/Image_wassakara-Cover.jpeg);">
    </div>
    <div class="container">
        <div class="counter-one__inner">
            <ul class="counter-one__list list-unstyled">
                <li>
                    <div class="counter-one__count">
                        <h3 style="padding-right: 5x" class="odometer" data-count="31">00</h3>
                        <span class="">ans</span>
                    </div>
                    <p class="counter-one__text">
                        Leadership au service
                        <br> communautaire
                    </p>
                </li>
                <li>
                    <div class="counter-one__count">
                        <h3 class="odometer" data-count="4.7">00</h3>
                        <span class="">M</span>
                    </div>
                    <p class="counter-one__text">
                        Actes médicaux
                        <br> par an
                    </p>
                </li>
                <li>
                    <div class="counter-one__count">
                        <h3 class="odometer" data-count="124">00</h3>
                        <span class="">mille</span>
                    </div>
                    <p class="counter-one__text">
                        Naissances accompagnées
                        <br> annuellement
                    </p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--Counter One End-->

<!--Event Two Start-->
<section class="event-two" id="events">
    <div class="event-two__img">
        <img src="assets/images/pca/Image_wassakara-Cover.jpeg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="event-two__left">
                    <div class="event-two__left-inner">
                        <div class="section-title__icon">
                            <span class="fa fa-star"></span>
                        </div>
                        <span class="section-title__tagline">PCA OUATTARA CLÉMENT</span>
                        <div class="section-title text-left">
                            <h2 class="section-title__title">
                               DISTINCTIONS & PRIX
                            </h2>
                        </div>
                        <p class="event-two__text-1">
                            Président de la Confédération Nationale des Associations
                            des Établissements Sanitaires à base Communautaire de Côte d'Ivoire (CNAESCOM-CI)
                            a reçu plusieurs distinctions et prix nationaux et
                            internationaux pour son engagement dans la promotion
                            de la santé communautaire en Côte d'Ivoire.
                        </p>
                        <p class="event-two__text-2">
                            Les distinctions et prix reçus par PCA OUATTARA CLÉMENT
                            sont un gage de son engagement dans la promotion de la santé communautaire
                            en Côte d'Ivoire.
                        </p>
                         <ul class="event-two__points list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p><a href="{{ route('blog', ['category' =>  $posts_prix[0]->category->id]) }}">Voir tous les prix</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-tick"></span>
                                </div>
                                <div class="text">
                                    <p><a href="{{ route('blog', ['category' =>  $posts_distinction[0]->category->id]) }}">Voir toutes les distinctions</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="event-two__right">
                    <div class="event-two__carousel thm-owl__carousel owl-theme owl-carousel" data-owl-options='{
                        "items": 1,
                        "margin": 30,
                        "smartSpeed": 700,
                        "loop":true,
                        "autoplay": 6000,
                        "nav":false,
                        "dots":true,
                        "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                        "responsive":{
                            "0":{
                                "items":1
                            },
                            "768":{
                                "items":1
                            },
                            "992":{
                                "items": 1
                            },
                            "1200":{
                                "items": 1
                            }
                        }
                        }'
                    >
                    <!--Event Two Single Start-->
                    @for($i = 0; $i < max(count($posts_prix), count($posts_distinction)); $i++)
                        <div class="item">
                            <ul class="event-two__list list-unstyled">
                                <li>
                                    @if(isset($posts_prix[$i]))
                                    <div class="event-two__img-box">
                                        <div class="event-two__img-one">
                                            <img src="{{ asset('storage/' . $posts_prix[$i]->image) }}" alt="{{ $posts_prix[$i]->title }}" style="width: 500px; height: 230px; object-fit: cover;">
                                        </div>
                                        <div class="event-two__tag">
                                            <p>{{ $posts_prix[$i]->category->name ?? 'Prix' }}</p>
                                        </div>
                                        <div class="event-two__content p-3" style="background-color: rgba(0,0,0,0.5);">
                                            <ul class="event-two__meta list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ $posts_prix[$i]->created_at->format('d F Y') }}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-map-marker"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p>{{ $posts_prix[$i]->location ?? 'Abidjan, Côte d\'Ivoire' }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="event-two__title" style="color: #fff;">
                                                <a href="{{ route('posts.show', $posts_prix[$i]) }}">
                                                    {{ Str::limit(strip_tags($posts_prix[$i]->title), 30) }}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                                <li>
                                    @if(isset($posts_distinction[$i]))
                                    <div class="event-two__img-box">
                                        <div class="event-two__img-one">
                                            <img src="{{ asset('storage/' . $posts_distinction[$i]->image) }}" alt="{{ $posts_distinction[$i]->title }}" style="width: 500px; height: 230px; object-fit: cover;">
                                        </div>
                                        <div class="event-two__tag">
                                            <p>{{ $posts_distinction[$i]->category->name ?? 'Distinction' }}</p>
                                        </div>
                                        <div class="event-two__content p-3" style="background-color: rgba(0,0,0,0.5);">
                                            <ul class="event-two__meta list-unstyled">
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-clock"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="color: #fff;">{{ $posts_distinction[$i]->created_at->format('d F Y') }}</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="icon">
                                                        <span class="fa fa-map-marker"></span>
                                                    </div>
                                                    <div class="text">
                                                        <p style="color: #fff;">{{ $posts_distinction[$i]->location ?? 'Abidjan, Côte d\'Ivoire' }}</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <h3 class="event-two__title" style="color: #fff;">
                                                <a href="{{ route('posts.show', $posts_distinction[$i]) }}">
                                                    {{ Str::limit(strip_tags($posts_distinction[$i]->title), 30) }}
                                                </a>
                                            </h3>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    @endfor
                    <!--Event Two Single End-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Event Two End-->

 <!--Department Two Start-->
<section class="department-two pt-5" id="departments">
    <div class="department-two__bg-one"
        style="background-image: url(assets/images/backgrounds/department-two-bg-1.png);"></div>
    <div class="department-two__bg-two"
        style="background-image: url(assets/images/backgrounds/department-two-bg-2.png);"></div>
    <div class="container">
        <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">MES DISTINCTIONS</span>
            <br>
            <strong>
                Découvrez mes distinctions à travers une sélection de titres marquants.
            </strong>
        </div>
        <div class="row">
            <!--Department Two Single Start-->
            @foreach ($posts_distinction as $post)
                <div class="col-xl-4 col-lg-4">
                    <div class="department-two__single">
                        <div class="department-two__img-box">
                            <div class="department-two__img">
                                <img style="width: 400px; height: 200px; object-fit: cover;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                            </div>
                            <div class="department-two__content">
                                <div class="event-two__tag">
                                    <p>{{ $post->category->name ?? 'Distinction' }}</p>
                                </div>
                                <br>
                                <h3 style="padding-top: 10px" class="department-two__title"><a href="{{ route('posts.show', $post) }}">
                                    {{ Str::limit(strip_tags($post->title), 30) }}
                                </a></h3>
                                <div class="department-two__icon bg-white">
                                    <img src="{{ asset('assets/images/icon/news-sidebar-bottom-box-icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--Department Two Single End-->
            <div  class="text">
                <a style="float: right" class="btn btn-primary" href="{{ route('blog', ['category' =>  $post->category->id]) }}">Voir toutes les distinctions</a>
            </div>
        </div>
       <div class="section-title text-center">
            <div class="section-title__icon">
                <span class="fa fa-star"></span>
            </div>
            <span class="section-title__tagline">PRIX NATIONAUX ET INTERNATIONAUX</span>
            <br>
            <strong>
                Une brève description de mes prix et distinctions à l'échelle nationale et internationale.
            </strong>
        </div>
         <div class="row">
            <!--Department Two Single Start-->
            @foreach ($posts_prix as $post)
                <div class="col-xl-4 col-lg-4">
                    <div class="department-two__single">
                        <div class="department-two__img-box">
                            <div class="department-two__img">
                                <img style="width: 400px; height: 200px; object-fit: cover;" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                            </div>
                            <div class="department-two__content">
                                <div class="event-two__tag">
                                    <p>{{ $post->category->name ?? 'Prix' }}</p>
                                </div>
                                <br>
                                <h3 style="padding-top: 10px" class="department-two__title"><a href="{{ route('posts.show', $post) }}">
                                    {{ Str::limit(strip_tags($post->title), 30) }}
                                </a></h3>
                                <div class="department-two__icon bg-white">
                                    <img src="{{ asset('assets/images/icon/news-sidebar-bottom-box-icon.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--Department Two Single End-->
            <div  class="text">
                <a style="float: right" class="btn btn-primary" href="{{ route('blog', ['category' =>  $post->category->id]) }}">Voir tous les prix</a>
            </div>
        </div>
    </div>
     <div class="department-two__bottom-text">
        <p><strong>PCA OUATTARA CLÉMENT</strong>, Président de Confédération Nationale AESCOM-CI</p>
    </div>
</section>
<!--Department Two End-->
@endsection
