<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditValueRequest extends FormRequest
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
            'name'=>'required|unique:values,value,'.$this->id_value,
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Giá trị của thuộc tính không được để trống!',
            'name.unique'=>'Giá trị của thuộc tính Đã Tồn tại!',
        ];
    }

}
