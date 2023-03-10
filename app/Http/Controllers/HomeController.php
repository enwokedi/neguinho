<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }
    public function contact()
    {
        return view('home.contact');
    }

    public function newMotorcycles()
    {
        return view('home.new-motorcycles');
    }

    public function usedMotorcycles()
    {
        return view('home.used-motorcycles');
    }

    public function rentals()
    {
        return view('home.rentals');
    }

    // Products Start **************************************************

    public function productType()
    {
        return view('home.product-types');
    }

    public function accessories()
    {
        return view('home.accessories');
    }

    // Products End ****************************************************

    public function gpsTracker()
    {
        return view('home.gps-tracker');
    }

    public function repairsMaintenance()
    {
        return view('home.repairs-and-maintenance');
    }

    public function spareParts()
    {
        return view('home.spare-parts');
    }

    public function roadTrafficAccidents()
    {
        return view('home.road-traffic-accidents');
    }
}
