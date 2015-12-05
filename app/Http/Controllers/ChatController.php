<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\ChatRecord;
use App\Events\ChatEvent;

class ChatController extends Controller
{



    public function postChat(Request $request)
    {
        $user = Auth::user();
        $toName = $request->input('toName');
        $content = $request->input('content');

        $groupId = "";
        //dd($toName,$content,$user->name);
        if(strcasecmp($user->name,$toName)<0) {

            $groupId =  DB::table('friends')->where('userName', $user->name)
                                            ->where('friendName',$toName)
                                            ->select('groupID')
                                            ->first()->groupID;

        }else{

            $groupId =  DB::table('friends')->where('friendName', $user->name)
                                            ->where('userName',$toName)
                                            ->select('groupID')
                                            ->first()->groupID;
        }


        $chatRecord = new ChatRecord();
        $chatRecord->groupID = $groupId;
        $chatRecord->fromName = $user->name;
        $chatRecord->content = $content;
        $chatRecord->save();
        event(new ChatEvent($chatRecord));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
