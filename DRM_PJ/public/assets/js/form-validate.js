$().ready(function(){
	$("#login-form").validate({
		rules:{
			email: {
				maxlength:256,
				required:true,
				email: true,
			},
			password:{
				required: true,
				minlength: 6,
				maxlength: 20
			}
		},
		messages:{
			email:{
				maxlength: "Địa chỉ email quá dài",
				required: "Xin vui lòng nhập địa chỉ email.",
				email: "Xin hãy điền địa chỉ email hợp lệ."
			},
			password:{
				required: "Xin hãy nhập mật khẩu",
				minlength: "Mật khẩu có ít nhất 6 ký tự.",
				maxlength: "Mật khẩu dài tối đa 20 ký tự."
			}
		}
	});
});