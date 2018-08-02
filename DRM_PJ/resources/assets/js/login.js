<script type="text/javascript">
    $('body').on('click', '#submit', function(e){
        e.preventDefault();
        var loginForm = $("#login-form");
        var formData = loginForm.serialize();    
        $( '#password-error' ).html( "" );
        $.ajax({
            url:'login',
            type:'post',
            data:formData,
            success:function(data) {
                console.log(data);
                if(data.errors) {
                    if(data.errors.password){
                        $( '#password-error' ).show().text(data.message.password[0]));
                        $('#login').modal('open');
                    }
                }
                else(data.success) {
                   $('#login').modal('hide');
                }
            },
        });
    });