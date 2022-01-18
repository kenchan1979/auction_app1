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

Route::resource('items', App\Http\Controllers\ItemController::class);
// リソースを使用しない場合
// Route::get('/items', [App\Http\Controllers\ItemController::class, 'index']);
// Route::get('/items/create', [App\Http\Controllers\ItemController::class, 'create']);
// Route::post('/items', [App\Http\Controllers\ItemController::class, 'store']);
// Route::get('/items/{item}', [App\Http\Controllers\ItemController::class, 'show']);
// Route::get('/items/{item}/edit', [App\Http\Controllers\ItemController::class, 'edit']);
// Route::patch('/items/{item}', [App\Http\Controllers\ItemController::class, 'update']);
// Route::delete('/items/{item}', [App\Http\Controllers\ItemController::class, 'destroy']);
