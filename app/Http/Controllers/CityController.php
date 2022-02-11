<?php

namespace App\Http\Controllers;

use App\Models\City;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){

        return City::all();
    }

    public function store(){

        $attributes = request()->validate([

            'name' => 'required',
            'country' => 'required'
        ]);

        $city = City::create($attributes);

        $response = ['city' => $city];

        return response($response);
    }

    public function show($id){

        return City::find($id)->get();
    }

    public function update($id){

        $attributes = request()->validate([

            'name' => 'required',
            'country' => 'required'
        ]);

        City::find($id)->update($attributes);

        return 'City updated';
    }

    public function destroy($id){

        City::destroy($id);

        return 'City deleted';
    }
}
