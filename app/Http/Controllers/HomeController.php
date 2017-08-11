<?php

namespace App\Http\Controllers;


use App\Models\Follows;
use App\Models\Tweet;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        //dd(777);
        //ログインしているユーザ情報を取得
        $url_name = \Auth::user()->url_name;
        $email = \Auth::user()->email;


  //      $isMyfollow = Follows::user()->followee;
//
//        $follow = new Follows();
//        $isMyFollow = Follows::where ('follower_id', '=', Auth::id())
//            ->where('followee_id', '=', 1)
//            ->count();


        $body = Tweet::latest()->get();




        return view('home', [
            'url_name' => $url_name,
            'email' => $email,
            'tweets' => $body,
       //     'isMyFollow' => $isMyFollow,
        ]);









    }
    public function account()
    {
        //dd(7779);
        //usersテーブルから全件取得する
        //$users = User::all();

        /*return view('settings.account', ['users' => $users]);
*/





        $url_name = \Auth::user()->url_name;
        $email = \Auth::user()->email;

        return view('settings.account', [
            'url_name' => $url_name,
            'email' => $email,


        ]);
    }





}
