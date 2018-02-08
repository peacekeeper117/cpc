<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        return redirect('/forums');
=======
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
        return view('frontEnd.home.homeContent');
    }
}
