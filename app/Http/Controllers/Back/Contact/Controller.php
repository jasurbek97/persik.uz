<?php

namespace App\Http\Controllers\Back\Contact;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{


    public function index()
    {
        $contact = Contact::first();
        return view('back.contact.index',compact('contact'));
    }
    
    
    public function update(Request $request)
    {
        $about = Contact::first();
        $about->body = $request->get('body');
        $about->save();
        return back()->with('success',trans('admin.contact_edited'));
    }
}
