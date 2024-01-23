<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    use HasFactory;
    public function user(){
        return $this->hasMany(User::class);
    }

    public function secuirity(){
        return $this->hasMany(secuirity::class);
    }
    public function city(){
        return $this->hasMany(city::class);
    }
}
