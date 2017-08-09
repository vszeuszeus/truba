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
use App\Tovar_category;
use App\Service_category;

Route::get('/', function () {
    return view('pages.mainpage');
});

Route::get('/products', 'ProductController@index');

Route::get('/products/{tovar_category}', 'ProductController@index_category');

Route::get('/products/{tovar_category}/{tovar_podcategory}', 'ProductController@index_podcategory');

Route::get('/products/{tovar_category}/{tovar_podcategory}/{tovar}', 'ProductController@index_tovar');



Route::get('/services', 'ServiceCategoryController@index');

Route::get('/services/{service_category}', 'ServiceCategoryController@index_category');

Route::get('/services/{service_category}/{service}', 'ServiceCategoryController@index_service');





Route::post('/sent_request', 'UserRequestsController@add');


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::group(['middleware' => 'auth'], function() {

    Route::group(['prefix' => 'admin'], function() {

        Route::group(['prefix' => 'houses'], function(){
            Route::get('show','HouseController@show');
            Route::post('save/{house}','HouseController@show');
        });

        Route::group(['prefix' => 'requests'], function(){
            Route::get('show','UserRequestsController@show');
            Route::get('set_complite/{user_request}','UserRequestsController@set_complite');
            Route::get('destroy/{user_request}','UserRequestsController@destroy');
        });

        Route::group(['prefix' => 'users'], function(){
            Route::get('show','UserController@show');
            Route::get('add_role2/{user}','UserController@add_role2');
            Route::get('destroy_role2/{role_user}','UserController@destroy_role2');
            Route::get('add_role3/{user}','UserController@add_role3');
            Route::get('destroy_role3/{role_user}','UserController@destroy_role3');
        });
    });
});


