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
        return ("����᷵�غ����б�JSON");
    }

    public function getNews()
    {
        return ("����᷵����Ϣ�б�JSON");
    }

    public function postNews()
    {
        return ("���ﴦ������Ϣ");
    }

    public function postComments()
    {
        return ("���ﴦ��������");
    }

    public function getRank()
    {
        return ("���ﷵ������");
    }


}
