<?php
//Endpoints Of Hackerearth API
use Faker\Provider\File;
use Illuminate\Support\Facades\Response;


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



?>