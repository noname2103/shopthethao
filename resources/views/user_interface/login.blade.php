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
							<span>Đăng nhập</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2 class="page-title">Đăng nhập</h2>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- PERSONAL-INFOMATION START -->
						<div class="personal-infomation">
							<form class="primari-box personal-info-box" id="personalinfo" method="post" action="{{route('postdangnhap')}}">
								@csrf
								<h3 class="box-subheading">Thông tin đăng nhập</h3>
								<div class="personal-info-content">
									<div class="form-group primary-form-group p-info-group">
										<label for="email">Email<sup>*</sup></label>
										<input type="email" value="" name="Email" id="email" class="form-control input-feild">
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label for="password">Mật khẩu<sup>*</sup></label>
										<input type="password" value="" name="MatKhau" id="password" class="form-control input-feild">
									</div>
									<!-- <div class="form-group primary-form-group p-info-group">
									<div class="form-group primary-form-group p-info-group"> -->
										<label class="cheker">
											<input type="checkbox" name="checkbox">
											<span></span>
										</label>
										<a href="{{route('getdangky')}}">Đăng ký ngay tài khoản</a>
									</div>
									<div class="form-group primary-form-group p-info-group">
										<label class="cheker">
											<input type="checkbox" name="checkbox">
											<span></span>
										</label>
										<a>Để nhận các ưu đãi!</a>
									</div>
									<!-- <div class="submit-button p-info-submit-button">
										<a href="checkout-address.html" id="SubmitCreate" class="btn main-btn">
											<span>
												Register
												<i class="fa fa-chevron-right"></i>
											</span>
										</a> -->
										<input type="submit" name="submit" class="btn btn-success" value="Đăng nhập">
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
