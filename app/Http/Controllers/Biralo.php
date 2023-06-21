<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Biralo extends Controller
{
    function biralo(){
        echo "hello am new here";
    }
    // function jovic(){
    //     $me = view('neeww');
    //     if(exist($me))
    //     {
    //         return 1;

    //     } 
    //     else{
    //         return view('hello');
    //     }
    // }
    function jovic(){
        return view('new');
    }
}
