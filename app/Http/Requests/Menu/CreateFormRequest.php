<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Xác định xem người dùng có được phép thực hiện yêu cầu này hay không. nền từ false đổi thành true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            
        ];
    }

    public function messages() : array {
        return [
            'name.required' => 'Vui lòng nhập tên danh mục'
        ];
    }
}
