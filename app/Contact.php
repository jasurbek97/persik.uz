<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

/**
 * Class Contact
 * @package App
 * @property array | null $body
 */
class Contact extends Model
{
     protected $fillable = [
      'body'
    ];

    protected $casts = [
        'body' => 'array'
    ];

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
