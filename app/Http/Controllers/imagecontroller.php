<?php

namespace App\Http\Controllers;
use App\Models\imageup;

use Illuminate\Http\Request;

class imagecontroller extends Controller
{
    public function insert(){

        return view('\add');
    }

    public function store(Request $request){

        $imageup= new imageup;
        $imageup->name=$request->input('name');
        $imageup->email=$request->input('email');
        $imageup->course=$request->input('course');
        $imageup->section=$request->input('section');
       
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = 'storage/saiful/'.$request->input('name').'.'.$extenstion;
            $file->move('storage/saiful/', $filename);
            $imageup->image = $filename;
        }
       $imageup->save();
       return redirect()->back()->with('status','data insert succefully');
    }

    public function viewdata(){

        $imageup= imageup::all();
        return view('/show', compact('imageup'));


    }
    public function edit($id){
        
        $imageup= imageup::find($id);
        return view('editdata' , compact('imageup'));

    
    }

    public function payment(){
        $imageup= imageup::all();
        return view('/payment', compact('imageup'));


    
    }
}


