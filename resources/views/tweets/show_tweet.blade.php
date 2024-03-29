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

    <a href ="/tweets_bearbeiten/{{$tweets->id}}"><button class="btn btn-dark">Tweet bearbeiten</button></a>
    <form action="/delete_tweet/{{$tweets->id}}"onsubmit="event.preventDefault(); validateMyForm();" method="POST" id="delete-form">
        @csrf 
        <button type="submit" class="btn btn-danger" onclick="confirmDelete(event)">Tweet löschen</button>
    </form>
    <script>
        function confirmDelete(event)
       {
           const confirmation = confirm('Möchten Sie diesen Tweet wirklich löschen?');
              if(!confirmation)
              {
                event.preventDefault();
              }
              else
              {
                document.getElementById('delete-form').submit();
              }
        }
        
    </script>
</div>
@endsection