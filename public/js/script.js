$(function() {
    
    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data User');
        $('.modal-footer button[type=submit]').html('Simpan Data');
        $('#nama').val('');
        $('#email').val('');
        $('#telepon').val('');
        $('#id').val('');
        $('.modal-body form').attr('action', 'http://localhost/myapp/public/user/add');
    });

    $('.tampilModalUpdate').on('click', function() {
        $('#formModalLabel').html('Update Data User');
        $('.modal-footer button[type=submit]').html('Update Data');
        $('.modal-body form').attr('action', 'http://localhost/myapp/public/user/update');
        
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/myapp/public/user/getupdate',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama').val(data.nama);
                $('#email').val(data.email);
                $('#telepon').val(data.telepon);
                $('#id').val(data.id);
            }
        });
    });

});
