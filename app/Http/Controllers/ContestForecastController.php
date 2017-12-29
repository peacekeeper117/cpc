<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContestForecastController extends Controller
{
    //
    public function index()
    {
        return view('frontEnd.contest.contestList');
    }
}
