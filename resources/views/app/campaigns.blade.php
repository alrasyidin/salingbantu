@extends('layouts.home')
@section('title','Campaigns')
@section('content')
     <!-- end /.menu-area -->
     <section class="hero-area2 hero-area3 bgimage">
        <div class="bg_image_holder">
            <img src="{{asset('stisla/assets/img/hero-image01.png')}}" alt="background-image">
        </div>
        <div class="hero-content content_above">
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h1>Campaigns yang dapat kita bantu bersama</h1>
                            </div><!-- end .hero__btn-area-->
                            <div class="search-area">
                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3">
                                        <div class="search_box2">
                                            <form action="#">
                                                <input type="text" class="text_field" placeholder="Search your products...">
                                                <button type="submit" class="search-btn btn--lg btn-primary">Search Now</button>
                                            </form>
                                        </div><!-- end .search_box -->
                                    </div>
                                </div>
                            </div>
                            <!--start .search-area -->
                        </div><!-- end .col-md-12 -->
                    </div>
                </div>
            </div><!-- end .contact_wrapper -->
        </div><!-- end hero-content -->
    </section><!-- ends: .hero-area -->
    <div class="filter-area product-filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories
                                <span class="icon-arrow-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                <li>
                                    <a href="#">Wordpress
                                        <span>35</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Landing Page
                                        <span>45</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Psd Template
                                        <span>13</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Plugins
                                        <span>08</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">HTML Template
                                        <span>34</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">Components
                                        <span>78</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- end .filter__option -->
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter By
                                <span class="icon-arrow-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Popular items</a>
                                </li>
                                <li>
                                    <a href="#">New items </a>
                                </li>
                                <li>
                                    <a href="#">Best seller </a>
                                </li>
                                <li>
                                    <a href="#">Best rating </a>
                                </li>
                            </ul>
                        </div><!-- end .filter__option -->
                        <div class="filter__option filter--dropdown filter--range">
                            <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Price Range
                                <span class="icon-arrow-down"></span>
                            </a>
                            <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                <div class="range-slider price-range"></div>
                                <div class="price-ranges">
                                    <span class="from rounded">$30</span>
                                    <span class="to rounded">$300</span>
                                </div>
                            </div>
                        </div><!-- end .filter__option -->
                        <div class="filter__option filter--select">
                            <div class="select-wrap">
                                <select name="price">
                                    <option value="12">12 Items per page</option>
                                    <option value="15">15 Items per page</option>
                                    <option value="25">25 Items per page</option>
                                </select>
                                <span class="icon-arrow-down"></span>
                            </div>
                        </div><!-- end .filter__option -->
                    </div><!-- end .filter-bar -->
                </div><!-- end .col-md-12 -->
            </div>
        </div>
    </div><!-- end .filter-area -->
    <section class="product-grid p-bottom-100">
        <div class="container">
            <div class="row">
                <!-- Start .product-list -->
                <div class="col-md-12 product-list">
                    <div class="row">
                        @if (!$campaigns->isEmpty())
                            @foreach ($campaigns as $campaign)
                            <div class="col-lg-4 col-md-6">
                                    <div class="product-single latest-single">
                                        <div class="product-thumb">
                                            <figure>
                                                <img src="{{asset("uploads/images/campaign/300/".$campaign->images[0]['path'])}}" alt="" class="img-fluid">
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
                                                    <img class="auth-img" src="{{asset("uploads/images/avatar/60/".$campaign->user->avatar)}}" alt="author image">
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
                        @else
                        <div class="col-md-12">
                                <div class="empty-state" data-height="200" style="height: 200px;">
                                        <div class="empty-state-icon m-3">
                                          <i class="fas fa-question"></i>
                                        </div>
                                      <h2>OPPSSSSS!!</h2>
                                      <p class="lead m-3">
                                        Kami tidak menemukan campaign yang anda cari
                                      </p>
                        </div>
                    </div>

                        @endif
                    </div>
                </div>
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section><!-- ends: .product-grid -->
@endsection

@section('customcss')
<style>
    .empty-state{
        text-align: center;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 40px;
    }
    .empty-state-icon{
        position: relative;
        background-color: #6777ef;
        width: 80px;
        height: 80px;
        line-height: 100px;
        border-radius: 5px;
    }
    .empty-state .empty-state-icon i {
        font-size: 40px;
        color: #fff;
        position: relative;
        z-index: 1
    }
</style>
@endsection
