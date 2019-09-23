<?php

namespace App\Jobs\Product;


use App\Http\Requests\Product\Create as Request;
use App\Image;
use App\Product;

class Update
{

    /**
     * Execute the job.
     *
     * @param Request $request
     * @return void
     */
    public function handle(Request $request)
    {
        $id = $request->get('id');
        $prod = Product::findOrfail($id);
        $prod->name = $request->name();
        $prod->title = $request->title();
        $prod->body = $request->body();
        $prod->price = $request->price();
        $prod->status = $request->get('status');
        if ($prod->save() && $request->hasFile('image'))
        {
            foreach ($prod->images as $img){
               file_exists($img->image)? unlink($img->image) : '';
               $img->delete();
            }
            foreach ($request->file('image') as $item){
                $image = new Image;
                $image->image = $item->store('uploads');
                $image->product_id = $prod->id;
                $image->save();
            }
        }
    }
}
