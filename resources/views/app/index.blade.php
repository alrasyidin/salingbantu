@extends('layouts.home')
@section('title','Home')
@section('content')

@include('app.parts.hero')
@include('app.parts.featured')

    <section class="latest-product section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h1>Newest Products</h1>
                        <p>Pellentesque facilisis the ullamcorper sapien interdum magna pellentesque kequis. Phasellus
                            condimentum eleifend kerat.</p>
                    </div>
                </div><!-- Ends: .col-md-12 -->
                <div class="col-lg-12">
                    <div class="product-list">
                            <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="{{asset('apps/img/product1.png')}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href=""><span class="icon-basket"></span></a></li>
                                                            <li><a href="{{url('/detail')}}">Live Demo</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5>
                                                    <a href="">E-commerce Shopping Cart</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img.png" alt="author image">
                                                        <p><a href="#">Theme-Valley</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">WordPress</a>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">$24</li>
                                                    <li class="sells">
                                                        <span class="icon-basket"></span>141
                                                    </li>
                                                    <li class="product-fav">
                                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                    </li>
                                                    <li class="product-rating">
                                                        <ul class="list-unstyled">
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_disabled"></span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                        <img src="{{asset('apps/img/product1.png')}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href=""><span class="icon-basket"></span></a></li>
                                                            <li><a href="{{url('/detail')}}">Live Demo</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5>
                                                    <a href="">TheBizz Wordpress Theme</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img2.png" alt="author image">
                                                        <p><a href="#">Aaazztech</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">Wordpress</a>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">$24</li>
                                                    <li class="sells">
                                                        <span class="icon-basket"></span>141
                                                    </li>
                                                    <li class="product-fav">
                                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                    </li>
                                                    <li class="product-rating">
                                                        <ul class="list-unstyled">
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_disabled"></span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="{{asset('apps/img/product1.png')}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href=""><span class="icon-basket"></span></a></li>
                                                            <li><a href="">Live Demo</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5>
                                                    <a href="">DigiPro EDD Template</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img3.png" alt="author image">
                                                        <p><a href="#">EchoTheme</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">HTML</a>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">$24</li>
                                                    <li class="sells">
                                                        <span class="icon-basket"></span>141
                                                    </li>
                                                    <li class="product-fav">
                                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                    </li>
                                                    <li class="product-rating">
                                                        <ul class="list-unstyled">
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_disabled"></span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="{{asset('apps/img/product1.png')}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href=""><span class="icon-basket"></span></a></li>
                                                            <li><a href="">Live Demo</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5>
                                                    <a href="">AppPress PSD Template</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img3.png" alt="author image">
                                                        <p><a href="#">Theme-Valley</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">PSD</a>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">$24</li>
                                                    <li class="sells">
                                                        <span class="icon-basket"></span>141
                                                    </li>
                                                    <li class="product-fav">
                                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                    </li>
                                                    <li class="product-rating">
                                                        <ul class="list-unstyled">
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_disabled"></span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="{{asset('apps/img/product1.png')}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href=""><span class="icon-basket"></span></a></li>
                                                            <li><a href="">Live Demo</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5>
                                                    <a href="">Rida Wordpress Theme</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img.png" alt="author image">
                                                        <p><a href="#">Theme-Valley</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">Wordpress</a>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">$24</li>
                                                    <li class="sells">
                                                        <span class="icon-basket"></span>141
                                                    </li>
                                                    <li class="product-fav">
                                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                    </li>
                                                    <li class="product-rating">
                                                        <ul class="list-unstyled">
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_disabled"></span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="{{asset('apps/img/product1.png')}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href=""><span class="icon-basket"></span></a></li>
                                                            <li><a href="">Live Demo</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5>
                                                    <a href="">TableGen Wordpress Plugin</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="img/auth-img3.png" alt="author image">
                                                        <p><a href="#">Theme-Valley</a></p>
                                                    </li>
                                                    <li class="product_cat">
                                                        in
                                                        <a href="#">Plugin</a>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">$24</li>
                                                    <li class="sells">
                                                        <span class="icon-basket"></span>141
                                                    </li>
                                                    <li class="product-fav">
                                                        <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                                    </li>
                                                    <li class="product-rating">
                                                        <ul class="list-unstyled">
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_active"></span></li>
                                                            <li><span class="rate_disabled"></span></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                </div>

                        <div class="text-center m-top-20">
                            <a href="" class="btn btn--lg btn-primary">All New Products</a>
                        </div>
                    </div>
                    <!-- Ends: .product-list -->
                </div>
            </div>
        </div>
    </section><!-- ends: .latest-product -->
    <section class="services ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="service-single">
                        <span class="icon-lock"></span>
                        <h4>Secure Paument</h4>
                        <p>Pellentesque facilisis kamcorper sapien interdum magna.</p>
                    </div>
                </div><!-- Ends: .col-sm-6 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="service-single">
                        <span class="icon-like"></span>
                        <h4>Quality Products</h4>
                        <p>Pellentesque facilisis kamcorper sapien interdum magna.</p>
                    </div>
                </div><!-- Ends: .col-sm-6 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="service-single">
                        <span class="icon-wallet"></span>
                        <h4>14 Days Money Backs</h4>
                        <p>Pellentesque facilisis kamcorper sapien interdum magna.</p>
                    </div>
                </div><!-- Ends: .col-sm-6 -->
                <div class="col-lg-3 col-sm-6">
                    <div class="service-single">
                        <span class="icon-people"></span>
                        <h4>24/7 Customer Care</h4>
                        <p>Pellentesque facilisis kamcorper sapien interdum magna.</p>
                    </div>
                </div><!-- Ends: .col-sm-6 -->
            </div>
        </div>
    </section><!-- ends: .services -->

    <section class="subscribe bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('apps/img/subscribe-bg.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 subscribe-inner">
                    <div class="envelope-svg">
                        <img src="{{asset('apps/img/svg/newsletter.svg')}}" alt="" class="svg">
                    </div>
                        <div class="hero__content__title">
                                <h1>Galangdana di saling bantu</h1>
                                <p class="tagline">Membantu meringankan beban saudara kita</p>
                            </div><!-- end .hero__btn-area-->
                </div>
            </div>
        </div>
    </section><!-- ends: .subscribe -->

@endsection