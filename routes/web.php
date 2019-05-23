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

<<<<<<< HEAD


Route::post('/cart/cartAdd','Cart\CartController@cartAdd');    //添加购物车
Route::get('/cart/cartList','Cart\CartController@cartList');    //购物车列表


=======
>>>>>>> 2f8d48b4ee79324a10bc4619f5eb22759bbb3382
