<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BodyController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
        return ("生理状态页面");
    }

    public function getStatOn($date){

        return("没这个功能");

    }

    public function getStatBetween($start,$end){
        return("呵呵");
    }
}
