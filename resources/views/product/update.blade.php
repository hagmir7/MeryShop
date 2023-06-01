@extends('layout.layout')


@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center d-flex justify-content-center">
            <div class="col-lg-10" data-wow-delay="0.1s">
                <h1 class="h3">Modifier le produit</h1>
                @if ($errors->any())

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger p-2 mb-1">{{ $error }}</div>
                @endforeach

                @endif
                <form action="{{ route('product.update.store', $product->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Nom</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2" >
                            @error('name') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="price">Prix</label>
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control mb-2" >
                            @error('price') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="old_price">Ancien prix</label>
                            <input type="number" name="old_price" value="{{ $product->old_price }}" class="form-control mb-2">
                            @error('old_price') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="stock">La quantité en dépôt</label>
                            <input type="number" name="stock" value="{{ $product->stock }}" class="form-control mb-2">
                            @error('stock') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="name">Catégorie</label>
                            <select name="category" class="form-select mb-2">
                                <option value="">Select Category</option>
                                @foreach ($category as $caty)
                                @if ($caty->id == $product->caty->id )
                                <option selected value="{{ $caty->id }}">{{ $caty->name }}</option>
                                @else
                                <option value="{{ $caty->id }}">{{ $caty->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('category') <span class="text-danger">{{$message}}</span> <br>@enderror


                            <label for="color">Choisir les couleurs</label>
                            <select name="color[]" class="form-select mb-2" multiple>
                                @foreach ($colors as $color)
                                @if ($product->colors->contains($color))
                                <option selected value="{{ $color->id }}">{{ $color->name }}</option>
                                @else
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('color') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="size">Sélectionnez les tailles</label>
                            <select name="size[]" class="form-select mb-2" multiple>
                                @foreach ($sizes as $size)
                                @if ($product->sizes->contains($size))
                                <option selected value="{{ $size->id }}">{{ $size->size }}</option>
                                @else
                                <option value="{{ $size->id }}">{{ $size->size }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('size') <span class="text-danger">{{$message}}</span> <br>@enderror
                        </div>
                        <div class="col-md-6">

                            <label for="images">Images</label>
                            <input type="file" accept="image/*" class="form-control mb-2" name="images[]" multiple>

                            {{-- Product Images --}}
                            <div class="row">
                                @foreach ($product->images as $image)
                                    <div class="col-4 item mb-1" >
                                        <a href="{{ $image->image }}"><img src="{{ $image->image }}" class="w-100 border" alt=""></a>
                                        <div class="item-description">
                                            <strong><a href="{{ route('image.delete', $image->id ) }}" onclick="return confirm('Arte you sur you want to delete product?')" class="text-white">Delete</a></strong>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @error('images') <span class="text-danger">{{$message}}</span> <br>@enderror
                            <label for="description">Description</label>
                            <textarea name="description" cols="30" rows="6"class="form-control mb-2">{{ $product->description }}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary col-md-6">Mettre à jour le produit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
