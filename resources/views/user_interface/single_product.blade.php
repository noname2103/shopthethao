@extends('user_interface.layout')

@section('content')
		<!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="index.html">Trang chủ<span><i class="fa fa-caret-right"></i> </span> </a>
							<!-- <a> women </a> -->
							<span> Chi tiết sản phẩm </span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						<!-- SINGLE-PRODUCT-DESCRIPTION START -->
            @foreach($sanpham as $sp)
						<div class="row">
							<div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
								<div class="single-product-view">
									  <!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="thumbnail_1">
											<div class="single-product-image">
												<img src="img/anhsp/{{$sp->HinhAnh}}" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/anhsp/{{$sp->HinhAnh}}" data-fancybox-group="gallery"><span class="btn large-btn">Xem ảnh lớn <i class="fa fa-search-plus"></i></span></a>
											</div>
										</div>
										<div class="tab-pane" id="thumbnail_2">
											<div class="single-product-image">
												<img src="img/anhsp/{{$sp->HinhAnh}}" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/anhsp/{{$sp->HinhAnh}}" data-fancybox-group="gallery"><span class="btn large-btn">Xem ảnh lớn <i class="fa fa-search-plus"></i></span></a>
											</div>
										</div>
										<div class="tab-pane" id="thumbnail_3">
											<div class="single-product-image">
												<img src="img/anhsp/{{$sp->HinhAnh}}" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/anhsp/{{$sp->HinhAnh}}" data-fancybox-group="gallery"><span class="btn large-btn">Xem ảnh lớn <i class="fa fa-search-plus"></i></span></a>
											</div>
										</div>
										<div class="tab-pane" id="thumbnail_4">
											<div class="single-product-image">
												<img src="img/anhsp/{{$sp->HinhAnh}}" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/anhsp/{{$sp->HinhAnh}}" data-fancybox-group="gallery"><span class="btn large-btn">Xem ảnh lớn <i class="fa fa-search-plus"></i></span></a>
											</div>
										</div>
										<div class="tab-pane" id="thumbnail_5">
											<div class="single-product-image">
												<img src="img/anhsp/{{$sp->HinhAnh}}" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/anhsp/{{$sp->HinhAnh}}" data-fancybox-group="gallery"><span class="btn large-btn">Xem ảnh lớn <i class="fa fa-search-plus"></i></span></a>
											</div>
										</div>
										<div class="tab-pane" id="thumbnail_6">
											<div class="single-product-image">
												<img src="img/anhsp/{$sp->HinhAnh}" alt="single-product-image" />
												<a class="new-mark-box" href="#">new</a>
												<a class="fancybox" href="img/anhsp/{{$sp->HinhAnh}}" data-fancybox-group="gallery"><span class="btn large-btn">Xem ảnh lớn <i class="fa fa-search-plus"></i></span></a>
											</div>
										</div>
									</div>
								</div>
								<div class="select-product">
									<!-- Nav tabs -->
									<!-- <ul class="nav nav-tabs select-product-tab bxslider">
										<li class="active">
											<a href="#thumbnail_1" data-toggle="tab"><img src="img/product/sidebar_product/1.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_2" data-toggle="tab"><img src="img/product/sidebar_product/2.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_3" data-toggle="tab"><img src="img/product/sidebar_product/3.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_4" data-toggle="tab"><img src="img/product/sidebar_product/4.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_5" data-toggle="tab"><img src="img/product/sidebar_product/5.jpg" alt="pro-thumbnail" /></a>
										</li>
										<li>
											<a href="#thumbnail_6" data-toggle="tab"><img src="img/product/sidebar_product/6.jpg" alt="pro-thumbnail" /></a>
										</li>
									</ul> -->
								</div>
							</div>
							<div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
								<div class="single-product-descirption">
                    <h2>{{$sp->TenSP}}</h2>
									<div class="single-product-social-share">
										<ul>
											<li><a href="#" class="twi-link"><i class="fa fa-twitter"></i>Tweet</a></li>
											<li><a href="#" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
											<li><a href="#" class="g-plus-link"><i class="fa fa-google-plus"></i>Google+</a></li>
											<li><a href="#" class="pin-link"><i class="fa fa-pinterest"></i>Pinterest</a></li>
										</ul>
									</div>
									<div class="single-product-review-box">
										<!-- <div class="rating-box">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-half-empty"></i>
										</div>
										<div class="read-reviews">
											<a href="#">Read reviews (1)</a>
										</div>
										<div class="write-review">
											<a href="#">Write a review</a>
										</div> -->
									</div>
									<!-- <div class="single-product-condition">
										<p>Reference: <span>demo_1</span></p>
										<p>Condition: <span>New product</span></p>
									</div> -->
									<div class="single-product-price">
                      <h2>{{$sp->Gia}} VNĐ</h2>
									</div>
									<div class="single-product-desc">
										<p>{{$sp->MoTa}}</p>
										<div class="product-in-stock">
											<!-- <p>300 Items<span>In stock</span></p> -->
										</div>
									</div>
									<div class="single-product-info">
										<a href="#"><i class="fa fa-envelope"></i></a>
										<a href="#"><i class="fa fa-print"></i></a>
										<a href="#"><i class="fa fa-heart"></i></a>
									</div>
									<!-- <div class="single-product-quantity">
										<p class="small-title">Quantity</p>
										<div class="cart-quantity">
											<div class="cart-plus-minus-button single-qty-btn">
												<input class="cart-plus-minus sing-pro-qty" type="text" name="qtybutton" value="0">
											</div>
										</div>
									</div> -->
									<!-- <div class="single-product-size">
										<p class="small-title">Size </p>
										<select name="product-size" id="product-size">
											<option value="">S</option>
											<option value="">M</option>
											<option value="">L</option>
										</select>
									</div> -->
									<!-- <div class="single-product-color">
										<p class="small-title">Color </p>
										<a href="#"><span></span></a>
										<a class="color-blue" href="#"><span></span></a>
									</div> -->
									<div class="single-product-add-cart">
										<a class="add-cart-text" title="Add to cart" href="#">Thêm vào giỏ hàng</a>
									</div>
                  @endforeach
								</div>
							</div>
						</div>
						<!-- SINGLE-PRODUCT-DESCRIPTION END -->
						<!-- SINGLE-PRODUCT INFO TAB START -->
						<div class="row">
							<div class="col-sm-12">
								<div class="product-more-info-tab">
									<!-- Nav tabs -->
									<ul class="nav nav-tabs more-info-tab">
										<li class="active"><a href="#moreinfo" data-toggle="tab">Bình luận</a></li>
										<!-- <li><a href="#datasheet" data-toggle="tab">data sheet</a></li>
										<li><a href="#review" data-toggle="tab">reviews</a></li> -->
									</ul>
									  <!-- Tab panes -->
									<div class="tab-content">
										<div class="tab-pane active" id="moreinfo">
											<div class="tab-description">
												<p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
											</div>
										</div>
										<div class="tab-pane" id="datasheet">
											<div class="deta-sheet">
												<table class="table-data-sheet">
													<tbody>
														<tr class="odd">
															<td>Compositions</td>
															<td>Cotton</td>
														</tr>
														<tr class="even">
															<td class="td-bg">Styles</td>
															<td class="td-bg">Casual</td>
														</tr>
														<tr class="odd">
															<td>Properties</td>
															<td>Short Sleeve</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="review">
											<div class="row tab-review-row">
												<div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
													<div class="tab-rating-box">
														<span>Grade</span>
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-author-info">
															<strong>write A REVIEW</strong>
															<span>06/22/2015</span>
														</div>
													</div>
												</div>
												<div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
													<div class="write-your-review">
														<p><strong>write A REVIEW</strong></p>
														<p>write A REVIEW</p>
														<span class="usefull-comment">Was this comment useful to you? <span>Yes</span><span>No</span></span>
														<a href="#">Report abuse </a>
													</div>
												</div>
												<a href="#" class="write-review-btn">Write your review!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- SINGLE-PRODUCT INFO TAB END -->
						<!-- RELATED-PRODUCTS-AREA START -->
            <div class="sale-poduct-area new-product-area">
              <div class="left-title-area">
                <h2 class="left-title">Sản phẩm khác</h2>
              </div>
              <div class="row">
                <!-- HOME2-SALE-CAROUSEL START -->
                <div class="home2-sale-carousel">
                  @foreach($sanphammuonxem as $sp)
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
                              <li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
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
                  <!-- NEW-PRODUCT SINGLE ITEM END -->
                  @endforeach
                </div>
                <!-- HOME2-SALE-CAROUSEL END -->
              </div>
            </div>
					</div>
					<!-- RIGHT SIDE BAR START -->
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<!-- SINGLE SIDE BAR START -->
						<div class="single-product-right-sidebar">
							<h2 class="left-title">Sản phẩm muốn xem</h2>
              @foreach($sanphammuonxem as $sp)
							<ul>
								<li>
									<a href="chitietsanpham&sanpham{{$sp->MaSP}}.html"><img height=82 width=82 src="img/anhsp/{{$sp->HinhAnh}}" alt="" /></a>
									<div class="r-sidebar-pro-content">
										<h5><a href="chitietsanpham&sanpham{{$sp->MaSP}}.html">{{$sp->TenSP}}</a></h5>
										<p>{{$sp->Gia}}</p>
									</div>
								</li>
							</ul>
              @endforeach
						</div>
						<!-- SINGLE SIDE BAR END -->
						<!-- SINGLE SIDE BAR START -->
						<!-- SINGLE SIDE BAR END -->
						<!-- SINGLE SIDE BAR START -->
						<div class="single-product-right-sidebar">
							<div class="slider-right zoom-img">
								<a href="danh-sach&mon2.html"><img class="img-responsive" src="img/bongro.jpg" alt="sidebar left" /></a>
							</div>
						</div>
					</div>
					<!-- SINGLE SIDE BAR END -->
				</div>
			</div>
		</section>
		<!-- MAIN-CONTENT-SECTION END -->
    @endsection
