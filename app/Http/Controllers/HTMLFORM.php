<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HTMLFORM extends Controller
{
    function getdata(Request $req){
        $req->validate([

       'username'=>'required | max:10',
       'age'=>'required | min :1',
       'email'=>'required'
       
        ]);
        return $req->input();
        
    }
}
