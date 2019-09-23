<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
/**
 * Class Product
 * @package App
 * @property integer | $id
 * @property  string | $name
 * @property  array | $title
 * @property  array | $body
 * @property  array | $price
 * @property  string | $slug
 * @property  boolean | $status
 */
class Product extends Model
{

    use HasSlug;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }



    protected $fillable = [
        'name','title','body','price','slug','status'
    ];

    protected $casts = [
        'title' => 'array',
        'body' => 'array',
        'price' => 'array',
    ];
    public function images():HasMany
    {
        return $this->hasMany('App\Image');
    }




    public function title()
    {
        switch (App::getLocale())
        {
            case 'uz':
                return $this->title['uz'];
                break;
            default:
                return $this->title['ru'];
        }
    }

    public function body()
    {
        switch (App::getLocale())
        {
            case 'uz':
                return $this->body['uz'];
                break;
            default:
                return $this->body['ru'];
        }
    }




}
