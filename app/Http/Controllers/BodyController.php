<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class BodyController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();
        $bodyRecord = $user->bodyRecords()->take(5)->get()->toArray();
        dd($bodyRecord);
        // return view('test',compact('sportRecord'));
        return view('backend.body',compact('bodyRecord'));
    }

    public function getStatOn($date){

        return("");

    }

    public function getStatBetween($start,$end){
        return("");
    }
}
