<?php

namespace App\Http\Controllers;

use App\Models\Pizza;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PizzaController extends Controller
{
    public function index(){

        return Pizza::all();
    }

    public function store(){

        $attributes = request()->validate([

            'restaurant_id' => ['required', Rule::exists('restaurants', 'id')],
            'name' => 'required',
            'cheese_species' => 'required',
            'dough_thikness' => 'required',
            'secret_ingredient' => 'required'
        ]);

        $pizza = Pizza::create($attributes);

        $response = ['pizza' => $pizza];

        return response($response); 
    }

    public function show($id){

        return Pizza::find($id)->get();
    }

    public function update($id){

        $attributes = request()->validate([

            'restaurant_id' => ['required', Rule::exists('restaurants', 'id')],
            'name' => 'required',
            'cheese species' => 'required',
            'dough thikness' => 'required',
            'secret ingredient' => 'required'
        ]);

        Pizza::find($id)->update($attributes);

        return 'Pizza updated';
    }

    public function destroy($id){

        Pizza::destroy($id);

        return 'Pizza deleted';
    } 
}
