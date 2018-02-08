<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\codeforces;
use App\standingInfo;
use App\updateinfo;
use Carbon\Carbon;

class StandingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
    $res = DB::table('users')->get();
    
    foreach ($res as $result){
        $cf_response=cf_info($result->cf_handle);
        $uva_response=uva_info($result->uva_id);
        //$obj=array("cf"=>$cf_response["result"][0]["rating"],"uva"=>$uva_response[0]["ac"]);
        $rank= new standingInfo();
        $rank->name = $result->name;
        $rank->session= $result->session;
        $rank->uva_id= $result->uva_id;
        $rank->cf_handle= $result->cf_handle;
        $rank->cf_points= floatval($cf_response["result"][0]["rating"])/100;
        $rank->cf_level = $cf_response["result"][0]["rank"];
        $rank->uva_points = floatval($uva_response[0]["ac"])/10;
        $rank->total_points= $rank->cf_points+$rank->uva_points;
        $temp= DB::table('standing_infos')->where('uva_id', '=', $result->uva_id )->get();
        $comp=0;
        foreach($temp as $bal){
            $comp=$bal->cf_points;
        }
        if($rank->cf_points >= $comp ){
            DB::table('standing_infos')->where('uva_id', '=', $result->uva_id )->delete();
        
            $rank->save();
        }
    };
    
   $var=1;
   $obj=DB::table('standing_infos')->where('session','=', Auth::user()->session)->orderby('total_points','DESC')->get();
   return view('frontEnd.standings.standingsContent',['obj'=>$obj,'var'=> $var]);
    
    }
    public function rankingCfBased(){
        
        $mem_old=DB::table('updateinfos')->where('basis','rank')->value('members');
        $time_old=DB::table('updateinfos')->where('basis','rank')->value('updated_at');
        
        $time_now= Carbon::now();
        $diff= strtotime($time_now)-strtotime($time_old);

        $res = DB::table('users')->get();
        $mem=DB::table('users')->count();
        
        if($diff<=3600 && $mem_old==$mem){
            $var=1;
            $obj=DB::table('standing_infos')->where('session','=', Auth::user()->session)->orderby('cf_points','DESC')->get();
            return view('frontEnd.standings.rankCFbased',['obj'=>$obj,'var'=> $var]);
        }
        
        
        foreach ($res as $data){
            
            
            $cf_response=cf_info($data->cf_handle);
            //return $cf_response;
            if(!strcmp($cf_response['status'],'FAILED')){
                return $data->cf_handle;
            }
            
            DB::table('standing_infos')-> where('cf_handle','=',$data->cf_handle)->update(array(
                'cf_level'=> $cf_response['result'][0]['rank'],
                'cf_points'=>$cf_response['result'][0]["rating"]
            ));
        };
        
        $var=1;
        $obj=DB::table('standing_infos')->where('session','=', Auth::user()->session)->orderby('cf_points','DESC')->get();
        
        DB::table('updateinfos')-> where('basis','=','rank')->update(array(
            'members'=> $mem,
            'updated_at' => date('Y-m-d G:i:s')
        ));
        
        
        return view('frontEnd.standings.rankCFbased',['obj'=>$obj,'var'=> $var]);
        
        
    }
}
