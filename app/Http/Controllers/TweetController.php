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
        //macht das es gespeichert wird in die Datenbank:
        Tweet::create([
            'title' => $request->title,
            'text' => $request->text,
            'author' => 'ich'
        ]);
        return redirect('/feed');

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

       // echo "<script>alert('Tweet wurde erstellt')</script>";
        return view('tweets.show_tweet', ['tweets' => $tweets]);
    }
    public function delete_tweet($id){
        Tweet::destroy($id);
        return redirect('/feed');
    }
} 