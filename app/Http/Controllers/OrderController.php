<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function create(){
        return view('order.create');
    }


    public function store(Request $request){
        $validation = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ]);

        $validation = array_merge($validation, ['user_id' => auth()->user()->id ]);
        $order = Order::create($validation);

        auth()->user()->cart->items->map(function($item) use($order){
            OrderDetail::create([
                'product_id' => $item->product->id,
                'order_id' => $order->id,
                'quantity' => $item->quantity
            ]);
            $item->delete();
        });

        return redirect()->route('home')->with(['message' => 'Votre commande est en cours de traitement un conseiller vous contactera dans le plus bref détai.']);
    }

    public function show(Order $order){
        return view('order.show', [
            'order' => $order,
            'products' => Product::all()
        ]);
    }

    public function list(){
        return view('order.list', [
            'orders' => Order::paginate(15)
        ]);
    }


    public function orderItem(Request $request, Order $order, Product $product){
        OrderDetail::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $request->input('quantity')
        ]);

        return redirect()->route('order.show', [$order->id, $product->id]);
    }

    public function valid(Order $order){
        $order->update(['status' =>  true]);
        return redirect()->route('order.list')->with(["message" => 'Order has been validate successfully.']);
    }

    public function cancel(Order $order) {
        $order->update(['status' =>  false]);

        $order->server->update([
            'wage' => $order->server->wage -= $order->getTotal()
        ]);
        return redirect()->route('dashboard')->with(["message" => 'Order has been canceld successfully.']);
    }


    public function delete(Order $order) {
        $order->delete();
        return redirect()->route('dashboard')->with(["message" => 'Order has been deleted successfully.']);
    }


    public function payNow(Request $request){
        $validation = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
        ]);


        $validation = array_merge($validation, ['user_id' => auth()->user()->id ]);
        $order = Order::create($validation);

        OrderDetail::create([
            'product_id' => $request->input('product'),
            'order_id' => $order->id,
            'quantity' => 1
        ]);

        return redirect()->back()->with(['thanks' => 'Votre commande a été envoyée ! Vous serez contacté rapidement.']);
    }
}



