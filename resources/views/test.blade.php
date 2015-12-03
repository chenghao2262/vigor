<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>VIGOR</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="{{ asset('/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/bootstrap-theme.css') }}" rel="stylesheet">

    <!-- siimple style -->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/css/sign.css') }}" rel="stylesheet">

    {{--这里是为了聊天窗口临时加的静态文件--}}
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Fonts  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/simple-line-icons.css') }}">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
    <!-- Daterange Picker -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- Drop Zone-->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/dropzone/css/dropzone.css') }}" >
    <link rel="stylesheet" href="{{ asset('/assets/plugins/dropzone/css/basic.css') }}">
    <!-- Switchery -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/switchery/switchery.min.css') }}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div>
        {{--<form class="form-inline signup" role="form" method="POST" action="{{ url('/expert/order') }}">--}}
            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
            {{--<div class="form-group">--}}
                {{--这是活动创建表单--}}
                {{--<div>--}}
                    {{--<input type="text" class="form-control"  name="name"  placeholder="Name">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="text" class="form-control"  name="describe"  placeholder="describe">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="text" class="form-control" name="location"  placeholder="location">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="text" class="form-control"  name="start"  placeholder="start">--}}
                {{--</div>--}}
                {{--<div>--}}
                    {{--<input type="text" class="form-control"  name="end"  placeholder="end">--}}
                {{--</div>--}}

                {{--<!-- </div> -->--}}

                {{--这是朋友圈发动态--}}
                {{--<div>--}}
                    {{--<input type="text" class="form-control"  name="content"  placeholder="content">--}}
                {{--</div>--}}

                {{--这是专家发布文章--}}
                {{--<div>--}}
                {{--<input type="text" class="form-control"  name="title"  placeholder="title">--}}
                {{--</div>--}}
                {{--<div>--}}
                {{--<input type="text" class="form-control"  name="content"  placeholder="content">--}}
                {{--</div>--}}

                {{--这里是订单部分--}}
                {{--<div>--}}
                    {{--<input type="hidden" name="expertName" value="njusmx"/>--}}
                {{--</div>--}}

                {{--<div class="form-group" >--}}
                    {{--<label class="col-sm-3 control-label" style="color:#000000;">date</label>--}}
                    {{--<div class="col-sm-6" >--}}
                        {{--<label class="radio-inline" style="color:#000000;">--}}
                            {{--<input class="icheck" type="radio"   name="date" value="2015-10-29">2015-10-29</label>--}}
                        {{--<label class="radio-inline" style="color:#000000;">--}}
                            {{--<input class="icheck" type="radio" name="date" value="2015-10-30">2015-10-30</label>--}}
                        {{--<label class="radio-inline" style="color:#000000;">--}}
                            {{--<input class="icheck" type="radio" name="date" value="2015-10-31">2015-10-31</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="form-group">--}}
                    {{--<label class="col-sm-3 control-label" style="color:#000000;">segment</label>--}}
                    {{--<div class="col-sm-6">--}}
                        {{--<label class="checkbox-inline" style="color:#000000;">--}}
                            {{--<input class="icheck" type="checkbox" name="segment[]" value="37">37</label>--}}
                        {{--<label class="checkbox-inline" style="color:#000000;">--}}
                            {{--<input class="icheck" type="checkbox" name="segment[]" value="38">38</label>--}}
                        {{--<label class="checkbox-inline" style="color:#000000;">--}}
                            {{--<input class="icheck" type="checkbox" name="segment[]" value="39">39</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div>--}}
                     {{--<input type="text" class="form-control"  name="payment"  value="100" readonly>--}}
                {{--</div>--}}

                {{--这是专家发布建议--}}
                {{--<div>--}}
                     {{--<input type="text" class="form-control"  name="title"  placeholder="title">--}}
                {{--</div>--}}
                {{--<div>--}}
                     {{--<input type="text" class="form-control"  name="content"  placeholder="content">--}}
                {{--</div>--}}
                {{--<div>--}}
                     {{--<input type="text" class="form-control"  name="watcherName"  value="njusmx" readonly>--}}
                {{--</div>--}}
                {{----}}

            {{--</div>--}}
        {{--</form>--}}

        {{--这是上传文件--}}
        {{--传文件需要注意: 需要加一个token 需要在meta里面加上csrf-token--}}
        {{--<form class="form-inline signup"  method="POST" action="{{ url('/sports/data') }}" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="file" name="data" accept="application/vnd.ms-excel" id="exampleInputFile" >
            <p class="help-block">这里放一些提示性的文字.</p>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>--}}

        {{--这里是聊天窗口--}}
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
            <div class="panel panel-default chat-widget">
                <div class="panel-heading">
                    <h3 class="panel-title">chat</h3>
                    <div class="actions pull-right">
                        <i class="fa fa-expand"></i>
                        <i class="fa fa-chevron-down"></i>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="panel-body" id="chatPanel">
                    <div class="row wrapper animated fadeInRight">
                        <div class="col-xs-2 col-sm-2 col-md-2 ">
                                        <span class="avatar">
                                        <img src="assets/img/avatar3.png" class="img-circle" alt="">
                                        <i class="on animated bounceIn"></i>
                                    </span>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            <div class="post default">
                                <span class="arrow left"></span>
                                <p>Hey Mike...Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibut</p>
                            </div>
                        </div>
                    </div>
                    <div class="row wrapper animated fadeInLeft">
                        <div class="col-xs-10 col-sm-10 col-md-10">
                            <div class="post primary">
                                <span class="arrow right"></span>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et.</p>
                            </div>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2">
                                        <span class="avatar">
                                        <img src='assets/img/profile.jpg' class="img-circle" alt="">
                                        <i class="on animated bounceIn"></i>
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <form method="POST" action="{{ url('/chat') }}" id="chatform">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Say something" name="content">
                            <input type="hidden" name="toName" value="njusmx">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <span class="input-group-btn">
                                        <button class="btn btn-primary" id="subm">SEND</button>
                                         </span>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>



<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/socket.io.js') }}"></script>

    <script>
        var socket = io('http://localhost:3000');
        socket.on("test-channel:App\\Events\\ChatEvent", function(message){
            var fromName =  message.data.fromName;
            if(fromName=='YuanRui'){
            $('#chatPanel').append("<div class='row wrapper animated fadeInLeft'>"+
                                        "<div class='col-xs-10 col-sm-10 col-md-10'>"+
                                            "<div class='post primary'>"+
                                                "<span class='arrow right'></span>"+
                                                "<p>"+message.data.content+"</p>"+
                                            "</div>"+
                                        "</div>"+
                                        "<div class='col-xs-2 col-sm-2 col-md-2'>"+
                                            "<span class='avatar'>"+
                                            "<img src='assets/img/profile.jpg' class='img-circle' alt=''>"+
                                            "<i class='on animated bounceIn'></i>"+
                                            "</span>"+
                                        "</div>"+
                                    "</div>");
            }
        });

        $('#subm').click(function () {
            $.ajax({
                url:"{{ url('/chat') }}",
                data:$("#chatform").serialize(),
                type:"post",
            });
            return false;
        });

    </script>

</body>
</html>