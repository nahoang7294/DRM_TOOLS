<!DOCTYPE html>
<html>
<head>
	<title>Doreming Converter Home Page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" 
  			integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<link href="css/doreming-format-editor.css" rel="stylesheet" type="text/css">
  	<script type="text/javascript" src="js/doreming.js"></script>
</head>
<body>
	<div class="header fixed-top">
		<nav class="navbar navbar-expand-md navbar-light bg-light">
			<div class="navbar-header">
				<a class="navbar-brand text-left" href="#"><img src="image/logo.png" alt="Logo" id="navBrand"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
			</div>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="nav navbar-nav mr-auto">
					<li class="nav-item"><a href="index" class="nav-link">Trang chủ</a></li>
					<li class="nav-item"><a href="index#introduce" class="nav-link">Giới thiệu</a></li>
					<li class="nav-item"><a href="#call" class="nav-link">Liên hệ</a></li>
				</ul>

				<ul class="nav navbar-nav nav-right">
					<li class="nav-item" style="margin-right: 20px; margin-bottom: 5px;"><a class="btn btn-link text-black" 
						data-dismiss="modal" id="btnLogin">User1201</a></li>
					<li class="nav-item"><a class="btn btn-outline-primary" href="register">Đăng xuất</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container" id="content">
		<div class="row justify-content-md-center mb-4"><h2>Export Format Editor</h2></div>
		<div class="row justify-content-md-center">
			<div class="col-md-10 offset-md-1 shadow-sm bg-white" id="formatTable">
				<div class="row">
					<div class="col-md-5" id="column1">
						<ol class="border border-dark">
<!-- 							<div><input type="checkbox">Trạng thái tài khoản</div>
							<div><input type="checkbox">Thời gian hết hạn</div> -->


						</ol>
					</div>
					<div class="col-md-2 justify-content-md-center" id="column2">
						<div class="row mb-3">
							<button type="submit" name="toRight"><i class="fas fa-arrow-alt-circle-left btn"></i></button>
						</div>
						<div class="row">
							<button type="submit" name="toLeft"><i class="fas fa-arrow-alt-circle-right btn"></i></button>
						</div>
					</div>
					<div class="col-md-5" id="column3">
						<ol class="border border-dark">
							<div><input type="checkbox">ID</div>
							<div><input type="checkbox">Email</div>
							<div><input type="checkbox">Công Ty</div>
							<div><input type="checkbox">Người phụ trách</div>
							<div><input type="checkbox">Trạng thái tài khoản</div>
							<div><input type="checkbox">Thời gian hết hạn</div>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="call" class="bg-dark text-white">
		<div class="text-center">
			<h4 style="margin-bottom: 30px;">DOREMING COMPANY</h4>
		</div>
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-7 text-left">
					<p><small>Địa chỉ: 7th Floor, Logigear Building,1A Phan Xich Long, Phu Nhuan District, HCMC, VietNam.</small></p>
					<p><small>Email: info@kis-v.com</small></p>
					<p><small>Điện thoại liên lạc:(84-28) 7302-2888.</small></p>
				</div>
			</div>
		</div>
	</div>

</body>
</html>