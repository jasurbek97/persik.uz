<?php

namespace App\Http\Controllers\Back\Product;

use App\Http\Requests\Product\Create as Request;
use App\Http\Controllers\Controller as BaseController;
use App\Jobs\Product\Create;
use App\Jobs\Product\Update;
use App\Product;

class Controller extends BaseController
{


    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('back.product.index',compact('products'));
    }

    public function create()
    {
        return view('back.product.create');
    }


    public function store(Request $request)
    {
        $this->dispatchNow(new Create($request));
        return redirect()->route('product')->with('success',trans('admin.product_added'));
    }


    public function edit(Product $product)
    {
        return view('back.product.update',compact('product'));
    }


    public function update(Request $request)
    {
        $this->dispatchNow(new Update($request));
        return redirect()->route('product')->with('success',trans('admin.product_updated'));

    }


    public function delete(Product $product)
    {
        foreach ($product->images as $img){
            file_exists($img->image)? unlink($img->image) : '';
            $img->delete();
        }
        $product->delete();
        return back()->with('success',trans('admin.product_deleted'));
    }




}
