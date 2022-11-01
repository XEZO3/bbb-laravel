<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    public static function classComonents(){
        $text = "
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt debitis cum quo est alias officia molestias neque, libero, nemo et ratione architecto?";
        return  [
            [
            'title'=>"Live Video",
            'descreption'=>$text,
            'ImageName'=>"https://brid.tv/wp-content/uploads/2020/07/01-1.jpg",
            'side'=>"left"
            ],
            [
            'title'=>"Recorded Video",
            'descreption'=>$text,
            'ImageName'=>"https://yello.co/wp-content/uploads/2019/09/Pre-recorded-candidate-view-1.png",
            'side'=>"right"
            ],
            [
                'title'=>"Homework",
                'descreption'=>$text,
                'ImageName'=>"https://helpfulprofessor.com/wp-content/uploads/2022/01/homework-1024x683.jpg",
                'side'=>"left"
                ], 
                [
                    'title'=>"Exams",
                    'descreption'=>$text,
                    'ImageName'=>"https://helpfulprofessor.com/wp-content/uploads/2022/01/homework-1024x683.jpg",
                    'side'=>"right"
                    ],   
                
            
        ];
    }
    
    public function user(){
        return $this->belongsToMany(User::class,'user_classes');
    }
    function running_meeting(){
        return $this->hasOne(running_meeting::class,"classes_id");
    }
    // public function checkUserClass(){

    // }
}
