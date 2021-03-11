<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex()
    {
    	return view('page.trangchu');
    }

    public function getRegister()
    {
    	return view('page.dangky');
    }

    public function getLogin()
    {
    	return view('page.dangnhap');
    }

    public function getShopping()
    {
    	return view('page.shopping');
    }

     public function getInfo()
    {
        return view('page.info');
    }
}
