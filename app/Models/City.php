<?php

namespace App\Models;

use App\Models\Restaurant;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function restaurants(){

        return $this->hasMany(Restaurant::class);
    }
}
