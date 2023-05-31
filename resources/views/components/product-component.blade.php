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
</div>
<br>
<div class="col-12 mt-2">
    {{ $products->links('vendor.pagination.bootstrap-5') }}
</div>

@if (empty($products))
<div>
    <h3 class="text-center">No Products</h3>
</div>
@endif