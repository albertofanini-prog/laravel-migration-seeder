<?php

namespace App\Http\Controllers;

use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){
        $trains = Train::all();
        $departures = Train::all()->where('departure_hour', '>=', today());
        return view('home', compact('trains', 'departures'));
    }
}
