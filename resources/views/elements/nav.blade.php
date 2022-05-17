<header id="#top">

    <nav class="main-navigation navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="http://localhost:8000" style="display: flex;align-items: center;justify-content: center;">
                <img width="195" height="48" style="width: 3rem;height: 3rem;padding: 0;" src="{{ asset('images/lipyum/icon.png') }}" alt="Lipyum">
                <div style="color: #fff;font-weight: 600;margin-left: 0.5rem;">Lipyum</div>
            </a>
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
