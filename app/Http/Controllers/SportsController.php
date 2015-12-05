<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\SportRecord;
use Maatwebsite\Excel\Facades\Excel;
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

    public function postExcel(Request $request){


        if($request->hasFile('data')) {
            Excel::load($request->file('data'), function ($reader) {
                //获取excel的第几张表
                $reader = $reader->getSheet(0);
                //获取表中的数据
                $results = $reader->toArray();

                for($x = 1;$x<count($results);$x++) {
                    $tmpRecord = new SportRecord();
                    $tmpRecord->userName = $results[$x][0];
                    $tmpRecord->date = $results[$x][1];
                    $tmpRecord->steps_detail = $results[$x][2];
                    $tmpRecord->distance_detail = $results[$x][3];
                    $tmpRecord->floorLevels_detail = $results[$x][4];
                    $tmpRecord->calories_detail = $results[$x][5];
                    $tmpRecord->steps = (int)$results[$x][6];
                    $tmpRecord->distance = (int)$results[$x][7];
                    $tmpRecord->floorLevels = (int)$results[$x][8];
                    $tmpRecord->calories = (int)$results[$x][9];

                    //dd($tmpRecord);
                    $tmpRecord->save();
                    dd($tmpRecord);
                }

            });
        }


    }

    public function getStatOn($date)
    {
        return("");
    }


   public function getStatBetween($start,$end){
       return("");
   }
}
