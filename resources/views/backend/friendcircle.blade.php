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
    <!-- 自创 -->
    <link rel="stylesheet" href="{{ asset('/assets/css/discover.css') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Fonts  -->
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/simple-line-icons.css') }}">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.css') }}">
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
                                <img src="assets/img/profile.jpg" class="img-circle" alt="">
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
    <aside class="sidebar sidebar-left">
        <div class="sidebar-profile">
            <div class="avatar">
                <img class="img-circle profile-image" src="assets/img/profile.jpg" alt="profile">
                <i class="on border-dark animated bounceIn"></i>
            </div>
            <div class="profile-body dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4>Mike Adams <span class="caret"></span></h4></a>
                <small class="title">Front-end Developer</small>
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
            </div>
        </div>
        <nav>
            <h5 class="sidebar-header">Navigation</h5>
            <ul class="nav nav-pills nav-stacked">
                <li class=" nav-dropdown">
                    <a href="#" title="健康管理" >
                        <i class="fa  fa-fw fa-tachometer"></i> 健康管理
                    </a>
                    <ul class=" nav-sub">
                        <li>
                            <a  href="#" title="运动管理">运动管理</a>
                        </li>
                         <li>
                            <a  href="#" title="建议管理">建议管理</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-dropdown">
                    <a href="#" title="活动管理">
                        <i class="fa fa-fw fa-flag"></i> 活动管理
                    </a>
                </li>
                <li class="nav-dropdown">
                    <a href="#" title="兴趣组" data-toggle="collapse">
                        <i class="fa fa-fw fa-paper-plane-o"></i> 兴趣组
                    </a>
                </li>
                <li class=" nav-dropdown open active">
                    <a href="#" title="朋友圈">
                        <i class="fa fa-user fa-fw"></i> 朋友圈
                    </a>
                </li>
                <li class="nav-dropdown">
                    <a href="#" title="健货商城" data-toggle="collapse">
                        <i class="fa fa-fw fa-shopping-cart"></i> 健货商城
                    </a>
                </li>
                <li class="nav-dropdown">
                    <a href="#" title="专业咨询" data-toggle="collapse">
                        <i class="fa fa-fw fa-comment"></i> 专业咨询
                    </a>
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
            <h1>发现</h1>
            <p class="description">这里展示每日新鲜事</p>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li class="active">Discover</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                
                <section class="panel  timeline-post-to">
                    <div class="panel-body">
                        <form role="form">
                            <textarea class="form-control" placeholder="What's on your mind?"></textarea>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a class="btn btn-sm btn-default"><i class="fa fa-camera"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-video-camera"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-music"></i></a>
                                    <a class="btn btn-sm btn-default"><i class="fa fa-map-marker"></i></a>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

                <section class="panel  timeline-post">
                    <div class="panel-body">
                        <ul>
                            <li>
                                <div class="date">
                                    <img class="img-circle profile-image" src="assets/img/profile.jpg" alt="profile">
                                </div>
                                <h4 class="user">袁睿:</h4>
                                <p>
                                    我的书包被猫毁了<br>
                                    但是我的新包还挺好看的。
                                </p>
                                <h5 class="date-time">今天 19:00<br></h5>
                                
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-up"></i>99</a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-down"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-times"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-external-link"></i></a>
                                
                            </li>
                            <li>
                                <div class="date">
                                    <img src="assets/img/avatar3.png" alt="" class="img-circle" width="50" height="50">
                                </div>
                                <h4>小刚:</h4>
                                <p>
                                    <p>
                                     楼上傻逼<br>
                                     找到一个挺不错的视频，可以看看。
                                </p>
                                    <div class='embed-container'>
                                        <iframe src='//player.vimeo.com/video/16566326?title=0&amp;byline=0&amp;portrait=0"' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                    </div>
                                </p>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-up"></i>99</a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-down"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-times"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-external-link"></i></a>
                            </li>
                            <li>
                                <div class="date">
                                    <img src="assets/img/avatar5.png" alt="" class="img-circle" width="50" height="50">
                                </div>
                                <h4>小红:</h4>
                                <p>
                                   注意缓存的释放。<br>
                                   注意缓存的释放。<br>
                                   注意缓存的释放。<br>
                                   重要的事情说三遍
                                </p>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-up"></i>99</a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-down"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-times"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-external-link"></i></a>
                            </li>
                            <li>
                                <div class="date">
                                    <img src="assets/img/avatar4.jpg" alt="" class="img-circle" width="50" height="50">
                                </div>
                                <h4>孙梦曦:</h4>
                                <p>
                                   看看第二张像不像我。
                                </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/assets/img/vac-1.jpg" alt="" />
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/assets/img/vac-2.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="/assets/img/vac-3.jpg" alt="" />
                                    </div>
                                    <div class="col-md-6">
                                        <img src="/assets/img/vac-4.jpg" alt="" />
                                    </div>
                                </div>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-up"></i>99</a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-down"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-times"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-external-link"></i></a>
                            </li>
                            <li>
                                <div class="date">
                                    <img src="assets/img/avatar8.png" alt="" class="img-circle" width="50" height="50">
                                </div>
                                <h4>小狗:</h4>
                                <p>
                                    汪汪汪！<br>
                                    汪汪汪！<br>
                                    汪汪汪！
                                    
                                </p>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-up"></i>99</a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-down"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-times"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-external-link"></i></a>
                            </li>
                            <li>
                                <div class="date">
                                    <img src="assets/img/avatar7.png" alt="" class="img-circle" width="50" height="50">
                                </div>
                                <h4>Boss:</h4>
                                <p>
                                    晚上开会，楼上明天别来上班了。
                                </p>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-up"></i>99</a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-thumbs-o-down"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-times"></i></a>
                                <a class="btn btn-default btn-sm" href="#"><i class="fa  fa-external-link"></i></a>
                            </li>
                        </ul>

                    </div>
                </section>
            </div>

            <div class="col-md-4 col-sm-12" id="inbox-wrapper">
                <div class="panel">
                    <aside class="panel-body">
                        <a href="＃" class="btn btn-primary btn-block">与我相关</a>
                        <ul class="nav nav-pills nav-stacked compose-nav">
                            <li class="active">
                                <a href="#"> <i class="fa fa-inbox"></i> Inbox
                                    <span class="label label-primary label-circle pull-right inbox-notification">8</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-star-o"></i> Starred<span class="label label-warning label-circle pull-right inbox-notification">6</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-bookmark-o"></i> Important</a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-pencil-square-o"></i> Drafts <span class="label label-info label-circle pull-right inbox-notification">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <i class="fa fa-trash-o"></i> Trash</a>
                            </li>
                        </ul>
                    </aside>
                </div>

                <section class="panel" style="min-width:380px;max-width:400px;">
                    <h4 class="rankingtitle">Ranking</h4>
                    <div class="panel-body">
                        <div class="mail-option">
                            <div class="row">
                                <div class="btn-group col-md-2">
                                    <a data-original-title="Refresh" data-placement="top" data-toggle="tooltip" href="#" class="btn btn-default btn-sm tooltips">
                                        <i class=" fa fa-refresh"></i>
                                    </a>
                                </div>
                                
                                <div class="col-md-10">
                                    <ul class="inbox-pag pull-right">
                                        <li><span>1-50 of 83</span>
                                        </li>
                                        <li>
                                            <a class="btn btn-default btn-sm" href="#"><i class="fa fa-angle-left  pag-left"></i></a>
                                        </li>
                                        <li>
                                            <a class="btn btn-default btn-sm" href="#"><i class="fa fa-angle-right pag-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div id="contact-list-wrapper">
                            <div id="contact-list">
                                <ul>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>1</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar3.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Ashley Bell </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Sarasota, FL</small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>2</h1>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="avatar">
                                                    <img src="assets/img/avatar1.png" class="img-circle" alt="">                                                 </span>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Brian Johnson </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> San Francisco, CA</small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">10</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>3</h1>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="avatar">
                                                    <img src="assets/img/avatar2.png" class="img-circle" alt="">                                                 </span>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Chris Jones </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Brooklyn, NY</small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">9</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                         <div class="row">
                                            <div class="col-md-1">
                                                <h1>4</h1>
                                            </div>
                                            <div class="col-md-2">
                                                <span class="avatar">
                                                    <img src="assets/img/avatar4.jpg" class="img-circle" alt="">                                                 </span>
                                                </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Erica Hill </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Palo Alto, Ca</small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">9</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>5</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar5.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Greg Smith </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> London, UK</small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>6</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar6.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Jason Kendall </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> New York, NY </small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>7</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar7.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Kristen Davis </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Greenville, SC </small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>8</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar8.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Michael Shepard </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Vancouver, BC </small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>9</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar9.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Paul Allen </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Savannah, GA </small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h1>10</h1>
                                            </div>
                                            <div class="col-md-2">

                                                <span class="avatar">
                                                    <img src="assets/img/avatar9.png" class="img-circle" alt="">
                                                 </span>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="name">Paul Allen </div>
                                                <small class="location text-muted"><i class="icon-pointer"></i> Savannah, GA </small>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-star">20</i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
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
                        <img src="assets/img/avatar3.png" class="img-circle" alt="">
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
                        <img src="assets/img/avatar1.png" class="img-circle" alt="">
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
                        <img src="assets/img/avatar2.png" class="img-circle" alt="">
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
                        <img src="assets/img/avatar4.jpg" class="img-circle" alt="">
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
                        <img src="assets/img/avatar5.png" class="img-circle" alt="">
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
                        <img src="assets/img/avatar6.png" class="img-circle" alt="">
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
                        <img src="assets/img/avatar7.png" class="img-circle" alt="">
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
                        <img src="assets/img/avatar8.png" class="img-circle off" alt="">
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
                        <img src="assets/img/avatar9.png" class="img-circle off" alt="">
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
<script src="assets/js/vendor/jquery-1.11.1.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/navgoco/jquery.navgoco.min.js"></script>
<script src="assets/plugins/pace/pace.min.js"></script>
<script src="assets/plugins/fullscreen/jquery.fullscreen-min.js"></script>
<script src="assets/js/src/app.js"></script>
<!--Page Level JS-->
<script src="assets/plugins/countTo/jquery.countTo.js"></script>
<script src="assets/plugins/weather/js/skycons.js"></script>
<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- ChartJS  -->
<script src="assets/plugins/chartjs/Chart.min.js"></script>
<!-- Morris  -->
<script src="assets/plugins/morris/js/morris.min.js"></script>
<script src="assets/plugins/morris/js/raphael.2.1.0.min.js"></script>
<!-- Vector Map  -->
<script src="assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
<!-- Gauge  -->
<script src="assets/plugins/gauge/gauge.min.js"></script>
<script src="assets/plugins/gauge/gaugeV.js"></script>
<!-- <script src="assets/plugins/gauge/gauge-demo.js"></script> -->
<!-- Calendar  -->
<script src="assets/plugins/calendar/clndr.js"></script>
<script src="assets/plugins/calendar/clndr-demo.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<!-- Switch -->
<script src="assets/plugins/switchery/switchery.min.js"></script>
<script src="assets/plugins/dropzone/js/dropzone.min.js"></script>
 <!--Page Leve JS -->
<!--Load these page level functions-->
<script>
    showSteps(20000,{{$sportRecord->steps}});
    $(document).ready(function() {
        app.dateRangePicker();
        app.chartJs();
        app.weather();
        app.spinStart();
        app.spinStop();
    });
</script>


</body>

</html>

