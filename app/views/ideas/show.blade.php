@extends('layouts.master')

@section('content')
        <h2>
       {{--  {{{ $ideas = User::find(1)->ideas }}} --}}    
        {{{ $idea->brewname }}} 
            <small>{{{ $idea->username }}}</small>
        </h2>
        <p>{{{ $idea->description }}}</p>
        {{ $idea->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}

    {{ Form::open(array('action' => array('IdeasController@destroy', $idea->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}

    <button type="submit" class="btn btn-default">Delete</button>
    {{ Form::close() }}


@stop
