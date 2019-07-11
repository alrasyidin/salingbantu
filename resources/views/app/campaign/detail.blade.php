@extends('layouts.home')
@section('title','Single Campaign')
@section('content')
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-contents">
                    <h2 class="page-title">DigiPro Multipurpose Marketplace HTML Template</h2>
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
                    <div class="item-prev-area">
                        <div class="preview-img-wrapper">
                            <div class="item__preview-img">
                                <div class="item__preview-slider">
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                    <div class="prev-slide">
                                        <img src="{{asset('apps/img/single1.jpg')}}" alt="Preview Image">
                                    </div>
                                </div><!-- ends: .item--preview-slider -->
                                <div class="prev-nav thumb-nav">
                                    <span class="lnr nav-left icon-arrow-left"></span>
                                    <span class="lnr nav-right icon-arrow-right"></span>
                                </div><!-- ends: .prev-nav -->
                            </div>
                            <div class="item__preview-thumb">
                                <div class="prev-thumb">
                                    <div class="thumb-slider">
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                        <div class="item-thumb">
                                            <img src="{{asset('apps/img/thumb1.jpg')}}" alt="Thumbnail Image">
                                        </div>
                                    </div><!-- end .thumb-slider -->
                                </div>
                            </div><!-- ends: .item__preview-thumb -->
                        </div><!-- ends: .preview-img-wrapper -->
                    </div><!-- Ends: .item-prev-area -->
                    <div class="item-preview--excerpt">
                        {{-- <div class="item-preview--action">
                            <div class="action-btns">

                            </div>
                        </div><!-- ends: .item-preview--action -->
                        <div class="item-preview--activity">

                        </div><!-- Ends: .item-preview--activity --> --}}
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
                            <p>Terkumpul dari <strong>{{str_rp('1000000000')}}</strong> </p> 
                        </div>
                        <div class="purchase-button">
                            <a href="#" class="btn btn--lg btn-primary">Donasi Sekarang</a>
                        </div><!-- end .purchase-button -->
                    </div><!-- end .sidebar--card -->

                    <div class="author-card sidebar-card">
                            <div class="card-title" style="padding:15px">
                                <h4>Pengalang Dana</h4>
                            </div>
                            <div class="author-infos">
                                <div class="author-top">
                                    <div class="author_avatar">
                                        <img src="{{asset('apps/img/author-avatar.jpg')}}" alt="Presenting the broken author avatar :D">
                                    </div>
                                    <div class="author">
                                        <h5>AazzTech</h5>
                                        <p>Joined: 08 April 2016</p>
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
                                <h3>Landing Page Details</h3>
                                <p class="p-bottom-30">Nunc placerat mi id nisi interdum mollis. Praesent pharetra,
                                    justo ut scelerisque the
                                    mattis, leo quam aliquet congue placerat mi id nisi interdum mollis. Praesent
                                    pharetra,
                                    justo ut scel erisque the mattis, leo quam aliquet congue justo ut scelerisque.
                                    Praesent
                                    pharetra, justo ut scelerisque the mattis, leo quam aliquet congue justo ut
                                    scelerisque.</p>
                                <h3>Features With Image:</h3>
                                <img src="{{asset('apps/img/prodesc.jpg')}}" alt="This is product description thumbnail">
                                
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
                            <li>
                                <p class="data-label">Released</p>
                                <p class="info">16 June 2015</p>
                            </li>
                            <li>
                                <p class="data-label">Updated</p>
                                <p class="info">28 July 2016 </p>
                            </li>
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
</style>
@endsection