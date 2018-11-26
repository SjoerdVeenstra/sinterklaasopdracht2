<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Item;

class listController extends Controller
{
    public function index(){
        return view ('list');
    }

    public function create(request $request){
        $item = new Item;
        $item->item = $request->text;
        $item->save();
        return 'done';
    }
}
