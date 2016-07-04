@extends('layouts.master')

@section('content')
    {{ Form::open(['method' => 'POST', 'action' => ['HomeController@postLogin']]) }}
        <div class="form-group">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'autofocus']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        {{ Form::submit('Login', array('class' => 'btn btn-default', 'style' => 'float: right;'))}}    
    {{ Form::close() }}

     
@stop
