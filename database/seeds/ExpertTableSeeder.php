<?php

use Illuminate\Database\Seeder;
use App\Expert;

class ExpertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expert::create(array(
            'name'=>'YuanRui',
            'organization'=>'六扇门',
            'position'=>'捕快',
            'mailbox'=>'yuanrui@sixdoor.com',
        ));
        Expert::create(array(
            'name'=>'njusmx',
            'organization'=>'东厂',
            'position'=>'公公',
            'mailbox'=>'smx@eastfactory.com',
        ));
    }
}
