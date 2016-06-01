@extends('layouts.master')

@section('content')

 @foreach($ideas as $idea)
        <h2>
            {{{ $ideas->brewname }}}
            <small>{{{ $ideas->username }}}</small>
        </h2>
        <p>{{{ $ideas->description }}}</p>
    @endforeach
@stop

