<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;

class HelloController extends Controller
{
    // Validation
    public function index(Request $request)
    {
        // HelloValidator.phpを作成し、バリデーションをカスタマイズする
        return view('hello.index', ['msg' => 'フォームを入力ください。']);
    }

    public function post(HelloRequest $request)
    {
        // HelloValidator.phpを作成し、バリデーションをカスタマイズする
        return view('hello.index', ['msg' => '正しく入力されました！']);
    }
}
