<?php

use Illuminate\Support\Facades\Route;
use OpenAdmin\Admin\Facades\Admin;
use Illuminate\Routing\Router;
use App\Admin\Controllers\ProductController;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('my-accounts', myaccountController::class);
    $router->resource('products', ProductController::class);
});
// Route::post('/send-data-to-product', [ProductController::class, 'sendDataToProductPage'])->name('admin.sendDataToProduct');


Route::post('/send-data-to-product', [ProductController::class, 'sendDataToProductPage'])->name('admin.sendDataToProduct');
