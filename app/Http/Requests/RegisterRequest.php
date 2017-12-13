<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'nom' => 'between:1,50|required',
            'prenom' => 'between:1,50|required',
            'email' => 'unique:users|email',
            'mdp' => 'required|between:5,100|confirmed',
            'mdp_confirmation' => 'required_with:mdp'
        ];
    }
}
