@extends('layouts.master')

@section('content')
        <h2>    
        {{{ $brew->brewname }}} 
            <small>{{{ $brew->User->username }}}</small>
        </h2>
        <p>{{{ $brew->description }}}</p>
        <p>{{{ $brew->goal }}}</p>
        <p>{{{ $brew->deadline }}}</p>
        <p>{{{ $brew->video }}}</p>

        {{ $brew->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}

    {{ Form::open(array('action' => array('BrewsController@destroy', $brew->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}

    <button type="submit" class="btn btn-default">Delete</button>
    {{ Form::close() }}


@stop