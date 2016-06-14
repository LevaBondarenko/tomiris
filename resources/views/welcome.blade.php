@extends('app')
@section('title','Главная страница')


@section('content')
    <section class="firstscreen" data-type="background" data-speed="10">
        <div class="bg_black">
            <div class="container">
                <img src="images/logo.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt soluta non voluptatem. Numquam et voluptatem aperiam animi, in exercitationem nam, provident mollitia consectetur, doloribus, deserunt quo? Porro incidunt tempore quae qui perspiciatis, facilis ipsa libero totam reprehenderit, enim assumenda. Est?</p>
            </div>
        </div>
    </section>

    <section class="brow">
        <div class="container">
            <h2 class="news_block" style="padding-top: 30px;">НАШИ УСЛУГИ</h2>
            <img src="images/lojka.png" class="lojka" alt="">
            <div class="block">
                <article class="blocks">
                    <div class="top_block">
                        <img class="blocks__img" src="images/tray.svg" alt="">
                        <h4>Ресторан</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
                <article class="blocks">
                    <div class="top_block">
                        <img class="blocks__img" src="images/hookah.svg" alt="">
                        <h4>кальян</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
                <article class="blocks">
                    <div class="top_block">
                        <img class="blocks__img" src="images/bed.svg" alt="">
                        <h4>гостиница</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
                <article class="blocks">
                    <div class="top_block">
                        <img height="110px" style="    margin-top: 7px;margin-bottom: 10px;" class="blocks__img" src="images/bath.svg" alt="">
                        <h4>сауна</h4>
                    </div>
                    <div class="sub_block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, hic.</p>
                    </div>
                </article>
            </div>
            <img src="images/vilka.png" class="vilka" alt="">
        </div>
    </section>
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
    <section class="interier">
        <div class="container">
            <h2 class="news_block">
                Наш интерьер
            </h2>
            <ul id="carousel" class="owl-carousel carousel">
                <li><img src="/images/ARML8905.jpg" width="300" height="200" alt="Owl_1" /></li>
                <li><img src="/images/ARML8920.jpg" width="300" height="200" alt="Owl_2" /></li>
                <li><img src="/images/ARML8935.jpg" width="300" height="200" alt="Owl_3" /></li>
                <li><img src="/images/ARML8937.jpg" width="300" height="200" alt="Owl_4" /></li>
                <li><img src="/images/ARML8966.jpg" width="300" height="200" alt="Owl_5" /></li>
                <li><img src="/images/ARML8815.jpg" width="300" height="200" alt="Owl_6" /></li>
                <li><img src="/images/ARML8935.jpg" width="300" height="200" alt="Owl_7" /></li>
                <li><img src="/images/ARML8937.jpg" width="300" height="200" alt="Owl_8" /></li>
            </ul>
        </div>
    </section>
    <section class="news">
        <div class="container news_container">
            <h2 class="news_block">
                Наши партнеры
            </h2>

            <section class="box_news">
                <ul id="carousel-2" class="owl-carousel carousel">
                    <li><img src="/images/ExpressAccountingSolutionsLtd-Accountancy-Firm-Logo-Design.jpg" width="100" height="100" alt="Owl_1" /></li>
                    <li><img src="/images/11.jpg" width="100" height="100" alt="Owl_2" /></li>
                    <li><img src="/images/images1).jpg" width="100" height="100" alt="Owl_3" /></li>
                    <li><img src="/images/logo-moda.jpg" width="100" height="100" alt="Owl_4" /></li>
                    <li><img src="/images/Uber-Logo.jpg" width="100" height="100" alt="Owl_5" /></li>
                    <li><img src="/images/images.jpg" width="100" height="100" alt="Owl_6" /></li>
                </ul>
            </section>

        </div>
        <section class="clear"></section>

    </section>
    <section class="news brown">
        <div class="container news_container">
            <h2 class="news_block">
                Контакты
            </h2>


                <div class="left">
                    <h3>АДРЕС</h3>
                    <p>Казахстан, Астана, 010000</p>
                    <p>Кургальджинское шоссе, 9</p>

                    <h3>Гостиница</h3>
                    <p> тел.: +7 7172 790025</p>
                    <p>моб.: +7 707 555 5950</p>
                    <p>Круглосуточно</p>


                </div>

            <div class="social">
                <ul>
                    <li><a href="#"><img src="/images/vk.png" alt=""></a></li>
                    <li><a href="#"><img src="/images/insta.png" alt=""></a></li>
                    <li><a href="#"><img src="/images/fb.png" alt=""></a></li>
                </ul>
            </div>
            <div class="right">

                <h3>Ресторан <br> Lounge bar</h3>
                <p>тел.: +7 7172 790027</p>
                <p> моб.:+7 775 197 9013</p>
                <p>с 11:00 до 03:00</p>
            </div>
        </div>
        <section class="clear"></section>

    </section>
    <section>
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=MLLY4KnoXvkRqu7vjZC9pkvISt4ZLoqY&width=100%&height=400&lang=ru_RU&sourceType=constructor&scroll=true"></script>
    </section>
@endsection