<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class EditorController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('editor',['except'=>'test']);
    }

    public function index()
    {
    	return view('admin.editor');
    }

     public function test()
    {
    	//return Auth::user()->email;
    	return view('admin.test');
    }
}
