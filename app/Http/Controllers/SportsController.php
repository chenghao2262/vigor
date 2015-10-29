<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SportsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $sportRecord = $user->getTodaySportRecords();
        // return view('test',compact('sportRecord'));
        return view('backend.homepage',compact('sportRecord'));
    }

    public function getStatOn($date)
    {
        return("没这个功能");
    }


   public function getStatBetween($start,$end){
       return("呵呵");
   }
}
