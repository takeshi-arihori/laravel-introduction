<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
    public function index()
    {
        $data = [
            'msg' => 'お名前を入力してください。',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => 'こんにちは、' . $msg . 'さん！',
        ];
        return view('hello.index', $data);
    }
}
