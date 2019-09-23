<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddPostRequest;
use App\Http\Requests\EditPostRequest;
class PostController extends Controller
{
    public function homepage(Request $request){
    	// 1. Lấy keyword từ đường dẫn
		$kw = $request->keyword; 
		// 2. thực hiện câu lệnh select * from posts where title like %keyword%
		if(!$request->has('keyword') || empty($kw)){
			$posts = Post::paginate(5);	
		}else{
			$posts = Post::where('title', 'like', "%$kw%")
								->paginate(5);
			// thêm tham số đường dẫn keyword khi người dùng
			// có tìm kiếm để tránh lỗi phân trang
			$posts->withPath("?keyword=$kw");
		}
		
		return view('homepage', [
				'dsBaiViet' => $posts
		]);
    }
     public function remove($id){
        DB::beginTransaction();
        try{
            $model = Post::find($id);
            if($model){
                $model->delete();
                DB::commit();
            }
        }catch(Exception $ex){
            DB::rollback();
        }
        
        return redirect(route('homepage'));
    }
    public function addForm(){
    	$cates = Category::all();
    	return view('post.add-form', compact('cates'));
    }
    public function saveAdd(AddPostRequest $request){
         $model = new Post();
         if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAS('posts',str_replace(' ','-',uniqid().'-'.$request
               ->image->getClientOriginalName()));
            //lấy tên gốc của ảnh 
            //thay thế ký tự khoảng trắng bằng kí tự '_'
            //thêm đoạn chuỗi không bị trùng đằng trước tên ảnh
            //lưu ảnh và trả về đường dẫn
            $model->image = 'images/'.$path;
         }
         $model->fill($request->all());
         $model->save();
         return redirect(route('homepage'));
    }
    public function editForm($id){
        $model = Post::find($id);
        if (!$model) {
            return redirect()->route('404');
         }
         $cates = Category::all();
         return view('post.edit-form', compact('model','cates'));
    }
    public function saveForm(EditPostRequest $request) {
         $model = Post::find($request->id);
         if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAS('posts',str_replace(' ','-',uniqid().'-'.$request
               ->image->getClientOriginalName()));
            $model->image = 'images/'.$path;
         }
         if (!$model) {
            return redirect()->route('404');
         }
         if ($request->status == null) {
             $model->status = 0;
         }
        $model->fill($request->all());
        $model->save();
        return redirect(route('homepage'));
    }
}
