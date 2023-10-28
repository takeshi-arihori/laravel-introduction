<html>

    <head>
        <title>@yield('title')</title>
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

            .menutitle {
                font-size: 14pt;
                font-weight: bold;
                margin: 0px;
            }

            .content {
                margin: 10px;
            }

            .footer {
                text-align: right;
                font-size: 10pt;
                margin: 10px;
                border-bottom: solid 1px #ccc;
                color: #ccc;
            }
        </style>

        {{-- Bootstrapを組み込む --}}
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
            <h2 class="menutitle">※メニュー</h2>
            <ul>
            <li>@show
            </li>
        </ul>
        <hr size="1">
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @yield('footer')
        </div>
    </body>

</html>
