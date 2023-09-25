@extends('layouts.app')
@Section('title' , 'showTweet')
@section('content')

<div class="Karte">
    <h5 class="greyColor">Tweet com {{$tweets->updated_at}}</h3>
    <br>
    <div>
        <h2>{{$tweets->title}}</h2>
        <p>{{$tweets->text}}</p>
        <p class="greyColor"> Tweet erstellt von: {{$tweets->author}}</p>
    </div>
   <!-- <a href ="/delete_tweet/{{$tweets->id}}">Tweet löschen</a>-->
    <form action="/delete_tweet/{{$tweets->id}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Tweet löschen</button>
    </form>
</div>
@endsection