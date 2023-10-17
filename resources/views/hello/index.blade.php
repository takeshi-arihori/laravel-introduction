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
        {{-- @sectionと@yieldを使用 --}}
        @extends('layouts.helloapp')

        @section('title', 'Index')
        @section('menubar')
            @parent
            インデックスページ
        @endsection

        @section('content')
            <p>{{ $msg }}</p>
            @if (count($errors) > 0)
                <p>入力に誤りがあります。再入力して下さい。</p>
            @endif
            <form action="/hello" method="POST">
                <table>
                    @csrf
                    @if ($errors->has('msg'))
                        <tr>
                            <th>ERROR</th>
                            <td>{{ $errors->first('msg') }}</td>
                        </tr>
                    @endif
                    <tr>
                        <th>
                            Message:
                        </th>
                        <td>
                            <input type="text" name="msg" value="{{ old('msg') }}">
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>
                            <input type="submit" value="send">
                        </td>
                    </tr>
                </table>
            </form>
        @endsection

        @section('footer')
            copylight 2020 arihori1987
        @endsection
    </body>

</html>
