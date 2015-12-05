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



    }
}
