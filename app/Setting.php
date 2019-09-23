<?php

namespace App;
use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 * @package App
 * @property array | null $body
 */
class Setting extends Model
{
     protected $fillable = [
      'header_text'
    ];

    protected $casts = [
        'header_text' => 'array'
    ];

    public function header_text()
    {
        switch (App::getLocale())
        {
            case 'uz':
                return $this->header_text['uz'];
                break;
            default:
                return $this->header_text['ru'];
        }
    }
}
