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
        return ("����״̬ҳ��");
    }

    public function getStatOn($date){

        return("û�������");

    }

    public function getStatBetween($start,$end){
        return("�Ǻ�");
    }
}
