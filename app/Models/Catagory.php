<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class Catagory extends Model
{
      protected $fillable = [
        'name',
        'title',
        'count',
       
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
