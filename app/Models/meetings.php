<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meetings extends Model
{
    protected $fillable = [
        'title',
        'meetingId',
        'ClassId',
    ];
    use HasFactory;
    // public function user(){
    //     return $this->belongsTo(User::class,'user_id');
    // }
}
