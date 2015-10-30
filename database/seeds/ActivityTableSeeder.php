<?php

use Illuminate\Database\Seeder;
use App\Activity;
class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Activity::create(array(
            'activityID'=>'1',
            'name'=>'爸爸去哪儿',
            'describe'=>'我拿你们当同学，而你们呢？确拿我当爸爸',
            'location'=>'江苏',
            'founderName'=>'YuanRui',
            'start'=>\Carbon\Carbon::today()->format('Y-m-d'),
            'end'=>\Carbon\Carbon::tomorrow()->format('Y-m-d'),
            'portrait'=>'/img/1.jpg',
        ));
        Activity::create(array(
            'activityID'=>'2',
            'name'=>'天天酷跑',
            'describe'=>'只要你跑得够快，寂寞就追不上你',
            'location'=>'江苏',
            'founderName'=>'YuanRui',
            'start'=>\Carbon\Carbon::today()->format('Y-m-d'),
            'end'=>\Carbon\Carbon::tomorrow()->format('Y-m-d'),
            'portrait'=>'/img/1.jpg',
        ));
        Activity::create(array(
            'activityID'=>'3',
            'name'=>'别让寂寞上了你',
            'describe'=>'不是针对各位，我是说，在座的，都是辣鸡。',
            'location'=>'江苏',
            'founderName'=>'YuanRui',
            'start'=>\Carbon\Carbon::today()->format('Y-m-d'),
            'end'=>\Carbon\Carbon::tomorrow()->format('Y-m-d'),
            'portrait'=>'/img/1.jpg',
        ));
        Activity::create(array(
            'activityID'=>'4',
            'name'=>'二万五千里长征',
            'describe'=>'五十六个民族，五十五个加分。',
            'location'=>'江苏',
            'founderName'=>'YuanRui',
            'start'=>\Carbon\Carbon::today()->format('Y-m-d'),
            'end'=>\Carbon\Carbon::tomorrow()->format('Y-m-d'),
            'portrait'=>'/img/1.jpg',
        ));
        Activity::create(array(
            'activityID'=>'5',
            'name'=>'甘肃夜跑',
            'describe'=>'水能载舟，亦可赛艇',
            'location'=>'江苏',
            'founderName'=>'YuanRui',
            'start'=>\Carbon\Carbon::today()->format('Y-m-d'),
            'end'=>\Carbon\Carbon::tomorrow()->format('Y-m-d'),
            'portrait'=>'/img/1.jpg',
        ));
    }
}
