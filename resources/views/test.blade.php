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
        <h1>用户名：{{Auth::user()->name}}</h1>
        <h1>邮箱：{{Auth::user()->email}}</h1>
        <h1><span>总步数：</span> {{$sportRecord->steps}}</h1>
        <h6><span>每20分钟步数：</span>{{$sportRecord->steps_detail}}</h6>
        <h1><span>总距离：</span> {{$sportRecord->steps}}</h1>
        <h6><span>每20分钟距离：</span>{{$sportRecord->distance_detail}}</h6>
        <h1><span>总卡路里：</span> {{$sportRecord->steps}}</h1>
        <h6><span>每20分钟卡路里：</span>{{$sportRecord->calories_detail}}</h6>
        <h1><span>总楼层：</span> {{$sportRecord->floorLevels}}</h1>
        <h6><span>每20分钟楼层：</span>{{$sportRecord->floorLevels_detail}}</h6>
    </div>
</div>
</body>
</html>