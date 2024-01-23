<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class party extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'description',
      'location',
      'startdate',
      'user_id',
      'category_id',
      'secuirity_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function invites(){
        return $this->hasMany(invite::class);
    }
    public function category(){
        return $this->belongsTo(category::class);
    }

    public function secuirity(){
        return $this->belongsTo(secuirity::class);

    }
}
