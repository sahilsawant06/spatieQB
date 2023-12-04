<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;
    public function shopper(){
        return $this->belongsTo(Shopper::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
