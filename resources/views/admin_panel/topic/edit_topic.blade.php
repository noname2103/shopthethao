@extends('admin_panel.layout')

@section('content')
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Sửa thông tin sản phẩm</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  Bảng sửa thông tin sản phẩm
                                </div>
                                <div class="panel-body p-3">
                                  <form  action="{{route('postsuasp')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row p-3">
                                      <input type="hidden" name="masp" value="{{$sanpham->MaSP}}">
                                      <div class="col-lg-12 mt-2">
                                        <span>Tên sản phẩm:</span>
                                        <input type="text" name="tensp" placeholder="Nhập tên thành viên.." value="{{$sanpham->TenSP}}"class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Hình ảnh:</span>
                                        <input type="text" name="hinhanh" placeholder="Nhập email.." class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Nơi sản xuất:</span>
                                        <input type="text" name="noisx" placeholder="Nhập số điện thoại.." value="{{$sanpham->NoiSx}}" class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Giá:</span>
                                        <input type="number" name="gia" placeholder="Nhập mật khẩu.." value="{{$sanpham->Gia}}" class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Mã môn:</span>
                                        <input type="text" name="mamon" placeholder="Nhập địa chỉ.." value="{{$sanpham->MaMon}}" class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Mã Loại:</span>
                                        <input type="text" name="maloai" placeholder="Nhập địa chỉ.." value="{{$sanpham->MaLoai}}" class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <input type="submit" name="submit" value="Chấp nhận" class="btn btn-success" />
                                      </div>
                                    </div>
                                  </form>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
@endsection
