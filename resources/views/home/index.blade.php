<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="stylesheet" href="{{url('home/css/vendor.css')}}">
    <link rel="stylesheet" href="{{url('home/css/main.css')}}">
</head>
<body>
    <div class="block block--main">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5 appear-in-left">
                    <div class="block__title">Кур’єрська доставка продуктів <span class="text-green">м. Вінниця</span></div>
                    <div class="block__content">
                        <p>Скориставшись послугами нашої служби<br>Ви переконаєтесь, що це зручно, надійно швидко.</p>
                        <p>Ми працюемо без перерв та вихідних з <span class="text-green">10:00</span> до <span class="text-green">20:00</span><br>
                            тел.: <span class="text-green">(068) 273 54 62</span>, <span class="text-green">(073) 096 23 48</span></p>
                    </div>
                    <div class="block__footer">
                        <a href="#block--order" class="btn btn-lg sm-scroll">Замовити зараз</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block--about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 appear-in-left">
                    <div class="block__title">Чому саме в нас</div>
                    <div class="block__content">
                        <p>Працівники служби потурбуються про те, щоб Ви більше не витрачали свій час на походи до магазинів у пошуках необхідних товарів, де потрібно стояти у довгих чергах, а потім ще й нести важкі сумки додому. Ми зробимо це за Вас!</p>
                        <p>Кур’єри з радістю доставлять всі необхідні продукти до Ваших дверей. Вам потрібно лише зателефонувати оператору, або оформити онлайн замовлення на сайті, ми врахуємо усі побажання і оперативно доставимо Вам необхідний товар.</p>
                    </div>
                </div>
                <div class="col-md-6 appear-in-right">
                    <img src="{{url('home/img/img-about.jpg')}}" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
    <div class="block block--terms">
        <div class="container">
            <div class="block__title appear-pulse">Умови доставки</div>
            <div class="row">
                <div class="col-md-6 appear-in-left">
                    <div class="block__images">
                        <ul>
                            <li><img src="{{url('home/img/img-terms-01.jpg')}}" alt="" class="img-responsive"></li>
                            <li><img src="{{url('home/img/img-terms-02.jpg')}}" alt="" class="img-responsive"></li>
                            <li><img src="{{url('home/img/img-terms-03.jpg')}}" alt="" class="img-responsive"></li>
                            <li><img src="{{url('home/img/img-terms-04.jpg')}}" alt="" class="img-responsive"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 appear-in-right">
                    <div class="block__content">
                        <p>Замовлення приймаються з <span class="text-green">10:00</span> до <span class="text-green">20:00</span>  щодня за телефонами:<br><span class="text-green">(068) 273 54 62</span>, <span class="text-green">(073) 096 23 48</span> та на сайті.</p>
                        <p>Закупка продуктів відбувається у супермаркетах м. Вінниця.</p>
                        <p>Доставка замовлення здійснюється протягом 2 годин.</p>
                        <p>Ви можете обрати зручний для Вас час доставки, узгодивши це з оператором.</p>
                        <p>Оплата здійснюється готівкою кур’єру при отриманні замовлення, на основі товарного чеку.</p>
                        <p>Можлива експрес-доставка. Відсутня мінімальна сума замовлення!</p>
                        <p>Скориставшись послугами нашої служби Ви переконаєтесь, що це зручно, надійно і швидко.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block--price">
        <div class="container">
            <div class="block__title appear-pulse">Вартість доставки</div>
            <div class="block__items">
                <div class="block__item item item--green appear-flip-in-y">
                    <div class="item__body">
                        <div class="item__title">Звичайна доставка</div>
                        <div class="item__price">
                            <span class="value">30</span>
                            <span class="currency">грн.</span>
                        </div>
                        <div class="item__adv">
                            <ul>
                                <li>- Вага замовлення до 10 кг.</li>
                                <li>- Доставка протягом 2 годин.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#block--order" class="btn btn-block sm-scroll">ЗАМОВИТИ</a>
                    </div>
                </div>

                <div class="block__item item item--yellow appear-flip-in-y">
                    <div class="item__body">
                        <div class="item__title">Велика доставка</div>
                        <div class="item__price">
                            <span class="value">50</span>
                            <span class="currency">грн.</span>
                        </div>
                        <div class="item__adv">
                            <ul>
                                <li>- Вага замовлення 10 кг і більше.</li>
                                <li>- Доставка протягом 2 годин.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#block--order" class="btn btn-block sm-scroll">ЗАМОВИТИ</a>
                    </div>
                </div>

                <div class="block__item item item--green appear-flip-in-y">
                    <div class="item__body">
                        <div class="item__title">Експрес-доставка</div>
                        <div class="item__price">
                            <span class="value">50</span>
                            <span class="currency">грн.</span>
                        </div>
                        <div class="item__adv">
                            <ul>
                                <li>- Доставка в максимально короткий термін.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="item__footer">
                        <a href="#block--order" class="btn btn-block sm-scroll">ЗАМОВИТИ</a>
                    </div>
                </div>
            </div>
            <div class="block__footer">
                <p><span class="glyphicon glyphicon-asterisk"></span> При доставці товару за межі міста – вартість доставки + 6 гривень за кожний 1 км від кордону міста.</p>
            </div>
        </div>
    </div>
    <div class="block block--order" id="block--order">
        <div class="block__inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-push-1 col-md-4 appear-in-right">
                        <div class="block__title">Оформити замовлення</div>
                        <form name="orders" class="form">
                            <div class="form-group">
                                <input
                                        type="text"
                                        class="form-control input-lg"
                                        placeholder="Ваше ім'я"
                                        name="name"
                                        data-parsley-required
                                        data-parsley-maxlength="255">
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control input-lg"
                                       placeholder="Номер телефону"
                                       name="phone"
                                       data-parsley-required
                                       data-parsley-maxlength="255">
                            </div>
                            <div class="form-group">
                                <input type="text"
                                       class="form-control input-lg"
                                       placeholder="Ваша адреса"
                                       name="address"
                                       data-parsley-required
                                       data-parsley-maxlength="255">
                            </div>
                            <div class="form-group">
                                <textarea
                                        class="form-control input-lg"
                                        placeholder="Список товару"
                                        name="products_list"
                                        data-parsley-required
                                        data-parsley-maxlength="600"></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-lg btn-green">Замовити</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block--additional">
        <div class="container">
            <div class="block__title appear-pulse">Додаткові послуги</div>
            <div class="block__content">
                <p>У нас Ви можете замовити додаткову послугу,  яка включає доставку:</p>
            </div>
            <div class="block__items items">
                <div class="row">
                    <div class="col-md-3 item">
                        <div class="item__img">
                            <img src="{{url('home/img/img-beaker.png')}}" alt="" class="img-responsive appear-zoom-in">
                        </div>
                        <div class="item__name">Побутові товари</div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="item__img">
                            <img src="{{url('home/img/img-cut.png')}}" alt="" class="img-responsive appear-zoom-in">
                        </div>
                        <div class="item__name">Канцтовари</div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="item__img">
                            <img src="{{url('home/img/img-flower.png')}}" alt="" class="img-responsive appear-zoom-in">
                        </div>
                        <div class="item__name">Квіти</div>
                    </div>
                    <div class="col-md-3 item">
                        <div class="item__img">
                            <img src="{{url('home/img/img-basket.png')}}" alt="" class="img-responsive appear-zoom-in">
                        </div>
                        <div class="item__name">Інші товари</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block block--reviews">
        <div class="carousel slide" id="carousel-example-captions" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-captions" data-slide-to="1"></li>
                <li data-target="#carousel-example-captions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    {{--<img alt="900x500" data-src="holder.js/900x500/auto/#777:#777" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNzc3OiM3NzcKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdmMTkwMDc0ZCB0ZXh0IHsgZmlsbDojNzc3O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2YxOTAwNzRkIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyIvPjxnPjx0ZXh0IHg9IjMzMy4yMTA5Mzc1IiB5PSIyNzAuMSI+OTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true">--}}
                    <div class="carousel-caption">
                        <div class="item__img"><img src="{{url('home/img/img-reviews-01.jpg')}}" alt="" class="img-responsive"></div>
                        <p class="item__content">“Замовляв піцу карбонара і салат. Дуже смачно і швидка доставка. Дякуємо. ”</p>
                        <p class="item__author">Сергій Гуйван</p>
                    </div>
                </div>
                <div class="item">
                    {{--<img alt="900x500" data-src="holder.js/900x500/auto/#666:#666" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNjY2OiM2NjYKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdmMTkwMGU1NSB0ZXh0IHsgZmlsbDojNjY2O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2YxOTAwZTU1Ij48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiIvPjxnPjx0ZXh0IHg9IjMzMy4yMTA5Mzc1IiB5PSIyNzAuMSI+OTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> --}}
                    <div class="carousel-caption">
                        <div class="item__img"><img src="{{url('home/img/img-reviews-02.jpg')}}" alt="" class="img-responsive"></div>
                        <p class="item__content">“Замовляв піцу карбонара і салат. Дуже смачно і швидка доставка. Дякуємо. ”</p>
                        <p class="item__author">Сергій Гуйван</p>
                    </div>
                </div>
                <div class="item">
                    {{--<img alt="900x500" data-src="holder.js/900x500/auto/#555:#555" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDkwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzkwMHg1MDAvYXV0by8jNTU1OiM1NTUKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTdmMTkwM2ZkYSB0ZXh0IHsgZmlsbDojNTU1O2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjQ1cHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1N2YxOTAzZmRhIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSIvPjxnPjx0ZXh0IHg9IjMzMy4yMTA5Mzc1IiB5PSIyNzAuMSI+OTAweDUwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> --}}
                    <div class="carousel-caption">
                        <div class="item__img"><img src="{{url('home/img/img-reviews-03.jpg')}}" alt="" class="img-responsive"></div>
                        <p class="item__content">“Замовляв піцу карбонара і салат. Дуже смачно і швидка доставка. Дякуємо. ”</p>
                        <p class="item__author">Сергій Гуйван</p>
                    </div>
                </div>
            </div>
            <a href="#carousel-example-captions" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            </a>
            <a href="#carousel-example-captions" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <div class="block--footer">
        <div class="container text-center">©Назва. Усі права захищені!</div>
    </div>
    <script src="{{url('home/js/main.js')}}"></script>
</body>
</html>