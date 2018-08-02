@extends('master')
@section('container')
  
	<div class="container col-md-offset-3 col-md-7" id="content">
		<div class="shadow-lg p-3 mb-5 bg-white rounded">
			<div class="title" align="center"><h2 id="formTitle">PHIẾU ĐĂNG KÝ</h2></div>
				<form class="form-horizontal" action="/action_page.php">
					<div class="form-group row">
						<label for="companyName" class="control-label col-md-3 col-form-row text-right" >Tên công ty
							<span class="text-danger">*</span></label>
				 		<div class="col-md-8">
							<input type="text" placeholder="Tên công ty" class="form-control" id="companyName"
								tabindex="1" required></input>
						</div>
					</div>
					<div class="form-group row">
						<label for="companyAddress" class="control-label col-md-3 col-form-row text-right">Địa chỉ công ty
							<span class="text-danger">*</span></label>
						 	<div class="col-md-8">
								<input type="text" placeholder="Địa chỉ công ty" class="form-control" id="companyAddress"
						 	tabindex="2" required></input>
							</div>
					</div>
					<div class="form-group row">
						<label for="companyPhonenumber" class="control-label col-md-3 col-form-row text-right">Số điện thoại công ty
						<span class="text-danger">*</span></label>
						 	<div class="col-md-8">
								<input type="tel" pattern="[0-9]*" placeholder="Số điện thoại công ty" class="form-control"
								id="companyPhonenumber"
							tabindex="3" required></input>
							</div>
					</div>
					<div class="form-group row">
						<label for="nguoiPhuTrach" class="control-label col-md-3 col-form-row text-right">Người phụ trách
						<span class="text-danger">*</span></label>
						 	<div class="col-md-8">
								<input type="text" placeholder="Họ và tên người phụ trách" class="form-control" id="nguoiPhuTrach"
							tabindex="4" required></input>
							</div>
					</div>
					<div class="form-group row">
						<label for="email" class="control-label col-md-3 col-form-row text-right">Email
						<span class="text-danger">*</span></label>
						 	<div class="col-md-8">
								<input type="email" placeholder="Email" class="form-control" id="email"
							tabindex="5" required></input>
							</div>
					</div>
					<div class="form-group row">
						<label for="password" class="control-label col-md-3 col-form-row text-right">Mật khẩu
						<span class="text-danger">*</span></label>
						 	<div class="col-md-8">
								<input type="password" placeholder="Mật khẩu" class="form-control" id="password"
								tabindex="6" required></input>
							</div>
					</div>
					<div class="form-group row">
						<label for="confirmPassword" class="control-label col-md-3 col-form-row text-right">Xác nhập lại mật khẩu
						<span class="text-danger">*</span></label>
					 	<div class="col-md-8">
							<input type="text" placeholder="Nhập lại mật khẩu" class="form-control" id="confirmPassword"
							tabindex="7" required></input>
						</div>
					</div>
					<div class="form-group row d-flex justify-content-center">
	      				<div class="checkbox">
	       			 		<label class="control-label">
	       			 			<input type="checkbox" id="accept" style="margin-right: 15px;">Đồng ý với <a href="link">nội dung điều lệ</a> của chúng tôi.</label>
	     				 </div>
					</div>
					<div class="form-group d-flex justify-content-center">
						<div>
							<button type="submit" class="btn btn-primary">Đăng ký ngay</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
	  				<div class="modal-header">
	    				<h5 class="modal-title" id="loginModalTitle">Đăng nhập tài khoản.</h5>
	    				    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
	  				</div>
	  				<div class="modal-body">
	  					<form style="padding: 25px 30px 25px 30px;">
							<div class="form-group">
								<label for="emailAddr"><span class="glyphicon glyphicon-envelope"></span>Email</label>
								<input type="email" class="form-control" id="emailAddr" placeholder="Nhập email"
							tabindex="1" required>
							</div>
							<div class="form-group">
								<label for="psw"><span class="glyphicon glyphicon-lock"></span>Mật khẩu</label>
								<input type="password" class="form-control" id="psw" placeholder="Nhập mật khẩu"
							tabindex="2" required>
							</div>
							<div class="checkbox">
								<div class="container">
									<div class="row">
										<div class="col-md-7">
											<input type="checkbox" class="form-check-input" id="exampleCheck1" tabindex="4">
											<label class="form-check-label" for="exampleCheck1">Ghi nhớ đăng nhập</label>
										</div>
										<div class="col-md-5">
											<a href="" class="btn btn-link float-right">Quên mật khẩu.</a>
										</div>
									</div>
								</div>


							</div>
							<div class="row justify-content-center">
								<button type="submit" class="btn btn-primary" tabindex="5">Đăng nhập</button>
							</div>
						</form>
	  				</div>
	  			</div>
			</div>
	</div>
@endsection
