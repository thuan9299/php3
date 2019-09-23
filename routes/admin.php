<?php 
Route::get('/', 'PostController@homepage')->name('homepage');
Route::get('product', 'ProductController@product')->name('product');
Route::get('category', 'CategoryController@category')->name('category');
Route::group(['middleware' => 'admin.check'], function() {
	Route::get('post-remove/{id}', 'PostController@remove')->name('post.remove');
	Route::get('post/add', 'PostController@addForm')->name('post.add');
	Route::post('post/add', 'PostController@saveAdd');
	Route::get('post/edit/{id}', 'PostController@editForm')->name('post.edit');
	Route::post('post/edit/{id}', 'PostController@saveForm');
	
	Route::get('product-remove/{id}', 'ProductController@remove')->name('product.remove');
	Route::get('product/add', 'ProductController@addForm')->name('product.add');
	Route::post('product/add', 'ProductController@saveAdd');
	Route::get('product/edit/{id}', 'ProductController@editForm')->name('product.edit');
	Route::post('product/edit/{id}', 'ProductController@saveForm');

	Route::get('category-remove/{id}', 'CategoryController@remove')->name('category.remove');
	Route::get('category/add', 'CategoryController@addForm')->name('category.add');
	Route::post('category/add', 'CategoryController@saveAdd');
	Route::get('category/edit/{id}', 'CategoryController@editForm')->name('category.edit');
	Route::post('category/edit/{id}', 'CategoryController@saveForm');
});
?>