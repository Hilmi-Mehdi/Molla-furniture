<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::paginate(2);
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'Price' => 'required',
            'CategoryID' => 'required|exists:categories,CategoryID',
            'Images' => 'array',
            'Images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::create($validatedData);

        if ($request->hasFile('Images')) {
            $imagePaths = [];

            foreach ($request->file('Images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $imageName = time() . '_' . uniqid() . '.' . $extension;
                $image->storeAs('public/images', $imageName);
                $imagePaths[] = $imageName;
            }

            $product->Images = json_encode($imagePaths);
            $product->save();
        }

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'Description' => 'required',
            'Price' => 'required|numeric',
            'CategoryID' => 'required|exists:categories,CategoryID',
            'Images' => 'array',
            'Images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('Images')) {
            $imagePaths = [];

            foreach ($request->file('Images') as $image) {
                $extension = $image->getClientOriginalExtension();
                $imageName = time() . '_' . uniqid() . '.' . $extension;
                $image->storeAs('public/images', $imageName);
                $imagePaths[] = $imageName;
            }

            $product->Images = $imagePaths;
            $product->save();
        }


        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        // Delete associated image if exists
        if ($product->image) {
            $imagePath = public_path('images') . '/' . $product->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
