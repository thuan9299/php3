<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class AddProductRequest extends FormRequest
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
            'name' => 'required|unique:products|max:100|min:4',
            'slug' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|max:500',
            'feature_image' => 'required|file|mimes:jpeg,png,jpg,jfif|max:10240',
        ];
    }
    public function messages(){
        return [
            'name.required' => "Hãy nhập tên sản phẩm",
            'name.unique' => "Tên sản phẩm đã tồn tại, hãy chọn tên sản phẩm khác",
            'name.max' => "Tên sản phẩm không được vượt quá 100 ký tự",
            'name.min' => "Tên sản phẩm cần ít nhất 4 ký tự",
            'slug.required' => "Hãy nhập slug",
            'feature_image.required' => "Bạn chưa chọn ảnh ",
            'feature_image.file' => "Hãy chọn định dạng là file",
            'feature_image.mimes' => "Hãy chọn ảnh theo định dạng jpeg, png, jpg, jfif)",
            'feature_image.max' => "File ảnh không lớn hơn 10MB",
            'description.required' => "Hãy nhập mô tả",
            'description.max' => "Mô tả không quá 500 kí tự ",
            'price.required' => "Hãy nhập giá sản phẩm",
            'price.numeric' => "Hãy nhập giá là số",
        ];
    }
}
