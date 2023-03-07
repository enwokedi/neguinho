<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Aimeos\Shop\Facades\Shop;

class PageController extends Controller
{
    public function homeAction()
    {
        return view('home');
    }

    public function shopAction()
    {
        foreach (config('shop.page.nshop') as $name) {
            $params['aiheader'][$name] = Shop::get($name)->header();
            $params['aibody'][$name] = Shop::get($name)->body();
        }

        return View('nshop', $params);
    }
}
