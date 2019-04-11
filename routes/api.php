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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/product/{category_id?}','Api\ProductControllerApi@product_list');
Route::get('/category','Api\categoryControllerApi@category_list');

Route::post('/product/search','Api\ProductControllerApi@product_search');

Route::get('/product/chart/list','Api\ProductControllerApi@get_product_chart');
Route::get('/category/chart/list','Api\ProductControllerApi@get_category_chart');
