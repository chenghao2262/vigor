@extends('activity')

@section('content')
 <section class="main-content-wrapper">
        <div class="pageheader">
            <h1>活动</h1>
            <p class="description">这里展示我的活动</p>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li class="active">Activity</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
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
                </div>
            </div>
        </div>    
        
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">         
                    <div class="panel-body">
                        <div class="tab-wrapper tab-primary">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#publishActivity" data-toggle="tab">我发布的活动</a>
                                </li>
                                <li><a href="#myactivity" data-toggle="tab">我参加的活动</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="myactivity">
                                    <section class="panel">
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
                                                            <h4>NAME</h4>
                                                            <div class="activity-content">
                                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <h4>开始时间</h4>
                                                            <p>2015-10-10</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>2015-10-10</p>
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
                                                            <h4>NAME</h4>
                                                            <div class="activity-content">
                                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <h4>开始时间</h4>
                                                            <p>2015-10-10</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>2015-10-10</p>
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
                                                            <h4>NAME</h4>
                                                            <div class="activity-content">
                                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <h4>开始时间</h4>
                                                            <p>2015-10-10</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>2015-10-10</p>
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
                                                            <h4>NAME</h4>
                                                            <div class="activity-content">
                                                                天天酷跑 只要你跑的够快，寂寞就追不上你
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                           <h4>开始时间</h4>
                                                            <p>2015-10-10</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>2015-10-10</p>
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
                                <div class="tab-pane active" id="publishActivity">
                                    <section class="panel">
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
                                                            <button type="button" class="btn btn-modify-activity">修改</button>
                                                            <button type="button" class="btn btn-participate-activity">删除</button>
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
                                                            <button type="button" class="btn btn-modify-activity">修改</button>
                                                            <button type="button" class="btn btn-participate-activity">删除</button>
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
                                                            <button type="button" class="btn btn-modify-activity">修改</button>
                                                            <button type="button" class="btn btn-participate-activity">删除</button>
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
                                                            <button type="button" class="btn btn-modify-activity">修改</button>
                                                            <button type="button" class="btn btn-participate-activity">删除</button>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--main content end-->
</section>
@endsection