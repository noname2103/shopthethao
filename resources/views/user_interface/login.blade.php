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
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- BRAND-CLIENT-AREA START -->
		<section class="brand-client-area">
			<div class="container">
				<div class="row">
					<!-- BRAND-CLIENT-ROW START -->
					<div class="brand-client-row">
						<div class="center-title-area">
							<h2 class="center-title">BRAND & CLIENTS</h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<!-- CLIENT-CAROUSEL START -->
								<div class="client-carousel">
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/1.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/2.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/4.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/5.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/1.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/2.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/4.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/5.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/1.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/3.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/4.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
									<!-- CLIENT-SINGLE START -->
									<div class="item">
										<div class="single-client">
											<a href="#">
												<img src="img/brand/5.png" alt="brand-client" />
											</a>
										</div>
									</div>
									<!-- CLIENT-SINGLE END -->
								</div>
								<!-- CLIENT-CAROUSEL END -->
							</div>
						</div>
					</div>
					<!-- BRAND-CLIENT-ROW END -->
				</div>
			</div>
		</section>
		<!-- BRAND-CLIENT-AREA END -->
		<!-- COMPANY-FACALITY START -->
		<section class="company-facality">
			<div class="container">
				<div class="row">
					<div class="company-facality-row">
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-rocket"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">FREE SHIPPING</h3>
									<span>on order over $100</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-umbrella"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">24/7 SUPPORT</h3>
									<span>online consultations</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">DAILY UPDATES</h3>
									<span>Check out store for latest</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
						<!-- SINGLE-FACALITY START -->
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="single-facality">
								<div class="facality-icon">
									<i class="fa fa-refresh"></i>
								</div>
								<div class="facality-text">
									<h3 class="facality-heading-text">30-DAY RETURNS</h3>
									<span>moneyback guarantee</span>
								</div>
							</div>
						</div>
						<!-- SINGLE-FACALITY END -->
					</div>
				</div>
			</div>
		</section>
		<!-- COMPANY-FACALITY END -->
		@endsection
