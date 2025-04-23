<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('assets/img/logo.png') }}" alt="">
        <h1 class="sitename text-white">PCA OUATTARA CLÉMENT</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a style="color: antiquewhite" href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Accueil</a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">À propos</a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('blog') }}" class="{{ Route::is('blog*') ? 'active' : '' }}">Actualité</a>
          </li>
          <li>
            <a style="color: antiquewhite" href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a>
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
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                    >
                        Connexion
                    </a>
                @endauth
            </nav>
        @endif
      <!-- Login space -->
    </div>
</header>
