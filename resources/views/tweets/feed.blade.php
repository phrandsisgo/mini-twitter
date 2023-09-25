@extends('layouts.app')
@section('header')

@endsection
@section('title', 'Feed')
@section('content')
<div>
    <div class="Karte">

    <h5 class="grayC">FEED VON</h5>
    <h3>Francisco Wohlgemuth</h3>

    </div>
    <!--für die Entwicklung gibt es einen beispiel tweet-->
 
    @foreach ($tweets->sortByDesc('updated_at') as $tweet)
    <?php
    $tweetTime = $tweet->updated_at;
    $timestamp = strtotime($tweetTime);
    $newFormat = date('d.m.Y H:i', $timestamp);
  ?>
    <div class="Karte card tweetFeed">
        <div class="row top-section">
        <div class="leading col">{{$tweet->title}}</div>
        <div class="trailing col">{{$newFormat}}</div>
    </div>
    <div class="card-body">
        <p class="card-text">{{$tweet->text}}</p>
        <p class="greyColor">{{$tweet->author}}</p>
        <a href="/tweets/{{$tweet->id}}" class="blacknWhiteButton btn btn-dark">Tweet ansehen</a>
    </div>
</div>
        
    @endforeach
    
    <hr>
</div>
@endsection