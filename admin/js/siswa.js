$(document).ready(function() {
    $('#cari').hide();
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {

        // ajax menggunakan load
        $('#containertab').load('ajax/siswa.php?keyword=' + $('#keyword').val());

    });

});
