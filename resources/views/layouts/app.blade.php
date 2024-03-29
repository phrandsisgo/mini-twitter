<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Twitter-@yield('title')</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="10.211.59.4:5174/resources/css/app.css">
    <!--make a directive for the css--> 
    @vite('resources/css/app.css')
    @yield('header')
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="/feed">Mini Twitter</a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-sm-0">
       
       
      </ul>
      <a href="/feed" class="@if (Request::is('feed'))
      borderBottom
        
      @endif">  Meine Tweets</a>
      <div class="navSpacer"></div>
      <a href="/create_tweet">
      <button id="createTweet" class="btn btn-primary">create a new Tweet</button></a>
    </div>
  </div>
</nav>

    @yield('content')

</body>
</html>