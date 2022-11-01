<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class running_meetings extends Model
{
    use HasFactory;
    

    function classes(){
        return $this->belongsTo(Classes::class,'classes_id');
    }
}
