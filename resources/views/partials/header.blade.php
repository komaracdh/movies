<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
             @yield('title','Movie')
         </title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/movie.css">
         
    </head>

<div class="navbar">
    <div class="navbar-inner">
        <a id="logo" href="/">Movies</a>
        <ul class="nav">
            <li><a href="/movies">Movies</a></li>
            <li><a href="/movies/create">Add Movie</a></li>
            
        </ul>
    </div>
</div>