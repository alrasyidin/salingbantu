@extends('layouts.admin.dashboard')
@section('title','Dashboard')
@section('main-content')
<section class="section">
    <div class="section-header">
        <h1>Campaign Saya</h1>
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
                <h4>Pilih salah satu campaign Anda</h4> <a href="{{route('create.campaign')}}"
                    class="mr-2 btn btn-primary">Tambahkan Campaign</a>
            </div>
            <div class="card-body">
                    <div id="alert-container"></div>

                <div id="data-display"></div>
                
            </div>
        </div>
</section>
@endsection

@section('customjs')
<script src="{{asset('stisla/assets/modules/sweetalert/sweetalert.min.js')}}"></script>
  <script>
    actControl('data');
    function actControl(x, y, z) {
        if (x == "data") {
            $("#data-display").load('{{url("dashboard/campaign/data")}}');
        } else if (x == "delete") {
            swal({
                title: 'Apa anda yakin?',
                text: 'Produk yang telah dihapus tidak akan dapat dikembalikan lagi!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: 'campaign/' + y,
                        type: "POST",
                        data: {
                            '_method': 'DELETE',
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: "JSON",
                        success: function (data) {
                            actControl("data");
                            if (data.status == 0) {
                                $('#alert-container').html('<div class="alert alert-danger">' + data.pesan + '</div>')
                            } else {
                                actControl("data");
                                $('#alert-container').html('<div class="alert alert-success">' + data.pesan + '</div>')
                            }
                            $('#form-job button[type="submit"]').html('<i class="fa fa-save m-r-2"> Simpan');
                        },
                        error: function (data) {
                            $('#alert-container').html('<div class="alert alert-danger">Kesalahan tidak diketahui, silahkan hubungi administrator!</div>')
                        }
                    });
                }
            });
        }
    }
            $(document).ready(function(){
            $(document).on('click','.pagination a', function(event){
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetch_data(page);
            })

            function fetch_data(page){
                $.ajax({
                    url: "{{url('dashboard/campaign/data?page=')}}"+page,
                    success:function(data){
                        $("#data-display").html(data);
                    }
                })
            }
        });
    </script>
@endsection