<?php

use Illuminate\Database\Seeder;
use App\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(array(
            'name'=>'查看运动数据'
        ));
        Permission::create(array(
            'name'=>'上传运动数据'
        ));
        Permission::create(array(
            'name'=>'查看运动统计'
        ));
        Permission::create(array(
            'name'=>'查看活动'
        ));
        Permission::create(array(
            'name'=>'参与活动'
        ));
        Permission::create(array(
            'name'=>'管理活动'
        ));
        Permission::create(array(
            'name'=>'发布建议'
        ));
        Permission::create(array(
            'name'=>'发布文章'
        ));
        Permission::create(array(
            'name'=>'我的诊所'
        ));
        Permission::create(array(
            'name'=>'咨询专家'
        ));
        Permission::create(array(
            'name'=>'朋友圈'
        ));
        Permission::create(array(
            'name'=>'发布动态'
        ));
        Permission::create(array(
            'name'=>'查看排名'
        ));
        Permission::create(array(
            'name'=>'加入兴趣组'
        ));
        Permission::create(array(
            'name'=>'管理兴趣组'
        ));
    }
}
