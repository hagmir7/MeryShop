<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mery Shop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

  <!--
    - favicon
  -->
  {{-- <link rel="shortcut icon" href="/assets2/images/logo/favicon.ico" type="image/x-icon"> --}}

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="/assets2/css/style-prefix.css">

  <!--
    - google font link
  -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>



<style>
  .card iframe {
    width: 100%
  }

</style>


<body class="bg-light">
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->




  <div class="overlay" data-overlay></div>

  <!--
      - HEADER
    -->

  <header>


    <div class="header-main navbar navbar-expand-lg bg-white navbar-light sticky-top p-10 px-4 px-lg-5 border-bottom">

      <div class="container">

        <a href="/" class="header-logo">
          <img src="/assets2/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Entrez le nom de votre produit...">

          <button class="search-btn">
            <ion-icon name="search-outline" class="color-primary"></ion-icon>
          </button>

        </div>

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
                <a href="/" class="menu-title nav-item nav-link active">accueil</a>
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



        <div class="header-user-actions" >
          <button class="action-btn" >

            <ul class="desktop-menu-category-list" style="margin-left: -140px">
              <li class="menu-category fs-4">
                <ion-icon name="person-outline" style="margin-top:20px;"></ion-icon>

            @unless (Auth::check())
                <ul class="dropdown-list" style="width:160px; margin-left: -30px ">
                  <li class="dropdown-item">
                    <a href="{{ route('register') }}" class="btn mx-1">s'inscrire</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="{{ route('login') }}" class="btn mx-1">se connecter</a>
                  </li>
                </ul>
                @endunless
              </li>

            </ul>



          </button>
          <button class="action-btn fs-4" style="margin-left: -40px">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">0</span>
          </button>
          @auth
          <a href="/cart" class="action-btn fs-4" >
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count" id="cart-items">{{ auth()->user()->cart->items->count()}}</span>
          </a>
          @endauth


        </div>

      </div>

    </div>





  </header>

  <!-- Navbar End -->



  @yield('content')



  <!-- Footer Start -->
  <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn animated" data-wow-delay="0.1s"
    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-md-6">
          <h1 class="text-primary mb-4"><img class="img-fluid me-2" src="img/icon-1.png" alt=""
              style="width: 45px;">MeryShop</h1>
          <span>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
            stet lorem sit clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum
            et lorem et sit.</span>
        </div>
        <div class="col-md-6">
          <h5 class="mb-4">Offres Actualités</h5>
          <p>LIVRAISON GRATUITE CETTE SEMAINE COMMANDE SUPÉRIEURE - 55 $.</p>
          <div class="position-relative">
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
            <button type="button"
              class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Get In Touch</h5>
          <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Fes, Morocco</p>
          <p><i class="fa fa-phone-alt me-3"></i>+212 4968544</p>
          <p><i class="fa fa-envelope me-3"></i>contact@meryshp.store</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Our Categories</h5>
          <a class="btn btn-link" href="">Currency Wallet</a>
          <a class="btn btn-link" href="">Currency Transaction</a>
          <a class="btn btn-link" href="">Bitcoin Investment</a>
          <a class="btn btn-link" href="">Token Sale</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Quick Links</h5>
          <a class="btn btn-link" href="/about">About Us</a>
          <a class="btn btn-link" href="/contact">Contact Us</a>
          <a class="btn btn-link" href="/servicess">Our Services</a>
          <a class="btn btn-link" href="tearms">Terms &amp; Condition</a>
        </div>
        <div class="col-lg-3 col-md-6">
          <h5 class="mb-4">Follow Us</h5>
          <div class="d-flex">
            <a class="btn btn-square rounded-circle me-1" href="https://www.twitter.com/meryshop" target="_blank"><i
                class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle me-1" href="https://www.facebook.com/meryshop" target="_blank"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle me-1" href="https://www.youtube.com/meryshop" target="_blank"><i
                class="fab fa-youtube"></i></a>
            <a class="btn btn-square rounded-circle me-1" href="https://www.instagram.com/meryshop" target="_blank"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
            © <a href="/">MeryShop</a>, All Right Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
    <i class="bi bi-arrow-up"></i>
  </a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/lib/wow/wow.min.js"></script>
  <script src="/assets/lib/easing/easing.min.js"></script>
  <script src="/assets/lib/waypoints/waypoints.min.js"></script>
  <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/lib/counterup/counterup.min.js"></script>

  <!-- Template Javascript -->
  <script src="/assets/js/main.js"></script>



  <script src="/assets2/js/script.js"></script>

  <!--
      - ionicon link
    -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>


  @if(session()->has('message'))
  <script>
    Swal.fire({
            title: 'Succès!',
            text: '{{ session()->get('message') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
  </script>
  @endif


  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

	  function addToCart(product){
			document.getElementById(`add-btn-${product}`).innerHTML = '<div class="spinner-border spinner-border-sm" role="status"></div>';
			const qty = document.getElementById('qty');
			const cart = document.getElementById('cart-items');
			$.ajax({
				url: `{{ route('cart.create') }}`,
				method: "POST",
				data: {
					qty: qty ? qty.value : 1 ,
					product: product
				},
				success: function(response) {
					document.getElementById(`add-btn-${product}`).innerHTML = response.btn;
					cart.innerText = response.items
				},
				error: function(xhr) {
				  console.log(xhr);
          Swal.fire({
            title: 'Erorr!',
            text: xhr.responseJSON.message,
            icon: 'error',
            confirmButtonText: 'OK'
        })
				}
			});
	  }
  </script>
</body>

</html>
