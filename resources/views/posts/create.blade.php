@extends('layouts.app')
@section('content')
<style>
    div{
        text-align: center;
    }
    body{
        background-color:rgb(13, 91, 168);    }
</style>
<body>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::open(['route'=>'posts.store', 'method'=>'POST']) }}
        @include('posts.form_master')
      {{ form::close() }}
    </div>
  </div>
</body>
@endsection
