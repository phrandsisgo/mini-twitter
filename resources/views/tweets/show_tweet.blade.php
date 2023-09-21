<div>
    <h3>FEED VON</h3>
    <h2>Francisco Wohlgemuth</h2>
    <div>
        <h2>{{$tweets->title}}</h2>
        <p>{{$tweets->text}}</p>
        <p>{{$tweets->author}}</p>
    </div>
    <hr>
    <a href="/feed">Zurück zur Übersicht</a>
   <!-- <a href ="/delete_tweet/{{$tweets->id}}">Tweet löschen</a>-->
    <form action="/delete_tweet/{{$tweets->id}}" method="POST">
        @csrf
        <button type="submit" >Tweet löschen</button>
    </form>
</div>