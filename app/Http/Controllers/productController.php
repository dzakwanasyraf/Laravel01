<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    // public function showProduct($slug) // cara 1
    // {
    //     $data = Product::where('product_slug', $slug)
    //             ->firstOrFail();
    //     // if (!$data) {
    //     //     abort(404);
    //     // }
    //     // dd($data);
    //     return view('product',compact('data'));
    // }
    public function showProduct(product $product)
    {
        return view('product',compact('product'));
    } //cara 2
}