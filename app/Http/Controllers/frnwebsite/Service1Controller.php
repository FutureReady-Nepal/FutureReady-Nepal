<?php

namespace App\Http\Controllers\frnwebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Service1Controller extends Controller
{
    //
    public function index(){
        return view('frontend.service1');
    }
}
