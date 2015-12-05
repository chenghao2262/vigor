<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=Auth::user();
        $haveClinic=Cache::get('haveClinic');
        return view('backend.profile',compact('user','haveClinic'));
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
