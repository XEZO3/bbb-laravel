<?php

namespace App\Http\Controllers;
use App\Http\bigbluebutton\meetingInit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\meetings;
use App\Models\running_meetings;

class MeetingController extends Controller
{
    
    function createMeeting(Request $request,$randomId=""){
        $meetingId = ($randomId==null)?rand():$randomId;
        $runningMeeting = running_meetings::where("classes_id","1")->first();
        if($runningMeeting !=null){
             if(meetingInit::isMeetingRunning($runningMeeting->meetingId)){
                $join= meetingInit::initjoin($runningMeeting->meetingId);
             }else{
                running_meetings::where("classes_id","1")->delete();
             }
        }
        //print_r($runningMeeting);
        // $result = meetingInit::initcreate($meetingId,"test5556");
        // if($result->returncode=="SUCCESS"){

        //    $join= meetingInit::initjoin($meetingId);
          
        //   return Redirect::to($join);
        // }else{
        //     echo"noo";
        // }

    }
}
