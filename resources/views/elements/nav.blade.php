<header id="#top">

    <nav class="main-navigation navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home-page') }}"><img width="195" height="48" style="width: 12.172rem;height: 3rem;" src="{{ asset('images/lipyum/lipyum-yatay.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a title="Anasayfa" class="nav-link {{ Route::is('home-page') ? 'active' : null }}" href="{{ route('home-page') }}">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a title="Hakkımızda" class="nav-link {{ Route::is('about') ? 'active' : null }}" href="{{ route('about') }}">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a title="Giriş Yap" class="nav-link" href="#!">Giriş Yap</a>
                    </li>
                    <li class="nav-item">
                        <a title="Üye Ol" class="nav-link" href="#!">Üye Ol</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
