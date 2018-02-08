<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\curatedContest;

class CuratedContestController extends Controller
{
    //
    public function index()
    {
        return view('frontEnd.curatedContest.curatedContest');
    }
    public function setcontest(Request $request){
        $ccontest =new curatedContest();
        $ccontest-> name = $request -> name;
        $ccontest->min_session=$request->session;
        $ccontest->description = $request->desc;
        $ccontest->password=$request->passkey;
        $ccontest->url =$request->url;
        $ccontest->duration=$request-> duration;
        $time = $request->time;
        $date=$request->date;
        $datetime=$date." ".$time;
        
        $ccontest->time=$datetime;
        $ccontest->admins="anonymous";
        $ccontest->save();
        
        return redirect('/curated-contest')-> with('message','Curated Contest is hosted Successfully');
        
    }
}
