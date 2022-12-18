$(document).ready(function() {
    $('#pass').click(function () {
        $.ajax({
            url: '/backend/web/user/generation',
            method: "GET",
            type: 'json',
            success: function (data) {
                $('#signupform-password').val(data);
                $('#passwordform-newpass').val(data);
                $('#passwordform-repeatnewpass').val(data);
            }
        });
    });
});