<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Catalog;
use App\Product;

class AdminController extends Controller
{
    public function getIndex()
    {

    	return view('dashboard.index');
    }

    public function getTableBasic()
    {
    	return view('dashboard.table_basic');
    }

    public function getDataTable()
    {
    	return view('dashboard.table_data_table');
    }

    public function getProducts()
    {
        $catalog = Catalog::all();
        $product = Product::all();
        // dd($catalog);
        return view('dashboard.table_products')->with(['catalogs'=>$catalog, 'products'=>$product]);
    }


}
