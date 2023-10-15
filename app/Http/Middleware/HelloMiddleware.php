<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 前処理
        // $data = [
        //     ['name' => 'taro', 'mail' => 'taro@yamada'],
        //     ['name' => 'hanako', 'mail' => 'hanako@flower'],
        //     ['name' => 'sachiko', 'mail' => 'sachiko@happy'],
        // ];
        // $request->merge(['data' => $data]);
        // return $next($request);

        // 後処理
        $response = $next($request); // コントローラの処理を実行し、レスポンスを取得
        $content = $response->content(); // レスポンスの内容を取得

        // var_dump($response); // レスポンスの内容をダンプ(デバッグ用)

        // <middleware>...</middleware>という形式の文字列を<a href="...">...</a>に変換する正規表現の処理
        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);

        $response->setContent($content); // レスポンスの内容を更新
        return $response; // 更新したレスポンスを返す
    }
}
