<?php

namespace App\Http\Controllers;

use App\contestlist;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\updateinfo;
use Goutte\Client;



class ContestForecastController extends Controller
{
    //
    public function index()
    {
        

        $mem_old=DB::table('updateinfos')->where('basis','contests')->value('members');
        $time_old=DB::table('updateinfos')->where('basis','contests')->value('updated_at');
        $mytime = Carbon::now();
        $diff= strtotime($mytime)-strtotime($time_old);
        
        $res = DB::table('users')->get();
        $mem=DB::table('users')->count();
        
        $res = DB::table('contestlists')->get();
        
        foreach ($res as $data){
            if(!strcmp($data->host,"Codeforces")){
                if($data->before+$data->duration < strtotime($mytime) ){
                    DB::table('contestlists')->where('id',$data->id)->delete();
                }
                elseif ($data->before< strtotime($mytime) && $data->before+$data->duration > strtotime($mytime) ){
                    DB::table('contestlists')->where('id',$data->id)->update(array(
                        'phase'=> 'RUNNING'
                    ));
                }
            }
        }
        
        
        if($diff<=10800 && $mem_old==$mem){
            $obj=DB::table('contestlists')->get();
            $var=0;
            return view('frontEnd.contest.contestList',['obj'=>$obj,'var'=> $var]);
            
        }
        
        
        /*$client= new Client();
        $crawler = $client->request('GET', 'https://www.symfony.com/blog/');
        return $crawler;
        */
        
        $dateinsec=strtotime($mytime);
        DB::table('contestlists')->where('phase','=','FINISHED')->delete();
        $cf_response=cf_contest();
        $res=devskill_contest();
            for($i=0;;$i++){
                if(!strcmp($cf_response["result"][$i]["phase"],'BEFORE')){
                    $contest =new contestlist();
                    
                    $contest->name=$cf_response["result"][$i]["name"];
                    $contest->duration=$cf_response["result"][$i]["durationSeconds"];
                    $contest->before=$cf_response["result"][$i]["startTimeSeconds"];
                    $contest->phase=$cf_response["result"][$i]["phase"];
                    $epoch=$cf_response["result"][$i]["startTimeSeconds"];

                //$dt= new \DateTime("@$epoch");
                //$str=$dt->format('Y-m-d H:i:s');
                
                    $ptr=strtotime(date("Y-m-d H:i:s", $epoch) . " +6 hours");
                
                    $dt= new \DateTime("@$ptr");
                    $str=$dt->format('Y-m-d H:i:s');
                
                
                    $contest->time=$str;
                    $contest->host="Codeforces";
                    try {
                    $contest->save();
                    }catch (\Exception $e){
                                         
                    }
                }
                else {
                    break;
                }
            
        }
       try{ 
        $contest =new contestlist();
        $contest->name=$res[0];
        $contest->duration=0;
        
        $contest->phase="BEFORE";
        $contest->time=$res[1];
        $contest->host="Devskill";
        
            $contest->save();
        }catch (\Exception $e){
            
        }
        
        DB::table('updateinfos')-> where('basis','=','contests')->update(array(
            'members'=> $mem,
            'updated_at' => date('Y-m-d G:i:s')
        ));
        
        $obj=DB::table('contestlists')->get();
        $var=0;
        return view('frontEnd.contest.contestList',['obj'=>$obj,'var'=> $var]);
        
    }
}
