@extends('layouts.admin.dashboard')
@section('title','Dashboard')
@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Campaign</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Tambahkan Capaign</h4>
            </div>
            <div class="card-body">
                <form action="{{route('dashboard.setting.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="lastname">Judul</label>
                            <input type="text" name="title" class="form-control" placeholder="Judul Campaign">
                            @error('title')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col">
                            <label for="lastname">Deskripsi</label>
                            <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                            @error('description')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col">
                                <label for="lastname">Perkiraaan Selesai</label>
                                <input type="text" name="endof_campaign" class="form-control" placeholder="Perkiraan Selesai">
                                @error('endof_campaign')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
    
                                @enderror
                            </div>
                            <div class="form-group col">
                                <label for="firstname">Jumlah Dana</label>
                                <input type="text" name="goals" class="form-control" placeholder="Jumlah dana"
                                    >
                                @error('goals')
                                    <span class="invalid-feedback d-block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                </form>
                <div class="card-footer bg-whitesmoke">
                        <button type="submit" class="btn btn-primary">Simpan</button>

                </div>
            </div>
        </div>
</section>
@endsection
@section('customcss')
    <link rel="stylesheet" href="{{asset('stisla/assets/modules/summernote/summernote.css')}}">

@endsection
@section('customjs')
    <script src="{{asset('stisla/assets/modules/summernote/summernote.js')}}"></script>
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
</script>
@endsection