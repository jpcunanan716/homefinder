<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class HouseController extends Controller
{
    public function home(){
        return view('index');
    }

    public function listing(){
        return view('createlisting');
    }

    public function save(Request $request){
        $data = $request->validate([
            'houseName' => 'required',
            'houseNumberStreet'=> 'required',
            'province' => 'required',
            'city' => 'required',
            'barangay' => 'required',
            'zipCode' => 'required',
            'squareMeters' => 'required',
            'floors' => 'required',
            'rooms' => 'required',
            'bathrooms' => 'required',
            'backyard' => 'required',
            'basement' => 'required',
            'attic' => 'required',
            'price' => 'required',
            'furnished' => 'required',
            'description' => 'required',
        ]);

        $newListing = House::create($data);
        
        return redirect(route('home'));
    }
}
