<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    public function scopeVerified($query){
        return $query->whereNotNull("email_verified_at");

    }
    public function stests(){
        return $this->hasOne(stest::class);
    }

    public function middlename(){
        return $this->hasOne(middlename::class);
    }


}
