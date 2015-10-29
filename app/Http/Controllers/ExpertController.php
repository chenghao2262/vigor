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
        return ("����᷵�غܶ�����ר�ҵ�Json");
    }

    public function getHotArticles()
    {
        return ("����᷵�غܶ��������µ�Json");
    }

    public function getArticlesOf($expertId)
    {
        return ("����᷵��ר�ҵ���ʷ���µ�Json");
    }

    public function getArticle($articleId)
    {
        return ("����᷵�غ�������Ϣ");
    }

    public function getAvailableTime($expertID)
    {
        return ("����᷵��ר���пյ�ʱ��");
    }

    public function postOrder($request)
    {
        return ("���ﴦ�����ύ");
    }

    public function postChat($request)
    {
        return ("���ﴦ������");
    }

    public function postGrade($request)
    {
        return ("���ﴦ������");
    }

    public function publishArticle($request)
    {
        return ("���ﴦ��������");
    }

    public function makeSuggestion($request)
    {
        return ("���ﴦ���鷢��");
    }

    public function getSuggestion()
    {
        return ("���ﷵ�ؽ���ҳ��");
    }

    public function getSuggestionAt()
    {
        return ("���ﷵ�ؽ�����ϸ��Ϣ");
    }
}
