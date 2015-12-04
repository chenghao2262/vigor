<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BodyBoard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Fonts  -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/simple-line-icons.css') }}">
    <!--Page Level CSS-->
    <link rel="stylesheet" href="{{asset('assets/plugins/icheck/css/all.css')}}">

    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">


</head>

<body>
<section id="main-wrapper" class="theme-default">
    <header id="header">
        <!--logo start-->
        <div class="brand">
            <a href="index.html" class="logo">
                <i class="icon-heart"></i>
                <span>Body</span>Board</a>
        </div>
        <!--logo end-->
        <ul class="nav navbar-nav navbar-left">
            <li class="toggle-navigation toggle-left">
                <button class="sidebar-toggle" id="toggle-left">
                    <i class="fa fa-bars"></i>
                </button>
            </li>
            <li class="toggle-profile hidden-xs">
                <button type="button" class="btn btn-default" id="toggle-profile">
                    <i class="icon-user"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <input type="text" class="search" placeholder="Search project...">
                <button type="submit" class="btn btn-sm btn-search"><i class="fa fa-search"></i>
                </button>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown profile hidden-xs">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="meta">
                            <span class="avatar">
                                <img src="/assets/img/profile.jpg" class="img-circle" alt="">
                            </span>
                        <span class="text">Mike Adams</span>
                        <span class="caret"></span>
                        </span>
                </a>
                <ul class="dropdown-menu animated fadeInRight" role="menu">
                    <li>
                        <span class="arrow top"></span>
                        <h5>
                            <span>80%</span>
                            <small class="text-muted">Profile complete</small>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar" style="width: 80%">
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-user"></i>
                                </span>My Account</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-envelope"></i>
                                </span>Messages</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-cog"></i>
                                </span>Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-sign-out"></i>
                                </span>Logout</a>
                    </li>
                </ul>
            </li>
            <li class="toggle-fullscreen hidden-xs">
                <button type="button" class="btn btn-default expand" id="toggle-fullscreen">
                    <i class="fa fa-expand"></i>
                </button>
            </li>
            <li class="toggle-navigation toggle-right">
                <button class="sidebar-toggle" id="toggle-right">
                    <i class="fa fa-indent"></i>
                </button>
            </li>
        </ul>
    </header>
    <!--sidebar left start-->


    <!--main content start-->
    <section class="main-content-wrapper">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">权限管理</h3>
                <div class="actions pull-right">
                    <i class="fa fa-expand"></i>
                    <i class="fa fa-chevron-down"></i>
                    <i class="fa fa-times"></i>
                </div>
            </div>
            <div class="panel-body">
                <form method="POST" action="{{ url('/users/permission') }}" id="userManage">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>查看运动数据</th>
                            <th>上传运动数据</th>
                            <th>查看运动统计</th>
                            <th>查看活动</th>
                            <th>参与活动</th>
                            <th>管理活动</th>
                            <th>发布建议</th>
                            <th>发布文章</th>
                            <th>我的诊所</th>
                            <th>咨询专家</th>
                            <th>朋友圈</th>
                            <th>发布动态</th>
                            <th>查看排名</th>
                            <th>加入兴趣组</th>
                            <th>管理兴趣组</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>普通用户</td>
                            <?php
                            for($i=1;$i<16;$i++){
                                $name = '1'.$i;
                                echo '<td style="text-align:center"><input class="icheck" type="checkbox" ',$role_permission[$name],' name="',$name,'"></td>';
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>vip用户</td>
                            <?php
                            for($i=1;$i<16;$i++){
                                $name = '2'.$i;
                                echo '<td style="text-align:center"><input class="icheck" type="checkbox" ',$role_permission[$name],' name="',$name,'"></td>';
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>医生</td>
                            <?php
                            for($i=1;$i<16;$i++){
                                $name = '3'.$i;
                                echo '<td style="text-align:center"><input class="icheck" type="checkbox" ',$role_permission[$name],' name="',$name,'"></td>';
                            }
                            ?>
                        </tr>
                        <tr>
                            <td>教练</td>
                        <?php
                            for($i=1;$i<16;$i++){
                                $name = '4'.$i;
                                echo '<td style="text-align:center"><input class="icheck" type="checkbox" ',$role_permission[$name],' name="',$name,'"></td>';
                            }
                            ?>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <span class="input-group-btn"><button type="submit" class="btn btn-primary">Submit</button></span>
                </form>
            </div>
        </div>


    <!--main content end-->
</section>
</section>
<!--Global JS-->
<script src="{{asset('assets/js/vendor/jquery-1.11.1.min.js')}}"></script>
<script src="{{asset('assets/plugins/icheck/js/icheck.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/navgoco/jquery.navgoco.min.js')}}"></script>
<script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
<script src="{{asset('assets/plugins/fullscreen/jquery.fullscreen-min.js')}}"></script>
<script src="{{asset('assets/js/src/app.js')}}"></script>
<!--Page Level JS-->
<script src="{{asset('assets/plugins/countTo/jquery.countTo.js')}}"></script>
<script src="{{asset('assets/plugins/weather/js/skycons.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>



<script>
    $(document).ready(function() {
        app.customCheckbox();
    });
</script>
</body>

</html>


