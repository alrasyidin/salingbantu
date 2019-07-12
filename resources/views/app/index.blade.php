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
                        <h1>Siap untuk saling membantu?</h1>
                        <p>Mari bersama membantu saudara kita yang membutuhkan, sedikit bantuan kita sangat berarti bagi saudara kita</p>
                    </div>
                </div><!-- Ends: .col-md-12 -->
                <div class="col-lg-12">
                    <div class="product-list">
                            <div class="row">
                                @foreach ($campaigns as $campaign)
                                <div class="col-lg-4 col-md-6">
                                        <div class="product-single latest-single">
                                            <div class="product-thumb">
                                                <figure>
                                                    <img src="{{asset("storage/campaign_images/300/".$campaign->images[0]['path'])}}" alt="" class="img-fluid">
                                                    <figcaption>
                                                        <ul class="list-unstyled">
                                                            <li><a href="{{url('campaign/'.$campaign->slug)}}">Detail Campaign</a></li>
                                                        </ul>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                            <!-- Ends: .product-thumb -->
                                            <div class="product-excerpt">
                                                <h5 style="min-height:3.9em">
                                                    <a href="">{{$campaign->title}}</a>
                                                </h5>
                                                <ul class="titlebtm">
                                                    <li>
                                                        <img class="auth-img" src="{{asset("storage/user_photo/60/".$campaign->user->avatar)}}" alt="author image">
                                                        <p><a href="#">{{$campaign->user->fullname()}}</a></p>
                                                    </li>
                                                </ul>
                                                <ul class="product-facts clearfix">
                                                    <li class="price">{{str_rp($campaign->goals)}}</li>
                                                </ul>
                                            </div>
                                            <!-- Ends: .product-excerpt -->
                                        </div><!-- Ends: .product-single -->
                                    </div><!-- ends: .col-md-6 -->
                                @endforeach
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