<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view("landing.inicio");
    }
    public function acercade(){
        return view("landing.acercade");
    }
    public function domicilios(){
        return view("landing.domicilios");
    }
    public function contactos(){
        return view("landing.contactos");
    }
}
