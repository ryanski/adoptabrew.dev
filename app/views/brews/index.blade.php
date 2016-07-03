@extends('layouts.master')


@section('content')

 @foreach($brews as $brew)
        <h2>
            <a href="{{{ action('BrewsController@show', $brew->id) }}}">{{{ $brew->brewname }}}<a>
            <small>{{{ $brew->username }}}</small>
        </h2>
        <p>{{{ $brew->description }}}</p>
    @endforeach

@stop
