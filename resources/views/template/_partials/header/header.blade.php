<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">PCA</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Accueil</a>
          </li>
          <li>
            <a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">À propos</a>
          </li>
          <li>
            <a href="{{ route('blog') }}" class="{{ Route::is('blog*') ? 'active' : '' }}">Blog</a>
          </li>
          <li>
            <a href="{{ route('contact') }}" class="{{ Route::is('contact') ? 'active' : '' }}">Contact</a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>      
      <!-- Login space -->
            <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                            >
                                Connexion
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                    S'inscrire
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
            </header>
      <!-- Login space -->
    </div>
</header>
