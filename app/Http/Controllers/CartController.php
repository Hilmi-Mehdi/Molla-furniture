<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $cart = Session::get('cart', []);
        $cart[$productId] = 1;
        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function removeFromCart($productId)
    {
        $cart = Session::get('cart', []);

        unset($cart[$productId]);

        Session::put('cart', $cart);

        return redirect()->back()->with('success', 'Item removed from cart');
    }

    public function viewCart()
    {
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product => $value];
        }

        return view('cart', compact('cartProducts'));
    }

    public function checkout()
    {

        if (auth()->check() == false) {
            return redirect()->to('login');
        }
        else{
            $cart = Session::get('cart', []);

        $order = new Order();
        $client = Client::where('Email', auth()->user()->email)->first();
        $order->ClientID = $client->ClientID;
        $total = 0;
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            $total += $product->Price * $quantity;
        }
        $order->TotalAmount = $total;
        $order->save();

        foreach ($cart as $productId => $quantity) {
            $orderItem = new OrderItem();
            $orderItem->OrderID = $order->OrderID;
            $orderItem->ProductID = $productId;
            $orderItem->Quantity = $quantity;
            $orderItem->save();
        }

        Session::forget('cart');

        return redirect()->route('index')->with('success', 'Order placed successfully');
        }
        
    }
}