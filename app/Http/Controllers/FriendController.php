<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FriendController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function getList()
    {
        return ("这里会返回好友列表JSON");
    }

    public function getNews()
    {
        return ("这里会返回信息列表JSON");
    }

    public function postNews()
    {
        return ("这里处理创建消息");
    }

    public function postComments()
    {
        return ("这里处理创建评论");
    }

    public function getRank()
    {
        return ("这里返回排名");
    }


}
