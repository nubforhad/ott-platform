<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Catagory;

class Video extends Model
{
     protected $fillable = [
        'name',
        'title',
         'catagory_id',
        'iframe',
        'image',
        'description'
       
    ];

 public function category()
    {
        return $this->belongsTo(Catagory::class, 'catagory_id');
    }
}
