@extends('layout.layout')

@section('content')


<div class="container">
    <div class="row mt-3">
        <div class="col-md-6 pb-2">
            <div class="section-title text-center col-12">
                <h3 class="title">VOTRE COMMANDE</h3>
            </div>
            <strong>Produits</strong>
            <table class="table table-striped">
                <tbody>
                    @foreach (auth()->user()->cart->items as $item)
                    <tr>
                        <td>{{ $item->quantity }}x {{ Str::limit($item->product->name, 50, '...') }} </td>
                        <td style="white-space: pre;">{{ $item->total }} MAD</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="order-col d-flex">
                <div><span>LIVRAISON </span></div> &#xa0;
                <div> <strong class="order-total">0 MAD</strong></div>
            </div>
            <div class="order-col d-flex">
                <div><span>TOTAL : </span></div> &#xa0;
                <div> <strong class="order-total">{{ auth()->user()->cart->getTotal() }} MAD</strong></div>
            </div>
        </div>
        <div class="col-md-6">
            <form method="POST" action="{{ route('order.store') }}">
                @csrf
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">VOTRE INFORMATION DE LIVRAISON</h3>
                    </div>
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                    @endif
                    <div class="form-group">
                        <input class="form-control mt-2" class="input" value="{{ auth()->user()->first_name }}"
                            type="text" required name="first_name" placeholder="Prénom">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" class="input" value="{{ auth()->user()->last_name }}"
                            type="text" required name="last_name" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" class="input" value="{{ auth()->user()->email }}" type="email"
                            required name="email" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" value="{{ auth()->user()->address}}" class="input" type="text" required name="address"
                            placeholder="Adresse">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" class="input" type="text" required name="city"
                            placeholder="Ville">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" class="input" type="text" required name="country"
                            placeholder="Pays">
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="form-group">
                        <input class="form-control mt-2" class="input" value="{{ auth()->user()->phone }}" type="tel"
                            required name="phone" placeholder="Téléphone">
                    </div>
                    <button class="btn mt-3 btn-primary">Envoyer</button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection