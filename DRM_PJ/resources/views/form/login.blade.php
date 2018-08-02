<!-- code login form -->
<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Đăng nhập</h2>
            </div>
            <div class="modal-body">
                <form class="form-inline" id="login-form">
                    <div class="form-group">
                        <label class="control-label" for="email"><span class="glyphicon glyphicon-envelope"></span>Email<span class="text-danger">*</span></label>
                        <div >
                            <input type="email" name="email" class="form-control" tabindex="1" 
                            id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="password">
                            <span class="glyphicon glyphicon-lock"></span>Mật khẩu<span class="text-danger">*</span></label>
                        <div>
                            <input type="password" name="password" class="form-control" id="password" 
                            placeholder="Mật khẩu" tabindex="2" required>
                        </div>
                        
                    </div>
                    <div class="checkbox">
                        <label id="remeberLogin"><input type="checkbox" tabindex="3">Ghi nhớ đăng nhập</label>
                    </div>
                    </div>

                    <div class="form-group ">       
                        <button type="submit" class="btn btn-primary btn-block" tabindex="4" id="btn-login">
                        Đăng nhập</button>
                    </div>
                    <div class="form-group text-center">
                        <a href="#">Quên mật khẩu.</a>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>