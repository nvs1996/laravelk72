<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:3|max:10',
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'email không được để trống !',
            'email.email'=>'email Đúng định dạng !',
            'password.required'=>'Mật khẩu không được để trống !',
            'password.min'=>'mật khẩu phải lớn hơn 3 ký tự !',
            'password.max'=>'mật khẩu phải nhỏ hơn 10 ký tự!',
        ];
    }
}
