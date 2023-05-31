@extends('layout.layout')


@section('content')
<div class="container-fluid hero-header p-0 m-0">
    <div class="container pt-3 p-0">
        <div class="row g-3 ">
            <div id="carouselExampleSlidesOnly" class="carousel slide col-md-8  p-0 overflow-hidden"
                data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="/category/1"><img src="/assets/img/Clothing.png" class="d-block w-100" alt="Clothing"></a>
                    </div>

                    <div class="carousel-item">
                        <a href="/category/2"><img src="/assets/img/Electronic.png" class="d-block w-100" alt="..."></a>
                    </div>

                    <div class="carousel-item">
                        <a href="/category/3"> <img src="/assets/img/home.png" class="d-block w-100" alt="..."></a>
                    </div>

                    <div class="carousel-item">
                        <a href="/category/5"> <img src="/assets/img/Fitness.png" class="d-block w-100" alt="..."></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card m-0">
                    <div class="sidebar-top pt-2 d-flex justify-content-center">
                        <h2 class="sidebar-title text-center">CATÉGORIES</h2>
                    </div>
    
                    <ul class="sidebar-menu-category-list p-2 m-0">
                        @foreach ($categories as $category)
                        <li class="sidebar-menu-category" style="margin-top:-20px">
                            <div class="sidebar-accordion-menu d-flex mb-2">
                                <div class="menu-title-flex d-flex">
                                    <img src="{{ $category->image }}" alt="{{ $category->name }}" width="30px" height="30px"> &#xa0;&#xa0;
                                    <p class="menu-title"> <a href="{{ route("category", $category->id ) }}" type="button" style="color:black;">{{ $category->name }}</a></p>
                                </div>
    
                                <div>
                                    <a href="{{ route("category", $category->id ) }}" type="button" style="color:black;
                                        margin-left:-10%"> <ion-icon name="add-outline" class="add-icon"></ion-icon></a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



@foreach ($categories as $category)
<div class="container p-0">
    <div class="d-flex justify-content-between">
        <div><h5 class="mt-3 mb-0">{{ $category->name }}</h5></div>
        <div class="mt-3"><a href="{{ route('category', $category->id ) }}">Voir plus <i class="bi bi-arrow-right"></i></a></div>
    </div>
    <div class="row py-2">
        {{-- @dd(array_slice($category->products->toArray(), 0, 4)) --}}
        @foreach ($category->products->sortByDesc('id')->take(4) as $product)
        <div class="col-sm-3 mb-3">
            <div class="thumb-wrapper wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <a href="{{ route('product', $product->id ) }}">
                    <div class="img-box">
                        <img src="{{ $product->images->first()?->image }}" class="img-fluid" alt="Speaker">
                    </div>
                </a>
                <div class="thumb-content product-featured" >
                    <h6>{{ Str::limit($product->name, $limit = 25, $end = '...') }}</h6>
                    <p class="item-price"><del>{{ $product->old_price }} MAD</del> <strong>{{ $product->price }} MAD</strong></p>
                    @auth
                        @if((count(\App\Models\CartDetail::where('product_id', $product->id )->where('cart_id',auth()->user()->cart->id )->get()) > 0))
                            <button type="button" onclick="addToCart({{ $product->id }})"
                                class="rounded-pill w-100 btn-shop" id="add-btn-{{ $product->id }}">
                                Retirer du panier
                            </button>
                        @else
                            <button type="button" onclick="addToCart({{ $product->id }})"
                                class="rounded-pill w-100 btn-shop" id="add-btn-{{ $product->id }}">
                                Ajouter au panier
                            </button>
                        @endif
                        @else
                        <a href="{{ route('login') }}" class="btn-shop rounded-pill w-100">Ajouter au panier</a>
                    @endauth
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
    
@endforeach








@endsection