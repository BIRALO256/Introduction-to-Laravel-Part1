<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function Blade(){
        $data =['jovic','biralo','omo','vian'];
        return view('vian',compact('data'));
    }
}
