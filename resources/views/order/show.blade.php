@extends('layout.dash')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 card p-2">
            <h4>Command #{{ $order->id }}</h4>
            <p class="mb-1 d-flex">Client : &#xa0; <strong><a href="{{ route('user.update', $order->user->id ) }}">{{ $order->user->first_name}} {{ $order->user->last_name}}</a></strong> </p>

            <p class="mt-1">Téléphone : <strong>{{ $order->phone }}</strong> </p>
            <p class="mt-1">Email : <strong>{{ $order->email }}</strong> </p>

            <p class="mt-1">Pays : <strong>{{ $order->country }}</strong> </p>
            <p class="mt-1">Ville : <strong>{{ $order->city }}</strong> </p>
            <p class="mt-1">Adresse : <strong>{{ $order->address }}</strong> </p>
            <p>Total : <strong>{{ $order->getTotal() }} MAD</strong> </p>


            @if (count($order->details) > 0)
            <table class="table border">
              <thead class="border-0">
                <tr>
                  <th scope="col">Produits</th>
                  <th scope="col">Quantité</th>
                  <th scope="col">Couleurs</th>
                  <th scope="col">Tailles</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($order->details as $item)
                <tr class="border-end">
                  <td class="border-end"><a class="text-black" href="{{ route('product', $item->id ) }}">{{ Str::limit($item->product->name, 50, '...') }}</a></td>
                  <td class="border-end">{{ $item->quantity }}</td>
                  <td class="border-end">@foreach ($item->colors as $color)  {{ $color->name }}, @endforeach</td>
                  <td class="border-end">@foreach ($item->sizes as $size)  {{ $size->size }}, @endforeach</td>
                  <td class="border-end">{{ $item->total }} MAD</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @if ($order->status == null)
                 <a href="{{ route('order.valid', $order->id ) }}" class="btn mb-2 w-100 btn-success"><i class="bi bi-check-circle"></i> Valider</a>
            @endif
            <a href="{{ route('order.delete', $order->id ) }}" class="w-100 btn mb-2 btn-danger"> <i class="bi bi-trash"></i> Annuler</a>
            @else
                <h6 class="text-center my-5">Aucun produit</h6>
            @endif
        </div>
    </div>
</div>
@endsection
