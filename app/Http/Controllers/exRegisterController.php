<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class exRegisterController extends Controller
{
    //
    public function showRegistrationForm()
    {
      
        return view('frontEnd.ex_student.reg_ex_students');
    }
    public function register(Request $request)
    {
        $id=$request->id;
        $user = User::find($id);
        //return $user;
        $user->batch = $request->batch;
        
        $user->passing_year = $request->bsc_pass_year;
        
        $user->pg_ins = serialize($request->institute_name);
        $user->pg_degrees = serialize($request->degrees);
        $user->pg_year = serialize($request->educationDate);
        $user->pg_sub = serialize($request->subject);
        
        $user->proficiency = $request->proficiency;
        
        $user->pro_name = serialize($request->project_name);
        $user->pro_platform = serialize($request->platform);
        $user->pro_desc = serialize($request->used);
        
        $user->achievment = serialize($request->achievment);
        
        $user->working_at = serialize($request->work);
        $user->working_desig = serialize($request->designation);
        
        $user->worked_at = serialize($request->worked);
        $user->worked_desig = serialize($request->exdesignation);
        //$user->batch = $request->batch;
        $user->save();
        //return view('frontEnd.settings.profile', compact('user'));
        
        
        
    
    }
}
