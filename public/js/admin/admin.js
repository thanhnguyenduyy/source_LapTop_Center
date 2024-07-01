$(document).ready(function() {
    $('#chkChangePassword').change(function() {
        if ($(this).is(':checked')) {
            $('.password').removeAttr('disabled');
        } else {
            $('.password').attr('disabled', '');
        }
    });
});