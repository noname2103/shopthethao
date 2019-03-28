@extends('user_interface.layout')

@section('content')
	<div class="" id="alert" style="position: fixed; top:35%; right:30%; z-index: 9999;background-color:rgba(0,0,0,0.7);padding: 30px; border-radius: 5px;display:none;">
		<img src="img/success.png" alt="thanhcong" style="width: 50px;">
		<span style="color:white; font-size: 25px;">Đã thêm sản phẩm vào giỏ hàng</span>
	</div>
		<!-- HEADER-BOTTOM-AREA START -->
		<section class="header-bottom-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- LEFT-CATEGORY-MENU START -->
						<div class="left-category-menu">
							<div class="left-product-cat">
								<div class="category-heading">
									<h2>DANH MỤC HOT</h2>
								</div>
								<!-- CATEGORY-MENU-LIST START -->
								<div class="category-menu-list">
									<ul>
										<li><a href="danh-sach&mon1.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="img/Icons/1.png" alt="" /></span>Bóng đá<i class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="danh-sach&loai6.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="img/Icons/2.png" alt="" /></span>Áo thể thao<i class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="danh-sach&mon2.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="img/Icons/3.png" alt="" /></span>Bóng rổ<i class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="danh-sach&mon3.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="img/Icons/4.png" alt="" /></span>Tennis<i class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="danh-sach&loai5.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="img/Icons/5.png" alt="" /></span>Giày thể thao<i class="fa fa-angle-right"></i></a>
										</li>
										<li><a href="danh-sach&loai4.html"><span class="cat-thumb hidden-md hidden-sm hidden-xs"><img src="img/Icons/6.png" alt="" /></span>Dụng cụ y tế<i class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</div>
								<!-- CATEGORY-MENU-LIST END -->
							</div>
						</div>
						<!-- LEFT-CATEGORY-MENU END -->
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<!-- MAIN-SLIDER-AREA START -->
						<div class="main-slider-area">
							<div class="slider-area">
								<div id="wrapper">
									<div class="slider-wrapper">
										<div id="mainSlider" class="nivoSlider">
											<img src="img/bia2.jpg" alt="main slider" title="#htmlcaption"/>
											<img height="484" width="847" src="img/bia3.jpg" alt="main slider" title="#htmlcaption2"/>
										</div>
										<div id="htmlcaption" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text1">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown"><font color="red">BEST SPORTS SHOP</font></h2>
													<p class="animated bounceInUp"><font color="#ff5050" size=5px>Với những uy tính hiện có ,SaninShop là một trong những shop hàng đầu Việt Nam</font></p>

												</div>
											</div>
										</div>
										<div id="htmlcaption2" class="nivo-html-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text2">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown"><font color="red">TẬN TÌNH</font></h2>
													<p class="animated bounceInUp"><font color="#ff5050" size=5px>Với đội ngũ nhân viên nhiệt tình,SanninShop luôn đón nhận được sự hài lòng của khách hàng</font></p>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- MAIN-SLIDER-AREA END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-BOTTOM-AREA END -->
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<!-- LEFT-SIDEBAR START -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- SIDEBAR-LEFT-ADD START -->
						<div class="single-left-sidebar sidebar-left-add">
							<div class="sidebar-left zoom-img">
								<a href="danh-sach&mon2.html"><img height="433"  src="img/bongro.jpg" alt="sidebar left" /></a>
							</div>
						</div>
						<!-- SIDEBAR-LEFT-ADD END -->
						<!-- LEFT SIDEBAR-BEST-SELLER START -->
						<div class="single-left-sidebar sidebar-best-seller">
							<div class="left-title-area">
								<h2 class="left-title">Sản phẩm hot</h2>
							</div>
							<div class="row">
								<!-- SIDEBAR-BEST-SELLER-CAROUSEL START -->
								<div class="sidebar-best-seller-carousel">
									<!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
									<div class="item">
										@foreach($sanphamhot as $sp)
										<!-- SINGLE-PRODUCT-ITEM START -->
										<div class="single-product-item">
											<div class="sidebar-product-image">
												<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html"><img height="80" width="80" src="img/anhsp/{{$sp->HinhAnh}}" alt="product-image" /></a>
											</div>
											<div class="product-info sede-pro-info">
												<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html">{{$sp->TenSP}}</a>
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="price-box">
													<span class="price">{{$sp->Gia}}</span>
													<!-- <span class="old-price">$27.00</span> -->
												</div>
											</div>
										</div>
										<!-- SINGLE-PRODUCT-ITEM END -->
										@endforeach
									</div>
									<!-- SIDEBAR-BEST-SELLER SINGLE ITEM END -->
									<!-- SIDEBAR-BEST-SELLER SINGLE ITEM START -->
									<div class="item">
										<!-- SINGLE-PRODUCT-ITEM START -->
										<div class="single-product-item">
											<div class="sidebar-product-image">
												<a href="single-product.html"><img src="img/product/sidebar_product/6.jpg" alt="product-image" /></a>
											</div>
											<div class="product-info sede-pro-info">
												<a href="single-product.html">Printed Summer...</a>
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
												</div>
												<div class="price-box">
													<span class="price">$28.98</span>
													<span class="old-price">$30.51</span>
												</div>
											</div>
										</div>
										<!-- SINGLE-PRODUCT-ITEM END -->
									</div>
									<!-- SIDEBAR-BEST-SELLER SINGLE ITEM END -->
								</div>
								<!-- SIDEBAR-BEST-SELLER-CAROUSEL END -->
							</div>
						</div>
						<!-- LEFT SIDEBAR-BEST-SELLER END -->
					</div>
					<!-- LEFT-SIDEBAR END -->
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="new-product-area">
									<div class="left-title-area">
										<h2 class="left-title">Sản phẩm mới</h2>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="row">
												<!-- HOME2-NEW-PRO-CAROUSEL START -->
												<div class="home2-new-pro-carousel">
													@foreach($sanphammoi as $sp)
													<!-- NEW-PRODUCT SINGLE ITEM START -->
													<div class="item">
														<div class="new-product">
															<div class="single-product-item">
																<div class="product-image">
																	<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html"><img height="190" width="190" src="img/anhsp/{{$sp->HinhAnh}}" alt="product-image" /></a>
																	<a href="#" class="new-mark-box">new</a>
																	<div class="overlay-content">
																		<ul>
																			<li><a href="chitietsanpham&sanpham{{$sp->MaSP}}.html" title="Chi tiết"><i class="fa fa-search"></i></a></li>
																			<li><a id="addsp{{$sp->MaSP}}" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
																			<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																			<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																		</ul>
																		<script type="text/javascript">
																			$(document).ready(function(){
																				$("#addsp{{$sp->MaSP}}").click(function(){
																					$.get('addsp{{$sp->MaSP}}', function(data){
																						$("#alert").show();
																						setTimeout(function(){
																							$("#alert").hide(1000)
																							//alert("Chào mừng bạn đến với freetuts.net");
																						}, 3000);
																						//alert(data);
																					});
																				});
																			});
																		</script>
																	</div>
																</div>
																<div class="product-info">
																	<div class="customar-comments-box">
																		<div class="rating-box">
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star"></i>
																			<i class="fa fa-star-half-empty"></i>
																		</div>
																		<div class="review-box">
																			<span>3 Review(s)</span>
																		</div>
																	</div>
																	<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html">{{$sp->TenSP}}</a>
																	<div class="price-box">
																		<span class="price">{{$sp->Gia}}</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- NEW-PRODUCT SINGLE ITEM END -->
													@endforeach
												</div>
												<!-- HOME2-NEW-PRO-CAROUSEL END -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<!-- TOW-COLUMN-ADD START -->
								<div class="tow-column-add zoom-img">
									<a href="danh-sach&mon1.html"><img height="221" width="481"  src="img/bongda.jpg" alt="shope-add" /></a>
								</div>
								<!-- TOW-COLUMN-ADD END -->
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
								<!-- TOW-COLUMN-ADD START -->
								<div class="one-column-add zoom-img">
									<a href="danh-sach&mon3.html"><img height="221" width="355" src="img/tennis.jpg" alt="shope-add" /></a>
								</div>
								<!-- TOW-COLUMN-ADD END -->
							</div>
							<div class="col-xs-12">
								<!-- SALE-PODUCT-AREA START -->
								<div class="sale-poduct-area new-product-area">
									<div class="left-title-area">
										<h2 class="left-title">Giày thể thao</h2>
									</div>
									<div class="row">
										<!-- HOME2-SALE-CAROUSEL START -->
										<div class="home2-sale-carousel">
											@foreach($sanphamgiay as $sp)
											<!-- NEW-PRODUCT SINGLE ITEM START -->
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html"><img height="200" width="200" src="img/anhsp/{{$sp->HinhAnh}}" alt="product-image" /></a>
															<a href="#" class="new-mark-box">hot</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="chitietsanpham&sanpham{{$sp->MaSP}}.html" title="Chi tiết"><i class="fa fa-search"></i></a></li>
																	<li><a id="addsp{{$sp->MaSP}}" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review(s)</span>
																</div>
															</div>
															<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html">{{$sp->TenSP}}</a>
															<div class="price-box">
																<span class="price">{{$sp->Gia}}</span>
																<span class="old-price">$30.51</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<script type="text/javascript">
												$(document).ready(function(){
													$("#addsp{{$sp->MaSP}}").click(function(){
														$.get('addsp{{$sp->MaSP}}', function(data){
															$("#alert").show();
															setTimeout(function(){
																$("#alert").hide(1000)
																//alert("Chào mừng bạn đến với freetuts.net");
															}, 3000);
															//alert(data);
														});
													});
												});
											</script>
											<!-- NEW-PRODUCT SINGLE ITEM END -->
											@endforeach
										</div>
										<!-- HOME2-SALE-CAROUSEL END -->
									</div>
								</div>
								<!-- SALE-PODUCT-AREA end -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section-full-column">
			<div class="container">
				<div class="row">
					<!-- IMAGE-ADD-AREA START -->
					<div class="image-add-area">
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
							<!-- SINGLE ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="danh-sach&mon4.html"><img height="300" width="652" src="img/caulong.jpg" alt="shope-add" /></a>
							</div>
							<!-- SINGLE ADD END -->
						</div>
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<!-- SINGLE ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="danh-sach&mon2.html"><img height="300" width="457"src="img/bongro2.jpg" alt="shope-add" /></a>
							</div>
							<!-- SINGLE ADD END -->
						</div>
					</div>
					<!-- IMAGE-ADD-AREA END -->
				</div>
				<!-- SAn pham gi do -->
				<!-- SALE-PODUCT-AREA START -->
				<div class="sale-poduct-area new-product-area">
					<div class="left-title-area">
						<h2 class="left-title">Sản phẩm giảm giá</h2>
					</div>
					<div class="row">
						<!-- HOME2-SALE-CAROUSEL START -->
						<div class="home2-sale-carousel">
							@foreach($sanphamgg as $sp)
							<!-- NEW-PRODUCT SINGLE ITEM START -->
							<div class="item">
								<div class="new-product">
									<div class="single-product-item">
										<div class="product-image">
											<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html"><img height="200" width="200" src="img/anhsp/{{$sp->HinhAnh}}" alt="product-image" /></a>
											<a href="#" class="new-mark-box">new</a>
											<div class="overlay-content">
												<ul>
													<li><a href="chitietsanpham&sanpham{{$sp->MaSP}}.html" title="Chi tiết"><i class="fa fa-search"></i></a></li>
													<li><a id="addsp{{$sp->MaSP}}" title="Giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
													<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html">{{$sp->TenSP}}</a>
											<div class="price-box">
												<span class="price">{{$sp->Gia}}</span>
												<span class="old-price">$30.51</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<script type="text/javascript">
								$(document).ready(function(){
									$("#addsp{{$sp->MaSP}}").click(function(){
										$.get('addsp{{$sp->MaSP}}', function(data){
											$("#alert").show();
											setTimeout(function(){
												$("#alert").hide(1000)
												//alert("Chào mừng bạn đến với freetuts.net");
											}, 3000);
											//alert(data);
										});
									});
								});
							</script>
							<!-- NEW-PRODUCT SINGLE ITEM END -->
							@endforeach
						</div>
						<!-- HOME2-SALE-CAROUSEL END -->
					</div>
				</div>
				<!-- SALE-PODUCT-AREA end -->
				<!-- san pham gi do end -->
				<div class="row">
					<!-- IMAGE-ADD-AREA START -->
					<div class="image-add-area">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- SINGLE ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="danh-sach&loai5.html"><img alt="shope-add" height=220 width=553 src="img/giaybongda.jpg"></a>
							</div>
							<!-- SINGLE ADD END -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- SINGLE ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="danh-sach&loai1.html"><img alt="shope-add" height=220 width=553 src="img/banhbongda.jpg"></a>
							</div>
							<!-- SINGLE ADD END -->
						</div>
					</div>
					<!-- IMAGE-ADD-AREA END -->
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
		<!-- LATEST-NEWS-AREA START -->

		<!-- LATEST-NEWS-AREA END -->
		<script type="text/javascript">

		</script>
@endsection
