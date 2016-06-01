@extends('layouts.master')

@section('content')

{{ Form::open(array('action' => "IdeasController@store")) }}
{{ Form::label('brewname', 'Brew Name') }}
{{ Form::text('brewname', Input::old('brewname'), ['class' => 'form-control']) }}

{{ Form::label('description', 'Description') }}
{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter your description']) }}
<button type="submit" class="btn btn-default">Submit</button>
{{ Form::close() }}
@stop

