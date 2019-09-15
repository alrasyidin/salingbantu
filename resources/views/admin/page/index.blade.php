@extends('admin.layouts.dashboard')
@section('title', 'Dashboard')

@section('main-content')
<div class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pengguna Terdaftar</h4>
                    </div>
                    <div class="card-body">
                        {{-- {{$data['entrepreneur']}} --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Campaign Berlangsung</h4>
                    </div>
                    <div class="card-body">
                        {{-- {{$data['investor']}} --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4> Jumlah Mentor</h4>
                        </div>
                        <div class="card-body">
                            {{-- {{$data['mentor']}} --}}
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pembayaran terverifikasi</h4>
                    </div>
                    <div class="card-body">
                        {{-- {{str_rp($data['confirmpayment'])}} --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pembayaran belum terverifikasi</h4>
                    </div>
                    <div class="card-body">
                        {{-- {{str_rp($data['pendingPayment'])}} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

