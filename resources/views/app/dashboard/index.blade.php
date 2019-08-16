@extends('layouts.home')
@section('title','Dashoard User')
@section('content')
    @include('app.dashboard.parts.breadcrumb')
    <section class="dashboard-area">
        @include('app.dashboard.parts.menubar')

        <div class="dashboard_contents p-top-100 p-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="primary"> {{str_rp($amount)}}</h1>
                            <p>Donasi Disalurkan</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="secondary">{{$campaigns['published']}}</h1>
                            <p>Campaign Dimulai</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                    <div class="col-lg-4 col-sm-6">
                        <div class="author-info author-info--dashboard">
                            <h1 class="info">{{$campaigns['cancel']}}</h1>
                            <p>Campaign Dibatalkan</p>
                        </div>
                    </div><!-- end .col-lg-3 -->
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                            <div class="withdraw_module withdraw_history bg-white">
                                    <div class="withdraw_table_header">
                                        <h4>Transaksi terakhir</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <div id="transactiondata">
                                    </div>
                                </div>
                    </div><!-- ends: .col-md-8 -->
                </div><!-- ends: .row -->
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->

    </section><!-- ends: .dashboard-area -->
@endsection
@section('customjs')
<script>
    $(document).ready(function(){
        $("#transactiondata").load('{{url("dashboard/transaction/data")}}');

        $(document).on('click','.pagination a',function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page)
        })

        function fetch_data(page){
            $.ajax({
                url: "{{url('dashboard/transaction/data?page=')}}"+page,
                success:function(data){
                    $("#transactiondata").html(data);
                }
            })
        }
    });
</script>
@endsection
