@extends('layouts.master')

@section('content')

<?php
echo $idea->id;
?>

{{ Form::open(array('action' => ["IdeasController@update", $idea->id] , 'method' =>  'PUT')) }}
    <div class="form-group">
        {{ Form::label('brewname', 'Brew Name') }}
        {{ Form::text('brewname', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $idea->brewname ]) }}
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $idea->description ]) }}
    </div>
<button type="submit" class="btn btn-default">Update</button>
{{ Form::close() }}


{{-- href="{{{ action('IdeasController@show', $idea->id) }}}" --}}
@stop


