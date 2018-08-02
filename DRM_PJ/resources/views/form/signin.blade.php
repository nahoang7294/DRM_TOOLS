<div class="modal fade" id="signin">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
	        <div class="modal-header">
	          	<div class="modal-title"><h2>ĐĂNG KÝ TÀI KHOẢN</h2></div>
	          	<button type="button" class="close" data-dismiss="modal">&times;</button>
	        </div>
	      <div class="modal-body">
	        <form class="form-horizontal" action="/action_page.php">
	          	<div class="form-group row">
	            	<label for="companyName" class="control-label col-md-4 col-form-row text-right">Tên công ty<span class="text-danger">*</span></label>
		            <div class="col-md-7">
		              <input type="text" placeholder="Tên công ty" class="form-control" id="companyName"
		                tabindex="1" required></input>
		            </div>
	          	</div>
	          	<div class="form-group row">
	            	<label for="companyAddress" class="control-label col-md-4 col-form-row text-right">Địa chỉ công ty
	             	<span class="text-danger">*</span></label>
	             	<div class="col-md-7">
	               		<input type="text" placeholder="Địa chỉ công ty" class="form-control" id="companyAddress"
	              			tabindex="2" required></input>
	              	</div>
	          	</div>
		        <div class="form-group row">
		            <label for="companyPhonenumber" class="control-label col-md-4 col-form-row text-right">Số điện thoại công ty<span class="text-danger">*</span></label>
		            <div class="col-md-7">
		                <input type="tel" pattern="[0-9]*" placeholder="Số điện thoại công ty" class="form-control"
		                id="companyPhonenumber"	abindex="3" required></input>
		            </div>
		        </div>
	          	<div class="form-group row">
	            	<label for="nguoiPhuTrach" class="control-label col-md-4 col-form-row text-right">Người phụ trách
	            		<span class="text-danger">*</span></label>
	              	<div class="col-md-7">
	                	<input type="text" placeholder="Họ và tên người phụ trách" 
	                	class="form-control" id="NguoiPhuTrach" tabindex="4" required></input>
	              	</div>
	          	</div>
	         	<div class="form-group row">
	            	<label for="email" class="control-label col-md-4 col-form-row text-right">Email
	            	<span class="text-danger">*</span></label>
	              	<div class="col-md-7">
	                	<input type="email" placeholder="Email" class="form-control" id="email"
	              		tabindex="5" required></input>
	              	</div>
	         	</div>
	          	<div class="form-group row">
	            	<label for="password" class="control-label col-md-4 col-form-row text-right">Mật khẩu
	            	<span class="text-danger">*</span></label>
	              	<div class="col-md-7">
	                	<input type="password" placeholder="Mật khẩu" class="form-control" id="password"
	                	tabindex="6" required></input>
	              	</div>
	          	</div>
	          	<div class="form-group row">
	            	<label for="confirmPassword" class="control-label col-md-4 col-form-row text-right">Xác nhập lại mật khẩu<span class="text-danger">*</span></label>
	            	<div class="col-md-7">
	              		<input type="text" placeholder="Nhập lại mật khẩu" class="form-control" id="confirmPassword"
	             		tabindex="7" required></input>
	            	</div>
	          	</div>
	          	<div class="row form-group">
	                <div class="checkbox col-md-7 col-md-push-4">
	                  <label class="control-label">
	                    <input type="checkbox" id="accept" style="margin-right: 15px;">Đồng ý với <a href="link">nội dung điều lệ</a> của chúng tôi.</label>
	               	</div>
	          	</div>
	          	<div class="row form-group">
	            	<div class="col-md-4 col-md-push-4">
	              		<button type="submit" class="btn btn-primary btn-block" id="btn-login">Đăng ký ngay</button>
	            	</div>
	          	</div>
	        </form>
	      </div>   
	    </div>
	</div>
</div>