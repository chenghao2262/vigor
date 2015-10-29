<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        return ("用户管理界面");
    }

    public function getPermission()
    {
        return ("权限管理页面");
    }

    public function postPermission()
    {
        return ("权限修改");
    }


}
