<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class HomeController extends Controller
{
    public  function getIndex(){
        $result = Slide::all();
        return view('store.index',['result'=>$result]);
    }
}
