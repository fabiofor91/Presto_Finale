<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // pagina home 
    public function welcome(){
        return view('welcome');
    }
}
