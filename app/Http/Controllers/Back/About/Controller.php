<?php

namespace App\Http\Controllers\Back\About;

use App\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $about = About::first();
        return view('back.about.index',compact('about'));
    }
    
    public function update(Request $request)
    {
        $about = About::first();
        $about->body = $request->get('body');
        $about->save();
        return back()->with('success',trans('admin.about_edited'));
    }
    
    
    
}
