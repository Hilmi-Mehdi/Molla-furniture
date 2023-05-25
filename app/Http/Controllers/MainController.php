<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $products = Product::paginate(15);
        $categories = Category::all();
        return view('main.index', compact('products', 'categories'));
    }

    public function shop()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('main.shop', compact('products', 'categories'));
    }

    public function about()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('main.about', compact('products', 'categories'));
    }
    
    public function contact()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('main.contact', compact('products', 'categories'));
    }

    public function faq()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('main.faq', compact('products', 'categories'));
    }

    public function category($id)
    {
        $products = Product::all()->where('CategoryID', $id);
        foreach ($products as $product) {
            $categoryName = $product->category->Name;
        }
        $categories = Category::all();
        return view('main.category', compact('products', 'categories', 'categoryName'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('main.product', compact('product', 'categories'));
    }
}
