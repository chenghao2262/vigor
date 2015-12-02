<?php

namespace App\Http\Controllers;

use App\AvailableTime;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Expert;
use App\Article;
use App\Order;
use App\Suggestion;

class ExpertController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index(){

        $user = Auth::user();
        $hotExperts = $this->getHotExperts();
        $hotArticles = $this->getHotArticles();
        $expertsList = $user->getExperts()->get()->toArray();

        return view('backend.experts',compact('hotExperts','hotArticles','expertsList'));

    }

    public function getHotExperts()
    {
        return Expert::latest()->take(10)->get()->toArray();
    }

    public function getHotArticles()
    {
        return Article::latest()->take(10)->get()->toArray();
    }


    /**
     * @param $expertId
     * reutrn all articles of the expert
     */
    public function getArticlesOf($expertId)
    {
        $expert = Expert::find($expertId);
        $articles = $expert->articles()->get();
        dd($articles);
        return $articles;

    }

    public function getArticle($articleId)
    {
        dd(Article::find($articleId));
        return Article::find($articleId);

    }

    public function getAvailableTime($expertID)
    {
        $expert = Expert::find($expertID);
        $availableTime = $expert->availableTime()->where('date','>=',\Carbon\Carbon::today()->format('Y-m-d'))->get();
        dd($availableTime);
        return $availableTime;
    }

    public function postOrder(Request $request)
    {
        $expertName = $request->input('expertName');
        $date =       $request->input('date');
        $segments =   $request ->input('segment');
        $payment = $request ->input('payment');

        $userName = Auth::user()->name;



        $order = new Order();
        $order->watcherName = $userName;
        $order->expertName = $expertName;
        $order->startSegment = $segments[0];
        $order->payment = $payment;
        $order->endSegment = $segments[count($segments)-1];
        $order->status=0;

        $order->save();

        $affectedRows = AvailableTime::where('date',$date) ->whereIn('segment',$segments)
                                                           ->delete();
        dd($order);
        //return redirect();

    }

    public function postChat($request)
    {
        return ("���ﴦ������");
    }

    public function postGrade($request)
    {
        return ("���ﴦ������");
    }

    public function publishArticle(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;

        $title = $request->input('title');
        $content = $request->input('content');

        $article = new Article();
        $article->expertName = $name;
        $article->title = $title;
        $article->content = $content;
        $article->date = \Carbon\Carbon::today()->format('Y-m-d');
        $article->save();

        return redirect('/expert/'.$name.'/articles');

    }

    public function makeSuggestion(Request $request)
    {
        $user = Auth::user();
        $name = $user->name;
        $watcherName = $request->input('watcherName');
        $title = $request->input('title');
        $content = $request->input('content');

        $suggestion = new Suggestion();
        $suggestion->expertName = $name;
        $suggestion->watcherName = $watcherName;
        $suggestion->titile = $title;
        $suggestion->content = $content;
        $suggestion->date = \Carbon\Carbon::today()->format('Y-m-d');
        $suggestion->status = 0;
        $suggestion->type = 0;

        $suggestion->save();
        dd($suggestion);
    }

    public function suggestionIndex(){
        $user = Auth::user();
        $suggestions = $user->getSuggestions()->get();
        return view('backend.suggestion');

    }

    public function getSuggestion()
    {
        $user = Auth::user();
        $suggestions = $user->getSuggestions()->get();
        dd($suggestions);
    }

    public function getSuggestionAt($suggestionId)
    {
        $suggestion = Suggestion::find($suggestionId)->content;
        dd($suggestion);
    }
}
