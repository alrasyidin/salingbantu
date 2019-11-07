@extends('layouts.home')
@section('title','Dashoard User')
@section('content')
    @include('app.dashboard.parts.breadcrumb')
    <section class="dashboard-area">
        @include('app.dashboard.parts.menubar')
        <div class="dashboard_contents p-top-100 p-bottom-70">
            <div class="container">
                    @include('layouts.flash-msg')
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="upload_modules">
                                <div class="modules__title">
                                    <h3>konfirmasi Pembayaran</h3>
                                </div>
                                <div class="modules__content">
                                        <form action="{{route('store.comfirmpayment')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="transaction_id" value="{{$transaction->id}}">
                                            <div class="form-row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label for="first_name">Jumlah Pembayaran</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text font-weight-bold">Rp.</div>
                                                        </div>
                                                        <input onkeyup="numberToCurrency(this)" type="text" name="value" class="form-control"
                                                            placeholder="Jumlah Pembayaran" value="">
                                                    </div>
                                                    @error('value')
                                                    <span class="from-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label for="payment_date">Tanggal Pembayaran</label>
                                                    <input type="date" name="payment_date" class="form-control" placeholder="Tanggal Lahir">
                                                    @error('payment_date')
                                                    <span class="from-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label for="gender">Nama Bank Tujuan</label>
                                                    <span class="wt-select">
                                                        <select name="admin_creditacc" class="custom-select"
                                                            {{$admincreditaccounts->isEmpty() ? 'disabled ': null}}>
                                                            <option value="" disabled selected>Pilih Bank</option>
                                                            @foreach ($admincreditaccounts as $admincreditaccount)
                                                            <option value="{{$admincreditaccount->id}}">
                                                                {{ $admincreditaccount->bank->name.' - '.$admincreditaccount->holder_name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </span>
                                                    @if ($admincreditaccounts->isEmpty())
                                                    <p class="from-text text-info">Mohon maaf saat ini anda <b>belum dapat melakukan konfirmasi
                                                            pembayaran</b></p>
                                                    @endif
                                                    @error('admin_creditacc')
                                                    <span class="from-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label for="gender">Nama Bank Pengirim</label>
                                                    <span class="wt-select">
                                                        <select name="user_creditacc" class="custom-select"
                                                            {{$creditaccounts->isEmpty() ? 'disabled ': null}}>
                                                            <option value="" disabled selected>Pilih Bank</option>
                                                            @foreach ($creditaccounts as $creditaccount)
                                                            <option value="{{$creditaccount->id}}">
                                                                {{ $creditaccount->bank->name.' - '.$creditaccount->holder_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </span>
                                                    @if ($creditaccounts->isEmpty())
                                                    <p class="from-text text-info">Silahkan tambahkan rekening terlebih dahulu <a
                                                            href="#">Tambahkan Rekening</a></p>
                                                    @endif
                                                    @error('user_creditacc')
                                                    <span class="from-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                                <div class="form-group">
                                                    <label class="mb-2" for="">Foto Bukti Pembayaran</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="payment_doc" id="img">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                    @error('payment_doc')
                                                    <span class="from-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label class="mb-2" for="">Catatan</label>
                                                    <textarea name="payment_note" id="payment_note" class="form-control" cols="30"
                                                        rows="10"></textarea>
                                                    @error('payment_note')
                                                    <span class="from-text text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="card-footer text-right">
                                                    <button class="btn btn-primary">Simpan</button>
                                                </div>
                                        </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->

    </section><!-- ends: .dashboard-area -->
@endsection


@section('customcss')
<link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote-bs4.css')}}">
@endsection
@section('customjs')
<script src="{{asset('stisla/assets/modules/summernote/summernote-bs4.min.js')}}"></script>
<script src="{{asset('js/bs-custom-file-input.js')}}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init()
        $("#payment_note").summernote({
            dialogsInBody: true,
            minHeight: 150,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['para', ['paragraph']]
            ]
        });
    });
</script>
@endsection
