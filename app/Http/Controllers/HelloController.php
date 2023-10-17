<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    /**
     * インデックスページを表示するメソッド。
     * もしクッキーに'msg'が存在すれば、その値を表示します。
     * 存在しない場合は、クッキーがない旨のメッセージを表示します。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // クッキーに'msg'が存在するかチェック
        if ($request->hasCookie('msg')) {
            $msg = 'Cookie: ' . $request->cookie('msg');
        } else {
            $msg = '※クッキーはありません。';
        }
        return view('hello.index', ['msg' => $msg]);
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
