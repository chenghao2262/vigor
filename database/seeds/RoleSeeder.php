<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(array(
            'name'=>'普通用户'
        ));
        Role::create(array(
            'name'=>'vip用户'
        ));
        Role::create(array(
            'name'=>'医生'
        ));
        Role::create(array(
            'name'=>'教练'
        ));
    }
}
