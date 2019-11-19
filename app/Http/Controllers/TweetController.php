<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Tweet;
use App\Uesr;
use App\Comment;

class Tweetcontroller extends Controller
{
    public function index(Request $request)
    {
        $items = Tweet::with('user')->simplePaginate(5);
        return view('tweet.index', ['items' => $items]);
    }

    public function show($id)
    {
        $item = Tweet::find($id);
        $auths = Auth::user();
        $commnets = Comment::where('tweet_id',$id)->get();
        return view('tweet.show', ['item' => $item, 'comments' => $commnets, 'auths' => $auths]);
    }

    public function add(Request $request)
    {
        $auths = Auth::user();
        return view('tweet.add',['auths' => $auths]);
    }

    public function store(Request $request)
    {
        $tweet = new Tweet;
        $form = $request->all();
        unset($form['_token']);
        $tweet->fill($form)->save();
        return redirect('/tweet');
    }

    public function edit($id)
    {
        $item = Tweet::find($id);
        return view('tweet.edit', ['item' => $item]);
    }

    public function update(Request $request)
    {
        $tweet = Tweet::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $tweet->fill($form)->save();
        return redirect('/tweet');
    }

    public  function delete($id)
    {
        $item = Tweet::find($id);
        return view('tweet.delete', ['item' => $item]);
    }

    public function remove(Request $request)
    {
        Tweet::find($request->id)->delete();
        return redirect('/tweet');
    }
}
