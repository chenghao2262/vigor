<?php

use Illuminate\Database\Seeder;
use App\HealthRecord;
class BodyRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HealthRecord::create(array(
            'height'=>182,
            'weight'=>72,
            'date'=>'2015-10-30',
            'userName'=>'YuanRui',
        ));
        HealthRecord::create(array(
            'height'=>182,
            'weight'=>71,
            'date'=>'2015-10-29',
            'userName'=>'YuanRui',
        ));
        HealthRecord::create(array(
            'height'=>182,
            'weight'=>72,
            'date'=>'2015-10-28',
            'userName'=>'YuanRui',
        ));
        HealthRecord::create(array(
        'height'=>182,
        'weight'=>71,
        'date'=>'2015-10-27',
        'userName'=>'YuanRui',
        ));
        HealthRecord::create(array(
            'height'=>182,
            'weight'=>72,
            'date'=>'2015-10-26',
            'userName'=>'YuanRui',
        ));
    }
}
