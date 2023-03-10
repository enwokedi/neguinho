<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function productList()
    {
        $products = Product::select('image_name')->distinct()->get();

        foreach ($products as $product) {
            echo $product->image_name . "<br />";
        }
        // echo $products;
        // dd($products);
        // return view('products', compact('products'));
    }
}
