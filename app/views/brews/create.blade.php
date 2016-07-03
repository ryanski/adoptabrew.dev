@extends('layouts.master')

@section('content')
{{ $errors->first('brewname', '<span class="help-block">:message</span>') }}
{{ $errors->first('description', '<span class="help-block">:message</span>') }}

{{ Form::open(array('action' => "BrewsController@store")) }}
{{ Form::label('brewname', 'Brew Name') }}
{{ Form::text('brewname', Input::old('brewname'), ['class' => 'form-control']) }}

{{ Form::label('description', 'Description') }}
{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter your description']) }}

{{ Form::label('goal', 'Goal') }}
{{ Form::textarea('goal', null, ['class' => 'form-control', 'placeholder' => 'Enter your goal']) }}

{{ Form::label('deadline', 'Deadline') }}
{{ Form::textarea('deadline', null, ['class' => 'form-control', 'placeholder' => 'Enter your deadline']) }}

{{ Form::label('video', 'Video') }}
{{ Form::textarea('video', null, ['class' => 'form-control', 'placeholder' => 'Enter your video link']) }}

<button type="submit" class="btn btn-default">Submit</button>
{{ Form::close() }}
@stop