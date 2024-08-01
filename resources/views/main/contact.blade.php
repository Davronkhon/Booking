@include('main.layouts.link')

</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">

    @include('main.layouts.app')

    <!-- end:fh5co-header -->
        @include('main.layouts.slider')

        <div id="fh5co-contact-section">
            <div class="row">
                <div class="col-md-6">
                    <div id="map" class="fh5co-map"></div>
                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <h3>Our Address</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <ul class="contact-info">
                            <li><i class="ti-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
                            <li><i class="ti-mobile"></i>+ 1235 2355 98</li>
                            <li><i class="ti-envelope"></i><a href="#">info@yoursite.com</a></li>
                            <li><i class="ti-home"></i><a href="#">www.yoursite.com</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
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
