<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * @package App
 * @property string | $image
 * @property integer | $product_id
 */
class Image extends Model
{
    protected $fillable = [
        'image','product_id'
    ];
}
