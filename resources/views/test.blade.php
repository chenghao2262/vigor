<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <meta charset="utf-8">


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
<div class="container">
    <div class="content">
        <h1>登陆成功</h1>
        <h1>{{Auth::user()->name}}</h1>
        <h1>{{Auth::user()->email}}</h1>
    </div>
</div>
</body>
</html>