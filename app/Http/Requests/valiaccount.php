<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valiaccount extends FormRequest
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
            'address_admin' => 'required|min:42|max:42',
            'name' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'address_admin.required' => 'Địa chỉ ví nhận tiền không được trống',
            'address_admin.min' => 'Địa chỉ ví nhận tiền không hợp lệ',
            'address_admin.max' => 'Địa chỉ ví nhận tiền không hợp lệ',
            'name.required' => 'Tên không được trống',
            'email.required' => 'Email không được trống',
        ];
    }
}
