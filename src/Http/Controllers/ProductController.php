<?php

namespace MyCrud\Http\Controllers;

use MyCrud\Models\Product;
use MyCrud\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('views::products.index', compact('products'));
    }

    public function create()
    {
        return view('views::products.create');
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->validated());
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('views::products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('views::products.edit', compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
