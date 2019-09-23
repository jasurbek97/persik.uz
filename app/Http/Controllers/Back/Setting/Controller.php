<?php

namespace App\Http\Controllers\Back\Setting;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{


    public function index()
    {
        $setting = Setting::first();
        return view('back.setting.index',compact('setting'));
    }
    
    
    public function update(Request $request)
    {
        $setting = Setting::first();
        $setting->header_text = $request->get('header_text');
        $setting->save();
        return back()->with('success',trans('admin.setting_edited'));
    }
}
