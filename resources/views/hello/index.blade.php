<html>

    <head>
        <title>Hello/Index</title>
        <style>
            body {
                font-size: 16pt;
                color: #999;
            }

            h1 {
                font-size: 100pt;
                text-align: right;
                color: #eee;
                margin: -40px 0px -50px 0px;
            }
        </style>
    </head>

    <body>
        {{-- <h1>Blade/Index</h1>
        @isset($msg)
            <p>こんにちは、{{ $msg }}さん。</p>
        @else
            <p>何か書いてください。</p>
        @endisset
        <form method="POST" action="/hello">
            @csrf
            <input type="text" name="msg" />
            <input type="submit">
        </form> --}}


        {{-- <h1>Blade/Index</h1>
        <p>&#064;foreachディレクティブの例</p>
        <ol>
            @foreach ($data as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ol> --}}


        {{-- <h1>Blade/Index</h1>
        <p>&#064;foreachディレクティブの例</p>
        <ol>
            @for ($i = 1; $i < 100; $i++)
                @if ($i % 2 == 1)
                    @continue
                @elseif ($i <= 10)
                    <li>No, {{ $i }}
                    @else
                    @break
            @endif
        @endfor
    </ol> --}}

        <h1>Blade/Index</h1>
        <p>&#064;foreachディレクティブの例</p>
        @foreach ($data as $item)
            @if ($loop->first)
                <p>※データ一覧</p>
                <ul>
            @endif
            <li>No,{{ $loop->iteration }}. {{ $item }}</li>
            @if ($loop->last)
                </ul>
                <p>---ここまで</p>
            @endif
        @endforeach

    </body>

</html>
