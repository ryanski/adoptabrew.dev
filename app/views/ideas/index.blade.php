@extends('layouts.master')

@section('content')

 @foreach($ideas as $idea)
        <h2>
            <a href="{{{ action('IdeasController@show', $idea->id) }}}">{{{ $idea->brewname }}}<a>
            <small>{{{ $idea->username }}}</small>
        </h2>
        <p>{{{ $idea->description }}}</p>
    @endforeach
@stop

