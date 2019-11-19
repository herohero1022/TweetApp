<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tweet;
use App\Uesr;
use App\Comment;

class Commentcontroller extends Controller
{
    public function create(Request $request)
    {
        $comment = new Comment;
        $comment->text = $request->text;
        $comment->tweet_id = $request->tweet_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return redirect(url()->previous());
    }
}
