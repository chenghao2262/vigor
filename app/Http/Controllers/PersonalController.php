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
        return ("������Ϣ����ҳ��");
    }

    public function postReset()
    {
        return ("������Ϣ�޸�");
    }

    public function getDevice()
    {
        return ("�豸����ҳ��");
    }

    public function deviceBind()
    {
        return ("�豸��");
    }
}
