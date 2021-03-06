<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;

class GroupController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        $haveClinic=Cache::get('haveClinic');
        return view('backend.interest', compact('haveClinic'));
    }

    public function getGroup()
    {
        return ("���ﷵ����Ȥ����ϸ��Ϣ");
    }

    public function postGroup()
    {
        return ("������Ȥ��");
    }

    public function joinGroup()
    {
        return ("���������Ȥ��");
    }

    public function getNews()
    {
        return ("����������Ϣ");
    }

    public function postNews()
    {
        return ("����������Ϣ");
    }
}
