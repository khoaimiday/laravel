<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'id'=>'required',
            'title'=>'required|string|min:3',
            'content'=>'required',
            'image'=>'file|image|mimes:jpeg,png,jpg|max:10240'
            //
        ];
    }
    public function message()
    {
        return [
        'id.required'=>'Mã Tin tức không được để trống!',
        'title.required'=>'Tiêu đề không được để trống!',
        'content.required'=>'Nội dung không được để trống!',
        'image.image'=>'Chỉ có thể upload hình ảnh!',
        'image.mimes'=>'Tập tin chỉ chứa đuôi jpg, jpeg, png!',
        'image.max'=>'Kích thước không quá 10Mb!'
        ];
    }
}
