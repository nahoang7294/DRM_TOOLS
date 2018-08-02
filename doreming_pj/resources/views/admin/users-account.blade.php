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
  	<script type="text/javascript" src="../js/colResizable-1.6.js"></script>
  	<script type="text/javascript" src="../js/doreming-admin.js"></script>
</head>
<body>
	{{-- <div id="header">
		<nav class="navbar navbar-expand-md navbar-light bg-light nav-fixed-top">
			<div class="navbar-header">
				<a class="navbar-brand text-left" href="#"><img src="../image/logo.png" alt="Logo" id="navBrand"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
			</div>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto" >
					<li class="nav-item"><a class="nav-link" href="#">Trang chủ</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Giới thiệu</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Liên hệ</a></li>
				</ul>
				<ul class="navbar-nav">
					<li class="dropdown">
						<button class="btn btn-light dropdown-toggle"  id="navDropdown" type="button"
							data-toggle="dropdown" aria-expanded="false" >
							<i class="fas fa-cog"></i>
						</button>
						<ul class="dropdown-menu dropdown-menu-right" arialableby="navDropdown">
							<li class="dropdown-item"><i class="fas fa-user-circle" style="margin-right: 10px;"></i>Profile</li>
							<div class="dropdown-divider"></div>
							<li class="dropdown-item"><i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i>Logout</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</div> --}}
	@include('admin.admin-header')

	<div class="content" >
		<div class="row">
			{{-- <div class="col-md-2 shadow-none bg-light sidebar">
				<div class="sidebar-menu">
					<a class="nav-link shadow-sm bg-light mb-2" href="#">Tài Khoản Người Dùng</a>
					<a class="nav-link shadow-sm bg-light mb-2" href="#">Tài Khoản Hệ Thống</a>
					<a class="nav-link shadow-sm bg-light mb-2" href="#">Thống Kê Người Dùng</a>
					<a class="nav-link shadow-sm bg-light mb-2" href="#">Accounting</a>
				</div>
			</div> --}}
			@include('admin.nav-left')
			<div class="col-md-10 justifi-content-center">
				<div align="center"><h2 class="table-title">Tài khoản người dùng</h2></div>
				<table class="table table-bordered table-hover" style="width: 100%;">
					<thead class="thead-light">
						<th class="text-align" style="width: 4%">ID</th>
						<th class="text-align" style="width: 10%">Email</th>
						<th class="text-align" style="width: 15%">Công ty</th>
						<th class="text-align" style="width: 12%">Người phụ trách</th>
						<th class="text-align" style="width: 10%">Số điện thoại</th>
						<th class="text-align" style="width: 6%">Chức vụ</th>
						<th class="text-align" style="width: 8%">Trạng trái tài khoản</th>
						<th class="text-align" style="width: 10%">Thời hạn</th>
						<th class="text-align">Hành động</th>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>example1@email.com</td>
							<td>A&B Company</td>
							<td class="text-align">Nguyen Van A</td>
							<td></td>
							<td></td>
							<td>Dùng thử</td>
							<td>20/08/2018</td>
							<td>
								<div>
									<button class="btn btn-danger">Kích hoạt tài khoản chính thức</button>
								</div>
							</td>
						</tr>
						
					</tbody>
				</table>

			</div>
		</div>
	</div>

</body>
</html>
