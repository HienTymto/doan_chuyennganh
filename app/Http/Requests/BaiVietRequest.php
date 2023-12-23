<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BaiVietRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "tieude"=> "required",
            "noidung"=> "required",

    ];
    }
    public function messages()
 {
     return [
         'tieude.required' => 'vui lòng nhập tiêu đề',
         'noidung.required' => 'vui lòng nhập nội dung',
     ];
 }
}
