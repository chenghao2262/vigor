<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BodyBoard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
     <!-- 自创 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/doctor.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/appointmentTable.css')}}">

    <!-- Fonts  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/simple-line-icons.css') }}">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
    <!-- C3 Chart-->
    <link rel="stylesheet" href="assets/plugins/c3Chart/css/c3.css">
    <!-- Daterange Picker -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- Calendar demo -->
    <link rel="stylesheet" href="{{ asset('/assets/css/clndr.css') }}">
    <!-- Drop Zone-->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/dropzone/css/dropzone.css') }}" >
    <link rel="stylesheet" href="{{ asset('/assets/plugins/dropzone/css/basic.css') }}">
    <!-- Switchery -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/switchery/switchery.min.css') }}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <!-- Feature detection -->
    <script src="{{ asset('/assets/js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('/assets/js/vendor/html5shiv.js') }}"></script>
    <script src="{{ asset('/assets/js/vendor/respond.min.js') }}"></script>
    <![endif]-->
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
                        <span class="text">YuanRui</span>
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
                        <a href="/personal">
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
    <aside class="sidebar sidebar-left">
        <div class="sidebar-profile">
            <div class="avatar">
                <img class="img-circle profile-image" src="/assets/img/profile.jpg" alt="profile">
                <i class="on border-dark animated bounceIn"></i>
            </div>
            <div class="profile-body dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4>YuanRui<span class="caret"></span></h4></a>
                <small class="title">天才</small>
                <ul class="dropdown-menu animated fadeInRight" role="menu">
                    <li class="profile-progress">
                        <h5>
                            <span>80%</span>
                            <small>Profile complete</small>
                        </h5>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-primary" style="width: 80%">
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
                        <a href="/personal">
                                <span class="icon"><i class="fa fa-cog"></i>
                                </span>Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="/auth/logout">
                                <span class="icon"><i class="fa fa-sign-out"></i>
                                </span>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <nav>
            <h5 class="sidebar-header">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                <li class=" nav-dropdown ">
                    <a href="#" title="健康管理" >
                        <i class="fa  fa-fw fa-tachometer"></i> 健康管理
                    </a>
                    <ul class=" nav-sub">
                        <li class="active">
                            <a  href="/sports/index" title="运动管理">运动管理</a>
                        </li>
                         <li >
                            <a  href="/body/index" title="健康履历">健康履历</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-dropdown">
                    <a href="#" title="活动管理">
                        <i class="fa fa-fw fa-flag"></i> 活动管理
                    </a>
                    <ul class=" nav-sub">
                        <li >
                            <a  href="/activity" title="活动广场">活动广场</a>
                        </li>
                         <li >
                            <a  href="/activity/mine" title="我的活动">我的活动</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-dropdown">
                    <a href="#" title="兴趣组" data-toggle="collapse">
                        <i class="fa fa-fw fa-paper-plane-o"></i> 兴趣组
                    </a>
                    <ul class="nav-sub">
                        <li>
                            <a  href="/group" title="我的兴趣组">我的兴趣组</a>
                        </li>
                         <li>
                            <a  href="/group" title="发现兴趣组">发现兴趣组</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-dropdown">
                    <a href="/friends/index" title="朋友圈">
                        <i class="fa fa-user fa-fw"></i> 朋友圈
                    </a>
                </li>
                <li class="nav-dropdown">
                    <a href="/shop" title="健货商城" data-toggle="collapse">
                        <i class="fa fa-fw fa-shopping-cart"></i> 健货商城
                    </a>
                </li>
                <li class="nav-dropdown open active">
                    <a href="#" title="专业咨询" data-toggle="collapse">
                        <i class="fa fa-fw fa-comment"></i> 专业咨询
                    </a>
                    <ul class="nav-sub ">
                            <li class="active">
                                <a  href="/expert/index" title="运动管理" >医生私教</a>
                            </li>
                             <li>
                                <a  href="/expert/suggestion/index" title="建议管理">建议管理</a>
                            </li>
                            @if($haveClinic)
                                <li>
                                    <a  href="/expert/clinic" title="我的门诊">我的门诊</a>
                                </li>
                            @endif
                        </ul>
                </li>
                

            </ul>
        </nav>
        <h5 class="sidebar-header">Account Settings</h5>
        <div class="setting-list">
            <div class="row">
                <div class="col-xs-8">
                    <label for="check1" class="control-label">Share your status</label>
                </div>
                <div class="col-xs-4">
                    <input type="checkbox" class="js-switch" checked id="check1" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <label for="check2" class="control-label">Push Notifications</label>
                </div>
                <div class="col-xs-4">
                    <input type="checkbox" class="js-switch" id="check2" />
                </div>
            </div>
        </div>
    </aside>
    <!--sidebar left end-->

    <!--main content start-->
    <section class="main-content-wrapper">
        <div class="pageheader">
            <h1>医生私教</h1>
            <p class="description">这里展示医生私教列表</p>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <section id="main-content" class="animated fadeInUp">
            <div class="row">
                <div class="col-md-12 col-lg-9" >                        
                    <input type="text" class="search" placeholder="Search expert...">
                    <button type="submit" class="btn btn-sm doctor-search"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <div class="row">
                <?php
                // dd($hotExperts[4]['time']);
                ?>
                @foreach($hotExperts as $exp)
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Expert</h3>
                            <div class="actions pull-right">
                            <i class="fa fa-expand"></i>
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="tab-wrapper tab-primary">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="date">
                                            <img src="/assets/img/avatar5.png" alt="" class="img-circle" width="50" height="50">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">   
                                            <p>{{$exp['name']}}</p>
                                        </div>
                                        <div class="row">   
                                            <p>{{$exp['organization']}}</p>
                                        </div>
                                        <div class="row">   
                                            <p>{{$exp['position']}}</p>
                                        </div>
                                        <div class="row">
                                            <p>{{$exp['mailbox']}}</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-4">
                                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#{{$exp['name']}}">预约挂号</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-primary" id="subm" onclick="location.href='<?php echo url('/expert').'/'.$exp['name'].'/'.'articles'?>'">查看文章</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                
              <!--   <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Doctors</h3>
                            <div class="actions pull-right">
                                <i class="fa fa-expand"></i>
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="tab-wrapper tab-primary">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="date">
                                            <img src="/assets/img/avatar5.png" alt="" class="img-circle" width="50" height="50">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">   
                                            <p>NAME</p>
                                        </div>
                                        <div class="row">   
                                            <p>ORGANIZATION</p>
                                        </div>
                                        <div class="row">   
                                            <p>POSITION</p>
                                        </div>
                                        <div class="row">
                                            <p>MAILBOX</p>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-4">
                                        <button type="button" class="btn btn-primary " onclick="">预约挂号</button>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary" onclick="">查看文章</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
               
        </section>

    </section>

    <!--main content end-->
</section>
<!--sidebar right start-->
<aside id="sidebar-right">
    <h4 class="sidebar-title">contact List</h4>
    <div id="contact-list-wrapper">
        <div class="heading">
            <ul>
                <li class="new-contact"><a href="javascript:void(0)"><i class="fa fa-plus"></i></a>
                </li>
                <li>
                    <input type="text" class="search" placeholder="Search">
                    <button type="submit" class="btn btn-sm btn-search"><i class="fa fa-search"></i>
                    </button>
                </li>
            </ul>
        </div>
        <div id="contact-list">
            <ul>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar3.png" class="img-circle" alt="">
                          <i class="on animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Ashley Bell </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> Sarasota, FL</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar1.png" class="img-circle" alt="">
                          <i class="on animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Brian Johnson </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> San Francisco, CA</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar2.png" class="img-circle" alt="">
                          <i class="on animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Chris Jones </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> Brooklyn, NY</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar4.jpg" class="img-circle" alt="">
                          <i class="on animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Erica Hill </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> Palo Alto, Ca</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar5.png" class="img-circle" alt="">
                          <i class="away animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Greg Smith </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> London, UK</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar6.png" class="img-circle" alt="">
                          <i class="on animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Jason Kendall</div>
                            <small class="location text-muted"><i class="icon-pointer"></i> New York, NY </small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar7.png" class="img-circle" alt="">
                          <i class="on animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Kristen Davis </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> Greenville, SC</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar8.png" class="img-circle off" alt="">
                          <i class="off animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Michael Shepard </div>
                            <small class="location text-muted"><i class="icon-pointer"></i> Vancouver, BC</small>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-md-3">
                                <span class="avatar">
                        <img src="/assets/img/avatar9.png" class="img-circle off" alt="">
                          <i class="off animated bounceIn"></i>
                        </span>
                        </div>
                        <div class="col-md-9">
                            <div class="name">Paul Allen</div>
                            <small class="location text-muted"><i class="icon-pointer"></i> Savannah, GA</small>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="contact-user">
            <div class="chat-user active"><span><i class="icon-bubble"></i></span>
            </div>
            <div class="email-user"><span><i class="icon-envelope-open"></i></span>
            </div>
            <div class="call-user"><span><i class="icon-call-out"></i></span>
            </div>
        </div>
    </div>
</aside>
<!--/sidebar right end-->

@foreach($hotExperts as $expert)
<div class="modal fade" id="{{$expert['name']}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">预约挂号</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-offset-1 col-md-2">
                        <div class="date">
                            <img src="/assets/img/avatar5.png" alt="" class="img-circle" width="50" height="50">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">   
                            <p>{{$expert['name']}}</p>
                        </div>
                        <div class="row">   
                            <p>{{$expert['organization']}}</p>
                        </div>
                        <div class="row">   
                            <p>{{$expert['position']}}</p>
                        </div>
                    </div>
                </div>
                <?php
                $duetime = $expert['time'];
                // var_dump($duetime);
                //维护一个时间表数组
                $table = array(
                    0 => "09:00",
                    1 => "09:30",
                    2 => "10:00",
                    3 => "10:30",
                    4 => "11:00",
                    5 => "02:00",
                    6 => "02:30",
                    7 => "03:00",
                    8 => "03:30",
                    9 => "04:00",
                );
                // var_dump($table);
                $day = 0;
                $time = 0;
                ?>

                <div class="row">
                
                <div class="col-md-1">
                <p></p>
                </div>
                
                @foreach($duetime as $col)
                    
                    <div class=" col-md-2 appointment_cell">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>
                                        @if($day)
                                            <?php
                                            echo '12-0'.strval(intval(date("d"))+$day);
                                            ?>
                                        @else
                                            <?php
                                            echo date("m-d");
                                            ?>
                                        @endif
                                    </th>
                                </tr>
                            </thead>
                                    
                            <tbody>
                            <?php 
                            $day = $day+1;
                            ?>
                    @foreach($col as $item)
                        @if($item)
                            <tr>
                                <td>
                                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/expert/order') }}" id="chatform">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <input type="hidden" name="expert_name" value="{{$expert['name']}}">
                                        <input type="hidden" name="patient_name" value="{{Auth::user()}}">
                                        <input type="hidden" name="start_segment" value="{{$time}}">
                                        <input type="hidden" name="created_at" value="<?php if($day) echo '12-0'.strval(intval(date("d"))+$day);else echo date("m-d"); ?>">

                                        <button type="submit" class="btn btn-primary">{{$table[$time]}}</button>
                                    </form>
                                </td>
                            </tr>
                        @else
                            <tr>
                                <td class="appoint_box">  </td>
                            </tr>

                        @endif
                        <?php
                        $time = $time + 1;
                        ?>
                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <?php
                        $time = 0;
                        ?>
                @endforeach
                </div>
                
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Sign in</button>
            </div> -->
        </div>
    </div>
</div>

@endforeach

<!--Config demo-->
<div id="config" class="config hidden-xs">
    <h4>Settings<a href="javascript:void(0)" class="config-link closed"><i class="icon-settings"></i></a></h4>
    <div class="config-swatch-wrap">
        <div class="row">
            <div class="col-xs-6">
                <ul class="options">
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-default">
                            <span class="header bg-white"></span>
                            <span class="header bg-white"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-dark">
                            <span class="header bg-dark"></span>
                            <span class="header bg-white"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-blue">
                            <span class="header bg-info"></span>
                            <span class="header bg-white"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-blue-full">
                            <span class="header bg-info"></span>
                            <span class="header bg-info"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-grey">
                            <span class="header bg-grey"></span>
                            <span class="header bg-white"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-grey-full">
                            <span class="header bg-grey"></span>
                            <span class="header bg-grey"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="col-xs-6">
                <ul class="options">
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-dark-full">
                            <span class="header bg-dark"></span>
                            <span class="header bg-dark"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-green">
                            <span class="header bg-green"></span>
                            <span class="header bg-white"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-green-full">
                            <span class="header bg-green"></span>
                            <span class="header bg-green"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-red">
                            <span class="header bg-red"></span>
                            <span class="header bg-white"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-red-full">
                            <span class="header bg-red"></span>
                            <span class="header bg-red"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                    <li>
                        <div class="theme-style-wrapper" data-theme="theme-dark-blue-full">
                            <span class="header bg-dark-blue"></span>
                            <span class="header bg-dark-blue"></span>
                            <span class="nav bg-dark"></span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/Config demo-->
<!--Global JS-->
<script src="{{ asset('/assets/js/vendor/jquery-1.11.1.min.js') }}"></script>
<!-- <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script> -->
<script src="{{ asset('/assets/js/bootstrap-modal.js') }}"></script>

<script src="{{ asset('/assets/plugins/navgoco/jquery.navgoco.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/fullscreen/jquery.fullscreen-min.js') }}"></script>
<script src="{{ asset('/assets/js/src/app.js') }}"></script>
<!--Page Level JS-->
<script src="{{ asset('/assets/plugins/countTo/jquery.countTo.js') }}"></script>
<script src="{{ asset('/assets/plugins/weather/js/skycons.js') }}"></script>
<script src="{{ asset('/assets/plugins/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- ChartJS  -->
<script src="{{ asset('/assets/plugins/chartjs/Chart.min.js') }}"></script>
<!-- Morris  -->
<script src="{{ asset('/assets/plugins/morris/js/morris.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/morris/js/raphael.2.1.0.min.js') }}"></script>
<!-- Vector Map  -->
<script src="{{ asset('/assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- Gauge  -->
<script src="{{ asset('/assets/plugins/gauge/gauge.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/gauge/gaugeV.js') }}"></script>
<!-- <script src="assets/plugins/gauge/gauge-demo.js"></script> -->
<!-- Calendar  -->
<script src="{{ asset('/assets/plugins/calendar/clndr.js') }}"></script>
<script src="{{ asset('/assets/plugins/calendar/clndr-demo.js') }}"></script>
<!-- <script src="{{ url('/http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js') }}"></script> -->
<script src="{{ asset('/assets/js/underscore.min.js') }}"></script>

<!-- Switch -->
<script src="{{ asset('/assets/plugins/switchery/switchery.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/dropzone/js/dropzone.min.js') }}"></script>
<!--Load these page level functions-->

</body>

</html>


