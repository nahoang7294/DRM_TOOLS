@extends('master')
@section('container')
  
<div class="container" id="content">
  <div class="row justify-content-md-center mb-4"><h2>Export Format Editor</h2></div>
  <div class="row justify-content-md-center">
      <div class="col-md-10 offset-md-1 shadow-lg mb-5 bg-white" id="formatTable">
        <div class="row">
          <div class="col-md-5 justify-content-md-center " id="column1">
              <h4>Không nhận</h4>
              <div class="format-item-list border border-dark" id="format-item-list1">
                
              </div>
          </div>
          <div class="container col-md-2 d-flex" id="column2">
              <div class="align-self-center w-100">
                  <div class="row justify-content-md-center" >
                    <button class="btn btn-primary my-2 btn-format" id="btnRight">
                      <i class="fas fa-arrow-circle-right"></i></button>
                  </div>
                  <div class="row justify-content-md-center">
                    <button class="btn btn-primary my-2 btn-format" id="btnLeft">
                      <i class="fas fa-arrow-circle-left"></i></button>
                  </div>
              </div> 
          </div>
          <div class="col-md-5 justify-content-md-center" id="column3">
              <h4>Nhận</h4>
              <div class="format-item-list border border-dark" id="format-item-list2">
                <div class="border border-secondary format-item">
                  <input type="checkbox" class="mx-2 format-item-content" name="ID">ID</input>
                </div>
                <div class="border border-secondary format-item">
                  <input type="checkbox" class="mx-2 format-item-content" name="Email">Email</input>
                </div>
                <div class="border border-secondary format-item">
                  <input type="checkbox" class="mx-2 format-item-content" name="Công ty">Công ty</input>
                </div>
                <div class="border border-secondary format-item">
                  <input type="checkbox" class="mx-2 format-item-content" name="Người phụ trách">Người phụ trách</input>
                </div>  
                <div class="border border-secondary format-item">
                  <input type="checkbox" class="mx-2 format-item-content" name="Trạng thái tài khoản">Trạng thái tài khoản</input>
                </div>
                <div class="border border-secondary format-item">
                  <input type="checkbox" class="mx-2 format-item-content" name="Thời gian hết hạn">Thời gian hết hạn</input>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>

  <div class="row justify-content-md-center">
    <button class="btn btn-outline-primary mx-3" id="btnReview">Review</button>
    <button class="btn btn-primary mx-3" id="btnExport">Xuất File</button>
  </div>

  <div class="container bg-light" id="reviewBox">
     <table class="table table-bordered table-hover w-100">
        <thead class="thead-white" id="thead">
  
        </thead>


        <tbody id="tbody">
          <tr id="trow"></tr>
        </tbody>
      </table>
      
  </div>


</div>
@endsection
