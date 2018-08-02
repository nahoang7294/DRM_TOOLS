

$('document').ready(function(){
	$("#btnLogin").click(function(){
		$("#loginModal").on('show.bs.modal',function(){
			$("#emailAddr").val("");
			$("#psw").val("");
		});
		$("#loginModal").modal("show");
	});

	$("#btnSignup").click(function(){
		// $("#loginModal").on('show.bs.modal',function(){
		// 	$("#emailAddr").val("");
		// 	$("#psw").val("");
		// });
		// $("#signupModal").modal("show");
	});
	$("#btnBangChamCong").click(function(){
		$("#chamCongModal").on('show.bs.modal', function () {
        	$("#inputFileChamCong").val(null);
        	$("#lbFileChamCong").text("Chọn tệp chấm công");
    	});
		$("#chamCongModal").modal("show");
	});


	$("#btnBangLuong").click(function(){
		$("#bangLuongModal").on('show.bs.modal', function () {
        	$("#inputFileChamLuong1").val(null);
        	$("#inputFileChamLuong2").val(null);
        	$("#lbFileChamLuong1").text("Chọn tệp chấm công");
        	$("#lbFileChamLuong2").text("Chọn tệp thống kê lương");
    	});
		$("#bangLuongModal").modal("show");
	});

	$("#btnBangUngLuong").click(function(){
		$("#ungLuongModal").on('show.bs.modal', function () {
        	$("#inputFileUngLuong").val(null);
        	$("#lbFileUngLuong").text("Chọn tệp thống kê lương");
    	});
		$("#ungLuongModal").modal("show");
	});

	$("#inputFileChamCong").change(function(){
		var fileName = $("#inputFileChamCong").val().split("\\").pop();
		$("#lbFileChamCong").text(fileName);
	});

	$("#inputFileChamLuong1").change(function(){
		var fileName = $("#inputFileChamLuong1").val().split("\\").pop();
		$("#lbFileChamLuong1").text(fileName);
	});


	$("#inputFileChamLuong2").change(function(){
		var fileName = $("#inputFileChamLuong2").val().split("\\").pop();
		$("#lbFileChamLuong2").text(fileName);
	});

	$("#inputFileUngLuong").change(function(){
		var fileName = $("#inputFileUngLuong").val().split("\\").pop();
		$("#lbFileUngLuong").text(fileName);
	});

});
