<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/test','TestController@index');
Route::get('/testget','FriendController@getlist');

Route::get('/sports/index', 'SportsController@index');
Route::get('/sports/index/{date}', 'SportsController@getStatOn');
Route::get('/sports/index/{start}/{end}', 'SportsController@getStatBetween');

Route::get('/body/index', 'BodyController@index');
Route::get('/body/index/{date}', 'BodyController@getStatOn');
Route::get('/body/index/{start}/{end}', 'BodyController@getStatBetween');

Route::get ('/expert/index', 'ExpertController@index');
Route::get ('/expert/hotExperts', 'ExpertController@getHotExperts');
Route::get ('/expert/hotArticles', 'ExpertController@getHotArticles');
Route::get ('/expert/{expertId}/articles', 'ExpertController@getArticlesOf');
Route::get ('/expert/articles/{articleId}', 'ExpertController@getArticle');
Route::post('/expert/article', 'ExpertController@publishArticle');
Route::get ('/expert/{expertId}/availableTime', 'ExpertController@getAvailableTime');
Route::post('/expert/order', 'ExpertController@postOrder');
Route::post('/expert/order/chat', 'ExpertController@postChat');
Route::post('/expert/order/grade', 'ExpertController@postGrade');
Route::post('/expert/suggestion', 'ExpertController@makeSuggestion');
Route::get ('/expert/suggestion', 'ExpertController@getSuggestion');
Route::get ('/expert/suggestion/{suggestionId}', 'ExpertController@getSuggestionAt');

Route::get ('/friends/list', 'FriendController@getList');
Route::get ('/friends/news', 'FriendController@getNews');
Route::post('/friends/news', 'FriendController@postNews');
Route::post('/friends/comments', 'FriendController@postComments');
Route::get ('/friends/rank', 'FriendController@getRank');

Route::get ('/activity', 'ActivityController@index');
Route::post('/activity', 'ActivityController@newActivity');
Route::get ('/activity/{id}', 'ActivityController@getActivity');
Route::get ('/activity/{id}/participation', 'ActivityController@joinActivity');

Route::get ('/group', 'GroupController@index');
Route::get ('/group/{id}', 'GroupController@getGroup');
Route::post('/group/{id}', 'GroupController@joinGroup');
Route::post('/group', 'GroupController@postGroup');
Route::get ('/group/{id}/news', 'GroupController@getNews');
Route::post('/group/news', 'GroupController@postNews');

Route::get ('/users', 'GroupController@index');
Route::get ('/users/permission', 'GroupController@getPermission');
Route::post('/users/permission', 'GroupController@postPermission');

Route::get ('/personal', 'PersonalController@index');
Route::post('/personal', 'PersonalController@postReset');
Route::get ('/device', 'PersonalController@getDevice');
Route::post('/device', 'PersonalController@deviceBind');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
