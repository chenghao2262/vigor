<?php

use Illuminate\Database\Seeder;

class WatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watch')->insert(
            ['watcherName'=>'YuanRui',
                'expertName'=>'njusmx',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now()
            ]);
    }
}
