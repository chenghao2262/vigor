<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Maatwebsite\Excel\Facades\Excel;
use App\SportRecord;
use Illuminate\Support\Facades\DB;

class PersonalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=Auth::user();
        $haveClinic=Cache::get('haveClinic');
        return view('backend.profile',compact('user','haveClinic'));
    }

    public function postReset(Request $request)
    {
        $user=Auth::user();
        $user->birthday=$request->input('birth');
        $user->height = $request->input('height');
        $user->weight=$request->input('weight');
        $user->goal = $request->input('goal');
        $user->save();
        return redirect('/personal');

    }

    public function getDevice()
    {
        return ("�豸����ҳ��");
    }

    public function deviceBind(Request $request)
    {

        if($request->hasFile('data')) {
            $data = $request->file('data');

            foreach($data as $each) {
                Excel::load($each, function ($reader) {
                    //获取excel的第几张表
                    $reader = $reader->getSheet(0);
                    //获取表中的数据
                    $results = $reader->toArray();
                    $insert = array();
                    $savecount = 0;
                    for ($x = 1; $x < count($results); $x++) {
                        $savecount++;
                        $insert[] = ['userName'=>$results[$x][0],
                            'date'=>$results[$x][1],
                            'steps_detail'=>$results[$x][2],
                            'distance_detail'=>$results[$x][3],
                            'floorLevels_detail'=>$results[$x][4],
                            'calories_detail'=>$results[$x][5],
                            'steps'=>$results[$x][6],
                            'distance'=>$results[$x][7],
                            'floorLevels'=>$results[$x][8],
                            'calories'=>$results[$x][0],
                            'created_at'=>\Carbon\Carbon::now(),
                            'updated_at'=>\Carbon\Carbon::now()
                        ];
                       /* $tmpRecord = new SportRecord();
                        $tmpRecord->userName = $results[$x][0];
                        $tmpRecord->date = $results[$x][1];
                        $tmpRecord->steps_detail = $results[$x][2];
                        $tmpRecord->distance_detail = $results[$x][3];
                        $tmpRecord->floorLevels_detail = $results[$x][4];
                        $tmpRecord->calories_detail = $results[$x][5];
                        $tmpRecord->steps = (int)$results[$x][6];
                        $tmpRecord->distance = (int)$results[$x][7];
                        $tmpRecord->floorLevels = (int)$results[$x][8];
                        $tmpRecord->calories = (int)$results[$x][9];*/


                        //dd($tmpRecord);
//                        $tmpRecord->save();
                        if($savecount==20) {
                            $savecount=0;
                            DB::table('sportRecords')->insert($insert);
                            $insert=array();
                            echo "Asdasd";
                        }

                    }
                    DB::table('sportRecords')->insert($insert);


                });
            }
        }

        return redirect('/personal');
    }
}
