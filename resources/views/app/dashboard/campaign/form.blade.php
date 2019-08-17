@extends('layouts.home')
@section('title','Dashoard User')
@section('content')
    @include('app.dashboard.parts.breadcrumb')
    <section class="dashboard-area">
        @include('app.dashboard.parts.menubar')
        <div class="dashboard_contents p-top-100 p-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="upload_modules">
                            <div class="modules__content">
                                    @if (empty($campaign))
                                    <form action="{{route('store.campaign')}}" method="post" enctype="multipart/form-data">
                                @else
                                    <form action="{{url('dashboard/campaign/update/').'/'.$campaign->id}}" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id" value="{{$campaign->id}}">
                                @endif

                                @csrf
                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="lastname">Judul</label>
                                        <input type="text" name="title" class="form-control" value="{{!empty($campaign) ? $campaign->title : old('title') }}" placeholder="Judul Campaign">
                                        @error('title')
                                            <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="lastname">Deskripsi</label>
                                        <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{!empty($campaign) ?  $campaign->description : old('description') }}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="campaign_name">Upload Gambar</label>
                                                <div class="file-loading">
                                                    <input id="upload-image" type="file" name="campaign_images[]" class="file-input-add-product" data-preview-file-type="text" multiple>
                                                </div>
                                    </div>
                                    @error('campaign_images[]')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-row">
                                        <div class="form-group col">
                                            <label for="lastname">Perkiraaan Selesai</label>
                                            <input type="date" name="endof_campaign" class="form-control" placeholder="Perkiraan Selesai" value="{{!empty($campaign) ? $campaign->endof_campaign : old("endof_campaign") }}">
                                            @error('endof_campaign')
                                                <span class="invalid-feedback d-block">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col">
                                                <label for="jumlahdana">Jumlah Dana</label>
                                                <div class="input-group">
                                                  <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                      <strong>Rp.</strong>
                                                    </div>
                                                  </div>
                                                  <input onkeyup="numberToCurrency(this)" type="text" name="goals" class="form-control" placeholder="Jumlah dana" value="{{!empty($campaign) ?  $campaign->goals : old("goals")}}">
                                                  @error('goals')
                                                      <span class="invalid-feedback d-block">{{ $message }}</span>
                                                  @enderror
                                                </div>
                                              </div>
                                    </div>
                            </div>
                        </div>
                            <div class="btns m-top-40">
                                    <button type="submit" class="btn btn-lg btn-primary m-right-15">Submit Item</button>
                                    <button type="submit" class="btn btn-lg btn-danger">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div><!-- ends: .row -->
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->
    </section><!-- ends: .dashboard-area -->
@endsection
@section('customcss')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.18.0/ui/trumbowyg.min.css">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/file-input/css/fileinput.css') }}">

@endsection
@section('customjs')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.18.0/trumbowyg.min.js"></script>
    <script src="{{ asset('stisla/assets/modules/file-input/js/fileinput.js')}}"></script>
    <script src="{{ asset('stisla/assets/modules/file-input/themes/fa/theme.js')}}"></script>

    <script>

    $(document).ready(function () {
        $('#description').trumbowyg();
    });

    $("#upload-image").fileinput({
        theme: 'fa',
        uploadUrl: '#', // you must set a valid URL here else you will get an error
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize: 1000,
        maxFilesNum: 10,
        fileActionSettings: {
            showUpload: false,
        },
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        initialPreviewAsData: true,
        allowedFileExtensions: ["png", "jpg", "jpeg" ],
        initialPreview: [
            @if(!empty($campaign->images))
                @foreach($campaign->images as $image)
                    "{{ asset('storage/campaign_images/'.$image->username.'/'.$image->path) }}",
                @endforeach
            @endif
        ],
        initialPreviewConfig: [
            @if(!empty($campaign->images))
                @foreach($campaign->images as $image)
                    {
                        caption : '{{ $image->name }}',
                        size    : '{{ $image->size }}',
                        key     : '{{ $image->id }}',
                        url     : '{{url("dashboard/campaign/delete-image/$image->id")}}',
                        showDrag: true
                    },
                @endforeach
            @endif
        ]

    });

</script>
@endsection
