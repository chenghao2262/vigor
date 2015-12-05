<?php

use Illuminate\Database\Seeder;
use App\Suggestion;
class SuggestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Suggestion::create(array(
            'watcherName'=>'YuanRui',
            'expertName'=>'njusmx',
            'titile'=>'建议你多吃点翔',
            'content'=>'兄弟干了这杯热翔上路，阿斯达大三的打开了空间公司多路公交可谁都立刻杀死打算的八十多卡还是大树的期望能定。',
            'date'=>'2015-12-05',
            'status'=>1,
            'type'=>1
        ));
        Suggestion::create(array(
            'watcherName'=>'YuanRui',
            'expertName'=>'njusmx',
            'titile'=>'滚叫阿斯达大三的',
            'content'=>'兄弟干了这杯热翔上路，阿斯达大三的打开了空间公司多路公交可谁都立刻杀死打算的八十多卡还是大树的期望能定。',
            'date'=>'2015-12-05',
            'status'=>1,
            'type'=>1
        ));
        Suggestion::create(array(
            'watcherName'=>'YuanRui',
            'expertName'=>'njusmx',
            'titile'=>'adasdddqdas',
            'content'=>'兄弟干了这杯热翔上路，阿斯达大三的打开了空间公司多路公交可谁都立刻杀死打算的八十多卡还是大树的期望能定。',
            'date'=>'2015-12-05',
            'status'=>1,
            'type'=>1
        ));
        Suggestion::create(array(
            'watcherName'=>'YuanRui',
            'expertName'=>'njusmx',
            'titile'=>'sffdg阿萨斯分期付过来看哭了',
            'content'=>'兄弟干了这杯热翔上路，阿斯达大三的打开了空间公司多路公交可谁都立刻杀死打算的八十多卡还是大树的期望能定。',
            'date'=>'2015-12-05',
            'status'=>1,
            'type'=>1
        ));
        Suggestion::create(array(
            'watcherName'=>'YuanRui',
            'expertName'=>'njusmx',
            'titile'=>'宿舍用挑剔ufsfasd1',
            'content'=>'兄弟干了这杯热翔上路，阿斯达大三的打开了空间公司多路公交可谁都立刻杀死打算的八十多卡还是大树的期望能定。',
            'date'=>'2015-12-05',
            'status'=>1,
            'type'=>1
        ));
    }
}
