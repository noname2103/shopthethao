@extends('user_interface.layout')

@section('content')
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="{{route('trangchu')}}">Trang chủ</a>
							<span><i class="fa fa-caret-right	"></i></span>
							<!-- @foreach($loai as $l)
								<span>{{$l->TenLoai}}</span>
							@endforeach -->
							<span>sản phẩm theo danh mục</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- PRODUCT-LEFT-SIDEBAR START -->
						<div class="product-left-sidebar">
							<!-- <h2 class="left-title pro-g-page-title">Catalog</h2> -->
							<!-- SINGLE SIDEBAR ENABLED FILTERS START -->
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
							<!-- SINGLE SIDEBAR ENABLED FILTERS END -->

							<!-- SINGLE SIDEBAR STYLES START -->
						</div>
						<!-- PRODUCT-LEFT-SIDEBAR END -->
						<!-- SIDEBAR-LEFT-ADD START -->
						<div class="single-left-sidebar sidebar-left-add">
							<div class="sidebar-left zoom-img">
								<a href="danh-sach&mon2.html"><img height="433"  src="img/bongro.jpg" alt="sidebar left" /></a>
							</div>
						</div>
						<!-- SIDEBAR-LEFT-ADD END -->
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<div class="right-all-product">
							<!-- PRODUCT-CATEGORY-HEADER START -->
							<div class="product-category-header">
								<div class="category-header-image">
									<img height=211 width=847 src="img/sanpham.jpg" alt="category-header" />
									<div class="category-header-text">
										<h2> Sản phẩm chất lượng </h2>
										<strong>Luôn mang tới sản phẩm chất lượng cho bạn</strong>

									</div>
								</div>
							</div>
							<!-- PRODUCT-CATEGORY-HEADER END -->
							<div class="product-category-title">
								<!-- PRODUCT-CATEGORY-TITLE START -->
								<h1>
									<span class="cat-name">sản phẩm theo danh mục</span>
									<span class="count-product">Có tổng {{count($sanpham)}} sản phẩm.</span>
								</h1>
								<!-- PRODUCT-CATEGORY-TITLE END -->
							</div>
							<div class="product-shooting-area">
								<div class="product-shooting-bar">
									<!-- SHOORT-BY START -->
									<!-- <div class="shoort-by">
										<label for="productShort">Sort by</label>
										<div class="short-select-option">
											<select name="sortby" id="productShort">
												<option value="">--</option>
												<option value="">Price: Lowest first</option>
												<option value="">Price: Highest first</option>
												<option value="">Product Name: A to Z</option>
												<option value="">Product Name: Z to A</option>
												<option value="">In stock</option>
												<option value="">Reference: Lowest first</option>
												<option value="">Reference: Highest first</option>
											</select>
										</div>
									</div> -->
									<!-- SHOORT-BY END -->
									<!-- SHOW-PAGE START -->
									<!-- <div class="show-page">
										<label for="perPage">Show</label>
										<div class="s-page-select-option">
											<select name="show" id="perPage">
												<option value="">11</option>
												<option value="">12</option>
											</select>
										</div>
										<span>per page</span>
									</div> -->
									<!-- SHOW-PAGE END -->
									<!-- VIEW-SYSTEAM START -->
									<!-- <div class="view-systeam">
										<label for="perPage">View:</label>
										<ul>
											<li><a href="shop-gird.html"><i class="fa fa-th-large"></i></a><br />Grid</li>
											<li class="active"><a href="shop-list.html"><i class="fa fa-th-list"></i></a><br />List</li>
										</ul>
									</div> -->
									<!-- VIEW-SYSTEAM END -->
								</div>
								<!-- PRODUCT-SHOOTING-RESULT START -->
								<!-- <div class="product-shooting-result">
									<form action="#">
										<button class="btn compare-button">
											Compare (<span class="compare-value">1</span>)
											<i class="fa fa-chevron-right"></i>
										</button>
									</form>
									<div class="showing-item">
										<span>Showing 1 - 12 of 13 items</span>
									</div>
									<div class="showing-next-prev">
										<ul class="pagination-bar">
											<li class="disabled">
												<a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
											</li>
											<li class="active">
												<span><a class="pagi-num" href="#">1</a></span>
											</li>
											<li>
												<span><a class="pagi-num" href="#">2</a></span>
											</li>
											<li>
												<a href="#" >Next<i class="fa fa-chevron-right"></i></a>
											</li>
										</ul>
										<form action="#">
											<button class="btn showall-button">Show all</button>
										</form>
									</div>
								</div> -->
								<!-- PRODUCT-SHOOTING-RESULT END -->
							</div>
						</div>
						<!-- ALL GATEGORY-PRODUCT START -->
						<div class="all-gategory-product">
							<div class="row">
								<ul class="gategory-product">
									<!-- SINGLE ITEM START -->
									@foreach($sanpham as $sp)
									<li class="cat-product-list">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-product-item">
												<div class="product-image">
														<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html"><img height=262 width=262 src="img/anhsp/{{$sp->HinhAnh}}" alt="product-image" /></a>
													<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html" class="new-mark-box">new</a>
												</div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
											<div class="list-view-content">
												<div class="single-product-item">
													<div class="product-info">
														<div class="customar-comments-box">
																<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html">{{$sp->TenSP}} </a>
															<div class="rating-box">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star-half-empty"></i>
															</div>
															<div class="review-box">
																<span>1 Review(s)</span>
															</div>
														</div>
														<div class="product-datails">
																	<p>{{$sp->MoTa}}</p>
														</div>
														<div class="price-box">
																	<span class="price">{{$sp->Gia}} VNĐ</span>
														</div>
													</div>
													<div class="overlay-content-list">
														<ul>
															<li><a href="#" title="Giỏ hàng" class="add-cart-text">Thêm vào giỏ hàng</a></li>
															<li><a href="chitietsanpham&sanpham{{$sp->MaSP}}.html" title="Chi tiết"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Add to compare"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Add to wishlist"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</li>
									@endforeach
									<!-- SINGLE ITEM END -->
								</ul>
							</div>
						</div>
						<!-- ALL GATEGORY-PRODUCT END -->
						<!-- PRODUCT-SHOOTING-RESULT START -->
						<!-- <div class="product-shooting-result product-shooting-result-border">
							<form action="#">
								<button class="btn compare-button">
									Compare (<strong class="compare-value">1</strong>)
									<i class="fa fa-chevron-right"></i>
								</button>
							</form>
							<div class="showing-item">
								<span>Showing 1 - 12 of 13 items</span>
							</div>
							<div class="showing-next-prev">
								<ul class="pagination-bar">
									<li class="disabled">
										<a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
									</li>
									<li class="active">
										<span><a class="pagi-num" href="#">1</a></span>
									</li>
									<li>
										<span><a class="pagi-num" href="#">2</a></span>
									</li>
									<li>
										<a href="#" >Next<i class="fa fa-chevron-right"></i></a>
									</li>
								</ul>
								<form action="#">
									<button class="btn showall-button">Show all</button>
								</form>
							</div>
						</div> -->
						<!-- PRODUCT-SHOOTING-RESULT END -->
					</div>
				</div>
			</div>
		</section>
@endsection
