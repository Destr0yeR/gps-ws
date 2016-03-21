<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateLocationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'id'    => 'exists:trucks,id',
            'la'    => 'regex:/^[+-]?\d+\.\d+, ?[+-]?\d+\.\d+$/',
            'lo'    => 'regex:/^[+-]?\d+\.\d+, ?[+-]?\d+\.\d+$/'
        ];
    }
}
