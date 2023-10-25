<html>

    <head>
        <title>Hello/Index</title>
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
