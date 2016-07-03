@extends('layouts.master')
@section('content')

<?php
echo $brew->id;
?>

{{ Form::open(array('action' => ["BrewsController@update", $brew->id] , 'method' =>  'PUT')) }}
    <div class="form-group">
        {{ Form::label('brewname', 'Brew Name') }}
        {{ Form::text('brewname', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $brew->brewname ]) }}
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $brew->description ]) }}
        {{ Form::label('goal', 'Goal') }}
        {{ Form::textarea('goal', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $brew->goal ]) }}
        {{ Form::label('deadline', 'Deadline') }}
        {{ Form::textarea('deadline', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $brew->deadline ]) }}
        {{ Form::label('video', 'Video') }}
        {{ Form::textarea('video', null, ['class' => 'form-control', 'autofocus', 'placeholder' => $brew->video ]) }}
    </div>
<button type="submit" class="btn btn-default">Update</button>
{{ Form::close() }}


{{-- href="{{{ action('IdeasController@show', $idea->id) }}}" --}}
@stop

