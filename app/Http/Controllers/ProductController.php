<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
class ProductController extends Controller
{
    public function product(Request $request){
    	// 1. Lấy keyword từ đường dẫn
		$kw = $request->keyword; 
		// 2. thực hiện câu lệnh select * from posts where title like %keyword%
		if(!$request->has('keyword') || empty($kw)){
			$products = Product::paginate(5);	
		}else{
			$products = Product::where('title', 'like', "%$kw%")
								->paginate(5);
			// thêm tham số đường dẫn keyword khi người dùng
			// có tìm kiếm để tránh lỗi phân trang
			$products->withPath("?keyword=$kw");
		}
		
		return view('product', [
				'dsSP' => $products
		]);
    }
    public function index(Request $request){
        $product = Product::limit(8)->get();
        $post = Post::paginate(4);
        $showcate = Category::all();  
        return view('index', [
                'product' => $product,
                'post' => $post,
                'showcate' => $showcate
        ]);
    }
    public function productdetail($id){
        $product = Product::where('id', '=', $id)->select('*')->first();
        $sanPhamTuongTu = Product::limit(4)->get();
        $des = html_entity_decode($product->description);
        return view('product-detail', compact('product', 'des', 'sanPhamTuongTu'));
    }
    public function remove($id){
        DB::beginTransaction();
        try{
            $model = Product::find($id);
            if($model){
                $model->delete();
                DB::commit();
            }
        }catch(Exception $ex){
            DB::rollback();
        }
        
        return redirect(route('product'));
    }
    public function addForm(){
    	$cates = Category::all();
    	return view('product.add-product', compact('cates'));
    }
    public function saveAdd(AddProductRequest $request){
         $model = new Product();
         if ($request->hasFile('feature_image')) {
            $path = $request->file('feature_image')->storeAS('products',str_replace(' ','-',uniqid().'-'.$request
               ->feature_image->getClientOriginalName()));
            $model->feature_image = 'images/'.$path;
         }
         $model->fill($request->all());
         $model->save();
         return redirect(route('product'));
    }
    public function editForm($id){
        $model = Product::find($id);
        if (!$model) {
            return redirect()->route('404');
         }
         $cates = Category::all();
         return view('product.edit-product', compact('model','cates'));
    }
    public function saveForm(EditProductRequest $request) {
         $model = Product::find($request->id);
         if ($request->hasFile('feature_image')) {
            $path = $request->file('feature_image')->storeAS('products',str_replace(' ','-',uniqid().'-'.$request
               ->feature_image->getClientOriginalName()));
            $model->feature_image = 'images/'.$path;
         }
         if (!$model) {
            return redirect()->route('404');
         }
        $model->fill($request->all());
        $model->save();
        return redirect(route('product'));
    }
}