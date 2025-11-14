<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinoRentController extends Controller
{
    public function show()
    {
        return view('dino_rent');
    }
}