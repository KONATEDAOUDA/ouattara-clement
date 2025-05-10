<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <h1 class="sitename text-white oswald-322">PCA OUATTARA CLÉMENT</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a style="color: antiquewhite" href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}"> <strong class="oswald-322 text-xl">Accueil</strong></a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('blog') }}" class="{{ Route::is('blog*') ? 'active' : '' }}"><strong class="oswald-322 text-xl">Actualité</strong></a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('edito') }}" class="{{ Route::is('edito*') ? 'active' : '' }}"><strong class="oswald-322 text-xl">Éditos</strong></a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}"><strong class="oswald-322 text-xl">À propos</strong></a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}"><strong class="oswald-322 text-xl">Contact</strong></a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- Login space -->
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    @if (auth()->check() && auth()->user()->role === 'manager_admin_role')
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        Dashboard
                    </a>
                    @endif
                @else

                @endauth
            </nav>
        @endif
      <!-- Login space -->
    </div>
</header>
