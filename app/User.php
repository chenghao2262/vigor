<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $primaryKey = 'name';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','email', 'password','portrait','"describe','birthday','gender','height','weight','type','goal','credits'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *  用户所创建的所有活动
     */
    public function activitiesHasFounded(){
        return $this->hasMany('App\Activity','founderName','name');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * 返回用户参与的所有活动
     */
    public function activitiesHasJoined(){
        return $this->belongsToMany('App\Activity','activity_user','userName','activity_id');

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     * 返回一条查询，查询用户所有运动记录
     */
    public function sportRecords(){
        return $this->hasMany('App\SportRecord','userName','name');
    }

    /**
     * @return mixed
     * 返回当日运动数据
     */
    public function getTodaySportRecords(){

        return $this->sportRecords()->first();  //for test
        //return $this->sportRecords()->where('date',\Carbon\Carbon::today()->format('Y-m-d'))->first();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     */
    public function bodyRecords(){
        return $this->hasMany('App\HealthRecord','userName','name');
    }

    /**
     * @return mixed
     * 返回所有好友
     */
    public function friends(){
        $userName = $this->name;
        $first = DB::table('friends')->join('users','friendName','=','users.name')
                                     ->where('userName',$userName)
                                     ->select(DB::raw('friendName as name,portrait'));


        $second = DB::table('friends')->join('users','userName','=','users.name')
                                      ->where('friendName',$userName)
                                      ->select(DB::raw('userName as name,portrait'));


        $all = $first->unionAll($second);

        //$result = $all->join('users','name','=','users.name');
        //dd($all->get());
        return $all;


    }

}
