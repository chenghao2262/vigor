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
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/activity')}}">
                        <!-- <form class="form-inline signup"  method="POST" action="{{ url('/sports/data') }}" enctype="multipart/form-data"> -->
                                    
                            <div class="col-md-offset-1 col-md-3"> 
                                <div class="form-group">
                                    <img src="/assets/img/vac-1.jpg" class="img-responsive img-semi-rec" alt="">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <!-- <input type="file" name="data" accept="application/vnd.ms-excel" id="exampleInputFile"> -->
                                </div>
                            </div>

                            <div class="col-md-offset-1 col-md-7">
                                
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">活动名称</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" placeholder="Activity Name" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">活动地点</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="location" class="form-control" placeholder="Activity Position">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">活动描述</label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="describe"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputStart" class="col-sm-3 control-label">开始时间</label>

                                    <div class="col-sm-6">
                                        <input name="start" type="text" class="form-control input-append date form_datetime"
                                            id="inputStart" placeholder="start">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputStart" class="col-sm-3 control-label">结束时间</label>

                                    <div class="col-sm-6">
                                        <input name="end" type="text" class="form-control input-append date form_datetime"
                                            id="inputStart" placeholder="end">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-6 col-md-2 col-sm-offset-7 col-sm-10">
                                        <button type="submit" class="btn btn-primary">提交发布</button>
                                    </div>
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
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[0]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i>{{$latestActivities[0]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-1.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[0]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[0]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <h4>开始时间</h4>
                                                            <p>{{$latestActivities[0]['start']}}</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>{{$latestActivities[0]['end']}}</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <div class="row">
                                                        <div class="activity-header">
                                                            <p style="text-align:center;">
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[1]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i> {{$latestActivities[1]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-2.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[1]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[1]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <h4>开始时间</h4>
                                                            <p>{{$latestActivities[1]['start']}}</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>{{$latestActivities[1]['end']}}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row">
                                                        <div class="activity-header">
                                                            <p style="text-align:center;">
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[2]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i> {{$latestActivities[2]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom" >
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-3.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[2]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[2]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <h4>开始时间</h4>
                                                            <p>{{$latestActivities[2]['start']}}</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>{{$latestActivities[2]['end']}}</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row">
                                                        <div class="activity-header">
                                                            <p style="text-align:center;">
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[3]['start']}}&nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i> {{$latestActivities[3]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-4.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[3]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[3]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                           <h4>开始时间</h4>
                                                            <p>{{$latestActivities[3]['start']}}</p>
                                                            <br>
                                                            <h4>结束时间</h4>
                                                            <p>{{$latestActivities[3]['end']}}</p>
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
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[0]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i>{{$latestActivities[0]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-1.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[0]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[0]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            

                                                            <button class="btn btn-modify-activity" id="subm" onclick="location.href='<?php echo url('/activity').'/'.$latestActivities[0]['activityID']?>'">修改</button>

                                                             <form class="delete_activity_form" role="form" method="POST" action="{{ url('/activity/del')}}">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="activityID" value="{{ $latestActivities[0]['activityID'] }}">
                                                                <button type="submit" class="btn btn-modify-activity">删除</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <li>
                                                    <div class="row">
                                                        <div class="activity-header">
                                                            <p style="text-align:center;">
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[1]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i>{{$latestActivities[1]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-2.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[1]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[1]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <button class="btn btn-modify-activity" id="subm" onclick="location.href='<?php echo url('/activity').'/'.$latestActivities[1]['activityID']?>'">修改</button>
                                                            <form class="delete_activity_form" role="form" method="POST" action="{{ url('/activity/del')}}">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="activityID" value="{{ $latestActivities[1]['activityID'] }}">
                                                                <button type="submit" class="btn btn-modify-activity">删除</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row">
                                                        <div class="activity-header">
                                                            <p style="text-align:center;">
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[2]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i>{{$latestActivities[2]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-3.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[2]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[2]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <button class="btn btn-modify-activity" id="subm" onclick="location.href='<?php echo url('/activity').'/'.$latestActivities[2]['activityID']?>'">修改</button>
                                                            <form class="delete_activity_form" role="form" method="POST" action="{{ url('/activity/del')}}">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="activityID" value="{{ $latestActivities[2]['activityID'] }}">
                                                                <button type="submit" class="btn btn-modify-activity">删除</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="row">
                                                        <div class="activity-header">
                                                            <p style="text-align:center;">
                                                                <i class="fa fa-calendar"></i>{{$latestActivities[3]['start']}} &nbsp;50人参与
                                                                <i class="fa fa-map-marker"></i>{{$latestActivities[3]['location']}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="row rowbottom">
                                                        <div class="col-md-3 col-sm-3 col-xs-3">
                                                            <img src="/assets/img/vac-4.jpg" class="img-responsive img-semi-rec" alt="">
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                                            <h4>{{$latestActivities[3]['name']}}</h4>
                                                            <div class="activity-content">
                                                                {{$latestActivities[3]['describe']}}
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-sm-2 col-xs-2">
                                                            <button class="btn btn-modify-activity" id="subm" onclick="location.href='<?php echo url('/activity').'/'.$latestActivities[3]['activityID']?>'">修改</button>
                                                            <form class="delete_activity_form" role="form" method="POST" action="{{ url('/activity/del')}}">
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                <input type="hidden" name="activityID" value="{{ $latestActivities[3]['activityID'] }}">
                                                                <button type="submit" class="btn btn-modify-activity">删除</button>
                                                            </form>
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