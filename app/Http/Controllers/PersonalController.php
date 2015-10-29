<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PersonalController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        return ("个人信息管理页面");
    }

    public function postReset()
    {
        return ("个人信息修改");
    }

    public function getDevice()
    {
        return ("设备管理页面");
    }

    public function deviceBind()
    {
        return ("设备绑定");
    }
}
