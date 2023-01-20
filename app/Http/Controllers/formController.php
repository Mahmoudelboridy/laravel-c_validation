<?php

namespace App\Http\Controllers;

use App\Http\Requests\postrequest;
use App\Models\posts;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function form(){
        return view('form');
    }
    public function store(postrequest $request){
      if($request->validated()){
        posts::create([
            'title'=> $request->title,
            'content'=>$request->content
        ]);
      }  
      
     
    }
}