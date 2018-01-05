<?php

namespace App\Http\Requests;

use App\Rules\OldPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateSettingsRequest extends FormRequest
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
        $user = Auth::user();
        return [
            'pseudo' => [
                'string',
                'required',
                Rule::unique('users')->ignore($user['id'])
            ],
            'email' => [
                'email',
                'required',
                Rule::unique('users')->ignore($user['id'])
            ],
            'current_password' => ['required', new OldPassword],
            'password' => 'between:5,100|confirmed'
        ];
    }
}
