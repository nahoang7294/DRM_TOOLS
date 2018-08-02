@extends('master')
@section('container')

<div class="container" id="content">
  <div class="card-deck">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bảng Chấm Công</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie eget ligula sed dictum. Mauris venenatis consectetur elit eu convallis. In ultricies commodo risus non iaculis. </p>
            <button class="btn btn-success" data-dismiss="modal" id="btnBangChamCong">
              Xuất bảng chấm công ngay.
            </button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bảng Lương</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie eget ligula sed dictum. Mauris venenatis consectetur elit eu convallis. In ultricies commodo risus non iaculis. </p>
            <button class="btn btn-success" data-dismiss="modal" id="btnBangLuong">
            Xuất bảng lương ngay</button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Bảng Ứng Lương</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie eget ligula sed dictum. Mauris venenatis consectetur elit eu convallis. In ultricies commodo risus non iaculis. </p>
            <div id="introduce"></div>
            <button class="btn btn-success" data-dismiss="modal"  id="btnBangUngLuong">
            Xuất bảng ứng lương ngay</button>
        </div>
      </div>
  </div>

  <div >
    <div style="margin-top: 40px;">
      <div class="row bg-dark" style="padding-top: 20px; padding-bottom: 20px;">
        <div class="col-sm-5 text-white">
          <h2 id="introduce">Doreming là gì ?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie eget ligula sed dictum. Mauris venenatis consectetur elit eu convallis. In ultricies commodo risus non iaculis. Nulla a ullamcorper sem. Aliquam gravida orci quis mi consequat luctus. Maecenas metus sem, fermentum nec nulla id, convallis ultrices ante. Maecenas elementum, eros non egestas vehicula, neque ipsum commodo justo, ut pellentesque mi diam eget ligula</p>
        </div>
        <div class="col-sm-7">
          <div class="card">
            <img class="card-img-top" src="image/what-is-doreming.png" style="height: 220px;">
            <div class="card-footer">
              <a href="register" class="btn btn-primary" style="margin-right: 10px;">Đăng ký dùng thử Doreming
              </a>
              <a href="" class="btn btn-primary">Tìm hiểu thêm về Doreming</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top: 20px; padding: 10px;">
      <div class="row">
        <div class="col-sm-7 col-xs-12">
          <div class="card">
            <img class="card-img-top" src="image/what-is-doreming.png" style="height: 300px;">
          </div>
        </div>
        <div class="col col-sm-5 col-xs-12">
          <h2>Lợi ích của việc sử dụng Doreming ?</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie eget ligula sed dictum. Mauris venenatis consectetur elit eu convallis. In ultricies commodo risus non iaculis. Nulla a ullamcorper sem. Aliquam gravida orci quis mi consequat luctus. Maecenas metus sem, fermentum nec nulla id, convallis ultrices ante. Maecenas elementum, eros non egestas vehicula, neque ipsum commodo justo, ut pellentesque mi diam eget ligula</p>
        </div>
      </div>
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
              <label for="emailAddr"><i class="fas fa-envelope" style="margin-right: 10px;"></i>Email</label>
              <input type="email" class="form-control" id="emailAddr" placeholder="Nhập email"
            tabindex="1" required>
            </div>
            <div class="form-group">
              <label for="psw"><i class="fas fa-key" style="margin-right: 10px;"></i>Mật khẩu</label>
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

<div class="modal fade" id="chamCongModal" tabindex="-1" role="dialog" aria-labelledby="chamCongModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="chamCongModalTitle">Xuất Bảng Chấm Công</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form class="customForm">
                <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputFileChamCong">
                  <label class="custom-file-label" for="inputFileChamCong" id="lbFileChamCong">Chọn tệp chấm công</label>
                </div>
              </div>
              <div class="form-group mt-4">
                <div class="form-row p-2">
                  <button class="btn btn-primary mr-auto">Định Dạng Tệp</button>
                  <button class="btn btn-primary">Xuất Bảng Chấm Công</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bangLuongModal" tabindex="-1" role="dialog" aria-labelledby="bangLuongModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bangLuongModalTitle">Xuất Bảng Lương</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="customForm">
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputFileChamLuong1">
              <label class="custom-file-label" for="inputFileChamLuong1" id="lbFileChamLuong1">Chọn tệp chấm công</label>
              </div>
            </div>
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputFileChamLuong2">
              <label class="custom-file-label" for="inputFileChamLuong2" id="lbFileChamLuong2">Chọn tệp thống kê lương</label>
              </div>
            </div>
            <div class="form-group mt-4">
              <div class="form-row p-2">
                <button class="btn btn-primary mr-auto">Định Dạng Tệp</button>
                <button type="submit" class="btn btn-primary">Xuất Bảng Chấm Lương</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>

<div class="modal fade" id="ungLuongModal" tabindex="-1" role="dialog" 
    aria-labelledby="ungLuongModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ungLuongModalTitle">Xuất Bảng Ứng Lương</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
            <form class="customForm">
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input file-input" id="inputFileUngLuong">
                  <label class="custom-file-label" for="inputFileUngLuong" id="lbFileUngLuong">Chọn tệp thống kê lương
                  </label>
                </div>
              </div>
              <div class="form-group mt-4">
                <div class="form-row p-2">
                  <button class="btn btn-primary mr-auto">Định Dạng Tệp</button>
                  <button type="submit" class="btn btn-primary">Xuất Bảng Ứng Lương</button>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>

<!-- <div class="model fade" id="btnSignup" tabindex="-1" role="dialog" arialbelledby="formTitle" aria-hiden="true">
 
      
<!-- </div> --> -->

<div id="txt-sign-up" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
          <div class="ma"><h2 id="formTitle">PHIẾU ĐĂNG KÝ</h2></div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group row">
            <label for="companyName" class="control-label col-md-3 col-form-row text-right">Tên công ty
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
</div>


@endsection
