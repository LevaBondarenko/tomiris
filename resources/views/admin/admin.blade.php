@extends('admin.appAdmin')
@section('title','Новости')
@section('content')
    <h1>Добавление записей</h1>
    {!! Form::open(array('route' => 'save','method'=>'post','enctype'=>'multipart/form-data')) !!}
    {!! Form::label('date','Дата') !!}
    {!! Form::date('date', \Carbon\Carbon::now())!!}
    <br>
    {!! Form::label('title','Заголовкок') !!}
    {!! Form::text('title','',['class'=>'form-control'])!!}
    <br>
    {!! Form::label('preview_text','Первичный текст') !!}
    {!! Form::text('preview_text','',['class'=>'form-control'])!!}
    <br>
    {!! Form::label('detail_text','Детальный текст') !!}
    {!! Form::text('detail_text','',['class'=>'form-control'])!!}
    <br>
    {!! Form::label('image','Изображение') !!}
    {!! Form::file('image','',['class'=>'form-control'])!!}
    <input type="hidden" value="{{csrf_token()}}">
    <br>
    {!! Form::submit('Отправить',['class'=>'btn btn-default']) !!}
    {!! Form::close() !!}
    <h1>Все записи</h1>
    <section class="box_news">
        @foreach($news as $item)
            <article class="block_news" style="width: 100%;">
                <img src="{{$item->img_src}}" alt="" style="width: 50px;">
                <span class="news_date">{{$item->date}}</span>
                <h4 class="title_news">{{$item->title}}</h4>
                <p class="content_news">{{$item->preview_text}}</p>
                <a class="news_more" href="news/show/{{$item->id}}">Подробнее</a>
            </article>
        @endforeach
    </section>

    @yield('status')
@endsection