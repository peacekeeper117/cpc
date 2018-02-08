<?php
//Endpoints Of Hackerearth API
use Faker\Provider\File;
use Illuminate\Support\Facades\Response;
use App\simple_html_dom;

function cf_info($handle){
    // Get cURL resource
    $url= "http://codeforces.com/api/user.info?handles=".$handle;
    $curl=curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL,$url);
    return json_decode(curl_exec($curl), true);
}
function uva_info($handle){
    // Get cURL resource
    $url= "https://uhunt.onlinejudge.org/api/ranklist/".$handle."/1/1.";
    $curl=curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL,$url);
    return json_decode(curl_exec($curl), true);
}
function cf_contest(){
    // Get cURL resource
    $url= "http://codeforces.com/api/contest.list?gym=false";
    $curl=curl_init();
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_URL,$url);
    return json_decode(curl_exec($curl), true);
}

function devskill_contest(){
    $html = file_get_html('https://www.devskill.com/Home');
    $str= $html->plaintext;
    $pos=strrpos($str,"Upcoming Contest");
    $ptr=null;
    for($i=$pos+24,$j=0;$i<=$pos+300;$i++,$j++){
        $ptr[$j]=$str[$i];
    }
    //return implode("", $ptr);
    $pos1=strrpos($str,"see all");
    $name=null;
    $date=null;
    $flag=true;
    for($i=$pos1+9,$j=0;;$i++){
        
        if($flag==true){
            $name[$j]=$ptr[$i];
            $j++;
            if($ptr[$i]==':'){
                $flag=false;
                $j=0;
            }
        }
        else {
            if($ptr[$i]=='('){
                break;
            }
            $date[$j]=$ptr[$i];
            $j++;
        }
    }
    $arr = array(implode("",$name),implode("",$date));

    return $arr;
}
?>