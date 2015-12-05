<?php

use Illuminate\Database\Seeder;
use App\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create(array(
            'watcherName'=>'njusmx',
            'expertName'=>'YuanRui',
            'startSegment'=>9,
            'endSegment'=>9,
            'payment'=>0,
            'status'=>1,
            'date'=>'2015-12-06'
        ));
        Order::create(array(
            'watcherName'=>'njusmx',
            'expertName'=>'YuanRui',
            'startSegment'=>7,
            'endSegment'=>7,
            'payment'=>0,
            'status'=>1,
            'date'=>'2015-12-06'
        ));
        Order::create(array(
            'watcherName'=>'njusmx',
            'expertName'=>'YuanRui',
            'startSegment'=>8,
            'endSegment'=>8,
            'payment'=>0,
            'status'=>1,
            'date'=>'2015-12-06'
        ));
    }
}
