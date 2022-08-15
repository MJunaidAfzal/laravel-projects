<?php

namespace App\Http\Controllers\cars;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function Car(){
        return view('machine.car');
    }
}
