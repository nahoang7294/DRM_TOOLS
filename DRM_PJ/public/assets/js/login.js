function login(){

    var email=$('#email').val();
    var password=$('#password').val();
    alert(email);
   
    $.ajax({
         "_token": $('#token').val(),
        type: 'POST',   
        url: 'login-account',
        data:{
            'email' :email,
            'password' : password
        },
        success: function(data){
            alert(123)
            console.log(11111111111111)
        }
    });
}
