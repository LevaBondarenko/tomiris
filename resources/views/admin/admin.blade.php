@extends('admin.appAdmin')
@section('title','Новости')
@section('content')
    <h1>Добавление записей</h1>


    {!! Form::open(array('route' => 'save','method'=>'post','enctype'=>'multipart/form-data')) !!}
    {!! Form::label('date','Дата') !!}
    <input type="date" name="date" id="" required>
    <br>
    {!! Form::label('title','Заголовкок') !!}
    {!! Form::text('title','',['class'=>'form-control'],['required' => 'required'])!!}
    <br>
    {!! Form::label('preview_text','Первичный текст') !!}
    {!! Form::text('preview_text','',['class'=>'form-control'],['required' => 'required'])!!}
    <br>
    {!! Form::label('detail_text','Детальный текст') !!}
    {!! Form::text('detail_text','',['class'=>'form-control'],['required' => 'required'])!!}
    <br>
    {!! Form::label('image','Изображение') !!}
    {!! Form::file('image',['class'=>'form-control'])!!}
    <input type="hidden" value="{{csrf_token()}}">
    <br>
    {!! Form::submit('Отправить',['class'=>'btn btn-default']) !!}
    {!! Form::close() !!}

    <br>
    <br>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <h1>Все записи</h1>
    <section class="box_news" style="background: #ccc;">
        @foreach($news as $item)
            <article class="block_news" style="width: 100%; border: 1px solid #111; margin: 10px 0; padding: 20px;">
                <span style="float: left; margin-right: 10px">{{$item->id}}</span>
                <img src="{{$item->img_src}}" alt="" style="width: 50px;">
                <span class="news_date">{{$item->date}}</span>
                <h4 class="title_news">{{$item->title}}</h4>
                <p class="content_news">{{$item->preview_text}}</p>
                <div class="panel_edit" style="float: right">
                   <a class="btn btn-danger" href="admin/news/delete/{{$item->id}}">Удалить</a>
                    <br>
                    <br>
                    <a class="btn bg-info" href="admin/news/update/{{$item->id}}">Редактировать</a>

                </div>
            </article>
        @endforeach
    </section>
{{$news->links()}}
@endsection