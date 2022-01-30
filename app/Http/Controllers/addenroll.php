<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\checkpay;
use App\Models\gradese;

class addenroll extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
        'email'=>'required|email',
        'key'=>'required|max:4|min:3',
        
     
     ]);




        $classdata =new checkpay;
        $classdata->email=$request->email;
        $classdata->enrollkey=$request->key;
        
        $classdata->save();
    
    
        $data=checkpay::all();
        //dd($data);
        //return view('classview')->with('classview',$data);
        return redirect('addenrollv')->with('message', 'Added Successfully!');

     
     
     
   
     
     
     
        }
}
