<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class MockController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function store(Request $request)
    {

        //usersテーブルにデータを追加
        User::create([
            'url_name' => $request->input('url_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return back();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile()
    {
        //return view('settings.profile');


        $url_name = \Auth::user()->url_name;
        $email = \Auth::user()->email;


        return view('settings.profile', [
            'url_name' => $url_name,
            'email' => $email,

        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search()
    {
        $body = Tweet::all();
        $url_name = \Auth::user()->url_name;
        $email = \Auth::user()->email;


        return view('search', [
            'url_name' => $url_name,
            'email' => $email,
            'tweets' => $body,
        ]);

        //return view('search');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function user()
    {
        return view('user.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function followers()
    {
        return view('user.followers');
    }
    public function tweet()
    {
        return view('fragments.tweet');
    }

    public function welcome()
    {
        return view('welcome');
    }
    public function test()
    {
        $tables = User::select('body');

        foreach ($tables as $table) {
            echo $table->{'Tables_in_' . env('body')};
        }
    }
    public function  index()
    {
        $users = User::all();

        return view('home', ['users' => $users]);

    }


}




