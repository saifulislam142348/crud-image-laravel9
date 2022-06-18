<?php

namespace App\Http\Controllers;
use App\Models\student;

use Illuminate\Http\Request;

class controller extends Controller
{
    public function insert(){

        return view('\add');
    }

    public function store(Request $request){

        $student= new student;
        $student->name=$request->input('name');
        $student->email=$request->input('email');
        $student->course=$request->input('course');
        $student->section=$request->input('section');
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'storage/saiful/'.$request->input('name').'.'.$extenstion;
            $file->move('storage/saiful/', $filename);
            $student->image = $filename;
        }
       $student->save();
       return redirect()->back()->with('status','data insert succefully');
    }

    public function viewdata(){

        $student= student::all();
        return view('show', compact('student'));


    }
   
}