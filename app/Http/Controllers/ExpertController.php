<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExpertController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }


    public function getHotExperts()
    {
        return ("这里会返回很多热门专家的Json");
    }

    public function getHotArticles()
    {
        return ("这里会返回很多热门文章的Json");
    }

    public function getArticlesOf($expertId)
    {
        return ("这里会返回专家的历史文章的Json");
    }

    public function getArticle($articleId)
    {
        return ("这里会返回很文章信息");
    }

    public function getAvailableTime($expertID)
    {
        return ("这里会返回专家有空的时间");
    }

    public function postOrder($request)
    {
        return ("这里处理订单提交");
    }

    public function postChat($request)
    {
        return ("这里处理聊天");
    }

    public function postGrade($request)
    {
        return ("这里处理评分");
    }

    public function publishArticle($request)
    {
        return ("这里处理发布文章");
    }

    public function makeSuggestion($request)
    {
        return ("这里处理建议发送");
    }

    public function getSuggestion()
    {
        return ("这里返回建议页面");
    }

    public function getSuggestionAt()
    {
        return ("这里返回建议详细信息");
    }
}
