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
            'date'=>'2015-10-31',
            'segment'=>37
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-10-31',
            'segment'=>38
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-10-31',
            'segment'=>39
        ));
        AvailableTime::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-10-31',
            'segment'=>40
        ));
    }
}
