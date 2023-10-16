<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;


// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
// body {font-size:16pt; color:#999; }
// h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
// </style>
// EOF;
// $body = '</head><body>';
// $end = '</body></html>';

// function tag($tag, $txt)
// {
//     return "<{$tag}>" . $txt . "</{$tag}>";
// }

class HelloController extends Controller
{
    // public function index()
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/Index') . $style .
    //         $body
    //         . tag('h1', 'Index') . tag('p', 'this is Index page')
    //         . '<a href="/hello/other">go to Other page</a>'
    //         . $end;
    //     return $html;
    // }

    // public function other()
    // {
    //     global $head, $style, $body, $end;

    //     $html = $head . tag('title', 'Hello/Other') . $style .
    //         $body
    //         . tag('h1', 'Other') . tag('p', 'this is Other page')
    //         . $end;
    //     return $html;
    // }

    // シングルアクションコントローラー
    //     public function __invoke()
    //     {
    //         return <<<EOF
    // <html>
    // <head>
    // <title>Hello</title>
    // <style>
    // body {font-size:16pt; color:#999; }
    // h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
    // </style>
    // </head>
    // <body>
    // <h1>Single Action</h1>
    // <p>これは、シングルアクションコントローラーのアクションです。</p>
    // </body>
    // </html>
    // EOF;
    //     }

    // RequestとResponse
    //     public function index(Request $request, Response $response)
    //     {
    //         $html = <<<EOF
    // <html>
    // <head>
    // <title>Hello</title>
    // <style>
    // body {font-size:16pt; color:#999; }
    // h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px; }
    // </style>
    // </head>
    // <body>
    // <h1>Hello</h1>
    // <h2>Request</h2>
    // <pre>{$request}</pre>
    // <h4>url<hr></h4>
    // <pre>{$request->url()}</pre>
    // <h4>fullurl<hr></h4>
    // <pre>{$request->fullurl()}</pre>
    // <h4>path<hr></h4>
    // <pre>{$request->path()}</pre>
    // <br>
    // <br>
    // <h2>Response</h2>
    // <pre>{$response}</pre>
    // </body>
    // </html>
    // EOF;

    //         $response->setContent($html);
    //         return $response;

    //         // ステータスを返す
    //         // $result = $response->status();
    //         // return $result;
    //     }

    // ルートパラメーターをテンプレートに渡す
    // public function index($id = 'zero')
    // {
    //     $data = [
    //         'msg' => 'これはコントローラーから渡されたメッセージです。',
    //         'id' => $id
    //     ];
    //     return view('hello.index', $data);
    // }

    // クエリー文字列の利用
    // public function index(Request $request)
    // {
    //     $data = [
    //         'msg' => 'これはコントローラーから渡されたメッセージです。',
    //         'id' => $request->id
    //     ];
    //     return view('hello.index', $data);
    // }

    // blade.phpの利用
    // public function index()
    // {
    //     $data = [
    //         'msg' => 'これはBladeを利用したサンプルです。',
    //     ];
    //     return view('hello.index', $data);
    // }

    // formの利用
    // public function index()
    // {
    //     return view('hello.index');
    // }

    // public function post(Request $request)
    // {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }

    // foreach
    // public function index()
    // {
    //     $data = [
    //         ['name' => '山田太郎', 'mail' => 'taro@yamada'],
    //         ['name' => '田中花子', 'mail' => 'hanako@tanaka'],
    //         ['name' => '鈴木幸子', 'mail' => 'sachiko@happy']
    //     ];
    //     return view('hello.index', ['data' => $data]);
    // }

    // Service Provider
    // public function index(Request $request)
    // {
    //     return view('hello.index', ['data' => $request->data]);
    // }

    // Validation
    public function index(Request $request)
    {
        // return view('hello.index', ['msg' => 'フォームを入力:']);

        // クエリー文字列にバリデータを適用する
        $validator = Validator::make($request->query(), [
            'id' => 'required',
            'pass' => 'required',
        ]);
        if ($validator->fails()) {
            $msg = 'クエリーに問題があります。';
        } else {
            $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
        }
        // hello?id=123&pass=abc などとurlに入力する
        return view('hello.index', ['msg' => $msg]);
    }

    public function post(Request $request)
    {
        // フォームリクエスト作成後はコメントアウト 引数内を(HelloRequest $request)にする
        // $validate_rule = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150'
        // ];
        // $this->validate($request, $validate_rule);

        // バリデーションのカスタマイズ
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150'
        // ]);
        // if ($validator->fails()) {
        //     return redirect('/hello')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // バリデーション + エラーメッセージのカスタマイズ
        // $rules = [
        //     'name' => 'required',
        //     'mail' => 'email',
        //     'age' => 'numeric|between:0,150'
        // ];
        // $message = [
        //     'name.required' => '名前は必ず入力してください。',
        //     'mail.email' => 'メールアドレスが必要です。',
        //     'age.numeric' => '年齢を整数で記入ください。',
        //     'age.between' => '年齢は0~150の間で入力ください。',
        // ];
        // $validator = Validator::make($request->all(), $rules, $message);
        // if ($validator->fails()) {
        //     return redirect('/hello')
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // return view('hello.index', ['msg' => '正しく入力されました！']);


        // 状況に応じてルールを追加する
        $rules = [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric',
        ];
        $message = [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で記入ください。',
            'age.min' => '年齢はゼロ歳以上で記入ください。',
            'age.max' => '年齢は200歳以下で記入ください。',
        ];
        $validator = Validator::make($request->all(), $rules, $message);

        $validator->sometimes('age', 'min:0', function ($input) {
            return !is_int($input->age);
        });
        $validator->sometimes('age', 'max:200', function ($input) {
            return !is_int($input->age);
        });

        if ($validator->fails()) {
            return redirect('/hello')
                ->withErrors($validator)
                ->withInput();
        } else {
            return view('hello.index', ['msg' => '正しく入力されました！']);
        }
    }
}
