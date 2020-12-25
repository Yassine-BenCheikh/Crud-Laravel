@extends('layouts.app')
@section('content')
<style>
    div{
        text-align: center;

    }
    body{
        background-color:dodgerblue;
    }
</style>
<body>
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{ Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PATCH']) }}
      @include('posts.form_master')
      {{ Form::close() }}
    </div>
  </div>
</body>
@endsection
