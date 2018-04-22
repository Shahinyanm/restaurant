<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Catalog;
use App\Product;


class HomeController extends Controller
{
    public  function getIndex(){
        $result     = Slide::all();
        $products   = Product::where('status','=','1')->get();
        $catalogs = Catalog::where('status','=','1')->get();
        return view('store.index',['result'=>$result, 'catalogs'=>$catalogs, 'products'=>$products]);
    }
}
