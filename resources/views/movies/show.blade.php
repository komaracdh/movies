@extends('layouts.master')

@section('title',$movie->title)

@section('content')
    <h1>
        {{$movie->title}}
    </h1>
    <p>
        {{$movie->storyline}}
    </p>
   

    
@endsection