@extends('activity')

@section('content')
        <!--sidebar left end-->

        <!--main content start-->
        <section class="main-content-wrapper">
            <div class="pageheader">
                <h1>活动</h1>
                <p class="description">这里展示活动广场</p>
                <div class="breadcrumb-wrapper hidden-xs">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li class="active">Activity</li>
                    </ol>
                </div>
            </div>
            
            <div class="row">

                <div class="col-md-3 col-sm-12">
                    <div class="panel">
                        <aside class="panel-body">
                            <button class="btn btn-danger btn-block">热门标签<i class="fa fa-angle-double-right"></i></button>
                            <ul class="nav nav-pills nav-stacked compose-nav">
                                <li>
                                    <a href="#"> <i class="fa fa-bookmark danger-color"></i> 荧光夜跑
                                    </a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-bookmark warning-color"></i> 甘肃骑行<span class="label label-warning pull-right"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-bookmark primary-color"></i> 别让寂寞上了你</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-bookmark success-color"></i> 爸爸去哪儿</a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-bookmark info-color"></i> 二万五千里长征<span class="label label-info pull-right inbox-notification"></span>
                                    </a>
                                </li>

                                <li>
                                    <a href="#"> <i class="fa fa-bookmark default-color"></i> 嘎嘎</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12">
                    <section class="panel">
                        <div class="panel-body">
                            <button type="button" class="btn btn-default">跑步</button>
                            <button type="button" class="btn btn-primary">骑行</button>
                            <button type="button" class="btn btn-success">普拉提</button>
                            <button type="button" class="btn btn-info">瑜伽</button>
                            <button type="button" class="btn btn-warning">健美</button>
                            <button type="button" class="btn btn-danger">More...</button>
                        </div>
                    </section>
                    <section class="panel">
                        <div class="panel-heading">
                            <h2>最新活动</h2>
                        </div>
                        <div class="panel-body">
                            
                            <ul id="activityul">
                                <li>
                                    <div class="row">
                                        <div class="activity-header">
                                            <p style="text-align:center;">
                                                <i class="fa fa-calendar"></i>2015-09-26 &nbsp;50人参与
                                                <i class="fa fa-map-marker"></i> 杭州
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row rowbottom">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <img src="/assets/img/vac-1.jpg" class="img-responsive img-semi-rec" alt="">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <div class="activity-content">
                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <p class="filled-color">
                                                <button type="button" class="btn btn-participate-activity">立即参与</button>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="row">
                                        <div class="activity-header">
                                            <p style="text-align:center;">
                                                <i class="fa fa-calendar"></i>2015-09-26 &nbsp;50人参与
                                                <i class="fa fa-map-marker"></i> 杭州
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row rowbottom">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <img src="/assets/img/vac-2.jpg" class="img-responsive img-semi-rec" alt="">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <div class="activity-content">
                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <p class="filled-color">
                                                <button type="button" class="btn btn-participate-activity">立即参与</button>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="activity-header">
                                            <p style="text-align:center;">
                                                <i class="fa fa-calendar"></i>2015-09-26 &nbsp;50人参与
                                                <i class="fa fa-map-marker"></i> 杭州
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row rowbottom" >
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <img src="/assets/img/vac-3.jpg" class="img-responsive img-semi-rec" alt="">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <div class="activity-content">
                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <p class="filled-color">
                                                <button type="button" class="btn btn-participate-activity">立即参与</button>
                                            </p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="row">
                                        <div class="activity-header">
                                            <p style="text-align:center;">
                                                <i class="fa fa-calendar"></i>2015-09-26 &nbsp;50人参与
                                                <i class="fa fa-map-marker"></i> 杭州
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row rowbottom">
                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                            <img src="/assets/img/vac-4.jpg" class="img-responsive img-semi-rec" alt="">
                                        </div>
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <div class="activity-content">
                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                            <p class="filled-color">
                                                <button type="button" class="btn btn-participate-activity">立即参与</button>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-footer">
                            <nav>
                              <ul class="pager">
                                <li><a href="#">Previous</a></li>
                                <li><a href="#">Next</a></li>
                              </ul>
                            </nav>
                        </div>
                    </section>
                </div>
                
            </div>

        <!--main content end-->
        </section>
@endsection