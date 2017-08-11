<?php
/**
 * Created by PhpStorm.
 * User: toshiya
 * Date: 2017/08/10
 * Time: 18:35
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Follows;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{

    public function follow()
    {

//        dd(99999);
        $follow = new Follows($id);

        $follow->follower_id = \Auth::user()->id;
        $follow->followee_id = $id;

        $follow->save();

//        $follow = new Follows();
//
////        $follow->follower_id = \Auth::user()->id;
////        $follow->followee_id = $id;
//
////        $followId = Follows::where ('follower_id', '=', $id)->get();
//        $isMyFollow = Follows::where ('follower_id', '=', Auth::id())
//            ->where('followee_id', '=', $id)
//            ->count();
//        $url_name = \Auth::user()->url_name;
//        $email = \Auth::user()->email;

//        $user = User::where('id', '=', $id)->first();
        return redirect()->route('following', $user);
    }

    public function following($id)
    {
        //dd(9999);

        $follow = new Follows();

//        $follow->follower_id = \Auth::user()->id;
//        $follow->followee_id = $id;

//        $followId = Follows::where ('follower_id', '=', $id)->get();
        $isMyFollow = Follows::where ('follower_id', '=', Auth::id())
            ->where('followee_id', '=', $id)
            ->count();
        $url_name = \Auth::user()->url_name;
        $email = \Auth::user()->email;



        return view('user.following', [
            'user' => $follow,
            'isMyFollow' => $isMyFollow,
            'url_name' => $url_name,

        ]);
    }


}

