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
        return ("���ҳ");
    }

    public function newActivity()
    {
        return ("�����������");
    }

    public function getActivity()
    {
        return ("���ػ����");
    }

    public function postActivity()
    {
        return ("����");
    }

}
