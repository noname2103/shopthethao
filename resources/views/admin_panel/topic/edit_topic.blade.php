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
                                        <input type="file" name="hinhanh" placeholder="Nhập email.." class="form-control" />
                                        <img src="img/anhsp/{{$sanpham->HinhAnh}}" alt="" style="width: 100px;">
                                      </div>

                                      <div class="col-lg-12 mt-2">
                                        <span>Giá:</span>
                                        <input type="number" name="gia" placeholder="Nhập mật khẩu.." value="{{$sanpham->Gia}}" class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Mã loại:</span>
                                        <select class="form-control" name="maloai">
                                        @foreach($loai as $li)
                                          @if($li->MaLoai == $sanpham->MaLoai)
                                          <option value="{{$li->MaLoai}}" selected>{{$li->TenLoai}}</option>
                                          @endif
                                          <option value="{{$li->MaLoai}}">{{$li->TenLoai}}</option>
                                        @endforeach
                                        </select>
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Mã Môn:</span>
                                        <select class="form-control" name="mamon">
                                        @foreach($mon as $mn)
                                          @if($mn->MaMon == $sanpham->MaMon)
                                          <option value="{{$mn->MaMon}}" selected>{{$mn->TenMon}}</option>
                                          @endif
                                          <option value="{{$mn->MaMon}}">{{$mn->TenMon}}</option>
                                        @endforeach
                                      </select>
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
