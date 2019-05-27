<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
    //用户管理
    Route::resource('admin/user',UserController::class);
    //购物车
    Route::resource('admin/cart',CartController::class);
    //订单
    Route::resource('admin/order',OrderController::class);

});
