<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listController extends Controller
{
    public function index(){
        return view ('list');
    }

    public function create(request $request){
        return $request->all();
    }
}
