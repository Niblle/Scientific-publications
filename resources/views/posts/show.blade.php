@extends('layouts.app')

@section('content')
<a href="/posts" class="btn-btn-default">Go back</a>
    <h5>{{$post->title}}</h5>
    <div>
{!!$post->body!!}
    </div>
    <hr>
  <small>Written on {{$post->created_at}}</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" type="edit" class="form control btn btn-success mt-2" value="2">Edit</a>
  {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$post->id], 
  'method' => 'POST', 'class' => 'pull-right']) !!}
  
  {{Form::hidden('_method', 'DELETE')}}
  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}
@endsection

 