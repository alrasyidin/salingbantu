@extends('layouts.home')
@section('title','Single Campaign')
@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-contents">
                    <h2 class="page-title">{{$campaign->title}}</h2>
                </div>
            </div><!-- end .col-md-12 -->
        </div><!-- end .row -->
    </div><!-- end .container -->
</section><!-- ends: .breadcrumb-area -->

<div class="cpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="item-preview">
                        <div class="owl-carousel owl-theme" data-slider-id="1">
                                @if (!$campaign->images->isEmpty())
                                    @foreach ($campaign->images as $key =>  $image)
                                        <div class="item">
                                            <img class="d-block w-100" src="{{asset('storage/campaign_images/'.$image->path)}}" height="430" width="750">
                                        </div>
                                    @endforeach
                                @else
                                    <div class="item">
                                        <img class="d-block w-100" src="{{asset('images/single1.jpg')}}">
                                    </div>
                                    <div class="item">
                                            <img class="d-block w-100" src="{{asset('images/single1.jpg')}}">
                                        </div>
                                @endif
                            </div>

                            <div class="owl-thumbs" data-slider-id="1">
                                @if (!$campaign->images->isEmpty())
                                    @foreach ($campaign->images as $image)
                                    <button class="owl-thumb-item">
                                            <img src="{{asset('storage/campaign_images/60/'.$image->path)}}"  height="80" width="80" alt="This is the thumbnail of the item">
                                        </button>
                                    @endforeach
                                @else
                                    <button class="owl-thumb-item">
                                        <img src="{{asset('images/single1.jpg')}}" alt="Keep calm this isn't the end of the world, the preview is just missing." height="80" width="80" >
                                    </button>
                                    <button class="owl-thumb-item">
                                            <img src="{{asset('images/single1.jpg')}}" alt="Keep calm this isn't the end of the world, the preview is just missing." height="80" width="80" >
                                        </button>
                                @endif
                                
                            </div>
                    <div class="item-preview--excerpt">

                    </div>
                </div><!-- ends: .item-preview-->
            </div><!-- ends: .col-md-8 -->
            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card-pricing">
                        <div class="price">
                            <h3>
                                {{str_rp('1000000000')}}
                            </h3>
                            <p>Terkumpul dari <strong>{{str_rp($campaign->goals)}}</strong> </p> 
                        </div>
                        <div class="purchase-button">
                            <a href="{{url('/campaign').'/'.$campaign->slug.'/contribute'}}" class="btn btn--lg btn-primary">Donasi Sekarang</a>
                        </div><!-- end .purchase-button -->
                    </div><!-- end .sidebar--card -->

                    <div class="author-card sidebar-card">
                            <div class="card-title" style="padding:15px">
                                <h4>Pengalang Dana</h4>
                            </div>
                            <div class="author-infos">
                                <div class="author-top">
                                    <div class="author_avatar">
                                        <img src="{{asset("storage/user_photo/60/".$campaign->user->avatar)}}" alt="Presenting the broken author avatar :D">
                                    </div>
                                    <div class="author">
                                        <h5>{{$campaign->user->fullname()}}</h5>
                                    </div>
                                </div><!-- ends: .author-top -->
                            </div><!-- ends: .author-infos -->
                        </div>
                        <div class="sidebar-card social-share-card" style="padding: 15px;">
                                <p>Social Share:</p>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div><!-- Ends: .social-share-card -->
        
                </aside><!-- ends: .sidebar -->
            </div><!-- ends: .col-md-4 -->
        </div><!-- ends: .row -->
    </div>
</div>
<section class="single-product-desc" style="padding: 2.5em 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="item-info">
                    <div class="item-navigation">
                        <ul class="nav nav-tabs" role="tablist">
                            <li>
                                <a href="#product-details" class="active" id="tab1" aria-controls="product-details"
                                    role="tab" data-toggle="tab" aria-selected="true">
                                    <span class="icon icon-docs"></span> Details</a>
                            </li>
                            <li>
                                <a href="#product-comment" id="tab2" aria-controls="product-comment" role="tab"
                                    data-toggle="tab">
                                    <span class="icon icon-bubbles"></span> Update </a>
                            </li>

                        </ul>
                    </div><!-- ends: .item-navigation -->
                    <div class="tab-content">
                        <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel"
                            aria-labelledby="tab1">
                            <div class="tab-content-wrapper">
                                {!! $campaign->description !!}
                            </div>
                        </div><!-- ends: .tab-content -->
                        <div class="fade tab-pane product-tab" id="product-comment" role="tabpanel"
                            aria-labelledby="tab2">
                            <div class="thread">
                                <ul class="media-list thread-list">
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="img/m2.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>EchoTheme</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div><!-- ends: .media -->
                                        <!-- nested comment markup / replies -->
                                        <!-- comment reply -->
                                    </li><!-- ends: .single-thread-->
                                    <li class="single-thread">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="{{asset('apps/img/m2.png')}}" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div>
                                                    <div class="media-heading">
                                                        <a href="author.html">
                                                            <h4>ThemeValley</h4>
                                                        </a>
                                                        <span>9 Hours Ago</span>
                                                    </div>
                                                    <a href="#" class="reply-link">Reply</a>
                                                </div>
                                                <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut
                                                    sceleris que the mattis, leo quam aliquet congue placerat mi id nisi
                                                    interdum mollis. </p>
                                            </div>
                                        </div><!-- ends: .media -->
                                        <!-- nested comment markup / replies -->
                                        <!-- comment reply -->
                                    </li><!-- ends: .single-thread-->
                                </ul><!-- ends: .media-list -->
                                <!-- Start Pagination -->
                                <nav class="pagination-default">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav><!-- Ends: .pagination-default -->
                            </div><!-- ends: .comments -->
                        </div><!-- ends: .product-comment -->
                    </div><!-- ends: .tab-content -->
                </div><!-- ends: .item-info -->
            </div>
            <div class="col-lg-4 col-md-12">
                <aside class="sidebar sidebar--single-product">
                    <div class="sidebar-card card--product-infos">
                        <div class="card-title">
                            <h4>Donatur</h4>
                        </div>
                        <ul class="infos">
                            
                        </ul><!-- ends: .infos -->
                    </div><!-- ends: .card--product-infos -->
                </aside><!-- ends: .sidebar -->
            </div>

        </div>
    </div><!-- ends: .container -->
</section><!-- ends: .single-product-desc -->
@endsection

@section('customcss')
<style>
    .cpg {
        padding-top: 2.5em;
        padding-bottom: 2.5em;
        border-bottom: 1px solid #e7e9eb;
        background: #f2f3f4;
    }

    .sidebar-card.card-pricing .price, .card-pricing.item-preview .price {
        padding: 15px 0;
        text-align: center;
        margin-bottom: 0px;
        border: 0;
        border-radius: 3px;
    }

    .owl-thumb-item img {
        width: 100px;
        height: auto;
    }
    .owl-thumbs {
        bottom: 0;
        left: 0;
        display: table;
        width: 100%;
        text-align: center;
    }

    .owl-thumb-item {
        display: table-cell;
        border: none;
        background: none;
        padding: 5px;
        opacity: .4;
    }

    .owl-thumb-item.active {
        opacity: 1;
    }
    .label {
        position: absolute;
        top: 20px;
        right: 20px;
        background-color: #0a6cff;
        color: white;
        padding: 10px 20px;
        z-index: 5;
        text-align: center;
    }
    
    body .owl-nav div{
        position: absolute;
        top: 40%;
        width: 40px;
        height: 40px;
        border-radius: 20%;
    }
    body .owl-prev{
        left: 10px;
        display: flex;
        background-color:white;
    }
    body .owl-next{
        right: 10px;
        display: flex;
        background-color:white;
    }
    body .owl-prev i, body .owl-next i{
        margin: auto;
    }
    
</style>
@endsection

@section('customjs')
<script>
        $('.owl-carousel').owlCarousel({
            singleItem: true,
            items:1,
            autoHeight:true,
            autoplay:true,
            autoplayTimeout: 3000,
            thumbs: true,
            thumbsPrerendered: true,
            thumbImage: false,
            nav: true,
            navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
        })
      </script>
@endsection