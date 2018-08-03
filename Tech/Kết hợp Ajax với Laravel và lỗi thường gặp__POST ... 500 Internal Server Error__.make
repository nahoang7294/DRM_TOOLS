KẾT HỢP AJAX VỚI LARAVEL
# Ví dụ: chức năng login với form là #login-form
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


------Có thể xuất hiện thông báo lỗi như sau---------
POST http://localhost/... 500 (Internal Server Error) 
-----------------------------------------------------
Cách sửa lỗi 
1. Thêm vào header
	<meta name="csrf-token" content="{{ csrf_token() }}" />

2. Thêm vào đầu mỗi form 
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

3. Thêm vào file js chứa code sử lý AJAX 
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		      	}
	});

4. Thêm vào file Http\Middleware\VerifyCsrfToken.php 
 	/**
     * Determine if the session and input CSRF tokens match.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function tokensMatch($request)
    {
        // If request is an ajax request, then check to see if token matches token provider in
        // the header. This way, we can use CSRF protection in ajax requests also.
        $token = $request->ajax() ? $request->header('X-CSRF-Token') : $request->input('_token');

        return $request->session()->token() == $token;
    }

------------------------------------------------
# Tổng quan về CSRF (Cross Site Request Forgery)
http://phpcoban.com/tong-quan-ve-csrf/
# Tìm hiểu về tấn công CSRF và CSRF protected
https://viblo.asia/p/csrf-va-csrf-protection-trong-laravel-57rVRqg5G4bP
# Hướng dẫn sử dụng từ document của laravel
https://laravel.com/docs/5.6/csrf#csrf-x-csrf-token