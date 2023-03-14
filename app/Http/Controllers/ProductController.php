<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('brand', 'asc')
            ->where('stock', '>', 0)
            ->get();
        return view('product.index', compact('products'));
    }

    public function show($sku)
    {
        $product = Product::findOrFail($sku);
        return view('product.show', compact('product'));
    }

    public function category($id)
    {
        // $request = Category::where('id', $id)->get();
        // $reqColl = collect($request);
        // $reqDeco = json_decode($reqColl);
        // $product = $reqDeco;
        // $category = $product[0]->category;

        // $data = Product::select('image_url', 'description', 'sku', 'vat_price')
        //     ->where('category', $category)
        //     ->paginate(24);

        // $collection = collect($data);
        // $jsonDecoded = json_decode($collection);
        // $products = $jsonDecoded;

        return view('home.products');
        // foreach ($products as $product) {
        //     echo $product->sku . ", " . $product->description . ", " . $product->vat_price . "<br />" . $product->image_url;
        // };
    }
}
