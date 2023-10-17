<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // パラメーター結合
        if (isset($request->id)) {
            $param = ['id' => $request->id];
            $items = DB::select('select * from people where id = :id', $param);
        } else {
            $items = DB::select('select * from people');
        }
        return view('hello.index', ['items' => $items]);
    }

    /**
     * リクエストから受け取ったメッセージをクッキーに保存するメソッド。
     * 保存後、保存したメッセージを表示します。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        // バリデーションルールの定義
        $validate_rule = [
            'msg' => 'required',
        ];
        // バリデーションの実行
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        // メッセージを表示するためのレスポンスの作成
        $response = response()->view('hello.index', ['msg' => '「' . $msg . '」をクッキーに保存しました。']);
        // クッキーにメッセージを保存（有効期限は100分）
        $response->cookie('msg', $msg, 100);
        return $response;
    }
}
