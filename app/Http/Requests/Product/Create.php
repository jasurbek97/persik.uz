<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['array'],
            'title.ru' => ['nullable','string','max:200'],
            'title.uz' => ['nullable','string','max:200'],
            'body' => ['array'],
            'body.ru' => ['nullable','string'],
            'body.uz' => ['nullable','string'],
            'name' => ['required','string','max:100'],
            'price' => ['array'],
            'price.sell' => ['required','string','max:200'],
            'price.discount' => ['nullable','string','max:200'],
            'image' => ['nullable','array'],
        ];
    }

    public function name():string
    {
        return (string) $this->get('name');
    }

    public function title():array
    {
        return (array) $this->get('title');
    }

    public function body():array
    {
        return (array) $this->get('body');
    }
    public function price():array
    {
        return (array) $this->get('price');
    }
}
