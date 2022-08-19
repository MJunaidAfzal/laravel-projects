<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factory;

class FactoryController extends Controller
{
    public function index(){
        $factories = Factory::get();
        return view('factories.index',compact('factories'));
    }
}
