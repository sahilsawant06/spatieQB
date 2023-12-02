<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stest extends Model
{
    use HasFactory;

    public function stests(){
        return $this->hasOne(test::class);
    }
}
