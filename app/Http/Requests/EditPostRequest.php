<?php
namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
class EditPostRequest extends FormRequest
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
        $validate = [
            'title' => ['required',
            'max:100',
            'min:4'
            ,Rule::unique('posts')->ignore($this->id) ],
            'content' => ['required', 'max:500',Rule::unique('posts')->ignore($this->id) ],
            'author' => ['required','min:2'],
            'publish_date' => ['required'],
        ];
        if($this->id){
            $validate['image'] = 'file|mimes:jpeg,png,jpg,jfif|max:10240';
        }
        return $validate;   
    }
    public function messages(){
        return [
            'title.required' => "Hãy nhập tiêu đề bài viết",
            'title.unique' => "Tiêu đề bài viết đã tồn tại",
            'title.max' => "Tiêu đề không quá 100 ký tự",
            'title.min' => "Tiêu đề cần ít nhất 4 ký tự",
            'image.file' => "Hãy chọn định dạng là file",
            'image.mimes' => "Hãy chọn ảnh theo định dạng jpeg, png, jpg, jfif)",
            'image.max' => "File ảnh không lớn hơn 10MB",
            'publish_date.required' => "Hãy nhập thời gian",
            'content.required' => "Hãy nhập nội dung",
            'content.max' => "Nội dung không quá 500 kí tự ",
            'author.required' => "Hãy nhập tên tác giả",
            'author.min' => "Tên tác giả cần ít nhất 2 ký tự"
        ];
    }
}
