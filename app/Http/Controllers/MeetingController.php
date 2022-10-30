<?php

namespace App\Http\Controllers;
use App\Http\bigbluebutton\meetingInit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MeetingController extends Controller
{
    
    function createMeeting(Request $request,$randomId=""){
        $meetingId = ($randomId==null)?rand():$randomId;
        $result = meetingInit::initcreate("zhhhzhhhzhhhz","test335522");
        if($result->returncode=="SUCCESS"){
           $join= meetingInit::initjoin("zhhhzhhhzhhhz");
          
          return Redirect::to($join);
        }else{
            echo"noo";
        }
    }
}
