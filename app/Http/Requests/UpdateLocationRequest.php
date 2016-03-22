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
            'id'        => 'required|exists:trucks,id',
            'latitude'  => [
                            'required',
                            'regex:/^[+-]?([1-8]?\d(?:\.\d{1,})?|90(?:\.0{1,6})?)$/'],
            'longitude' => [
                            'required',
                            'regex:/^[+-]?((?:1[0-7]|[1-9])?\d(?:\.\d{1,})?|180(?:\.0{1,})?)$/']
        ];
    }

    public function response(array $errors){
        return response()->json($errors);
    }
}
