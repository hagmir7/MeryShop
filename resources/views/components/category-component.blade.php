@foreach ($categories as $category)
<div class="col-sm-3 mb-3">
    <div class="thumb-wrapper wow fadeInUp">
        <span class="wish-icon"><i class="fa fa-heart-o"></i></span>
            <div class="img-box">
                <img src="{{ $category->image }}" width="100%" class="cover" alt="{{ $category->name }}">
            </div>
        </a>
        <div class="thumb-content">
            <h6>{{ $category->name }}</h6>
            <a href="{{ route("category", $category->id) }}" class="btn btn-outline-primary rounded-pill w-100">View Products</a>
        </div>
    </div>
</div>
@endforeach
<div class="col-12">
    {{ $categories->links('vendor.pagination.bootstrap-5')  }}
    @if (empty($categories))
    <h3 class="text-center py-5">No Category</h3>
    @endif
</div>
