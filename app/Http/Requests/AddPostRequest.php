<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use DateTime;
class AddPostRequest extends FormRequest
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
        $reqDate = new DateTime('now');
        return [
            'title' => 'required|unique:posts|max:100|min:4',
            'content' => 'required|max:500',
            'image' => 'required|file|mimes:jpeg,png,jpg,jfif|max:10240',
            'publish_date' => "after_or_equal:".$reqDate->format('Y-m-d'),
            'author' => 'required|min:2',
        ];
    }
    public function messages(){
        return [
            'title.required' => "Hãy nhập tiêu đề bài viết",
            'title.unique' => "Tiêu đề đã tồn tại, hãy chọn tiêu đề khác",
            'title.max' => "Tiêu đề không được vượt quá 100 ký tự",
            'title.min' => "Tiêu đề cần ít nhất 4 ký tự",
            'image.required' => "Bạn chưa chọn ảnh ",
            'image.file' => "Hãy chọn định dạng là file",
            'image.mimes' => "Hãy chọn ảnh theo định dạng jpeg, png, jpg, jfif)",
            'image.max' => "File ảnh không lớn hơn 10MB",
            'publish_date.after_or_equal' => "Hãy chọn ngày hiện tại hoặc sau ngày hiện tại",
            'content.required' => "Hãy nhập nội dung",
            'content.max' => "Nội dung không quá 500 kí tự ",
            'author.required' => "Hãy nhập tên tác giả",
            'author.min' => "Tên tác giả cần ít nhất 2 ký tự",
        ];
    }
}