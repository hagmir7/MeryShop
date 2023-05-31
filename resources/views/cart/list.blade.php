@extends('layout.layout')


@section('content')


<div class="container-sm">
    

   <div class="row justify-content-center">

    <div class="col-md-6">
        <h1 class="mt-3 h4">Panier de produits</h1>
        @foreach ($carts as $item)
        <div class="cart-item bg-white">
            <img src="{{ $item->product->images->first()->image }}" alt="Product 1">
            <div>
                <h4 class="cart-item-title h6">
                    <a href="{{ route('product', $item->product->id ) }}">{{ Str::limit($item->product->name, 50, '...') }}</a> 
                </h4>
                <p class="cart-item-qty mb-1">Prix: <strong>{{ $item->product->price }} MAD</strong></p>
                <p class="cart-item-qty mb-1">Quantité: <strong>{{ $item->quantity }}</strong></p>
                <p class="cart-item-qty mb-1">Total: <strong>{{ $item->total }} MAD</strong></p>
              
            </div>
            <a href="{{ route('cart.delete', $item->id ) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer le produit')" class="btn btn-danger cart-item-remove-btn btn-sm"><i class="bi bi-trash3"></i></a>
        </div>
        @endforeach

    </div>
    <div class="col-md-6">
        <div class="mt-3">
            @if ($carts->count() > 0)
                <div class="border rounded p-3 card">
                    <h5 class="text-center">Votre Panier</h5>
                    <p class="cart-item-qty h6">Produits: <strong>{{ $carts->count() }}</strong></p>
                    <p class="cart-item-qty h6">Livraison: <strong>0 MAD</strong></p>
                    <p class="cart-item-qty h6">Total: <strong>{{ auth()->user()->cart->getTotal() }} MAD</strong></p>
                </div>
                <a href="{{ route('order.create') }}" class="btn btn-primary my-3 w-100">Envoyer La Commande</a>
            @else
                <div class="my-5">
                    <h4 class="py-5 text-center">No Produits</h4>
                </div>
             @endif
        </div>
    </div>
   </div>
</div>
@endsection