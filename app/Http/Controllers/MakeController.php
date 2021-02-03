<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeController extends Controller
{
    public function __invoke(){
        return view('welcome');
    }
    // public function safe(){
    //     return back();
    // }
    
}
