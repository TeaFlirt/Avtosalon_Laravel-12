<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Truck;
use App\Models\Car;
use App\Models\Special;

class CatalogController extends Controller
{
    public function trucks() {
        $vehicles = Truck::all();
        return view('catalog.trucks', compact('vehicles'));
    }

    public function cars() {
        $vehicles = Car::all();
        return view('catalog.cars', compact('vehicles'));
    }

    public function specials() {
        $vehicles = Special::all();
        return view('catalog.specials', compact('vehicles'));
    }
}
