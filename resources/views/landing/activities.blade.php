@extends('layouts.landing')

@section('title', 'Activities - Amping')

@section('content')

<!-- Page Title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url({{ asset('assets/landing/images/background/page-title.jpg') }});"></div>
            <div class="pattern-layer" style="background-image: url({{ asset('assets/landing/images/shape/shape-12.png') }});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>Activities</li>
                    </ul>
                    <div class="title">
                        <h1>Activities</h1>
                    </div>
                </div>
            </div>
            <div class="media-partner">
                <ul class="media-links clearfix">
                    <li><h6>Follow on social media</h6></li>
                    <li><a href="{{ route('home') }}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ route('home') }}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ route('home') }}"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="{{ route('home') }}"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- activities-page-section -->
        <section class="activities-page-section sec-pad centred">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                        <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box"><a href="#"><img src="{{ asset('assets/landing/images/resource/activities-1.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-5.png') }});"></div>
                                        <div class="overlay-shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-6.png') }});"></div>
                                        <i class="flaticon-climbing"></i>
                                    </div>
                                    <h3><a href="#">Climbing</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                        <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box"><a href="#"><img src="{{ asset('assets/landing/images/resource/activities-2.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-5.png') }});"></div>
                                        <div class="overlay-shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-6.png') }});"></div>
                                        <i class="flaticon-adventurer"></i>
                                    </div>
                                    <h3><a href="#">Adventure</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                        <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box"><a href="#"><img src="{{ asset('assets/landing/images/resource/activities-3.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-5.png') }});"></div>
                                        <div class="overlay-shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-6.png') }});"></div>
                                        <i class="flaticon-tent"></i>
                                    </div>
                                    <h3><a href="#">Camping</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                        <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box"><a href="#"><img src="{{ asset('assets/landing/images/resource/activities-4.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-5.png') }});"></div>
                                        <div class="overlay-shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-6.png') }});"></div>
                                        <i class="flaticon-dive"></i>
                                    </div>
                                    <h3><a href="#">Diving</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                        <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box"><a href="#"><img src="{{ asset('assets/landing/images/resource/activities-5.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-5.png') }});"></div>
                                        <div class="overlay-shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-6.png') }});"></div>
                                        <i class="flaticon-parachute"></i>
                                    </div>
                                    <h3><a href="#">Parachute</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 activities-block">
                        <div class="activities-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box"><a href="#"><img src="{{ asset('assets/landing/images/resource/activities-6.jpg') }}" alt=""></a></div>
                                <div class="lower-content">
                                    <div class="icon-box">
                                        <div class="shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-5.png') }});"></div>
                                        <div class="overlay-shape" style="background-image: url({{ asset('assets/landing/images/shape/shape-6.png') }});"></div>
                                        <i class="flaticon-axes"></i>
                                    </div>
                                    <h3><a href="#">Throwing</a></h3>
                                    <p>There are not many of passages of lorem ipsum available alteration in osten some form.</p>
                                    <div class="link"><a href="#">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- activities-page-section end -->

@endsection
