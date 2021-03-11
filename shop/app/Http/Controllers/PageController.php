<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function getIndex()
    {
        $new_product = Product::where('new','=',1)->paginate(12);
        $top_product = Product::where('price','>=',2000000)->paginate(12);
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
        $nike_product = Product::where('id_type','=',2)->paginate();
        return view('page.nike',compact('nike_product'));
    }

    public function getAdidas()
    {
        $adidas_product = Product::where('id_type','=',1)->paginate();
        return view('page.adidas',compact('adidas_product'));
    }
    public function getVans()
    {
        $vans_product = Product::where('id_type','=',3)->paginate();
        return view('page.vans',compact('vans_product'));
    }
    public function getConverse()
    {
        $converse_product = Product::where('id_type','=',4)->paginate();
        return view('page.converse',compact('converse_product'));
    }

    public function getOthers()
    {
        $others_product = Product::where('id_type','=',5)->paginate();
        return view('page.others',compact('others_product'));
    }

    public function getOrdered()
    {
        return view('page.ordered');
    }
}
