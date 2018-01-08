<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
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
            'title' => 'string:between:5:200|required',
            'price' => 'numeric|required',
            'object' => 'string|required',
            'date_begin' => 'date|required',
            'date_end' => 'date|required|after:date_begin',
            'description' => 'string|between:5,1000|required',

            'city_name' => 'string|between:1,100|required',
            'city_number' => 'numeric|required',
            'street_number' => 'numeric|required',
            'street_name' => 'string|between:1,150|required'
        ];
    }
}
