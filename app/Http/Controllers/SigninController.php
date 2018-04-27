<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SigninController extends Controller
{
    public function signin(Request $request){
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password'=> 'required'
    	]);

    	if(Auth::attempt(['email'=>$request->input('email'), 'password'=>$request->input('password')
    	],$request->has('remember'))){
    		if($request->input('email')=='admin@admin.ru'){
    			return redirect()->route('dashboard.index');
    		}else{
    			return redirect()->route('store.index');
    		}
    	}

    	return redirect()->back()->with('fail','Authentication failed');

    }
}
