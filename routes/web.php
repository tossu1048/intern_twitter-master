<?php

/*
|--------------------------------------------------------------------------
| Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
});

Route::get('account', 'HomeController@account')->name('account');
Route::get('profile', 'MockController@profile')->name('profile');
Route::get('search', 'MockController@search');
Route::get('user', 'MockController@user');

Route::get('{user}/followers', 'MockController@followers')->name('followers');

Route::get('tweet', 'MockController@tweet')->name('tweet');
Route::post('tweet', 'TweetController@tweet');
Route::get('tweetupdate/{user}', 'TweetController@tweetupdate')->name('tweetupdate');
Route::get('redirect', 'tweetController@redirect');

Route::get('welcome', 'MockController@welcome');

Route::get('test', 'MockController@test');

Route::get('user2', 'MockController@index');

Route::post('{user}/following', 'FollowsController@follow')->name('follow');
Route::get('{user}/following', 'FollowsController@following')->name('following');


Route::get('function', function () {
    return 'Hello World';
});


//Route::post('account', 'MockController@store');
//Route::put('account', 'MockController@store')->name('account111');
Route::post('profille', 'MockController@up')->name('accountup');

