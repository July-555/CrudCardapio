<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('produtos')->name('produtos/')->group(static function() {
            Route::get('/',                                             'ProdutosController@index')->name('index');
            Route::get('/create',                                       'ProdutosController@create')->name('create');
            Route::post('/',                                            'ProdutosController@store')->name('store');
            Route::get('/{produto}/edit',                               'ProdutosController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ProdutosController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{produto}',                                   'ProdutosController@update')->name('update');
            Route::delete('/{produto}',                                 'ProdutosController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('clientes')->name('clientes/')->group(static function() {
            Route::get('/',                                             'ClientesController@index')->name('index');
            Route::get('/create',                                       'ClientesController@create')->name('create');
            Route::post('/',                                            'ClientesController@store')->name('store');
            Route::get('/{cliente}/edit',                               'ClientesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ClientesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{cliente}',                                   'ClientesController@update')->name('update');
            Route::delete('/{cliente}',                                 'ClientesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('restaurantes')->name('restaurantes/')->group(static function() {
            Route::get('/',                                             'RestaurantesController@index')->name('index');
            Route::get('/create',                                       'RestaurantesController@create')->name('create');
            Route::post('/',                                            'RestaurantesController@store')->name('store');
            Route::get('/{restaurante}/edit',                           'RestaurantesController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'RestaurantesController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{restaurante}',                               'RestaurantesController@update')->name('update');
            Route::delete('/{restaurante}',                             'RestaurantesController@destroy')->name('destroy');
        });
    });
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(static function () {
    Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->name('admin/')->group(static function() {
        Route::prefix('reservas')->name('reservas/')->group(static function() {
            Route::get('/',                                             'ReservaController@index')->name('index');
            Route::get('/create',                                       'ReservaController@create')->name('create');
            Route::post('/',                                            'ReservaController@store')->name('store');
            Route::get('/{reserva}/edit',                               'ReservaController@edit')->name('edit');
            Route::post('/bulk-destroy',                                'ReservaController@bulkDestroy')->name('bulk-destroy');
            Route::post('/{reserva}',                                   'ReservaController@update')->name('update');
            Route::delete('/{reserva}',                                 'ReservaController@destroy')->name('destroy');
        });
    });
});