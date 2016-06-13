@extends('admin.appAdmin')
@section('title','Новости')
@section('content')
    <h1>Редактирование</h1>
    {!! Form::open(array('route' => 'adminUpdateSave','method'=>'post','enctype'=>'multipart/form-data')) !!}
        <input type="hidden" name="id" value="{{$new->id}}">
        <label for="date">Дата</label>
        <input type="date" name="date" id="" value="{{$new->date}}">
        <br>
        <label for="title">Заголовок</label>
        <input type="text" class="form-control" name="title" value="{{$new->title}}"><br>
        <br>
        <label for="title">Краткое описание</label>
        <input type="text" class="form-control" name="preview_text" value="{{$new->preview_text}}">
        <br>
        <label for="title">Детальное описание</label>
        <input type="text" class="form-control" name="detail_text" value="{{$new->detail_text}}">
        <br>
        <label for="title">Картинка заголовка</label>
        @if(isset($new->img_src))
            <img src="/{{$new->img_src}}" style="width: 150px;" alt="">
        @endif
        <input type="hidden" value="{{csrf_token()}}" name="_token">
        <input type="file"  name="image" value="/{{$new->img_src}}">
        <br>
        {!! Form::submit('Сохранить',['class'=>'btn btn-info']) !!}
    {!! Form::close() !!}
    <br>

@endsection