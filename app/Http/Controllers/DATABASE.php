<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DATABASE extends Controller
{
    function Biralo(){
       return DB::select("select * from studentlogin");
    }
}
