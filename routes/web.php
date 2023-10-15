<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello', [HelloController::class, 'index']);
// Route::get('/hello/{id?}/{pass?}', [HelloController::class, 'index']);

// Route::get('hello', [HelloController::class, 'index']);
// Route::get('hello/other', [HelloController::class, 'other']);

// シングルアクションコントローラー
// Route::get('hello', HelloController::class);

// コントローラーなしでのルーティング
// Route::get('hello', function () {
//     return view('hello.index');
// });

// コントローラーありでのルーティング
// Route::get('hello', [HelloController::class, 'index']);

// 指定されたidを渡す
// Route::get('hello/{id?}', [HelloController::class, 'index']);

// クエリー文字列を渡す
Route::get('hello', [HelloController::class, 'index']);
// フォームからの送信
Route::post('hello', [HelloController::class, 'post']);

// ミドルウェア
// 'hello'というURLにアクセスがあった場合、HelloControllerのindexメソッドを実行
// その際、HelloMiddlewareミドルウェアを適用する
Route::get('hello', [HelloController::class, 'index']);
    // ->middleware(HelloMiddleware::class);
    // ->middleware('helo');
