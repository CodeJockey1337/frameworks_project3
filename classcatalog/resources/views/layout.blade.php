<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel</title>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/css/style.css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        @yield('container')
        @yield('content')
    </body>
    
    <p>
        {{ HTML::link('/libraries', 'Click here to go to the libraries page!') }}
    </p>
</html>