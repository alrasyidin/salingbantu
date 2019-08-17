@extends('layouts.home')
@section('title','Dashoard User')
@section('content')
    @include('app.dashboard.parts.breadcrumb')
    <section class="dashboard-area">
        @include('app.dashboard.parts.menubar')
        <div class="dashboard_contents p-top-100 p-bottom-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                            <div id="alert-container"></div>

                        <div class="withdraw_module withdraw_history bg-white">
                                <div class="withdraw_table_header">
                                    <div class="row">
                                        <div class="col-md-10">
                                                <h4 class="mx-auto">Pilih salah satu campaign Anda</h4>
                                        </div>
                                        <div class="col-md-2">
                                                <a href="{{route('create.campaign')}}" class="btn btn-primary">Tambahkan</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="data-display"></div>
                            </div>
                    </div>
                </div><!-- ends: .row -->
            </div><!-- ends: .container -->
        </div><!-- ends: .dashboard_menu_area -->
    </section><!-- ends: .dashboard-area -->
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
