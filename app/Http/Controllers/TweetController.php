<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    /**
     * @return mixed
     */
    public function tweet(Request $request)
    {
        //dd(9999);
        $body = $request->input('body');
        $updated_at = $request->input('updated_at');
        //$id = $request->input('id');
       // $time = Tweet::insert(array('created_at'=>Carbon::now()));
        $tweet = new Tweet();
        //$updated_at = new Tweet();

        $tweet->body = $body;
        //$tweet->updated_at = $updated_at;


        $tweet->user_id = \Auth::id();


        $tweet->save();

        return redirect()->route('home');
        //redirect('home');
        //

    }

   // public function tweetupdate(Request $request, $id)
    //{
       // dd(7777);
       // $this->validate($request, [
         //   'name' => ['required', 'string', 'max:25'],
           // 'email' => ['required', 'string', 'email', 'max:255'],
           // 'password' => ['required', 'string', 'min:6', 'confirmed'],
        //]);

        //usersテーブルの対象ユーザ情報を更新
     //  Tweet::where('id', '=', $id)
       //     ->update([
         //       'body' => $request->input('body'),
           // ]);
        //return redirect('home');
  //  }


}




