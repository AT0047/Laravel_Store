<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatigoryrController extends Controller
{
    public function index(){
        
        return view('catigories.index');
    }
}
