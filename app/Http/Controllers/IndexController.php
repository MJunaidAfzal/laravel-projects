<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('index');
    }

    public function Homee(){
        return view('homee');
    }

    public function About(){
        return view('about');
    }

    public function Services(){
        return view('services');
    }

    public function Contact(){
        return view('contact');
    }








}
