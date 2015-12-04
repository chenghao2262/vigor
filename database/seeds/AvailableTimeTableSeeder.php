<?php

use Illuminate\Database\Seeder;
use App\AvailableTime;
class AvailableTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-7',
            'segment'=>1
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-7',
            'segment'=>2
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-7',
            'segment'=>3
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-7',
            'segment'=>6
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-7',
            'segment'=>7
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-7',
            'segment'=>9
        ));

        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-8',
            'segment'=>3
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-8',
            'segment'=>4
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-8',
            'segment'=>5
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-12-8',
            'segment'=>6
        ));


    }
}
