$(document).ready(function() {
    $('#login').on({

        submit: function(event) {

            var formData = {
                email: $("#email-data").val(),
                password: $("#password-data").val()
            };

            $.ajax({
                method: 'POST',
                url: "api/login.php",
                data: formData,
                dataType: "json",
                encode: true
            }).done(function(data) {

                $('#login-error-message').html(data.message);

                if (data.success) {
                    $(location).prop('href', 'home.php');
                } else {
                    $('#login-error-box').css('display', 'block');
                }
            }).fail(function(data) {
                $('#login-error-message').html('Could not reach server, please try again later.');
            });

            event.preventDefault();

        }

    });

});