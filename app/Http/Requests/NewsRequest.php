<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends BaseRequest
{

    public function rules()
    {
        return [
            'title'=>'string|required',
            'description'=>'string|required',
        ];
    }
}
