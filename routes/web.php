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

Route::get('/','Home\HomeControoler@index');    //首页
Route::get('product-list.html','Goods\GoodsController@goodslists');    //商品详情



Route::post('/cart/cartAdd','Cart\CartController@cartAdd');    //添加购物车
Route::get('/cart/cartList','Cart\CartController@cartList');    //购物车列表





Route::post('/Coll/colladd','Coll\CollController@colladd');    //收藏
Route::get('/colllist.html','Coll\CollController@colllist');    //收藏列表
Route::post('/Coll/colldel','Coll\CollController@colldel');    //列表删除收藏
