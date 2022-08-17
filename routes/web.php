<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

//一般ユーザー
//Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    //ここにルートを記述
  //  Route::get('login', function () {
    //    return view('account.register');
  //  });
  //});
  // 管理者以上
  // Route::group(['middleware' => ['auth', 'can:admin-higher']], function () {
  //   //ここにルートを記述
  //   Route::get('home', function (){
  //     return view('home');
  //   });
  // });
 // 登録画面表示
Route::get('/account/register',[App\Http\Controllers\AccountController::class,'register'])->name('register');
// ログイン画面表示
Route::get('/account/userLogin',[App\Http\Controllers\AccountController::class,'userLogin'])->name('userLogin');
// ホーム画面表示
//Route::get('home',function(){
//  return view('home');
//})->name('home');

// 入力された情報をDBへ登録
Route::post('/account/userRegister',[\App\Http\Controllers\AccountController::class,'userRegister'])->name('userRegister');
// ログイン認証
Route::post('/account/login',[\App\Http\Controllers\AccountController::class,'login'])->name('login');

Route::get('/home',[App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home/detail/{id}',[App\Http\Controllers\HomeController::class, 'detail']);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
//ユーザー編集画面
Route::get('/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
//ユーザー情報更新
Route::post('edit/{id}', [App\Http\Controllers\UserController::class,'postEdit'])->name('users.postEdit');

Route::get('/item/list', [ItemController::class, 'item']);
Route::get('/item/register',  [ItemController::class, 'register']);
Route::post('/itemRegister',  [ItemController::class, 'itemRegister']);
Route::get('/item/edit/{id}',  [ItemController::class, 'edit']);
Route::post('/itemEdit',  [ItemController::class, 'itemEdit']);
Route::get('/itemSearch',  [ItemController::class, 'itemSearch']);