<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PRACTISINGHHTPREQUEST extends Controller
{
    function HTTP(){
       return Http::get('');
    }
}
