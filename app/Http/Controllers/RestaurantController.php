<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Restaurant;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RestaurantController extends Controller
{
    public function index(){

        return Restaurant::all();
    }

    public function store(){

        $attributes = request()->validate([

            'city_id' => ['required', Rule::exists('cities','id')],
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        $restaurant = Restaurant::create($attributes);

        $response = ['restaurant' => $restaurant];

        return response($response);
    }

    public function update($id){

        $attributes = request()->validate([

            'city_id' => ['required', Rule::exists('cities', 'id')],
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);

        Restaurant::find($id)->update($attributes);

        return 'Restaurant updated';
    }

    public function show($id){

        return Restaurant::find($id)->get();
    }

    public function menu($id){

        return Pizza::where('restaurant_id',$id)->get();
    }

    public function destroy($id){

        Restaurant::destroy($id);

        return 'Restaurant deleted';
    }
}
