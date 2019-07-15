<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function sign(){
    	return view('auths.sign');
    }

    public function postsign(Request $request){
    	dd($request -> all());
    	return view('dashboar');
    }
}
