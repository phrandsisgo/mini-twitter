<div>
    <h1>Einen neuen Tweet erstellen</h1>
    <form action="/tweets" method="POST">
        <div>
            <label for="title">Titel</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="content">Inhalt</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Tweet erstellen</button>
        </div>
</div>