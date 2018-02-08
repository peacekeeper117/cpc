<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
     public function profile($username)
    {
    	$user = User::where('username', $username)->first();
    	return view('frontEnd.settings.profile', compact('user'));
    }
    public function update_avatar(Request $request)
    {
    	//pic upload ei function diye
    	if($request->hasFile('avatar')){
    	$avatar=$request->file('avatar');
    	$filename= time().'.'.$avatar->getClientOriginalExtension();
    	$request->file('avatar')->move(base_path() . '/public/uploads/avatars', $filename);

    	$user=Auth::user();
    	$user->avatar= $filename;
    	$user->save();
    	}

    	return view('frontEnd.settings.profile', compact('user'));
    }

}
