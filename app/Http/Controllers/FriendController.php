<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function getList()
    {
        $user = Auth::user();
        $friends = $user->friends()->get();
        dd($friends);

        return $friends;
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
