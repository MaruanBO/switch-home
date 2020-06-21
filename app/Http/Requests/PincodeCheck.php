<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use DB;


class PincodeCheck extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'codigo_activación' => 'required|digits:4',
        ];
    }

    public function withValidator($validator)
    {   

        $validator->after(function ($validator) {
            $security = DB::table('seguridad')->get()->first();
            if ( !Hash::check($this->codigo_activación, $security->sensor_pin) ) {
                $validator->errors()->add('codigo_activación', 'El pin introducido es erroneo.');
            }
        });

        return;
    }
}
