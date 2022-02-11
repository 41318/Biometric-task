<?php

namespace App\Models;

use App\Models\City;
use App\Models\Pizza;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Restaurant extends Model
{
    use HasFactory, Notifiable;

    public function city(){

        return $this->belongsTo(City::class);
    }

    public function menu(){

        return $this->hasMany(Pizza::class);
    }
}
