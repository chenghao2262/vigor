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
        return ("�û��������");
    }

    public function getPermission()
    {
        return ("Ȩ�޹���ҳ��");
    }

    public function postPermission()
    {
        return ("Ȩ���޸�");
    }


}
