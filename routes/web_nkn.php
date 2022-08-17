<?php

use App\Http\Controllers\UserController;
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
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');

//ユーザー編集画面
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');

//ユーザー情報更新
Route::post('edit/{id}', [App\Http\Controllers\UserController::class,'postEdit'])->name('users.postEdit');