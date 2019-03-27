@extends('admin_panel.layout')

@section('content')
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Thêm sản phẩm</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                  Bảng thêm sản phẩm
                                </div>
                                <div class="panel-body p-3">
                                  <form  action="{{route('postthemsp')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row p-3">
                                      <div class="col-lg-12 mt-2">
                                        <span>Tên sản phẩm:</span>
                                        <input type="text" name="tensp" placeholder="Nhập tên sản phẩm.." class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Hình ảnh:</span>
                                        <input type="file" name="hinhanh"  class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Nơi sản xuất:</span>
                                        <input type="text" name="noisx" placeholder="Nhập nơi sản xuất.." class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Giá:</span>
                                        <input type="number" name="gia" placeholder="Nhập giá.." class="form-control" />
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Mã môn:</span>
                                        <select name="mamon" class="form-control">
                                          <option value="" selected>-- Chọn môn --</option>
                                          @foreach($mon as $mn)
                                            <option value="{{$mn->MaMon}}">{{$mn->TenMon}}</option>
                                          @endforeach
                                          </select>
                                      </div>
                                      <div class="col-lg-12 mt-2">
                                        <span>Mã loại:</span>
                                        <select name="maloai" class="form-control">
                                          <option value="" selected>-- Chọn loại --</option>
                                          @foreach($loai as $li)
                                            <option value="{{$li->MaLoai}}">{{$li->TenLoai}}</option>
                                          @endforeach
                                          </select>
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
