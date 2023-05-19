@extends('layouts/admin')

@section('content')

<div class="main pt-5">
  <h1>{{$post->title}}</h1>
  <hr>
  <p>
    {{$post->content}}
  </p>
</div>
@endsection