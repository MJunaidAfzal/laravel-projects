<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index(){
        return view('template.index');
    }

    public function Homee(){
        return view('template.homee');
    }

    public function About(){
        return view('template.about');
    }

    public function Services(){
        return view('template.services');
    }

    public function Contact(){
        return view('template.contact');
    }

    public function Nav(){
        return view('template.nav');
    }

    public function Footer(){
        return view('template.footer');
    }









}
