@extends('layouts.home')
@section('title','Contribute')
@section('content')
<div class="cpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 bg">
                <div class="order-confirm-wrapper">
                    <h3>Terimakasih telah berpatisipasi dalam campaign <b class="primary">{{$transaction->campaign->title}}</b></h3>
                    <hr>
                    <p>Kode pembayaran anda adalah <b class="primary">#{{$transaction->inv_number}}</b></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 bg">
                <div class="dealine-payment">
                    <h1>24:22:22</h1>
                    <p> lakukan Pembayaran Sebelum 22 Januari 2019 </p>
                </div>
                <div class="alert alert-warning">
                    <p> Pastikan melakukan pembayaran sesuai dengan Jumlah yang tertera pada sistem, tranfer dengan
                        nominal berbeda akan membuat proses verifikasi pembayaran terhambat</p>
                </div>
                <div class="float-left">
                    <p>Transfer pembayaran ko nomor rekening</p>
                    <img src="{{asset('img/mandiri.png')}}" alt="" class="rounded" width="100px"> :
                    <strong>1234-2222-44563</strong>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2 bg">
                <hr>
                <p>Nominal yang harus dibayar: <h1> {{str_rp($transaction->amount)}}</h1>
                </p>
                <p><u>
                    <a href="{{route('confirmpayment',['id' => $transaction->id])}}">Konfirmasi Pembayaran</a>
                </u>
                </p>
                <a href="" class="btn btn-primary btn-block">Lihat Status Pembayaran</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('customcss')
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
@endsection
