@extends('base')

@section('body')
<main class="main">

     <!-- Page Title -->
     <div class="page-title" data-aos="fade">
        <nav style="margin: 70px;" class="breadcrumbs">
          <div class="container">
            <ol>
              <li><a href="{{route('home')}}">Accueil</a></li>
              <li class="current"> <a href="{{ route('blog') }}">Actualité</a> / Détails</li>
            </ol>
          </div>
        </nav>
      </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
                <h3 class="active">Les derniers titres</h3>
                @foreach ($posts_refer as $last_post)
                    <a class="{{ isset($post) && $post->id == $last_post->id ? 'active' : '' }}"
                    href="{{ route('posts.show', $last_post) }}">
                        {{ $last_post->title }}
                    </a>
                @endforeach
            </div>
          </div>

            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid services-img">
                @endif
                <h3> {{ $post->title }}</h3>
                <p>
                {{ $post->content }}
                </p>
            </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
