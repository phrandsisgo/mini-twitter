<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Tweet;
//die view findet man unter resources/views
class TweetController extends Controller
{
    public function newTweet(Request $request){
        $request ->title;
        $request -> text;
        $validated = $request->validate([
            'title' => 'required|max:23|min:3',
            'text' => 'required|max:280|min:3',
        ]);
        //macht das es gespeichert wird in die Datenbank:
        Tweet::create([
            'title' => $request->title,
            'text' => $request->text,
            'author' => 'ich'
        ]);
        return redirect('/feed');
    }
    public function tweetChanger(Request $request, $id){


        dd('fdjas');
        $requist->title;
        $requist->text;
        $validated = $request->validate([
            'title' => 'required|max:23|min:3',
            'text' => 'required|max:280|min:3',
        ]);
        Tweet::where('id', $id)->update([
            'title' => $request->title,
            'text' => $request->text,
            'updated_at' => now()
        ]);
        redirect('/feed');
        
    }

    public function index(){
        return view('tweets.index');
    }
    public function create(){
        return view ('tweets.create_tweet');
    }
    public function show(){

    }
    public function feed(){
        //hole mir die Daten aus der Datenbank und zeige sie an mit dem twitter modell
        $tweets = Tweet::all();
        
        return view('tweets.feed', ['tweets' => $tweets]);
        //return view('tweets.feed');
    }
    public function create_tweet(){
        return view('tweets.create_tweet');
    }

    public function tweets($id){

        $tweets = Tweet::find($id);

        return view('tweets.show_tweet', ['tweets' => $tweets]);
    }

    public function tweets_bearbeiten($id){
        $tweets = Tweet::find($id);
        return view('tweets.tweets_bearbeiten', ['tweets' => $tweets]);
    }
    public function delete_tweet($id){
        Tweet::destroy($id);
        return redirect('/feed');
    }
} 