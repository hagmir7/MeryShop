<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartDatailColor;
use App\Models\CartDatailSize;
use App\Models\CartDetail;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartDetailController extends Controller
{


    public function create(Request $request){
        $user = Auth::user();

        $cart = $user->cart;
        $orderDetail = CartDetail::where('product_id', $request->product)->where('cart_id', $cart->id);
        if(count($orderDetail->get()) > 0){
            $sizes = CartDatailSize::where('cart_details_id', $orderDetail->first()->id);
            foreach($sizes as $size){
                $size->delete();
            }

            $colors = CartDatailColor::where('cart_details_id', $orderDetail->first()->id);
            foreach($colors as $color){
                $color->delete();
            }

            $orderDetail->delete();
            return response()->json([
                'items' => $cart->items->count(),
                'btn' => "Ajouter au panier"
            ]);
        }


        $orderDetail = CartDetail::create([
            'cart_id' => $cart->id,
            'product_id' => $request->product,
            'quantity' => $request->qty,
        ]);

        // Update colors
        $orderDetail->colors()->sync($request->input('colors', []));

        // Update sizes
        $orderDetail->sizes()->sync($request->input('sizes', []));

        return response()->json([
            'items' => $cart->items->count(),
            'btn' => 'Retirer du panier',
            'colors' => $request->input('colors', [])
        ]);


    }




}
