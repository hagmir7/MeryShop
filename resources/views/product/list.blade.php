@extends('layout.layout')


@section('content')
<div class="container-md mt-3 mb-5">
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
        <x-product-component />
    </div>
</div>
</div>
@endsection