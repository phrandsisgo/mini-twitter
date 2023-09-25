@extends('layouts.app')
@section('title', 'Neuer Tweet erstellen')
@section('content')
<div class="Karte">
    <h1>Tweet erstellen</h1>
    <h4 class="greyColor">Was möchtest du mitteilen?</h4>
    <form action="/newTweet" method="POST">
        @csrf
        <div class="formClass">
            <div class="mb3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" name="title" id="title" class="form-control formStyle ">
            </div>
            <div class="mb3">
                <label for="text" class="form-label">Inhalt</label>
                <textarea name="text" class="form-control formStyle" id="text" cols="30" rows="10"></textarea>
            </div>
            <BR></BR>
            <div>
                <button type="submit" class="btn btn-primary">Tweet erstellen</button>
            </div>
        </div>
    </form>
</div>

@endsection