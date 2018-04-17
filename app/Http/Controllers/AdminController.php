<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
