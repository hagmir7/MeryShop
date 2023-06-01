@foreach ($categories as $category)
<div class="col-md-2 mb-3 p-1" style="margin-left: 8px ; margin-right:5px">
    <div class="thumb-wrapper wow fadeInUp" style="padding: 12px, 12px">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="{{ $category->image }}" width="100%" class="cover" style="object-fit: contain" alt="{{ $category->name }}">
            </div>
        </a>
        <div class="thumb-content">
            <h6>{{ $category->name }}</h6>
            <a href="{{ route("category", $category->id) }}" class="btn btn-outline-primary rounded-pill w-100">Voir les produits</a>
        </div>
    </div>
</div>
@endforeach
<div class="col-12">
    {{ $categories->links('vendor.pagination.bootstrap-5')  }}
    @if (empty($categories))
    <h3 class="text-center py-5">Aucune catégorie</h3>
    @endif
</div>
