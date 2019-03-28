@extends('user_interface.layout')

@section('content')

		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{route('trangchu')}}">SaninShop</a>
							<span><i class="fa fa-caret-right	"></i></span>
							<span>Đăng ký tài khoản</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">

					@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach($errors->all() as $err)
							{{$err}}
							@endforeach
						</div>
					@endif
					@if(Session::has('thanhcong'))
						<div class="alert alert-success">{{Section::get('thanhcong')}}</div>
					@endif
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Tạo tài khoản</h2>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- PERSONAL-INFOMATION START -->
						<div class="personal-infomation">
							<form class="primari-box personal-info-box" id="personalinfo" method="POST" action="{{route('postdangky')}}">
								@csrf
								<h3 class="box-subheading">THÔNG TIN CÁ NHÂN</h3>
								<div class="personal-info-content">
									<div class="form-group primary-form-group p-info-group">
										<label for="firstname">Tên của bạn <sup>*</sup></label>
										<input type="text" value="" name="TenKH"  class="form-control input-feild">
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="email">Email <sup>*</sup></label>
										<input type="email" value="" name="Email"  class="form-control input-feild">
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="lastname">Số điện thoại </label>
										<input type="text" value="" name="SDT"  class="form-control input-feild">
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="lastname">Địa chỉ </label>
										<input type="text" value="" name="DiaChi"  class="form-control input-feild">
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="password">Mật khẩu <sup>*</sup></label>
										<input type="password" value="" name="MatKhau"  class="form-control input-feild">
										<span class="min-pass">(Tối đa 5 ký tự)</span>
									</div>
									<div class="form-group primary-form-group p-info-group">
									<div class="form-group primary-form-group p-info-group">
										<label class="cheker">
											<input type="checkbox" name="checkbox">
											<span></span>
										</label>
										<a>Đăng ký ngay để nhận được ưu đãi từ chúng tôi!</a>
									</div>
									<div class="submit-button p-info-submit-button">
										<input type="submit" name="submit" class="btn btn-success" value="Đăng ký">
										<span class="required-field"><sup>*</sup>Phần bắt buộc(không được để trống)</span>
									</div>
								</div>
							</form>
						</div>
						<!-- PERSONAL-INFOMATION END -->
					</div>
				</div>
			</div>
		</section>
@endsection
