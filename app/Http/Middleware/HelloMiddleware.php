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
        $response = $next($request);
        $content = $response->content(); // レスポンスに設定されているコンテンツを取得

        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);
        return $response;
    }
}
