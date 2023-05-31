
<footer>

    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Catégories populaires</h2>
          </li>
          @foreach ($categories as $category)
          <li class="footer-nav-item">
            <a href="{{ route('category', $category->id ) }}" class="footer-nav-link">{{ $category->name }}</a>
          </li>
          @endforeach
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Liens importants</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="/" class="footer-nav-link">Accueil</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{ route('product.list') }}" class="footer-nav-link">Nouveaux produits</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{ route('category.list') }}" class="footer-nav-link">Catégories</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="{{ route('contact.create') }}" class="footer-nav-link">Contactez-nous</a>
          </li>
        
          @auth
          <li class="footer-nav-item">
            <a href="{{ route('logout') }}" class="footer-nav-link">Deconnexion</a>
          </li>
          @else 
          <li class="footer-nav-item">
            <a href="{{ route('login') }}" class="footer-nav-link">Connexion</a>
          </li>

          <li class="footer-nav-item">
            <a href="{{ route('register') }}" class="footer-nav-link">Inscrire</a>
          </li>
          @endauth

        
        </ul>




        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline" role="img" class="md hydrated" aria-label="location outline"></ion-icon>
            </div>

            <address class="content">
              419 State Esaada
              Fes, Fes Mekanas,Maroce
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline" role="img" class="md hydrated" aria-label="call outline"></ion-icon>
            </div>

            <a href="tel:+212936-8058" class="footer-nav-link">(+212) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline" role="img" class="md hydrated" aria-label="mail outline"></ion-icon>
            </div>

            <a href="mailto:meyrShop@freesad.com" class="footer-nav-link">meyrShop@freesad.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Suivez-nous</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook" role="img" class="md hydrated" aria-label="logo facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter" role="img" class="md hydrated" aria-label="logo twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin" role="img" class="md hydrated" aria-label="logo linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram" role="img" class="md hydrated" aria-label="logo instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <p class="copyright">
          Copyright © <a href="/">MeryShop</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>

