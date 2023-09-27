@extends('layouts.app')
@section('title', 'Neuer Tweet erstellen')
@section('content')
<div class="Karte">
    <h1>Tweet bearbeiten</h1>
    <h4 class="greyColor">welche Änderungen müssen vorgenommen werden?</h4>
    <form action="/tweetChanger" method="POST">
        @csrf
        <div class="formClass">
            <div class="mb3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" name="title" id="title" class="form-control formStyle @error('title') is-invalid @enderror" value="{{$tweets->title}}">
            </div>
            @error('title')
            <div class="alert alert-danger">{{$message}}</div>
                
            @enderror
            <div class="mb3">
                <label for="text" class="form-label">Inhalt</label>
                <textarea name="text" class="form-control formStyle @error('text') is-invalid @enderror" id="text" cols="30" rows="10">{{$tweets->text}}</textarea>
            </div>

            @error('text')
            <div class="alert alert-danger">{{$message}}</div>
                
            @enderror
            <BR></BR>
            <div>
                <button type="submit" class="btn btn-primary">Überarbeitung abspeichern</button>
                <button class="btn btn-danger">Abbrechen</button>
            </div>
        </div>
    </form>
</div>
@endsection