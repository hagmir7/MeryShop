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
  {{-- Google fonts --}}
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">


  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <!-- Libraries Stylesheet -->
  <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

  <!--  - favicon  -->

  {{-- laravel csrf token --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- Custem css --}}
  <link rel="stylesheet" href="/assets2/css/style-prefix.css">
  <link rel="shortcut icon" href="/assets2/images/logo/mery.png" type="image/x-icon">

<style>
.google-btn {
  width: auto;
  height: 42px;
  background-color: #4285f4;
  border-radius: 3px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
   margin: 0 130px 0 130px;

  }
  .google-icon-wrapper {
    position: absolute;
    margin-top: 1px;
    margin-left: 1px;
    width: 40px;
    height: 40px;
    border-radius: 2px;
    background-color:#fff;
  }
  .google-icon {
    position: absolute;
    margin-top: 11px;
    margin-left: 11px;
    width: 18px;
    height: 18px;
  }
  .btn-text {
    float: right;
    margin: 11px 11px 0 0;
    color:#fff;
    font-size: 14px;
    letter-spacing: 0.2px;
    font-family: "Roboto";
    text-align: center
  }
  .btn-text:hover {
    box-shadow: 0 0 6px #4285f4;
  }
  .btn-text:active{
    background: #1669F2;
  }

  hr {
    border: none;
    border-top: 3px double #333;
    color: #333;
    overflow: visible;
    text-align: center;
    height: 5px;
}

hr:after {
    background: #fff;
    content: 'OU';
    padding: 0 4px;
    position: relative;
    top: -13px;
}


@import url(https://fonts.googleapis.com/css?family=Roboto:500);
</style>

</head>




<body style="background-color: #faf5f65c">
  <!-- Spinner Start -->
  <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->




  <div class="overlay" data-overlay></div>

  <!-- - HEADER  -->

  <x-header />

  <!-- Navbar End -->
  @yield('content')



  <!-- Footer Start -->
  <x-footer />


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

  @if(session()->has('thanks'))
  <script>
    console.log('My messsage');
      Swal.fire({
          title: 'Nous vous remercions de votre commande',
          text: {{ session()->get('thanks') }},
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

      const  colors = $('input[name="colors[]"]:checked');
      const  listColors = colors.map(function() {
            return this.value;
      }).get();

      const  sizes = $('input[name="sizes[]"]:checked');
      const  listSizes = sizes.map(function() {
            return this.value;
      }).get();


			document.getElementById(`add-btn-${product}`).innerHTML = '<div class="spinner-border spinner-border-sm" role="status"></div>';
			const qty = document.getElementById('qty');
			const cart = document.getElementById('cart-items');
			$.ajax({
				url: `{{ route('cart.create') }}`,
				method: "POST",
				data: {
					qty: qty ? qty.value : 1 ,
					product: product,
                    colors: listColors,
                    sizes: listSizes
				},
				success: function(response) {
					document.getElementById(`add-btn-${product}`).innerHTML = response.btn;
					cart.innerText = response.items;
          console.log(response);
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
