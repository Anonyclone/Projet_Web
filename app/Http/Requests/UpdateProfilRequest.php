<?php

namespace Tartempion\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfilRequest extends FormRequest
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
            'avatar' => 'image',
            'sexe' => 'required|string',
            'surname' => 'required|string|between:1,50',
            'firstname' => 'required|string|between:1,50',
            'phone' =>  'required',
            'description' => 'required|string|between:5,500',
            'permis' => 'required|boolean',
            'vehicule' => 'required|boolean'
        ];
    }
}
