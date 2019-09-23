<?php
Route::get('/', 'ProductController@index')->name('index');
Route::get('product-detail/{id}', 'ProductController@productdetail')->name('detail');
Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::get('cp-login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('cp-login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('logout', function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::get('forbidden', function(){
	return view('auth.403');
})->name('forbidden');
Route::get('404', function(){
	return view('product.404');
})->name('404');
