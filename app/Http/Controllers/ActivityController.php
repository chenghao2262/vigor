<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Activity;

class ActivityController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * 返回活动界面
     */

    public function index()
    {
        $user = Auth::user();

        //用户参与的活动
        $activity = $user->activitiesHasJoined();
        dd($activity->get()->toArray());

        //得到最新活动
        $latestActivities = Activity::latest()->take(5)->get()->toArray();
        dd($latestActivities);

        return view('backend.activity',compact('sportRecord','latestActivities'));
    }

    public function newActivity(Request $request)
    {

        $user = Auth::user();
        $userName = $user->name;
        $name = $request->input('name');
        $describe = $request->input('describe');
        $location = $request->input('location');
        $start = $request->input('start');
        $end = $request->input('end');

        //见鬼，create居然崩溃，只能暂时用如下愚蠢的办法来创建活动了
        $activity = new Activity();
        $activity->name=$name;
        $activity->describe=$describe;
        $activity->location=$location;
        $activity->founderName=$userName;
        $activity->start=$start;
        $activity->end=$end;

        $activity->save();

        return redirect('/activity');
    }

    public function getActivity($id)
    {
        $activity =  Activity::find($id);
        $participants = $activity->participants()->get()->toArray();
        //dd($participants);
        return $activity;
    }

    public function joinActivity($id)
    {
        $user = Auth::user();
        $user->activitiesHasJoined()->attach($id);
        return redirect('/activity');
    }

}
