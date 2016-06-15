@extends('welcome')

@section('latestNews')
    <section class="news">
        <div class="container news_container">
            <h2 class="news_block">
                Последние новости.
            </h2>

            <section class="box_news">
                @foreach($news as $item)
                    <article class="block_news">
                        <span class="news_date">{{$item->date}}</span>
                        <h4 class="title_news">{{substr($item->title,0,100)}}</h4>
                        <p class="content_news">{{$item->preview_text}}</p>
                        <button class="btn news_more" data-toggle="modal" data-target="#modal-{{$item->id}}" >Подробнее</button>

                        <div class="modal fade" id="modal-{{$item->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    @if(!empty($item['img_src']))
                                        <div class="img-responsive" style="background: url('/{{$item->img_src}}') no-repeat; -webkit-background-size:100% 100% ;background-size: 100% 100%;    height: 300px;">
                                            <div class="modal-header">
                                                <span>{{$item->title}}</span>
                                                <button class="close" type="button" data-dismiss="modal">X</button>
                                            </div>
                                        </div>
                                    @else
                                        <div class="modal-header" style="background: #000;">
                                            <span>{{$item->title}}</span>
                                            <button class="close" type="button" data-dismiss="modal">X</button>
                                        </div>
                                    @endif
                                    <div class="modal-body">
                                        <p><b>{{$item->preview_text}}</b></p>
                                        <p>{{$item->detail_text}}</p>
                                    </div>
                                    <div class="modal-footer">
                                        <span>{{$item->date}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                @endforeach
            </section>

        </div>
        <section class="clear"></section>

    </section>
@endsection