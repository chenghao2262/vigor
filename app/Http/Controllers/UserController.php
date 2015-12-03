<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Role;

class UserController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
    }

    public function index()
    {
        return ("");
    }

    public function getPermission()
    {
        $role_permission = array();
        for($i = 1;$i<5;$i++){
            for($j = 1;$j<16;$j++){
                $name = $i.$j;
                $role_permission[$name]="";
            }
        }

        for($i = 1;$i<5;$i++) {
            $role = Role::find($i);
            $permissions = $role->permissions()->get()->toArray();
            foreach($permissions as $item){
                $name = $i.($item["id"]);
                $role_permission[$name]="checked";

            }
        }

        return view('admin',compact('role_permission'));
    }

    public function postPermission(Request $request)
    {

        for($i = 1;$i<5;$i++){
            $role = Role::find($i);
            for($j = 1;$j<16;$j++){
                $name = $i.$j;
                if($request->input($name)=="on") {
                    $role->permissions()->detach($j);
                    $role->permissions()->attach($j);
                }else{
                    $role->permissions()->detach($j);
                }
            }
        }


        return redirect('/users/permission');
    }


}
