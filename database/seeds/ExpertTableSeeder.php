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
            'name'=>'专家1',
            'organization'=>'南京大学',
            'position'=>'捕快',
            'mailbox'=>'yuanrui@sixdoor.com',
        ));
        Expert::create(array(
            'name'=>'专家2',
            'organization'=>'北京大学',
            'position'=>'公公',
            'mailbox'=>'smx@eastfactory.com',
        ));
        Expert::create(array(
            'name'=>'专家3',
            'organization'=>'东京大学',
            'position'=>'捕快',
            'mailbox'=>'yuanrui@sixdoor.com',
        ));
        Expert::create(array(
            'name'=>'专家4',
            'organization'=>'西京大学',
            'position'=>'公公',
            'mailbox'=>'smx@eastfactory.com',
        ));
        Expert::create(array(
            'name'=>'专家5',
            'organization'=>'东南大学',
            'position'=>'捕快',
            'mailbox'=>'yuanrui@sixdoor.com',
        ));
        Expert::create(array(
            'name'=>'专家6',
            'organization'=>'西北大学',
            'position'=>'公公',
            'mailbox'=>'smx@eastfactory.com',
        ));
    }
}
