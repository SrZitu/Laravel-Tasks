<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            // Add validation rules for other fields
        ]);

        // Create a new product with the validated data
        $product = Product::create($validatedData);

        // Redirect to the product index page or show a success message
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            // Add validation rules for other fields
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        // Redirect to the product index page or show a success message
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        // Redirect to the product index page or show a success message
    }
}
