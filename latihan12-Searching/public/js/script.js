$(function () {
    
    $('.tombolTambahData').on('click',function () {
        $('#judulModal').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah Data')
        //optional, tidak ditambahkan juga ttp jalan
        // $('#nama').val('');
        // $('#nrp').val('');
        // $('#email').val('');
        // $('#jurusan').val('');
        // $('#id').val('');
    })

    $('.tampilModalUbah').on('click',function () {
        $('#judulModal').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Ubah Data')
        $('.modal-body form').attr('action', 'http://localhost/myFolder/LatihanMVC(WPU)/latihan11-Update_Data+(ajax)/public/Mahasiswa/ubah')

        const id = $(this).data('id') ; 

        $.ajax({
            url : 'http://localhost/myFolder/LatihanMVC(WPU)/latihan11-Update_Data+(ajax)/public/Mahasiswa/getUbah',
            data : {id : id} , 
            method : 'post',
            dataType : 'json' ,

            success:function (data) {
                $('#nrp').val(data.nrp)  
                $('#jurusan').val(data.jurusan)  
                $('#nama').val(data.nama)  
                $('#email').val(data.email)  
                $('#id').val(data.id)  

            }
        })
    })

    
}) ; 