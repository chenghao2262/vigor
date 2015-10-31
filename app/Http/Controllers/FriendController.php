<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Blog;

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

        return redirect('/friends/news');

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
