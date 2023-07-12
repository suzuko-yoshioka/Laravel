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

// ログイン画面
Route::get('/list', [App\Http\Controllers\ArticleController::class, 'showList'])->name('list');

//登録画面
Route::get('/regist',[App\Http\Controllers\ArticleController::class, 'showRegistForm'])->name('regist');

//登録処理
Route::post('/regist',[App\Http\Controllers\ArticleController::class, 'registSubmit'])->name('submit');

//削除
Route::post('/delete/{id}',[App\Http\Controllers\ArticleController::class, 'exeDelete'])->name('delete');

//詳細
Route::get('/show/{id}',[App\Http\Controllers\ArticleController::class, 'showDetail'])->name('show');

//編集
Route::get('/edit/{id}',[App\Http\Controllers\ArticleController::class, 'showEdit'])->name('edit');

//更新
Route::post('/update',[App\Http\Controllers\ArticleController::class, 'exeUpdate'])->name('update');

//検索
Route::get('/search',[App\Http\Controllers\ArticleController::class, 'showSearch'])->name('search');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
