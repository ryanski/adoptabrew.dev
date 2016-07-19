@extends('layouts.master')


@section('content')

 @foreach($ideas as $idea)
 <?php 
                    var_dump($idea);
                    ?>
        <h2>
            <a href="{{{ action('IdeasController@show', $idea->id) }}}">{{{ $idea->brewname }}}<a>
            <small>{{{ $idea->User->username }}}</small>   
           
        </h2>
        <p>{{{ $idea->description }}}</p>
    @endforeach
{{-- this in double brackets to show paginate $ideas->links()  --}}
@stop

{{-- $ideas = DB::table('ideas')
                    ->orderBy('created_at', 'desc')
                    ->get(); --}}




