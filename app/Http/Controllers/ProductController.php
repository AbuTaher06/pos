<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return Product::all();
    }
    public function store(Request $request){
        return Product::create($request->all());
    }

    public function show(Product $product){
        return response()->json($product,200);
    }

    public function update(Request $request, Product $product){
        $product->update($request->all());
        return response()->json($product,200);
    }
}

