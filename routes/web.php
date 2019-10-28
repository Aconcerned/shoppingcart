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
//Invoca al controlador ProductController para que muestre el index
Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);


//Invoca al controlador de Usuarios y hace diversas funciones
Route::group(['prefix' => 'user'], function() {
    
    Route::group(['middleware' => 'guest'], function() {
      Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup'  //Es el modulo de registro, solo usuarios no registrados lo pueden usar
    ]);
    
    Route::post('/signup', [
        'uses' => 'UserController@postSignup', 
        'as' => 'user.signup' //Es el modulo de registro, solo usuarios no registrados lo pueden usar
    ]);
    
    Route::get('/signin', [
        'uses' => 'UserController@getSignin',
        'as' => 'user.signin' //Es el modulo de inicio de sesion, solo usuarios no registrados lo pueden usar
    ]);
    
    Route::post('/signin', [
        'uses' => 'UserController@postSignin', 
        'as' => 'user.signin' //Es el modulo de inicio de sesion, solo usuarios no registrados lo pueden usar
    ]);
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as' => 'user.profile' //Es el modulo de perfil, solo usuarios registrados lo pueden usar
    ]);
    
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'  //Es el modulo de salir, solo usuarios registrados lo pueden usar
    ]);
});
});


Route::get('/admin', [
    'uses' => 'AdminController@getAdmin', 
    'as' => 'admin.dashboard',
    'middleware' => 'auth' //Es el modulo de entrar al admin, solo usuarios registrados lo pueden usar
]);
