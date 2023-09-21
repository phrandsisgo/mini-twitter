<div>
    <h1>Einen neuen Tweet erstellen</h1>
    <form action="/newTweet" method="POST">
        @csrf
        <div>
            <label for="title">Titel</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="text">Inhalt</label>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Tweet erstellen</button>
        </div>
</div>