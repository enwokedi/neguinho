<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function apiCategories()
    {
        $response = Http::get('https://fakestoreapi.com/products/categories');

        $jsonData = $response->json();

        dd($jsonData);
    }
}
