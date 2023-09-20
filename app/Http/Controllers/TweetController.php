<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Tweet;
//die view findet man unter resources/views
class TweetController extends Controller
{
    //$
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
}
