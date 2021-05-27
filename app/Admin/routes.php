<?php


use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {
    $router->resource('menus', MenuController::class);
    $router->resource('logo', LogoController::class);
    $router->resource('display-one', DisplayOneController::class);
    $router->resource('contacts', ContactsController::class);
    $router->resource('forms', FormsController::class);
    $router->get('/', 'HomeController@index')->name('home');

});
