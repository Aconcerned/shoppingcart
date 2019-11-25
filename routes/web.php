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

Route::get('/reduce{id}', [ //Quita la cantidad de un producto por uno
    'uses' => 'ProductController@getReducedByOne',
    'as'=> 'product.reduceByOne',
    'middleware' => 'auth'
]);

Route::get('/remove{id}', [ //Quita el producto en si
    'uses' => 'ProductController@getRemoveItem',
    'as'=> 'product.remove',
    'middleware' => 'auth'
]);

//Invoca al controlador ProductController para que meta cosas en el carrito
Route::get('/shopping-cart/', [
    'uses' => 'ProductController@getCart',
    'as'=> 'product.shoppingCart',
    'middleware' => 'auth'
]);

Route::get('/checkout', [ //Muestra el checkout
    'uses' => 'ProductController@getCheckout',
    'as'=> 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [ //Guarda el checkout
    'uses' => 'ProductController@postStorage',
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
    
    Route::get('/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'  //Es el modulo de salir, solo usuarios registrados lo pueden usar
    ]);

});
});

Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin.dashboard'); //Muestra el admin, si el usuario es un administrador

    Route::get('/admin/insertproduct', 'AdminController@insertproduct')    
    ->middleware('is_admin')    
    ->name('admin.insertproduct'); //Muestra el formulario de insertar productos

    Route::post('/admin/insertproduct', 'ProductController@postProduct')    
    ->middleware('is_admin')    
    ->name('admin.insertproduct'); //Coloca el producto en la base de datos

    Route::get('/admin/usertable', 'AdminController@listuser')    
    ->middleware('is_admin')    
    ->name('admin.usertable'); //Muestra a los usuarios

    Route::get('/admin/usertable/fetch_data', 'AdminController@fetch_data')    
    ->middleware('is_admin')    
    ->name('admin.usertable'); //Se trae los usuarios de la base de datos

    Route::post('/admin/usertable/add_data', 'AdminController@add_data')    
    ->middleware('is_admin')    
    ->name('admin.add_data'); 

    Route::delete('/admin/usertable/deleteuser', 'AdminController@deleteuser')    
    ->middleware('is_admin')    
    ->name('admin.deleteuser'); //Borra al usuario

    Route::get('/admin/producttable', 'AdminController@listproduct')    
    ->middleware('is_admin')    
    ->name('admin.producttable'); //Muestra la tabla de los productos

    Route::delete('/admin/usertable/deleteproduct', 'AdminController@deleteproduct')    
    ->middleware('is_admin')    
    ->name('admin.deleteproduct'); //Borra los productos

    Route::get('/admin/lineas', 'AdminController@graphic')    
    ->middleware('is_admin')    
    ->name('admin.lineas'); //Muestra la grafica 

    Route::get('/admin/producttable/fetch_product', 'AdminController@fetch_product')    
    ->middleware('is_admin')    
    ->name('admin.producttable'); //Se trae los productos

    Route::get('/profile/{id}', [
        'uses' => 'UserController@getProfile',
        'as' => 'user.profile',
        'middleware' => 'auth' //Es el modulo de perfil, solo usuarios registrados lo pueden ver
    ]);
