<div>
    <h1>hier werden meine Tweets angezeigt</h1>
    <!--für die Entwicklung gibt es einen beispiel tweet-->
    <div>
        <h2>Beispiel Tweet</h2>
        <p>Titel: Mein erster Tweet</p>
        <p>Inhalt: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
        <form action="/tweets/1" method="POST">
            <button type="submit">Tweet Anzeigen</button>
        </form>
        <!--die tweets jetzt anzeigen-->
        @foreach ($tweets as $tweet)
        <div>
            <h2>{{$tweet->title}}</h2>
            <p>{{$tweet->text}}</p>
            <form action="/tweets/{{$tweet->id}}" method="GET">
                <button type="submit">Tweet Anzeigen</button>
            </form>
            <p>{{$tweet->author}}</p>
        </div>
        <hr>
        @endforeach

</div>