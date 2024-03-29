<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    
    use HasFactory;
      protected $fillable=[
        'name',
        'email',
        'description',
        'title',
        'type',
        'image_path'

    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
