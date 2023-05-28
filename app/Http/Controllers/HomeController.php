<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        if(auth()->user() && auth()->user()->type == 'client'){
            return redirect('index');
        }
        if(auth()->user() && auth()->user()->type == 'admin'){

            $orders = Order::all();
            $total = 0;
            foreach ($orders as $order) {
                $total += $order->TotalAmount;
            }
            $products = Product::all();
            $clients = Client::all();

            return view('admin.dashboard', compact('orders', 'products', 'clients', 'total'));
        }
        return redirect('index');
    }
}
