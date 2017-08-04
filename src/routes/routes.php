<?php
/**
 * Package main routes file
 */
Route::group(
    [
        'namespace'  => 'Deepslam\LaravelCrud\app\Http\Controllers',
        'middleware' => 'web',
        'prefix'     => config('deepslam.crud.admin.path'),
    ],
    function () {
        // if not otherwise configured, setup the auth routes
        if (config('deepslam.crud.setup_auth_routes')) {
            Route::auth();
            Route::get('logout', 'Auth\LoginController@logout');
        }

        // if not otherwise configured, setup the dashboard routes
        Route::get('dashboard', 'AdminController@index');
        Route::get('/', 'AdminController@redirect');
    });
?>