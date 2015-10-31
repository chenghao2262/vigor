<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link href="{{ asset('/assets/css/sign.css') }}" rel="stylesheet">!

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div>
        <form class="form-inline signup" role="form" method="POST" action="{{ url('/expert/order') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
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

                <!-- </div> -->

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
                <div>
                    <input type="hidden" name="expertName" value="njusmx"/>
                </div>

                <div class="form-group" >
                    <label class="col-sm-3 control-label" style="color:#000000;">date</label>
                    <div class="col-sm-6" >
                        <label class="radio-inline" style="color:#000000;">
                            <input class="icheck" type="radio"   name="date" value="2015-10-29">2015-10-29</label>
                        <label class="radio-inline" style="color:#000000;">
                            <input class="icheck" type="radio" name="date" value="2015-10-30">2015-10-30</label>
                        <label class="radio-inline" style="color:#000000;">
                            <input class="icheck" type="radio" name="date" value="2015-10-31">2015-10-31</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" style="color:#000000;">segment</label>
                    <div class="col-sm-6">
                        <label class="checkbox-inline" style="color:#000000;">
                            <input class="icheck" type="checkbox" name="segment[]" value="37">37</label>
                        <label class="checkbox-inline" style="color:#000000;">
                            <input class="icheck" type="checkbox" name="segment[]" value="38">38</label>
                        <label class="checkbox-inline" style="color:#000000;">
                            <input class="icheck" type="checkbox" name="segment[]" value="39">39</label>
                    </div>
                </div>
                <div>
                     <input type="text" class="form-control"  name="payment"  value="100" readonly>
                </div>

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


                <div>
                    <button type="submit" class="btn btn-theme">commit</button>

                </div>
            </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
</body>
</html>