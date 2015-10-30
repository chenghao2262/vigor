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
        $activity = $user->activities();
        //dd($activity->get()->count());

        //得到最新活动
        $latestActivities = Activity::latest();
        dd($latestActivities->take(5)->get()->toArray());

        return view('backend.activity',compact('sportRecord','latestActivities'));

    }

    public function newActivity(Request $request)
    {
        dd('ss');
        $user = Auth::user();
        $userName = $user->name;
        $name = $request->input('name');
        $describe = $request->input('describe');
        $location = $request->input('location');
        $start = $request->input('start');
        $end = $request->input('end');

        Activity::create([
            'name'=>$name,
            'describe'=>$describe,
            'founderName'=>$userName,
            'location'=>$location,
            'start'=>$start,
            'end'=>$end
        ]);

        return redirect('/activity');


    }

    public function getActivity()
    {
        return ("返回活动详情");
    }

    public function postActivity()
    {
        return ("参与活动");
    }

}
