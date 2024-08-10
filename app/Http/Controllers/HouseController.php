<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House_details;

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
            'house_name' => 'required',
            'square_meters' => 'required',
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

        $newListing = House_details::create($data);

        return redirect(route('home'));
    }
}
