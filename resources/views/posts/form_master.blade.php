<style>
    div{
        text-align: center;
    }
    body{
        background-color:rgb(13, 91, 168);    }
</style>
<body>
<div class="row" >
    <div class="col-sm-2">
      {!! form::label('title','Team') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
        {{ Form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'Team name...']) }}
        {{ $errors->first('title', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-2">
      {!! form::label('bosy','Country') !!}
    </div>
    <div class="col-sm-10">
      <div class="form-group {{ $errors->has('body') ? 'has-error' : "" }}">
        {{ Form::text('body',NULL, ['class'=>'form-control', 'id'=>'body', 'placeholder'=>'Country...']) }}
        {{ $errors->first('body', '<p class="help-block">:message</p>') }}
      </div>
    </div>
  </div>

  <div class="form-group">
    {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
  </div>
</body>
