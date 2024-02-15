<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

/* class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('train', compact('trains'));
    }
} */

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_time', 'like', '2024%')->get();
        return view('train', compact('trains'));
    }
}
