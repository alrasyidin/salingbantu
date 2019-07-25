@extends('layouts.home')
@section('title','Contribute')
@section('content')
<div class="cpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 bg">
                <div class="order-confirm-wrapper">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('storage/campaign_images/60/'.$campaign->images[0]['path'])}}" alt=""
                                class="img-thumbnail">
                        </div>
                        <div class="col-md-9 text-left">
                            <h3>Anda sedang berdonasi untuk:</h3>
                            <b>{{$campaign->title}}</b>
                        </div>
                    </div>
                </div><!-- ends: .order-confirm-wrapper -->
            </div><!-- ends: .col-lg-12 -->
        </div><!-- ends: .row -->
    </div>
</div>
<form action="{{route('contribute.store',$campaign->slug)}}" method="post" >
@csrf
<div class="cpg pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 bg">
                <div class="order-confirm-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contribute-form">
                                <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInputGroup">0</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text font-weight-bold">Rp.</div>
                                        </div>
                                        <input name="amount" type="number" min="1000" class="form-control @error('amount') is-invalid @enderror" id="inlineFormInputGroup"
                                            placeholder="0">
                                        @error('amount')
                                            <span class="invalid-feedback d-block text-left">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        Lakukan kontribusi pada campaign dengan minimal kontribusi <strong>{{str_rp('5000')}}</strong>                                    
                                    </div>
                                </div>
                                <hr class="col-auto">
                                <div class="col-auto text-left">
                                    <b>{{Auth::user()->fullname()}}</b> 
                                    <p>{{Auth::user()->email}}</p>  
                                </div>
                                <div class="form-group col-auto">
                                    <textarea name="" class="form-control" id="" cols="5" rows="5" placeholder="Tulis dukungan atau doa untuk penggalangan dana ini. Contoh: Semoga cepet sembuh, ya!"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- ends: .order-confirm-wrapper -->
            </div><!-- ends: .col-lg-12 -->
        </div><!-- ends: .row -->
    </div>
</div>

<div class="cpg pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 p-0">
                    <button type="submit" class="btn btn-primary btn-block">Lanjutkan Pembayaran</button>
                </div>
            </div><!-- ends: .row -->
        </div>
    </div>
</form>

@endsection
@section('customcss')
<style>
    .cpg {
        padding-top: 2.5em;
        padding-bottom: 2.5em;
        background: #f2f3f4;
    }

    .bg {
        text-align: center;
        background: #fff;
        border-radius: 3px;
        padding: 20px 30px;
    }

    .contribute-form {
        padding: 20px;
    }
    hr{
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid #e9ebf4; 
    }

</style>
@endsection