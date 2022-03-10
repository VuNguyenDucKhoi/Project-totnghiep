<?php

namespace App\Http\Requests\Backend;

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
            'tenchuyen'=>'required',
            'thumb' => 'required'
        ];
    }
    public function messages() : array
    {
        return [
            'tenchuyen.required' => 'Nhập tên chuyến tàu!',
            'thumb.required' => 'Ảnh không được trống'
        ];
    }
}
