@extends('layouts.home')
@section('title','Dashoard User')
@section('content')
    @include('app.dashboard.parts.breadcrumb')
    <section class="dashboard-area">
        @include('app.dashboard.parts.menubar')

        <div class="dashboard_contents p-top-100 p-bottom-70">
                <div class="container">
                        <form action="{{route('dashboard.setting.store')}}" class="setting_form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="information_module">
                                        <div class="information__set profile_images">
                                            <div class="information_wrapper">
                                                <div class="profile_image_area">
                                                    <div>
                                                            <label class="cabinet center-block">
                                                                    <figure class="m-0">
                                                                        <img src="{{ !empty(\Auth::user()->avatar) ?  asset("storage/user_photo/".\Auth::user()->avatar)  : asset('worktern/images/avatar.png')  }}"
                                                                            class="gambar" width="200" height="200" id="item-img-output" />
                                                                    </figure>
                                                                    <input type="hidden" class="item-img-val" value="" name="user_photo2" />
                                                                </label>

                                                    </div>
                                                    <div class="img_info">
                                                            <p class="bold">Profile Image</p>
                                                            <p class="subtitle">JPG, GIF or PNG 100x100 px</p>
                                                        </div>
                                                    <label for="cover_photo" class="upload_btn">
                                                        <input type="file" class="item-img file"  id="cover_photo" style="cursor: pointer" name="user_photo" />
                                                        <span class="btn btn-sm btn-primary" aria-hidden="true">Upload New Image</span>
                                                        <a href="" class="btn btn-sm btn-danger">Delete Image</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- ends: .information_module -->
                                </div><!-- ends: .col-md-12 -->
                                <div class="col-md-12">
                                    <div class="information_module">
                                        <div class="toggle_title">
                                            <h4>Personal Information</h4>
                                        </div>
                                        <div class="information__set">
                                            <div class="information_wrapper form--fields row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="acname">Nama Depan
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" name="first_name" class="form-control" placeholder="Nama Depan" value="{{\Auth::user()->first_name}}">

                                                        @error('first_name')
                                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="acname">Nama Belakang
                                                                <sup>*</sup>
                                                            </label>
                                                            <input type="text" name="last_name" class="form-control" placeholder="Nama Belakang"
                                                            value="{{\Auth::user()->last_name}}">
                                                        @error('last_name')
                                                        <span class="invalid-feedback d-block">{{ $message }}</span>

                                                        @enderror

                                                        </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="usrname">Nama Pengguna
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="text" name="username" class="form-control" placeholder="Nama Pengguna"
                                                        value="{{\Auth::user()->username}}" readonly>
                                                    @error('username')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>

                                                    @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="emailad">Email Address
                                                            <sup>*</sup>
                                                        </label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                                        value="{{\Auth::user()->email}}">
                                                    @error('email')
                                                    <span class="invalid-feedback d-block">{{ $message }}</span>

                                                    @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <label for="authbio">Author Bio</label>
                                                    <textarea name="bio" class="form-control" id="" cols="30" rows="10">{{\Auth::user()->bio}}</textarea>
                                                    @error('bio')
                                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 pt-2">
                                                    <a href="#" class="btn btn-danger float-left" role="button" data-toggle="modal" data-target=".bs-modal-lg" style="cursor:pointer" onclick="actControl('change-password');">Ubah Kata sandi</a>
                                                </div>

                                            </div><!-- ends: .information_wrapper -->
                                        </div><!-- ends: .information__set -->
                                    </div><!-- ends: .information_module -->
                                </div><!-- ends: .col-md-12 -->
                                <div class="col-md-12">
                                    <div class="dashboard_setting_btn">
                                        <button type="submit" class="btn btn--md btn-primary">Save Change</button>
                                        <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                                    </div>
                                </div><!-- ends: .col-md-12 -->
                            </div><!-- ends: .row -->
                        </form><!-- end /form -->
                    </div>
        </div><!-- ends: .dashboard_menu_area -->

    </section><!-- ends: .dashboard-area -->

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
