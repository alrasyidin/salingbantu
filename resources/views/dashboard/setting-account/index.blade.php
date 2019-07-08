@extends('layouts.admin.dashboard')
@section('title','Setting Profile')
@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>Pengaturan Akun</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
    @include('layouts.flash-msg')
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Pengaturan Profile Pengguna</h4>
            </div>
            <div class="card-body">
                <form action="{{route('dashboard.setting.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col">
                            <label class="cabinet center-block">
                                <figure class="m-0">
                                    <img src="{{ !empty(\Auth::user()->avatar) ?  asset("storage/user_photo/".\Auth::user()->avatar)  : asset('worktern/images/avatar.png')  }}"
                                        class="gambar" width="200" height="200" id="item-img-output" />
                                </figure>
                                <input type="file" class="item-img file" style="cursor: pointer" name="user_photo" />
                                <input type="hidden" class="item-img-val" value="" name="user_photo2" />
                            </label>
                            <p class="card-text pb-3 text-muted text-size-mini text-justify">Besar file:
                                maksimum 1 Megabytes Ekstensi file yang diperbolehkan: .JPG
                                .JPEG .PNG</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="lastname">Nama Depan</label>
                            <input type="text" name="first_name" class="form-control" placeholder="Nama Depan"
                                value="{{\Auth::user()->first_name}}">
                            @error('first_name')
                            <span class="invalid-feedback d-block">{{ $message }}</span>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="firstname">Nama Belakang</label>
                            <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang"
                                value="{{\Auth::user()->last_name}}">
                            @error('last_name')
                            <span class="invalid-feedback d-block">{{ $message }}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="username">Nama Pengguna</label>
                            <input type="text" name="username" class="form-control" placeholder="Nama Pengguna"
                                value="{{\Auth::user()->username}}" readonly>
                            @error('username')
                            <span class="invalid-feedback d-block">{{ $message }}</span>

                            @enderror
                        </div>
                        <div class="form-group col">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email"
                                value="{{\Auth::user()->email}}">
                            @error('email')
                            <span class="invalid-feedback d-block">{{ $message }}</span>

                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bio">Biodata Singkat</label>
                        <textarea name="bio" class="form-control" id="" cols="30"
                            rows="10">{{\Auth::user()->bio}}</textarea>
                        @error('bio')
                        <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <a href="#" class="btn btn-danger float-left" role="button" data-toggle="modal"
                        data-target=".bs-modal-lg" style="cursor:pointer" onclick="actControl('change-password');">Ubah
                        Kata
                        sandi</a>
            </div>
            <div class="card-footer bg-whitesmoke">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>

        </div>
</section>
{{-- modal profile picture --}}
<div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                </h4>
            </div>
            <div class="modal-body">
                <div id="upload-demo" class="center-block"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('customcss')
    <link rel="stylesheet" href="{{asset('stisla/assets/modules/croppie/croppie.css')}}">
    <style>
            label.cabinet{
                display: block;
                cursor: pointer;
            }
        
            label.cabinet input.file{
                position: absolute;
                width: auto;
                opacity: 0;
                -moz-opacity: 0;
                filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
                margin-top:-130px;
            }
            #upload-demo{
                width: 100%;
                height: 350px;
                padding-bottom:25px;
            }
            figure figcaption {
                position: absolute;
                bottom: 0;
                color: #fff;
                padding-left: 220px;   
                padding-bottom: 15px;
                text-shadow: 0 0 10px #000;
                font-size: 20px;
            }
    </style>
@endsection
@section('customjs')
<script src="{{asset('stisla/assets/modules/croppie/croppie.js')}}"></script>
<script>
        function actControl(x){
            if(x == "change-password"){
                $("#modal-setup").attr("class", "modal-dialog modal-lg");
                $("#myLargeModalBody").load('{{url("dashboard/form-changepassword")}}');
            }
        }
        var $uploadCrop,
            tempFilename,
            rawImg,
            imageId;
    
            function readFile(input) {
            if (input.files && input.files[0]) {
            var reader = new FileReader();
                reader.onload = function (e) {
                $('.upload-demo').addClass('ready');
                $('#cropImagePop').modal('show');
                rawImg = e.target.result;
                    console.log(rawImg);
                }
            reader.readAsDataURL(input.files[0]);
            }else {
                swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }
    
                $uploadCrop = $('#upload-demo').croppie({
                    viewport: {
                        width: 200,
                        height: 200,
                        type: 'square'
                    },
                    enforceBoundary: true,
                    enableExif: true
                });
                
                $('#cropImagePop').on('shown.bs.modal', function () {
                $("#myModalLabel").html("<i class='fas fa-crop m-r-10'></i>Pengaturan Foto");
                    $uploadCrop.croppie('bind', {
                        url: rawImg,
                        enableOrientation: true,
                        points: [77,469,280,739]
                    }).then(function () {
                        console.log('jQuery bind complete');
                    });
                });
    
                $('.item-img').on('change', function () {
                    imageId = $(this).data('id');
                        
                    tempFilename = $(this).val();
                    $('#cancelCropBtn').data('id', imageId);
                    readFile(this);
                });
                $('#cropImageBtn').on('click', function (ev) {
                    $uploadCrop.croppie('result', {
                        type: 'base64',
                        format: 'jpeg',
                        size: {width: 250, height: 250}
                    }).then(function (resp) {
                            console.log("output1");
                        $('#item-img-output').attr('src', resp);
                        $('.item-img-val').val(resp);
                        $('#cropImagePop').modal('hide');
                    });
                });
            // End upload preview image
    </script>
@endsection