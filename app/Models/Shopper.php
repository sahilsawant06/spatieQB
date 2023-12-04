<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopper extends Model
{
    use HasFactory;
    public function buyers(){
        return $this->hasMany(Buyer::class);
    }

         public function products(){
            return $this->hasMany(Product::class);
}
}
