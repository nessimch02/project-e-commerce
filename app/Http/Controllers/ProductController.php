<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
            return view("products_index",["product"=>$products]);    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("add-product");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("manage-products", ["product"=>$product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->id = $request->id;
        $product->name = $request->name;
        $product->category = $request->category;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->material = $request->material;
        $product->dimensions = $request->dimensions;
        $product->color = $request->color;
        $product->availability = $request->availability;
        $product->shipping = $request->shipping;
        $product->update();

        if ($request->hasfile('image')){
            $path = $request->file('image')->store('images','public');
            $product->image_url = $path;
        }
        $product->save();
        return redirect()->route('adminpanel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Storage::disk('public')->delete("public/pnj/".$product->image_url);
        $product->delete();
        return redirect()->route('manage-products');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
    $results = Product::where('name', 'like', "%$query%")->get();

    return view('product.search_results', compact('results', 'query'));
    }
}
