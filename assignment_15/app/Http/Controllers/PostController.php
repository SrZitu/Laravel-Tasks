<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorepostsRequest;
use App\Http\Requests\UpdatepostsRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StorepostsRequest::collection(Product::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->validated());
        return PostResource::make($product);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return PostResource::make($product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepostsRequest $request, Product $product)
    {
        $product->update($request->validated());
        return PostResource::make($product);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return response()->noContent();
    }
}
