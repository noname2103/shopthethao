@extends('admin_panel.layout')

@section('content')
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">Danh sách sản phẩm</h1>
      </div>
      <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Bảng quản lý toàn bộ thông tin sản phẩm
            <a href="{{route('getthemsp')}}" class="btn btn-primary" style="float: right;">Thêm bài viết mới</a>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Hình ảnh</th>
                    <th>Nơi sản xuất</th>
                    <th>Giá</th>
                    <th>Môn</th>
                    <th>Loại</th>
                    <th>Tác vụ</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($sanpham as $sp)
                  <tr class='gradeU' id="sanpham{{$sp->MaSP}}" enctype="multipart/form-data">
                    <td>{{$sp->MaSP}}</td>
                    <td>{{$sp->TenSP}}</td>
                    <td><img src="img/anhsp/{{$sp->HinhAnh}}" width='150px'/></td>
                    <td>{{$sp->NoiSX}}</td>
                    <td class="center">{{$sp->Gia}}</td>
                    <td class='center'>{{$sp->MaMon}}</td>
                    <td class='center'>{{$sp->MaLoai}}</td>
                    <td>
                      <a href="chinh-sua-san-pham&sp{{$sp->MaSP}}" class='btn btn-info'>Sửa</a>
                      <button id="xoasp{{$sp->MaSP}}" class='btn btn-danger'>Xóa</button>
                      <script type="text/javascript">
                        $(document).ready(function() {
                          $('#xoasp{{$sp->MaSP}}').click(function(){
                            $.get('xoasp{{$sp->MaSP}}', function(data){
                              $('#sanpham{{$sp->MaSP}}').hide(1000);
                              //alert(data);
                            })
                          });
                        });
                      </script>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>

  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>
@endsection
