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
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ExpertController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index(){

        $user = Auth::user();
        $hotExperts = $this->getHotExperts();
      //  dd($hotExperts);

        for($k=0;$k<count($hotExperts);$k++){
            $expert = $hotExperts[$k];
            $time =  array();
            for($m=0;$m<5;$m++){
                $tmp = array();
                for($n=0;$n<10;$n++){
                    $tmp[$n]=0;
                }
                $time[$m]=$tmp;
            }

            for($i=0;$i<5;$i++){
                $date = '2015-12-'.($i<3?'0':'').($i+6);

                $times=Expert::find($expert['name'])->availableTime()->where('date','=',$date)->get()->toarray();

                foreach($times as $each){
                    $time[$i][intval($each['segment'])]=1;
                }
            }

            $expert['time']=$time;
            $hotExperts[$k] = $expert;
        }
        $haveClinic=Cache::get('haveClinic');
        return view('backend.dotor',compact('hotExperts','haveClinic'));


    }

    public function getHotExperts()
    {
        return Expert::latest()->take(6)->get()->toArray();
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
        $haveClinic=Cache::get('haveClinic');
        return view('backend.doc_article',compact('articles','haveClinic','expert'));

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
        $expertName = $request->input('expert_name');
        $patientName = $request->input('patient_name');
        $date =       $request->input('created_at');
        $start_segment =   $request ->input('start_segment');


        $order = new Order();
        $order->watcherName = Auth::user()->name;
        $order->expertName = $expertName;
        $order->startSegment = $start_segment;
        $order->endSegment =$start_segment;
        $order->status=0;
        $order->payment=0;
        $order->date = $date;
        $order->save();
        AvailableTime::where('expertName',$expertName)->where('date','2015-'.$date) ->where('segment',$start_segment)->delete();
        
        return redirect('/expert/index');

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

        $title = "新文章";
        $content = $request->input('publish_article');

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
        $watcherName = $request->input('patientName');
        $title = "这里是建议标题";
        $content = $request->input('publish_suggestion');
        $suggestion = new Suggestion();
        $suggestion->expertName = $name;
        $suggestion->watcherName = $watcherName;
        $suggestion->titile = $title;
        $suggestion->content = $content;
        $suggestion->date = \Carbon\Carbon::today()->format('Y-m-d');
        $suggestion->status = 0;
        $suggestion->type = 0;

        $suggestion->save();
        return redirect('/expert/clinic');
    }

    public function suggestionIndex(){
        $user = Auth::user();
        $orders = $user->orders()->orderby('date')->orderby('startSegment')->get()->toArray();
        $suggestions = $user->getSuggestions()->get();
        $haveClinic=Cache::get('haveClinic');
        return view('backend.suggestion',compact('suggestions','haveClinic','orders'));

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

    public function myclinic(){

        $expert = Expert::find(Auth::user()->name);
        $orders = $expert->orders()->orderby('date')->orderby('startSegment')->get()->toArray();



        $time =  array();
        for($m=0;$m<5;$m++){
            $tmp = array();
            for($n=0;$n<10;$n++){
                $tmp[$n]=0;
            }
            $time[$m]=$tmp;
        }

        for($i=0;$i<5;$i++){
            $date = '2015-12-'.'0'.($i+6);

            $times=$expert->availableTime()->where('date','=',$date)->get()->toarray();

            foreach($times as $each){
                $time[$i][intval($each['segment'])]=1;
            }
        }
        $expert['time']=$time;
        $haveClinic=Cache::get('haveClinic');
        return view('backend.myOutpatient',compact('orders','expert','haveClinic'));
    }

    public function postSchedule(Request $request){
        $name = Auth::user()->name;
        $table = array(
            0 => "09:00",
            1 => "09:30",
            2 => "10:00",
            3 => "10:30",
            4 => "11:00",
            5 => "02:00",
            6 => "02:30",
            7 => "03:00",
            8 => "03:30",
            9 => "04:00",
        );

        $insert =  array();
        for($i=0;$i<5;$i++) {
            $date = '12-' . 0 . ($i + 6);

            for($j=0;$j<10;$j++){
                $datetime = $date.$table[$j];


                if($request->input($datetime)=="1"){
                    $insert[] = ['expertName'=>$name,
                                'date'=>'2015-'.$date,
                                'segment'=>$j,
                                'created_at'=>\Carbon\Carbon::now(),
                                'updated_at'=>\Carbon\Carbon::now()];
                    /*AvailableTime::firstOrCreate(array(
                        'expertName'=>$name,
                        'date'=>'2015-'.$date,
                        'segment'=>$j
                    ));*/
                }else{
                    /*$delete[] = ['expertName'=>$name,
                        'date'=>'2015-'.$date,
                        'segment'=>$j];*/
                    /*AvailableTime::firstOrCreate(array(
                        'expertName'=>$name,
                        'date'=>'2015-'.$date,
                        'segment'=>$j
                    ))->delete();*/
                }
            }
        }
        DB::table('availableTime')->where('expertName',$name)->delete();
        DB::table('availableTime')->insert($insert);


        return redirect('/expert/clinic');

    }
}
