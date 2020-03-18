$(document).ready(function() {
    $('#cariuser').hide();
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {

        // ajax menggunakan load
        $('#containertab').load('ajax/user.php?keyword=' + $('#keyword').val());

    });

});
