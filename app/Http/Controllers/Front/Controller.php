<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller as BaseController;
use App\Product;
use App\Setting;
use App\About;
use Illuminate\Http\Request;

class Controller extends BaseController
{


    public function index()
    {
        $setting = Setting::first();
        $products = Product::where('status',true)->orderBy('id','desc')->get();
        return view('front.index',compact('products','setting'));
    }

    public function more($slug)
    {
        $setting = Setting::first();
        $product = Product::where('slug',$slug)->first();
        return view('front.product.more',compact('product','setting'));
    }
    
    public function about()
    {
        $setting = Setting::first();
        $about = About::first();
        return view('front.about.index',compact('about','setting'));
    }
    
    public function contact()
    {
        $setting = Setting::first();
        $contact = About::first();
        return view('front.contact.index',compact('contact','setting'));
    }
    
    public function success()
    {
        return view('front.success');
    }
    
    
}
