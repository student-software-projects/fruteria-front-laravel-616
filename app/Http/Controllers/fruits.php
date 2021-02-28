<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fruits extends Controller
{
    public function index(){
    return view('index');
    }

    public function acercade(){
        return view('acercade');
    }

    public function domicilios(){
        return view('domicilios');
    }
    public function contact(){
        return view('contact');
    }
}
