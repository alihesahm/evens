<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invite extends Model
{
    use HasFactory;
    protected $fillable = [
        'party_id',
        'email' ,
        'name',
        'password',
        'phone_number',
        'status'
        ];
    public function party(){
        return $this->belongsTo(party::class);
    }
}
