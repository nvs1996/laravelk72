<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAttrRequest extends FormRequest
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
            'name'=>'required|unique:attribute,name,'.$this->id_attr,
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên thuộc tính không được để trống!',
            'name.unique'=>'Tên Thuộc tính đã tồn tại!',
        ];
    }
}
