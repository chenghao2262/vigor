<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        return ("这里会返回兴趣组首页");
    }

    public function getGroup()
    {
        return ("这里返回兴趣组详细信息");
    }

    public function postGroup()
    {
        return ("创建兴趣组");
    }

    public function joinGroup()
    {
        return ("处理加入兴趣组");
    }

    public function getNews()
    {
        return ("返回组内信息");
    }

    public function postNews()
    {
        return ("发布组内信息");
    }
}
