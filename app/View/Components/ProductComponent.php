<?php

namespace App\View\Components;

use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class ProductComponent extends Component
{
    
    protected $products;
    public function __construct(Request $request){

        if(isset($request->search)){
            $this->products  = Product::where('name', 'LIKE', '%' . $request->search . '%')->orderBy('created_at', 'desc')->paginate(30);
        }else{
            $this->products  = Product::orderBy('id', 'desc')->paginate(30);
        }

    }


    public function render(): View|Closure|string
    {
        return view('components.product-component', [
            'products' => $this->products
        ]);
    }

}
