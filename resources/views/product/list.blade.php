@extends('layout.layout')


@section('content')
<div class="container-md mt-3 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-4">
            <div class="list-group position-sticky" style="top: 10px; height: auto !important;">
                @foreach ($categories as $category)
                 <a href="{{ route('category', $category->id ) }}" type="button" class="list-group-item list-group-item-action">{{ $category->name }}</a>
                @endforeach
              </div>
        </div>
        <x-product-component />
    </div>
</div>
</div>
@endsection