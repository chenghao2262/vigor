@extends('activity')

@section('content')
<section class="main-content-wrapper">
            <div class="pageheader">
                <h1>修改活动</h1>
                <p class="description">这里修改我的活动</p>
                <div class="breadcrumb-wrapper hidden-xs">
                    <span class="label">You are here:</span>
                    <ol class="breadcrumb">
                        <li class="active">Activity</li>
                    </ol>
                </div>
            </div>
<!-- $activity -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-3 col-lg-1">
                                <div class="date">
                                    <img class="img-circle profile-image" src="/assets/img/profile.jpg" alt="profile">
                                </div>
                            </div>

                            <div class=" col-md-9 col-lg-9">
                                <form class="form-horizontal" role="form" method="PUT" action="{{ url('/activity') }}" id="chatform">
                                <!-- <form class="form-horizontal" role="form"> -->
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">活动名称</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="activity_name" class="form-control" placeholder="{{$activity['name']}}" >
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">活动地点</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="activity_location" class="form-control" placeholder="{{$activity['location']}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">活动描述</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="activity_describe" placeholder="{{$activity['describe']}}"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">开始时间</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="activity_start" readonly="readonly" class="form-control" placeholder="{{$activity['start']}}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputStart" class="col-sm-3 control-label">结束时间</label>

                                        <div class="col-sm-6">
                                            <input type="text" name="activity_end" class="form-control input-append date form_datetime"
                                                id="inputStart"placeholder="{{$activity['end']}}" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <input type="hidden" name="activity_ID" value="{{$activity['activityID']}}">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button type="submit" class="btn btn-primary">修改</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
            </div>    
        <!--main content end-->
        </section>
@endsection