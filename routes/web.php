<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('trang-chu');
Route::prefix('quanly_sanpham')->group(function(){
	Route::name('quanly_sanpham.')->group(function(){
       	Route::get('/','api\APISanPhamController@index')->name('danh-sach');
       	Route::get('/formthemsp','api\APISanPhamController@create')->name('form-them-sp');
       	Route::post('/themsp_ok','api\APISanPhamController@store')->name('themsp_ok');
	});
	
});