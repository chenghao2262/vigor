<?php

use Illuminate\Database\Seeder;
use App\SportRecord;

class SportRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        SportRecord::create(array(
//            'sportRid'=>'1',
//            'userName'=>'YuanRui',
//            'date'=>\Carbon\Carbon::today()->format('Y-m-d'),
//            'steps_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
//            'distance_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
//            'floorLevels_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
//            'calories_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
//            'steps'=>9312,
//            'distance'=>9312,
//            'floorLevels'=>9312,
//            'calories'=>9312,
//        ));
        SportRecord::create(array(
            'userName'=>'njusmx',
            'date'=>\Carbon\Carbon::today()->format('Y-m-d'),
            'steps_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
            'distance_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
            'floorLevels_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
            'calories_detail'=>"[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,200,100,50,77,85,65,190,500,455,655,200,300,100,20,10,60,70,150,200,333,355,40,44,144,789,855,477,444,300,60,155,222,15,55,66,77,88,499,155,222,115,155,20,10,15,65,40,10]",
            'steps'=>9112,
            'distance'=>9312,
            'floorLevels'=>9312,
            'calories'=>9312,
        ));
    }
}
