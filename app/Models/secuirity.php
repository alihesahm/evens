<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secuirity extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'user_id',
        'password',
        'email',
        'phone_number',
        'address',

    ];



    public function user(){
        return $this->belongsTo(User::class);
    }
    public function party(){
        return $this->hasMany(party::class);
    }
}
