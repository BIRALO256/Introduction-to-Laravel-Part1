<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DATABASEMODEL;

class MODELCONTROLLER extends Controller
{
   function fectdata(){
    return  DATABASEMODEL::all();
   }
}
