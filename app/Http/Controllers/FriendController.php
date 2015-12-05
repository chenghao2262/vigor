<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use Illuminate\Support\Facades\Cache;

class FriendController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index(){
        $user = Auth::user();
        $friends = $user->friends()->get();
        $news = $user->friendsNews();
        $sportRecord = $user->getTodaySportRecords();
        $haveClinic=Cache::get('haveClinic');
        return view('backend.friendcircle',compact('friends','news','haveClinic'));

    }

    public function getList()
    {
        $user = Auth::user();
        $friends = $user->friends()->get();
        //dd($friends);

        return $friends;
    }

    public function getNews()
    {
        $user = Auth::user();
        $news = $user->friendsNews();
        return $news;
    }

    public function postNews(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $content = $request->input('content');

        $blog = new Blog();
        $blog->userName = $name;
        $blog->content = $content;
        $blog->save();

        return redirect('/friends/index');

    }

    public function postComments()
    {
        return ("");
    }

    public function getRank()
    {
        $user = Auth::user();

        return $user->friendsRank();
    }


}
