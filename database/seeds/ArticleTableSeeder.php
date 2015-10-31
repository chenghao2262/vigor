<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
            'expertName'=>'YuanRui',
            'date'=>'2015-10-30',
            'title'=>'东厂傻逼',
            'content'=>'千秋万代，一统江湖',
        ));
        Article::create(array(
            'expertName'=>'njusmx',
            'date'=>'2015-10-30',
            'title'=>'六扇门吃翔',
            'content'=>'千秋万代，一统江湖',
        ));
    }
}
