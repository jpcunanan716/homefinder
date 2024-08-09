<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function home(){
        return view('index');
    }

    public function listing(){
        return view('listhouse');
    }
}
