@extends('layouts.app')

@section('content')
<style>
    table{
        width:70%;
        border-radius: 30px;    }
    body{
        background-color:rgb(13, 91, 168);
    }
    h2{
        color: azure;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 40px;
        text-align: center;
    }
    div{
        text-align: center;
    }
</style>
<body>
  <div class="row">
  <div class="col-sm-12">
    <div class="full-right">
      <h2>Teams list</h2>
    </div>
  </div>
  </div>

  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
<div class="card-body">
    <table class="table table-striped table-dark" >
    <tr>
      <th with="80px">Number</th>
      <th>Team name</th>
      <th>Country</th>
      <th with="140px" class="text-center">
        <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
          <i class="glyphicon glyphicon-plus"></i>
          <svg class="bi bi-plus-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5H4a.5.5 0 0 1 0-1h3.5V4a.5.5 0 0 1 .5-.5z"/>
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0V8z"/>
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
          </svg>

        </a>
      </th>
    </tr>
    <?php $no=1; ?>
    @foreach ($post as $key => $value)
      <tr>
        <td>{{$no++}}</td>
        <td>{{ $value->title }}</td>
        <td>{{ $value->body }}</td>
        <td>
          <a class="btn btn-info btn-sm" href="{{route('posts.show',$value->id)}}">
              <i class="glyphicon glyphicon-th-large"></i>show</a>
          <a  class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
              <i class="glyphicon glyphicon-pencil"></i>edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline']) !!}
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>delete</button>
            {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
  </table>
</div>

</body>
@endsection
