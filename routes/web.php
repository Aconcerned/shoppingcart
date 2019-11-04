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

//Invoca al controlador ProductController para que meta cosas en el carrito
Route::get('/shopping-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as'=> 'product.addToCart',
    'middleware' => 'auth'
]);

//Invoca al controlador ProductController para que meta cosas en el carrito
Route::get('/shopping-cart/', [
    'uses' => 'ProductController@getCart',
    'as'=> 'product.shoppingCart',
    'middleware' => 'auth'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as'=> 'checkout',
    'middleware' => 'auth'
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
        'as' => 'user.signup' //Es el modulo de registro, cuando el usuario se registra, solo usuarios no registrados lo pueden usar
    ]);
    
    Route::get('/signin', [
        'uses' => 'UserController@getSignin',
        'as' => 'user.signin' //Es el modulo de inicio de sesion, solo usuarios no registrados lo pueden usar
    ]);
    
    Route::post('/signin', [
        'uses' => 'UserController@postSignin', 
        'as' => 'user.signin' //Es el modulo de inicio de sesion, cuando el usuario inicia sesion, solo usuarios no registrados lo pueden usar
    ]);
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/profile', [
        'uses' => 'UserController@getProfile',
        'as' => 'user.profile' //Es el modulo de perfil, solo usuarios registrados lo pueden ver
    ]);
    
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'  //Es el modulo de salir, solo usuarios registrados lo pueden usar
    ]);
});
});

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin.dashboard');
