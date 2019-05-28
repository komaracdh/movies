@extends('layouts.master')

@section('title')
    Add New Movie

@endsection

@section('content')
    <h2 class="blog-post-title">Add new Movie</h2>

<form method="POST" action="{{ route('store-movies') }}">
        {{ csrf_field() }}

        <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title"/>
                @include('partials.error-massage',['fieldTitle' => 'title'])
            </div>

        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" class="form-control" id="genre" name="genre"/>
            @include('partials.error-massage',['fieldTitle' => 'genre'])
        </div>

        <div class="form-group">
                <label for="director">Director</label>
                <input type="text" class="form-control" id="director" name="director"/>
                @include('partials.error-massage',['fieldTitle' => 'director'])
            </div>
            <div class="form-group">
                    <label for="date">date</label>
                    <input type="text" class="form-control" id="date" name="date"/>
                    @include('partials.error-massage',['fieldTitle' => 'date'])
                </div>

        <div class="form-group">
                <label for="storyline">Storyline</label>
                <input type="text" class="form-control" id="storyline" name="storyline"/>
                @include('partials.error-massage',['fieldTitle' => 'storyline'])
        </div>

        

        <div class="form-group">
            <button type="submit" class="btn btn-primary"> Submit Movie</button>
        </div>
    </form>
@endsection