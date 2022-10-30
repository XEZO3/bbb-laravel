<?php
namespace App\Http\bigbluebutton;

class meetingInit{
    private static $url = "https://elerning-ezo.ga/bigbluebutton/api/";
    private static $secret ="6ihY1dJA9fiWM5x1OgmGG9yC6h8QF3w17ydigIJ3EI";
    private static $redirectTo = "127.0.0.1";
   static function initcreate($roomId,$title){
        
        $conf =[
            "meetingID"=> "$roomId",
            "allowStartStopRecording"=>"true",
            "attendeePW"=>"pww2r",
            "moderatorPW"=>"pww3rr",
            "name"=>str_replace(" ","-","$title"),
            "allowStartStopRecording"=>"true",
            "record"=>"true",
            "logoutURL"=>self::$redirectTo   
              ];  
            
            $url=self::generateUrl($conf,"create");
            $xml = simplexml_load_file($url);
            return $xml;

           
            }
            
    static function generateUrl($conf,$type){
    $url = self::$url.$type."?";
    $checksum="$type";
    foreach($conf as $key =>$value){
        $url .="&".$key."=".$value;
        $checksum .="&".$key."=".$value;
    }
     $result = $url."&checksum=".sha1($checksum.self::$secret);
     return $result;
        }

    static function initjoin($meetingId){
       
        $conf =[
            "fullName"=>auth()->user()->name,
            "meetingID"=>"$meetingId",
            "password"=>"pww3rr",
            "redirect"=>"true",
        ];
         $result=self::generateUrl($conf,"join");
         return $result;
         //print_r($result);
    }
}

?>