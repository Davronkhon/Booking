@include('main.layouts.link')

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
    @include('main.layouts.app')
    <!-- end:fh5co-header -->
        @include('main.layouts.slider')

        <div id="fh5co-hotel-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets/main/images/12.jpeg')}});">
                                <a class="book-now text-center" href="{{route('ravshan')}}">
                                    <i class="ti-calendar"></i>
                                    Бронировать
                                </a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('ravshan')}}">Кафе Равшан</a></h3>
                                <p>4/5 оценка</p>
                                <p>Худжанд, Шёлкомбинат, кучаи 8</p>
                                <p>Таджикская национальная кухня</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets/main/images/n.jpeg')}});">
                                <div class="price"><small>For as low as</small><span>$100/час</span></div>
                                <a class="book-now text-center" href="{{route('ravshan')}}"><i class="ti-calendar"></i> Заказать</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('ravshan')}}">Кафе Бахтиёр</a></h3>
                                <p>Вы можете заказать столик нажав на кнопку "Заказать".</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets/main/images/R.jpeg')}});">
                                <div class="price"><small>For as low as</small><span>$100/час</span></div>
                                <a class="book-now text-center" href="{{route('ravshan')}}"><i class="ti-calendar"></i> Заказать</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('ravshan')}}">Кафе Далерон</a></h3>
                                <p>Вы можете заказать столик нажав на кнопку "Заказать".</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets/main/images/2.jpg')}});">
                                <div class="price"><small>For as low as</small><span>$100/час</span></div>
                                <a class="book-now text-center" href="{{route('ravshan')}}"><i class="ti-calendar"></i> Заказать</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('ravshan')}}">Зелёный салат</a></h3>
                                <p>Вы можете заказать еду нажав на кнопку "Заказать".</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets/main/images/3.jpg')}});">
                                <div class="price"><small>For as low as</small><span>$100/час</span></div>
                                <a class="book-now text-center" href="{{route('ravshan')}}"><i class="ti-calendar"></i> Заказать</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('ravshan')}}">Хот-дог</a></h3>
                                <p>Вы можете заказать еду нажав на кнопку "Заказать".</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="hotel-content">
                            <div class="hotel-grid" style="background-image: url({{asset('assets/main/images/1.jpg')}});">
                                <div class="price"><small>For as low as</small><span>$100/час</span></div>
                                <a class="book-now text-center" href="{{route('ravshan')}}"><i class="ti-calendar"></i> Заказать</a>
                            </div>
                            <div class="desc">
                                <h3><a href="{{route('ravshan')}}">Пирожение</a></h3>
                                <p>Вы можете заказать еду нажав на кнопку "Заказать".</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        @include('main.layouts.footer')

    </div>
    <!-- END fh5co-page -->

</div>
<!-- END fh5co-wrapper -->
@include('main.layouts.script')

</body>
</html>
