@extends('layout.layout')


@section('content')
<div class="container mt-3 mb-5">
    <div class="d-flex justify-content-center row">
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
        <div class="col-md-8">
            @foreach ($products as $product)
            <div class="row p-2 bg-white border rounded mt-2 wow fadeInUp" data-wow-delay="0.{{$loop->index + 1}}s">
                <div class="col-md-3 mt-1 product-image-content">
                    <img style="max-height: 150px;" class="img-fluid img-responsive rounded product-image" alt="{{ $product->name }}" src="{{ $product->images->first()?->image }}">
                </div>
                <div class="col-md-6 mt-1">
                    <a href="{{ route('product', $product->id ) }}"><h5>{{ Str::limit($product->name, 50, '...')}}</h5></a>
                    <div class="d-flex flex-row">
                        <strong><a href="{{ route('category', $product->caty->id ) }}">{{ $product->caty->name }}</a></strong>
                    </div>
                    <p class="text-justify mb-0">{{ Str::limit($product->description, 100, '...')}}</p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="align-items-center">
                        <h4 class="mr-1 mb-0">{{ $product->price }} MAD</h4> 
                        <del class="strike-text">{{$product->old_price}} MAD</del>
                    </div>
                    <h6 class="text-success">Livraison Gratuit</h6>
                    <div class="d-flex flex-column mt-4">
                        <a href="{{ route('product', $product->id ) }}" class="btn btn-primary btn-sm" type="button">Détail</a>
                        <button class="btn btn-outline-primary btn-sm mt-2" type="button" onclick="addToCart({{ $product->id }})"><span id="add-btn-{{ $product->id }}">Ajouter au panier</span></button>
                    </div>
                </div>
            </div>
            @endforeach
            @if (count($products) < 1)
            <div class="my-4">
                <h3 class="text-center">Aucun produit</h3>
            </div>
            @endif
        </div>
        <br>
        <div class="col-12 mt-2">
            {{ $products->links('vendor.pagination.bootstrap-5') }}
        </div>
        

    </div>
</div>
</div>
@endsection