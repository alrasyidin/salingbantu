<form id="change_password_form">
    <div class="modal-body">
        <div class="alert-container"></div>
        <div class="form-group row">
            <label for="pswd" class="col-sm-2 col-form-label">Password Lama</label>
            <div class="col-sm-10">
                <input name="current-password" type="password" class="form-control" id="pswd"
                    placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="pswd1" class="col-sm-2 col-form-label">Password Baru</label>
            <div class="col-sm-10">
                <input name="new-password" type="password" class="form-control" id="pswd1"
                    placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <label for="pswd2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
            <div class="col-sm-10">
                <input name="new-password_confirmation" type="password" class="form-control" id="pswd2"
                    placeholder="Password">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success btn-setting">Simpan</button>
    </div>
    {{ csrf_field() }}
</form>

<script type="text/javascript">
    $("#myLargeModalLabel").html("Tambah Permintaan Baru");
    $('#change_password_form').on('submit', function (e) {
        e.preventDefault();
            $('#change_password_form button[type="submit"]').html('<i class="fa fa-circle-o-notch fa-spin"></i>  Mohon Tunggu...');
                $.ajax({
                    type: 'post',
                    url: '{{url("dashboard/changepassword") }}',
                    data: $('#change_password_form').serialize(),
                success: function (data) {
                    var msg = data['msg'];
                    $('.alert-container').html('<div class="alert alert-success">'+msg+'</div>');
                    setTimeout(function(){
                        location.reload();
                    }, 1000);
                    },
                error: function (data) {
                    $('.alert-container').html('');
                        if(data.responseJSON.errors) {
                            $.each(data.responseJSON.errors, function(key,value) {
                                var val = '<ul>';
                                value.forEach(function(element) {
                                val += '<li>- '+ element + '</li>';
                            });
                        val += '</ul>';
                            $('.alert-container').append('<div class="alert alert-danger">'+val+'</div>');
                        })
                        }
                        else if(data.responseJSON.msg) {
                            $('.alert-container').append('<div class="alert alert-danger">- '+data.responseJSON.msg+'</div>');
                        }
                        $('#change_password_form button[type="submit"]').html('Simpan');
                    }
                    });
                });
</script>
