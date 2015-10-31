<?php

use Illuminate\Database\Seeder;
use App\Blog;
class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create(array(
            'userName'=>'njusmx',
            'content'=>'我孙梦曦，就是一只香辣鸡块。'
        ));
        Blog::create(array(
            'userName'=>'njusmx',
            'content'=>'我孙梦曦，就是一只辣子鸡。'
        ));
        Blog::create(array(
            'userName'=>'njusmx',
            'content'=>'我孙梦曦，就是一只千页豆腐。'
        ));
        Blog::create(array(
            'userName'=>'njusmx',
            'content'=>'我孙梦曦，就是一只黄豆。'
        ));
        Blog::create(array(
            'userName'=>'njusmx',
            'content'=>'我孙梦曦，就是一只大肉包。'
        ));
    }
}
