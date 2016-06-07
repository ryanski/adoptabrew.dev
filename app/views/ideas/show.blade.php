@extends('layouts.master')

@section('content')
        <h2>
            {{{ $idea->brewname }}}   
            <small>{{{ $idea->username }}}</small>
        </h2>
        <p>{{{ $idea->description }}}</p>

    {{ Form::open(array('action' => array('IdeasController@destroy', $idea->id), 'method' => 'DELETE', 'id' => 'formDelete'))}}

    <button type="submit" class="btn btn-default">Delete</button>
    {{ Form::close() }}


@stop
