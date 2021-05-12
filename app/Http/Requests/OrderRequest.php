<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name'=>'string|required',
            'phone'=>'string|required',
            'email'=>'string|required',
            'description'=>'string|required',
        ];
    }
}
