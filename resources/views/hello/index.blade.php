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
        <p>&#064;forディレクティブの例</p>
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

        {{-- <h1>Blade/Index</h1>
        <p>&#064;forディレクティブの例</p>
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
        @endforeach --}}

        {{-- <h1>Blade/Index</h1>
        <p>&#064;whileディレクティブの例</p>
        <ol>
            @php
                $counter = 0;
            @endphp
            @while ($counter < count($data))
                <li>{{ $data[$counter] }}</li>
                @php
                    $counter++;
                @endphp
            @endwhile
        </ol> --}}

        {{-- @sectionと@yieldを使用 --}}
        @extends('layouts.helloapp')

        @section('title', 'Index')
        @section('menubar')
            @parent
            インデックスページ
        @endsection

        @section('content')
            {{-- <p>ここが本文のコンテンツです。</p>
            <p>必要なだけ記述できます。</p> --}}

            {{-- component --}}
            {{-- @component('components.message')
                @slot('msg_title')
                    CAUTION!
                @endslot

                @slot('msg_content')
                    これはメッセージの表示です。
                    @endslot
                    @endcomponent
                 --}}

            {{-- include --}}
            {{-- @include('components.message', ['msg_title' => 'OK', 'msg_content' => 'サブビューです。']) --}}

            {{-- @each --}}
            {{-- <p>ここが本文のコンテンツです。</p>
            <ul>
                @each('components.item', $data, 'item')
            </ul> --}}

            {{-- Service Provider View::composer --}}
            {{-- <p>ここが本文のコンテンツです。</p>
            <p>Controller value<br>'message' = {{ $message }}</p>
            <p>ViewComposer value<br>'view_message' = {{ $view_message }}</p> --}}

            {{-- Middleware --}}
            {{-- <p>ここが本文のコンテンツです。</p>
            <table>
                @foreach ($data as $item)
                    <tr>
                        <th>{{ $item['name'] }}</th>
                        <td>{{ $item['mail'] }}</td>
                    </tr>
                @endforeach
            </table> --}}

            {{-- responseの操作 --}}
            <p>ここが本文のコンテンツです。</p>
            <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
            <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
        @endsection

        @section('footer')
            copylight 2020 arihori1987
        @endsection
    </body>

</html>
