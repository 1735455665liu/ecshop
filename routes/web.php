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
Route::post('/regdo','Reg\RegController@regdo');  //注册执行
Route::get('login.html','Login\LoginController@login');  //登录
Route::post('/logindo','Login\LoginController@logindo');  //登录执行
Route::get('/loginout','Login\LoginController@loginout');