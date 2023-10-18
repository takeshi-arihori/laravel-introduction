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

            th {
                background-color: #999;
                color: #fff;
                padding: 5px 10px;
            }

            td {
                border: 1px solid #aaa;
                color: #999;
                padding: 5px 10px;
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
            <table>
                <tr>
                    <th>Name</th>
                    <th>Mail</th>
                    <th>Age</th>
                </tr>

                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->mail }}</td>
                        <td>{{ $item->age }}</td>
                    </tr>
                @endforeach
            </table>
        @endsection

        @section('footer')
            copylight 2023 Takeshi Arihori.
        @endsection

    </body>

</html>
