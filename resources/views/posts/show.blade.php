@extends('layouts.app')
@section('content')
<style>
    div{
        text-align: center;
    }
    body{
        background-color:rgb(13, 91, 168);
    }


</style>
<body>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Team</h2>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Team : </strong>
            {{ $post->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Country : </strong>
            {{ $post->body}}
        </div>
        <div class="pull-right">
            <br/>
            <a class="btn btn-dark" href="{{ route('posts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i>
                <svg class="bi bi-arrow-left-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.646 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L6.207 7.5H11a.5.5 0 0 1 0 1H6.207l2.147 2.146z"/>
                  </svg></a>
        </div>
    </div>

</div>

</body>
@endsection
