@extends('layout.dash')


@section('content')
<div class="container my-5">
    <div class="row">
        <div class="table-responsive  overflow-auto">
            <h4>Toutes les commandes ({{ $orders->count() }})</h4>
            @if ($orders->count() > 0)
            <table id="mytable" class="table table-bordred table-striped">

                <thead>
                    <tr>
                        <th>Utilisateur</th>
                        <th>Total</th>
                        <th>Statut</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr>
                        <td>
                            <a href="{{ route('user.update', $order->user->id )}}">{{ $order->user->first_name }} {{ $order->user->last_name }}</a>
                        </td>
                        <td>{{ $order->getTotal() }} MAD</td>
                        @if ($order->status == true)
                            <td><i class="bi bi-check2-all text-success fs-4"></i></td>
                        @else
                             <td><i class="bi bi-alarm"></i></td>
                        @endif

                        <td>
                            @if ($order->status == null)
                            <a href="{{ route('order.valid', $order->id ) }}" class="btn btn-sm btn-info text-white"><i class="bi bi-check-circle"></i></a>
                            @endif
                            <a href="{{ route('order.show', $order->id ) }}" class="btn btn-sm btn-success"><i class="bi bi-eye"></i></a>
                            <a href="{{ route('order.delete', $order->id ) }}" onclick="return confirm('Voulez-vous vraiment supprimer cette commande ?')" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @else
                <h3 class="my-5 text-center">Aucune commande </h3>
            @endif
            <div class="clearfix"></div>
            {{ $orders->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
</div>
@endsection
