@extends('layouts.master')


@section('content')

 @foreach($users as $user)
 <?php 
                    var_dump($user->hasRole('admin'));
                    var_dump($user->hasRole('brewer'));
                    var_dump($user->roles());
                    ?>
        <h2>
            <a href="{{{ action('UsersController@show', $user->id) }}}">{{{ $user->username }}}<a>
              
        </h2>
        
    @endforeach

@stop