<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
  		integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  	<link href="../css/doreming-admin.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="header">
		<nav class="navbar navbar-expand-md navbar-light bg-light nav-fixed-top">
			<div class="navbar-header">
				<a class="navbar-brand text-left" href="../home"><img src="../image/logo.png" alt="Logo" id="navBrand"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
			</div>
			{{-- <div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto" >
					<li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
				</ul>
			</div> --}}
		</nav>
	</div>
	<div class="container d-flex h-75">
		{{-- <div class="row logo">
			<img src="image/logo.png">
		</div> --}}
		<div class="col-md-4 offset-md-4 align-self-center">
			<div class="row shadow-lg p-3 mb-5 bg-white">
				<div class="container">
					<form>
						<div class="form-group my-1">
							<label for="login_id"><i class="fas fa-user mx-2"></i>ID</label>
							<input class="form-control" type="text" name="id" id="login_id">
						</div>
						<div class="form-group my-1">
							<label for="login_password"><i class="fas fa-unlock mx-2"></i>Mật khẩu</label>
							<input class="form-control" type="text" name="id" id="login_password">
						</div>
						<div class="form-check my-2">
							<input type="checkbox" class="form-check-input">
							<label class="form-check-label">Ghi nhớ đăng nhập.</label>
						</div>
						<div class="form-group mt-4">
							<button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
