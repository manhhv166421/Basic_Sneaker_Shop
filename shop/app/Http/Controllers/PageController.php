<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function getIndex()
    {
        $new_product = Product::where('new',1)->paginate(8);
        $top_product = Product::where('price','>',2000000);
        dd($top_product);
    	return view('page.trangchu',compact('new_product','top_product'));
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

    public function getNike()
    {
        return view('page.nike');
    }

    public function getAdidas()
    {
        return view('page.adidas');
    }
    public function getVans()
    {
        return view('page.vans');
    }
    public function getConverse()
    {
        return view('page.converse');
    }

    public function getOthers()
    {
        return view('page.others');
    }

    public function getOrdered()
    {
        return view('page.ordered');
    }
}
