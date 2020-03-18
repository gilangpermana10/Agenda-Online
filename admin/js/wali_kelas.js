$(document).ready(function() {
    $('#cari').hide();
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {

        // ajax menggunakan load
        $('#containertab').load('ajax/wali_kelas.php?keyword=' + $('#keyword').val());

    });

});
