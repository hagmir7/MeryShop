
<header>


    <div class="header-main navbar navbar-expand-lg bg-white navbar-light sticky-top p-10 px-4 px-lg-5 border-bottom">

      <div class="container">
        {{-- Logo --}}
        <a href="/" class="header-logo">
          <img src="/assets2/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
        </a>

        {{-- Search --}}
        <div class="header-search-container">
            <form action="{{ route('product.list') }}" method="GET">
                <input type="search" name="search" class="search-field" placeholder="Entrez le nom de votre produit...">
                <button class="search-btn">
                  <ion-icon name="search-outline" class="color-primary"></ion-icon>
                </button>
            </form>
        </div>

        {{-- lang and curency --}}
        <div class="header-top-actions">

          <select name="currency">

            <option value="usd">USD &dollar;</option>
            <option value="eur">EUR &euro;</option>

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>



    <div class="header-top bg-white navbar-light sticky-top p-0 px-4 px-lg-5 ">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="https://www.facebook.com/meryshop" class="social-link" target="_blank">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.twitter.com/meryshop" class="social-link" target="_blank">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/meryshop" class="social-link" target="_blank">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.linkedin.com/meryshop" class="social-link" target="_blank">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>
        <nav class="desktop-navigation-menu ">

          <div class="container">

            <ul class="desktop-menu-category-list">

              <li class="menu-category">
                <a href="/" class="menu-title nav-item nav-link active">Accueil</a>
              </li>
              <li class="menu-category">
                <a href="/product/list" class="menu-title nav-item nav-link active">Produit</a>
              </li>

              <li class="menu-category">
                <a href="/category/list" class="menu-title">Catégories</a>

                <ul class="dropdown-list" style="width:auto;">

                 @foreach ($categories as $category)
                 <li class="dropdown-item">
                  <a href="{{ route('category', $category->id ) }}">{{ $category->name }}</a>
                </li>
                 @endforeach
                </ul>

              <li class="menu-category">
                <a href="/contact" class="menu-title nav-item nav-link active">Contactez-nous</a>
              </li>
              </li>

            </ul>

  
          </div>
        </nav>


        @auth
        <div class="header-user-actions">
          <a href="{{ route('user.update', auth()->user()->id ) }}" class="action-btn fs-4">
            <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
          </a>
          {{-- <button class="action-btn fs-4">
            <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
            <span class="count">0</span>
          </button> --}}
          <a href="{{ route('cart.list') }}" class="action-btn fs-4">
            <ion-icon name="bag-handle-outline" role="img" class="md hydrated" aria-label="bag handle outline"></ion-icon>
            <span class="count" id="cart-items">{{ auth()->user()->cart->items->count()}}</span>
          </a>
        </div>
        @else
        <div class="header-user-actions">
          <div class="dropdown action-btn fs-4">
            <button class="" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <ion-icon name="person-outline" role="img" class="md hydrated" aria-label="person outline"></ion-icon>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('login')}}">Se connecter</a></li>
              <li><a class="dropdown-item" href="{{ route('register') }}">Inscription</a></li>
            </ul>
          </div>
          {{-- <button class="action-btn fs-4">
            <ion-icon name="heart-outline" role="img" class="md hydrated" aria-label="heart outline"></ion-icon>
            <span class="count">0</span>
          </button> --}}
          <a href="{{ route('login') }}" class="action-btn fs-4">
            <ion-icon name="bag-handle-outline" role="img" class="md hydrated" aria-label="bag handle outline"></ion-icon>
            {{-- <span class="count">0</span> --}}
          </a>
        </div>
        @endauth



      </div>
    </div>
  </header>