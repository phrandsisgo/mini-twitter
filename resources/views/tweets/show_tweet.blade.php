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
    <form action="/delete_tweet/{{$tweets->id}}"onsubmit="event.preventDefault(); validateMyForm();" method="POST" id="delete-form">
        @csrf
        <button type="submit" class="btn btn-danger" onclick="confirmDelete(event)">Tweet löschen</button>
    </form>
    <script>
        function confirmDelete(event)
       {
            if(confirm('Sind Sie sicher, dass Sie diesen Tweet löschen wollen?')){
                this.submit();
            }else{
                alert('Tweet wurde nicht gelöscht');
            }
        }
</div>
@endsection