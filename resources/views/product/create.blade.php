@extends('layout.dash')


@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center d-flex justify-content-center">
            <div class="col-12" data-wow-delay="0.1s">
                <h1 class="h3">Créer un nouveau produit</h1>
                @if ($errors->any())

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger p-2 mb-1">{{ $error }}</div>
                @endforeach

                @endif
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Nom de produit</label>
                            <input type="text" name="name" value="{{@old('name')}}" class="form-control mb-2" placeholder="Nom du produit...">
                            @error('name') <span class="text-danger">{{$message}}</span> <br>@enderror
        
                            <label for="price">Prix</label>
                            <input type="text" name="price" value="{{@old('price')}}" class="form-control mb-2" placeholder="Prix ​​du produit">
                            @error('price') <span class="text-danger">{{$message}}</span> <br>@enderror
        
                            <label for="old_price">Ancien prix</label>
                            <input type="number" name="old_price" value="{{@old('old_price')}}" class="form-control mb-2">
                            @error('old_price') <span class="text-danger">{{$message}}</span> <br>@enderror
        
                            <label for="stock">la quantité en stock</label>
                            <input type="number" name="stock" value="{{@old('stock')}}" class="form-control mb-2">
                            @error('stock') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="name">Catégorie</label>
                            <select name="category" class="form-select mb-2">
                                <option value="">Sélectionnez la catégorie</option>
                                @foreach ($category as $caty)
                                <option value="{{ $caty->id }}">{{ $caty->name }}</option>
                                @endforeach
                            </select>
                            @error('category') <span class="text-danger">{{$message}}</span> <br>@enderror
        
                            <label for="images">Images</label>
                            <input type="file" accept="image/*" class="form-control mb-2" name="images[]" multiple>
                            @error('images') <span class="text-danger">{{$message}}</span> <br>@enderror
        
         
                        </div>
    
                        <div class="col-md-6">
                            <label for="color">Choisir les couleurs</label>
                            <select name="color[]" class="form-select mb-2" multiple>
                                @foreach ($colors as $color)
                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                            </select>
                            @error('color') <span class="text-danger">{{$message}}</span> <br>@enderror
        
                            <label for="size">Sélectionnez les tailles</label>
                            <select name="size[]" class="form-select mb-2" multiple>
                                @foreach ($sizes as $size)
                                <option value="{{ $size->id }}">{{ $size->size }}</option>
                                @endforeach
                            </select>
                            @error('size') <span class="text-danger">{{$message}}</span> <br>@enderror
        
                            <label for="description">Description</label>
                            <textarea name="description" cols="30" rows="6" class="form-control mb-2">{{ old('description') }}</textarea>
                        </div>
                    </div>




                    <button class="btn btn-primary col-md-6 text-center">Create Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection