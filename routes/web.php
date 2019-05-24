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

Route::get('register.html','Reg\RegController@reg');  //注册
Route::post('/regdo','Reg\RegController@regdo');  //用户名唯一性验证
Route::get('login.html','Login\LoginController@login');  //登录
Route::post('/logindo','Login\LoginController@logindo');  //登录



Route::post('/cart/cartAdd','Cart\CartController@cartAdd');    //添加购物车
Route::get('/cart.html','Cart\CartController@cartList');    //购物车列表
Route::post('/cart/cartDel','Cart\CartController@cartDel');    //购物车删除






Route::post('/Coll/colladd','Coll\CollController@colladd');    //收藏

Route::get('/colllist.html','Coll\CollController@colllist');    //收藏列表
Route::post('/Coll/colldel','Coll\CollController@colldel');    //列表删除收藏


Route::get('/Coll/colllist','Coll\CollController@colllist');    //收藏列表



//去结算
Route::post('/order','Order\OrderController@order');
//生成订单列表
Route::get('orderList','Order\OrderController@orderList');


//支付
//Route::get('/pay/payadd','Pay\PayController@pay');    //支付
//Route::get('/test','Pay\PayController@test');    //测试
//Route::get('/Alireturn','Pay\PayController@Alireturn');    //同步通知
//Route::post('/notify','Pay\PayController@notify');    //异步通知

