@extends('layouts.admin.dashboard')
@section('title','Dashboard')
@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>Manage Campaign</h1>
        
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>
    <div class="section-body">
        <div class="card">
            <div class="card-header">
                 {!!empty($campaign->id) ? "<h4>Tambah Campaign</h4>" : "<h4>Edit Campaign</h4>"!!}
            </div>
            <div class="card-body">
                <form action="{{route('store.campaign')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="lastname">Judul</label>
                            <input type="text" name="title" class="form-control" value="{{$campaign->title}}" placeholder="Judul Campaign">
                            @error('title')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="lastname">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$campaign->description}}"</textarea>
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
                    </div>
                    <div class="form-row">
                            <div class="form-group col">
                                <label for="lastname">Perkiraaan Selesai</label>
                                <input type="date" name="endof_campaign" class="form-control" placeholder="Perkiraan Selesai" value="{{$campaign->endof_campaign}}">
                                @error('endof_campaign')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
    
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="firstname">Jumlah Dana</label>
                                <input onkeyup="numberToCurrency(this)" type="text" name="goals" class="form-control" placeholder="Jumlah dana" value="{{$campaign->goals}}">
                                @error('goals')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                <div class="card-footer bg-whitesmoke">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

            </div>
        </div>
</section>
@endsection
@section('customcss')
    <link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote.css')}}">
    <link rel="stylesheet" href="{{ asset('stisla/assets/modules/file-input/css/fileinput.css') }}">

@endsection
@section('customjs')
    <script src="{{asset('stisla/assets/modules/summernote/summernote.js')}}"></script>
    <script src="{{ asset('stisla/assets/modules/file-input/js/fileinput.js')}}"></script>
    <script src="{{ asset('stisla/assets/modules/file-input/themes/fa/theme.js')}}"></script>

    <script>
    
    $(document).ready(function () {
        $('#description').summernote({
            height: 300,
            popover: {
            image: [],
            link: [],
            air: []
            },
            toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [  ] ]
        ]
        });
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
                        caption: "{{ $image->name }}", 
                        size: '{{ $image->size }}', 
                        key: '{{ $image->id }}', 
                        url: '{{url("dashboard/campaign/delete-image/$image->id")}}', 
                        showDrag: true
                    },
                @endforeach
            @endif

        ]
        
    });

</script>
@endsection