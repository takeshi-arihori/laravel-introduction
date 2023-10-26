<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\RestappController;

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
// Route::get('hello', [HelloController::class, 'index']);
// ->middleware(HelloMiddleware::class);
// ->middleware('helo');

// 新規登録
Route::get('hello/add', [HelloController::class, 'add']);
Route::post('hello/add', [HelloController::class, 'create']);

// 編集
Route::get('hello/edit', [HelloController::class, 'edit']);
Route::post('hello/edit', [HelloController::class, 'update']);

// 削除
Route::get('hello/del', [HelloController::class, 'del']);
Route::post('hello/del', [HelloController::class, 'remove']);

// 指定したIDのレコードを得る
Route::get('hello/show', [HelloController::class, 'show']);



/* ================= Person =================== */
Route::get('person', [PersonController::class, 'index']);

// id検索
Route::get('person/find', [PersonController::class, 'find']);
Route::post('person/find', [PersonController::class, 'search']);

// 新規登録
Route::get('person/add', [PersonController::class, 'add']);
Route::post('person/add', [PersonController::class, 'create']);

// 更新
Route::get('person/edit', [PersonController::class, 'edit']);
Route::post('person/edit', [PersonController::class, 'update']);

// 削除
Route::get('person/del', [PersonController::class, 'del']);
Route::post('person/del', [PersonController::class, 'remove']);


/* ============== Board ============= */
Route::get('board', [BoardController::class, 'index']);

Route::get('board/add', [BoardController::class, 'add']);
Route::post('board/add', [BoardController::class, 'create']);


/* ============== Rest ============= */
Route::resource('rest', RestappController::class);

Route::get('hello/rest', [HelloController::class, 'rest']);
