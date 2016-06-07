@extends('admin.appAdmin')
@section('title','Регистрация')
@section('content')
    <h1>Добавление записей</h1>
    {!! Form::open(array('route' => 'reg','method'=>'post','enctype'=>'multipart/form-data')) !!}
    {!! Form::label('date','Имя') !!}
    {!! Form::text('name', \Carbon\Carbon::now())!!}
    <br>
    {!! Form::label('email','email') !!}
    {!! Form::text('email','',['class'=>'form-control'])!!}
    <br>
    {!! Form::label('password','Passw') !!}
    {!! Form::password('password','',['class'=>'form-control'])!!}
    <br>

    <input type="hidden" value="{{csrf_token()}}" name="remember_token">
    <br>
    {!! Form::submit('Отправить',['class'=>'btn btn-default']) !!}
    {!! Form::close() !!}
@endsection