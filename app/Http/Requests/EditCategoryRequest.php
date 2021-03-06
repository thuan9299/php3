<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditCategoryRequest extends FormRequest
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
        $validate =[
            'name' => ['required',
            'max:100',
            'min:4',
            Rule::unique('categories')->ignore($this->id)
        ]
    ];
    return $validate;
}
public function messages(){
    return [
        'name.required' => "Hãy nhập tên danh mục",
        'name.max' => "Tên danh mục không được vượt quá 100 ký tự",
        'name.min' => "Tên danh mục cần ít nhất 4 ký tự",
        'name.unique' => "Tên danh mục đã tồn tại"
    ];
}
}
