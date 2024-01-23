<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    public function secuirity(){
        return $this->hasMany(secuirity::class);
    }

    public function country(){
        return $this->belongsTo(country::class);
    }
}
