@extends('admin.appAdmin')
@section('title','Редактирование главной страницы')
@section('content')
    <h1>Редактирование главной</h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @foreach($content as $item)
    <form action="/admin/head/save" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <label for="title">Начальная запись</label>
        <textarea type="text" class="form-control"   name="title">{{$item->title}}</textarea>
        <label for="restoran">Ресторан</label>
        <input class="form-control" type="text" value="{{$item->restoran}}" name="restoran">
        <label  for="kalyan">Кальян</label>
        <input class="form-control" type="text" value="{{$item->kalyan}}" name="kalyan">
        <label for="hotel">Отель</label>
        <input class="form-control" type="text" value="{{$item->hotel}}" name="hotel">
        <label for="bathroom">Сауна</label>
        <input class="form-control" type="text" value="{{$item->bathroom}}" name="bathroom">
        <label for="vk">ВК</label>
        <input class="form-control" type="text"  value="{{$item->instagram}}" name="vk">
        <label for="instagram">ВК</label>
        <input class="form-control" type="text"  value="{{$item->instagram}}" name="instagram">
        <label for="fb">ФБ</label>
        <input class="form-control" type="text" value="{{$item->fb}}" name="fb">
        <button class="btn btn-success" onClick="return window.confirm('Вы действительно хотите сохранить запись?')">Отредактировать</button>
    </form>
    @endforeach
@endsection