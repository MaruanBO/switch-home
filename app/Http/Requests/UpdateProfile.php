<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdateProfile extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'old_password' => 'required',
            'password' => 'required|min:8|nullable|required_with:password_confirmation|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ( !Hash::check($this->old_password, $this->user()->password) ) {
                $validator->errors()->add('old_password', 'Tu contraseña actual es incorrecta.');
            }
        });

        return;
    }
}
