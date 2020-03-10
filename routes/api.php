<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('get-product/{id}', 'Api\ProductController@GetProduct'); //hiển thị
Route::post('add-user', 'Api\ProductController@AddProduct'); //thêm
Route::put('update-user/{id_user}', 'Api\ProductController@UpdateProduct');  //sửa
Route::delete('del-user', 'Api\ProductController@DeleteProduct'); //xoá
