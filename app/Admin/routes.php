<?php

use App\Admin\Controllers\EmailController;
use App\Admin\Controllers\SendingListController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('emails', EmailController::class);

    $router->resource('sending_lists', SendingListController::class);

});
