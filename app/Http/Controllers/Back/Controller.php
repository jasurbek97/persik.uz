<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{

    public function index()
    {
        return view('back.index');
    }
}
