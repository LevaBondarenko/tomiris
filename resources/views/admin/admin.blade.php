@extends('admin.appAdmin')

@section('content')
    {!! Form::open(array('route' => 'admin')) !!}
        {!! Form::label('') !!}
    {!! Form::close() !!}
    <section class="box_news">
        @foreach($news as $item)
            <article class="block_news" style="width: 100%;">
                <span class="news_date">{{$item->date}}</span>
                <h4 class="title_news">{{$item->title}}</h4>
                <p class="content_news">{{$item->preview_text}}</p>
                <a class="news_more" href="news/show/{{$item->id}}">Подробнее</a>
            </article>
        @endforeach
            <?php echo $news->render() ?>
    </section>
@endsection