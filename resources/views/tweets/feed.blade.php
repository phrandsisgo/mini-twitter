@extends('layouts.app')
@section('header')

@endsection
@section('title', 'Feed')
@section('content')
<div>
    <h5 class="grayC">FEED VON</h5>
    <h3>Francisco Wohlgemuth</h3>
    <!--für die Entwicklung gibt es einen beispiel tweet-->
    
        <!--die tweets jetzt anzeigen-->
        @foreach ($tweets as $tweet)
        <a href="/tweets/{{$tweet->id}}"> 
        <div>
            <h2>{{$tweet->title}}</h2>
            <p>{{$tweet->text}}</p>
      <!--      <form action="/tweets/{{$tweet->id}}" method="GET">
                <button type="submit">Tweet Anzeigen</button>
            </form>-->
            <p>{{$tweet->author}}</p>
        </div>
        </a>
        <hr>
        @endforeach

</div>
@endsection