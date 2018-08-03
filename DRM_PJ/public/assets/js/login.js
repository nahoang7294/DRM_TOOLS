
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
    $( "#login-form" ).submit(function(e) {
        e.preventDefault(); 
        var email=$('#email').val();
        var password=$('#password').val();

        $.ajax({
            type: 'post',
            url: 'login',
            data:{
                "_token": "{{ csrf_token() }}",
                "email" : email,
                "password" : password
                },
            dataType: 'json',
            success: function (data) {
                console.log(data);
                if (data.error == true) {
                    // alert(data.message.errorlogin[0]);
                    $('.errorPassword').show().text(data.message.errorlogin[0]);
                }
                else{
                    location.reload();  
                }
            },
        });
    });
});