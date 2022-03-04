<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRegisterRequest extends FormRequest
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
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'confirm-password'=>'required',
            'agree'=>'accepted',
        ];
    }
    public function message()
    {
        return [
            'required'=>'Không được để trống trường này',
            'accepted'=>'Vui lòng check trường này'
        ];
    }
}
