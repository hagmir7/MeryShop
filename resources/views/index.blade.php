@extends('layout.layout')


@section('content')
<div class="container-fluid hero-header p-0 m-0">
    <div class="container pt-3 p-0">
        <div class="row g-3 ">
            <div id="carouselExampleSlidesOnly" class="carousel slide col-md-8  p-0 overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <a href="/category/1"><img src="/assets/img/Clothing.png" class="d-block w-200" alt="Clothing"></a>
                  </div>

                  <div class="carousel-item">
                    <a href="/category/2"><img src="/assets/img/Electronic.png" class="d-block w-200" alt="..."></a>
                  </div>

                   <div class="carousel-item">
                    <a href="/category/3"> <img src="/assets/img/home.png" class="d-block w-200" alt="..."></a>
                  </div>

                  <div class="carousel-item">
                    <a href="/category/5"> <img src="/assets/img/Fitness.png" class="d-block w-200" alt="..."></a>
                  </div>
                </div>
              </div>

                        <div class="sidebar has-scrollbar" data-mobile-menu>


                              <div class="sidebar-top"  style="padding-left: 35%; padding-top: 8%;">
                                   <h2 class="sidebar-title">Category</h2>
                                    </button>
                              </div>

                              <ul class="sidebar-menu-category-list">
                                @foreach ($categories as $category)
                                <li class="sidebar-menu-category"  style="margin-top:-20px">

                                  <button class="sidebar-accordion-menu" data-accordion-btn>

                                    <div class="menu-title-flex">
                                      <p class="menu-title"> <a href="{{ route("category", $category->id ) }}" type="button" style="color:black;">{{ $category->name }}</a></p>
                                    </div>

                                    <div>
                                        <a href="{{ route("category", $category->id ) }}" type="button" style="color:black; margin-left:-10%"> <ion-icon name="add-outline" class="add-icon"></ion-icon></a>
                                    </div>

                                  </button>


                                </li>
                                @endforeach
                              </ul>
                          </div>
                      </div>
                </div>
              </div>

<div class="container p-0">


    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">Vêtements et Mode</h5></div>
        <div class="mt-3"><a href="/category/1">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row">
        @foreach ($clothing as $product)
        <div class="col-md-3">
            <div class="thumb-wrapper text-start p-0 overflow-hidden">
                <div class="image-container">
                    <a href="{{ route('product', $product->id )}}">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid border-bottom">
                    </a>
                </div>
                <div class="product-detail-container p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('product', $product->id )}}">
                        <h6 class="dress-name">{{ Str::limit($product->name, $limit = 40, $end = '...') }}</h6>
                    </a>
                    </div>
                    <div class="d-flex flex-column">
                        <strong class="text-primary">{{$product->old_price}} MAD</strong>
                        {{-- <del class="old-price text-right fs-6">{{ $product->old_price}} MAD</del> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">Électronique et Outillage</h5></div>
        <div class="mt-3"><a href="/category/2">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        @foreach ($electronics as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content">
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>
                   <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Ajouter au panier</button>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">Maison et Jardin</h5></div>
        <div class="mt-3"><a href="/category/3">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        @foreach ($Home as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content">
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>
                    <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Ajouter au panier</button>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">Santé et Beauté</h5></div>
        <div class="mt-3"><a href="/category/4">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        @foreach ($Health as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content">
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>
                   <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Ajouter au panier</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">Sports et Remise en Forme</h5></div>
        <div class="mt-3"><a href="/category/5">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        @foreach ($Sports as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content">
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>
                   <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Ajouter au panier</button>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">jouets et Games</h5></div>
        <div class="mt-3"><a href="/category/6">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        @foreach ($Toys as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content">
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>
                   <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Ajouter au panier</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">Livres et Médias</h5></div>
        <div class="mt-3"><a href="/category/7">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        @foreach ($Books as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content">
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>

                    @auth
                        @if((count(\App\Models\CartDetail::where('product_id', $product->id )->where('cart_id', auth()->user()->cart->id )->get()) > 0))
                            <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Retirer du panier</button>
                        @else
                            <button type="button" onclick="addToCart({{ $product->id }})" class="btn btn-outline-primary rounded-pill w-100" id="add-btn-{{ $product->id }}">Ajouter au panier</button>
                        @endif
                    @else
                    <button type="button" class="btn btn-outline-primary rounded-pill w-100">Ajouter au panier</button>
                    @endauth
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
