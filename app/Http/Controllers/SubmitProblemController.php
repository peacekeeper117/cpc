<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use League\Flysystem\SafeStorage;
use App\submitProblem;

class SubmitProblemController extends Controller
{
    //
    public function index()
    {
       return view('frontEnd.contributions.problemset.submitProblems');
    }
    public function submitProblem(Request $request){
        $problem = new submitProblem();
        $problem->name= $request->name;
        $problem->time_limit=$request->time_limit;
        $problem->memory_limit=$request->memory_limit;
        $problem->author=$request->author;
        $problem->modified_by=$request->modified_by;
        $problem->dataset_author= $request->dataset_author;
        $problem->type='Beginner';
        $problem->comment = $request->comment;



            $problem->completed=true;
            $getGeneratedId = DB::table('submit_problems')->max('id')+1;
            $tmp= (string)$getGeneratedId;
           
            /* temporarily save here*/
            $request->file('desc')->storeAs('public',$tmp.'.pdf');
            $request->file('input')->storeAs('public',$tmp.'_in.txt');
            $request->file('output')->storeAs('public',$tmp.'_out.txt');
            // Upload using a stream...
            
            //$filePath=$request->file('desc')-> getPathName();
            //$filename = $request->file('desc')->getClientOriginalName();
            $filePath=storage_path().'/app/public/'.$tmp.'.pdf';
            $filename=$tmp.'pdf';
            Storage::cloud()->put($filename, fopen($filePath, 'r+'));
            // Get file listing...
            $dir = '/';
            $recursive = false; // Get subdirectories also?
            $contents = collect(Storage::cloud()->listContents($dir, $recursive)); 
            $filePath=storage_path().'/app/public/'.$tmp.'_in.txt';
            $filename=$tmp.'_in.txt';
            
            Storage::cloud()->put($filename, fopen($filePath, 'r+'));
            $contents = collect(Storage::cloud()->listContents($dir, $recursive));
            $filePath=storage_path().'/app/public/'.$tmp.'_out.txt';
            $filename=$tmp.'_out.txt';
            Storage::cloud()->put($filename, fopen($filePath, 'r+'));

            $contents = collect(Storage::cloud()->listContents($dir, $recursive));
           
            unlink(storage_path('app/public/'.$tmp.'.pdf'));
            unlink(storage_path('app/public/'.$tmp.'_in.txt'));
            unlink(storage_path('app/public/'.$tmp.'_out.txt'));
        
        $problem->save();
        return redirect('/submit-problem')-> with('message','Successful!! Thank You for your contribution');
        
    }
}
