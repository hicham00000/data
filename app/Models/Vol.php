<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vol extends Model
{
    use HasFactory;
   
    public function airportDepart()
    {
        return $this->belongsTo(Airport::class,'id');
    }

}
