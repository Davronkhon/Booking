@include('main.layouts.link')

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

    @include('main.layouts.app')

    <!-- end:fh5co-header -->
        @include('main.layouts.slider')


        <div id="fh5co-blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="blog-grid" style="background-image: url({{asset('assets/main/images/1.jpg')}});">
                            <div class="date text-center">
                                <span>09</span>
                                <small>Aug</small>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">Most Expensive Hotel</a></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid" style="background-image: url({{asset('assets/main/images/2.jpg')}});">
                            <div class="date text-center">
                                <span>09</span>
                                <small>Aug</small>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">1st Anniversary of Luxe Hotel</a></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid" style="background-image: url({{asset('assets/main/images/3.jpg')}});">
                            <div class="date text-center">
                                <span>09</span>
                                <small>Aug</small>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">Discover New Adventure</a></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid" style="background-image: url({{asset('assets/main/images/5.jpg')}});">
                            <div class="date text-center">
                                <span>09</span>
                                <small>Aug</small>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">Most Expensive Hotel</a></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid" style="background-image: url({{asset('assets/main/images/12.jpeg')}});">
                            <div class="date text-center">
                                <span>09</span>
                                <small>Aug</small>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">1st Anniversary of Luxe Hotel</a></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="blog-grid" style="background-image: url({{asset('assets/main/images/n.jpeg')}});">
                            <div class="date text-center">
                                <span>09</span>
                                <small>Aug</small>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="#">Discover New Adventure</a></h3>
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
