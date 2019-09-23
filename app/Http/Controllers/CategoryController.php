<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\EditCategoryRequest;

class CategoryController extends Controller
{
    public function category(){
    	$cates = Category::paginate(4);
    	return view('category', [
				'dsCate' => $cates
		  ]);
    }
    public function remove($id){
        DB::beginTransaction();
        try{
            $model = Category::find($id);
            if($model){
                $model->delete();
                DB::commit();
            }
        }catch(Exception $ex){
            DB::rollback();
        }
        
        return redirect(route('category'));
    }
    public function addForm(){
    	$cates = new Category();
    	return view('category.add-category', compact('cates'));
    }
    public function saveAdd(AddCategoryRequest $request){
         $model = new Category();
         $model->fill($request->all());
         $model->save();
         return redirect(route('category'));
    }
    public function editForm($id){
        $model = Category::find($id);
        if (!$model) {
            return redirect()->route('404');
         }
         return view('category.edit-category', compact('model'));
    }
    public function saveForm(EditCategoryRequest $request) {
         $model = Category::find($request->id);
          if (!$model) {
            return redirect()->route('404');
         }
        $model->fill($request->all());
        $model->save();
        return redirect(route('category'));
    }
}
