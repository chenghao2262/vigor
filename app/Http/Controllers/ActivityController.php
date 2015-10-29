<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        return ("活动首页");
    }

    public function newActivity()
    {
        return ("处理发布活动请求");
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
