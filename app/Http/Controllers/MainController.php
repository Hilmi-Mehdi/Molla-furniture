<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.index', compact('products', 'categories', 'cartProducts'));
    }

    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.shop', compact('products', 'categories', 'cartProducts'));
    }

    public function about()
    {
        $products = Product::all();
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.about', compact('products', 'categories', 'cartProducts'));
    }

    public function cart()
    {
        $products = Product::all();
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $total = 0;
        foreach ($cart as $productId => $quantity) {
            $product = Product::find($productId);
            $total += $product->Price * $quantity;
        }
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        
        return view('main.cart', compact('products', 'categories', 'cartProducts', 'total'));
    }
    
    public function contact()
    {
        $products = Product::all();
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.contact', compact('products', 'categories', 'cartProducts'));
    }

    public function faq()
    {
        $products = Product::all();
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.faq', compact('products', 'categories', 'cartProducts'));
    }

    public function category($id)
    {
        $products = Product::all()->where('CategoryID', $id);
        foreach ($products as $product) {
            $categoryName = $product->category->Name;
        }
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.category', compact('products', 'categories', 'categoryName', 'cartProducts'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $cart = Session::get('cart', []);
        $cartProducts = [];
        foreach ($cart as $key => $value) {
            $product = Product::find($key);
            $cartProducts[] = [$product , $value];
        }
        return view('main.product', compact('product', 'categories', 'cartProducts'));
    }
}
