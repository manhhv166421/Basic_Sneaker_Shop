<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
    	return view('index');
    }

    public function getRegister()
    {
    	return view('dangky');
    }

    public function getLogin()
    {
    	return view('dangnhap');
    }

    public function getShopping()
    {
    	return view('shopping');
    }

     public function getInfo()
    {
        return view('info');
    }
}
