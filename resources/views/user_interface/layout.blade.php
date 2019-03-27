<!doctype html>

<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <base href="{{asset('')}}">
        <title>SanninShop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

		<!-- FONTS
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">

		<!-- FANCYBOX CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">

		<!-- BXSLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery.bxslider.css">

		<!-- MEANMENU CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">

		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui-slider.css">

		<!-- NIVO SLIDER CSS
		============================================ -->
        <link rel="stylesheet" href="css/nivo-slider.css">

		<!-- OWL CAROUSEL CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">

		<!-- OWL CAROUSEL THEME CSS
		============================================ -->
         <link rel="stylesheet" href="css/owl.theme.css">

		<!-- BOOTSTRAP CSS
		============================================ -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- FONT AWESOME CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- NORMALIZE CSS
		============================================ -->
        <link rel="stylesheet" href="css/normalize.css">

		<!-- MAIN CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">

		<!-- STYLE CSS
		============================================ -->
        <link rel="stylesheet" href="css/style.css">

		<!-- RESPONSIVE CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">

		<!-- IE CSS
		============================================ -->
        <link rel="stylesheet" href="css/ie.css">

		<!-- MODERNIZR JS
		============================================ -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="index-2">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

		<!-- HEADER-TOP START -->
		<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								Welcome <span>SanninShop</span>
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Đơn vị : VNĐ</span>
									</div>
								</form>
							</div>
							<div class="selected-language">
								<div class="current-lang">
									<span class="current-lang-label">Ngôn ngữ : </span><strong>Việt Nam</strong>
								</div>
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav>
								<ul class="list-inline">
									<!-- <li><a href="checkout.html">Check Out</a></li> -->
									<li><a href="my-account.html">Tài khoản</a></li>
									<li><a href="cart.html">Giỏ hàng</a></li>
									<li><a href="{{route('getdangnhap')}}">Đăng nhập</a></li>
                  <li><a href="{{route('getdangky')}}">Đăng ký</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>
		<!-- HEADER-TOP END -->
		<!-- HEADER-MIDDLE START -->
		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="{{route('trangchu')}}"><img src="img/logo1.png" alt="bstore logo" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>Gọi chúng tôi ngay</h3>
							<span>0123-456-789</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="{{route('search')}}" method="get" class="search-form-cat">
								<div class="search-product form-group">
					<!--				<select name="catsearch" class="cat-search">
                    <option value="">Mục tìm kiếm</option>
                    @foreach($loai as $l) <option value="">{{$l->TenLoai}}</option> @endforeach
                    @foreach($mon as $m) <option value="">{{$m->TenMon}}</option> @endforeach
									</select> -->
									<input type="text" class="form-control search-form" name="key" placeholder="Nhập tìm kiếm ... " />
									<button class="search-button" type="submit">
										<i class="fa fa-search"></i>
									</button>
								</div>
							</form>
						</div>
						<!-- CATEGORYS-PRODUCT-SEARCH END -->
					</div>
				</div>
			</div>
		</section>
		<!-- HEADER-MIDDLE END -->
		<!-- MAIN-MENU-AREA START -->
		<header class="main-menu-area">
			<div class="container">
				<div class="row">
					<!-- SHOPPING-CART START -->
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
						<div class="shopping-cart-out pull-right">
							<div class="shopping-cart">
								<a class="shop-link" href="cart.html" title="View my shopping cart">
									<!-- <i class="fa fa-shopping-cart cart-icon"></i> -->
                  <img src="img/Icons/cart.png" alt=""/>
									<b>Giỏ hàng</b>
									<span class="ajax-cart-quantity"> </span>
								</a>
								<!-- <div class="shipping-cart-overly">
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image.jpg" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Watch</a></span>
											<span class="pro-quality"><a href="#">S,Black</a></span>
											<p>$22.95</p>
										</div>
									</div>
									<div class="shipping-item">
										<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
										<div class="shipping-item-image">
											<a href="#"><img src="img/shopping-image2.jpg" alt="shopping image" /></a>
										</div>
										<div class="shipping-item-text">
											<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
											<span class="pro-quality"><a href="#">S,Gary</a></span>
											<p>$19.95</p>
										</div>
									</div>
									<div class="shipping-total-bill">
										<div class="cart-prices">
											<span class="shipping-cost">$2.00</span>
											<span>Shipping</span>
										</div>
										<div class="total-shipping-prices">
											<span class="shipping-total">$24.95</span>
											<span>Total</span>
										</div>
									</div>
									<div class="shipping-checkout-btn">
										<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
									</div>
								</div> -->
							</div>
						</div>
					</div>
					<!-- SHOPPING-CART END -->
					<!-- MAINMENU START -->
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
						<div class="mainmenu">
							<nav>
								<ul class="list-inline mega-menu">
									<li class="active"><a href="{{route('trangchu')}}"><img src="img/Icons/home.png" alt="" /> Trang chủ</a>
										<!-- DROPDOWN MENU START -->
										<!-- DROPDOWN MENU END -->
									</li>
									<li>
										<a href="shop-gird.html"><img src="img/Icons/category.png" alt="" /> Danh mục sản phẩm</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<ul>
                            <h2>Môn thể thao</h2>
														@foreach($mon as $m)
                              <li><a href="danh-sach&mon{{$m->MaMon}}.html"><img src="img/Icons/{{$m->HinhAnh}}"/> {{$m->TenMon}}</a></li>
                            @endforeach
													</ul>
												</div>
											</div>
                      <div class="right-mega col-xs-6">
                        <div class="mega-menu-list">
													<ul>
                            <h2>Loại sản phẩm</h2>
                            @foreach($loai as $l)
														<li><a href="danh-sach&loai{{$l->MaLoai}}.html"><img src="img/Icons/{{$l->HinhAnh}}"/> {{$l->TenLoai}}</a></li>
                            @endforeach
													</ul>
												</div>
											</div>
										</div>
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html"><img src="img/Icons/sale.png" alt=""/> Khuyến mãi</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<!-- <div class="drodown-mega-menu">
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">new product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Watch</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div> -->
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
									<li>
										<a href="shop-gird.html"><img src="img/Icons/sup.png" alt="" /> Hỗ trợ</a>
										<!-- DRODOWN-MEGA-MENU START -->
										<!-- <div class="drodown-mega-menu">
											<div class="left-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="right-mega col-xs-4">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">top rate product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">Latest product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
											<div class="left-mega col-xs-6">
												<div class="mega-menu-list">
													<a class="mega-menu-title" href="shop-gird.html">popular product</a>
													<ul>
														<li><a href="shop-gird.html">T-shirts</a></li>
														<li><a href="shop-gird.html">clothing</a></li>
														<li><a href="shop-gird.html">Delivery</a></li>
													</ul>
												</div>
											</div>
										</div> -->
										<!-- DRODOWN-MEGA-MENU END -->
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MAINMENU END -->
				</div>
				<div class="row">
					<!-- MOBILE MENU START -->
					<div class="col-sm-12 mobile-menu-area">
						<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
							<span class="mobile-menu-title">MENU</span>
							<nav>
								<ul>
									<li><a href="index.html">Home</a>
										<ul>
											<li><a href="index.html">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>
									</li>
									<li><a href="shop-gird.html">Women</a>
										<ul>
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">T-Shirts</a></li>
													<li><a href="shop-gird.html">Blouses</a></li>
												</ul>
											</li>
											<li><a href="shop-gird.html">Dresses</a>
												<ul>
													<li><a href="shop-gird.html">Casual Dresses</a></li>
													<li><a href="shop-gird.html">Summer Dresses</a></li>
													<li><a href="shop-gird.html">Evening Dresses</a></li>
												</ul>
											</li>

										</ul>
									</li>
									<li><a href="shop-gird.html">men</a>
										<ul>
											<li><a href="shop-gird.html">Tops</a>
												<ul>
													<li><a href="shop-gird.html">Sports</a></li>
													<li><a href="shop-gird.html">Day</a></li>
													<li><a href="shop-gird.html">Evening</a></li>
												</ul>
											</li>
											<li><a href="shop-gird.html">Blouses</a>
												<ul>
													<li><a href="shop-gird.html">Handbag</a></li>
													<li><a href="shop-gird.html">Headphone</a></li>
													<li><a href="shop-gird.html">Houseware</a></li>
												</ul>
											</li>
											<li><a href="shop-gird.html">Accessories</a>
												<ul>
													<li><a href="shop-gird.html">Houseware</a></li>
													<li><a href="shop-gird.html">Home</a></li>
													<li><a href="shop-gird.html">Health & Beauty</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="shop-gird.html">clothing</a></li>
									<li><a href="shop-gird.html">tops</a></li>
									<li><a href="shop-gird.html">T-shirts</a></li>
									<li><a href="#">Delivery</a></li>
									<li><a href="about-us.html">About us</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- MOBILE MENU END -->
				</div>
			</div>
		</header>
		<!-- MAIN-MENU-AREA END -->
    @yield('content')
    <!-- Footer -->
    <!-- BRAND-CLIENT-AREA START -->
    <section class="brand-client-area">
      <div class="container">
        <div class="row">
          <!-- BRAND-CLIENT-ROW START -->
          <div class="brand-client-row">
            <div class="center-title-area">
              <h2 class="center-title">Công ty hỗ trợ</h2>
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
                  <h3 class="facality-heading-text">Miễn phí vận chuyển</h3>
                  <span>Với đơn hàng trên 500K</span>
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
                  <h3 class="facality-heading-text">Hỗ trợ 24/7</h3>
                  <span>Online hẳng ngày</span>
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
                  <h3 class="facality-heading-text">Cập nhật hằng ngày</h3>
                  <span>Hãy ghé thăm shop</span>
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
                  <h3 class="facality-heading-text">10 ngày đổi trả</h3>
                  <span>Hoàn tiền sản phẩm lỗi</span>
                </div>
              </div>
            </div>
            <!-- SINGLE-FACALITY END -->
          </div>
        </div>
      </div>
    </section>
    <!-- COMPANY-FACALITY END -->
    <!-- FOOTER-TOP-AREA START -->
    <section class="footer-top-area">
      <div class="container">
        <div class="footer-top-container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              <!-- FOOTER-TOP-LEFT START -->
              <div class="footer-top-left">
                <!-- NEWSLETTER-AREA START -->
                <div class="newsletter-area">
                  <h2>SanninShop</h2>
                  <p>Theo dõi chúng tôi để nhận được các thông tin mới nhất từ cửa hàng của chúng tôi từ những sản phẩm mới ,các khuyến mãi đặc biệt.</p>
                  <form action="#">
                    <div class="form-group newsletter-form-group">
                      <input type="text" class="form-control newsletter-form" placeholder="Nhập vào email của bạn...">
                      <input type="submit" class="newsletter-btn" name="submit" value="Subscribe" />
                    </div>
                  </form>
                </div>
                <!-- NEWSLETTER-AREA END -->
                <!-- ABOUT-US-AREA START -->
                <div class="about-us-area">
                  <h2>Về chúng tôi</h2>
                  <p>Với uy tín hàng đầu,chúng tôi là 1 những shop hàng đầu Việt Nam về lĩnh vực thể thao.Với những nỗ lực không ngừng chúng tôi sẽ cố gắng vươn ra tầm châu lục với những tiêu chí: An toàn, đẹp và chất lượng</p>
                </div>
                <!-- ABOUT-US-AREA END -->
                <!-- FLLOW-US-AREA START -->
                <div class="fllow-us-area">
                  <h2>Theo dõi chúng tôi với</h2>
                  <ul class="flow-us-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>
                <!-- FLLOW-US-AREA END -->
              </div>
              <!-- FOOTER-TOP-LEFT END -->
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
              <!-- FOOTER-TOP-RIGHT-1 START -->
              <div class="footer-top-right-1">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-sm">
                    <!-- STATICBLOCK START -->
                    <div class="staticblock">
                      <h2>★ ★ ★ ★ ★ ★ ★ ★ ★ ★ ★ ★ ★ </h2>
                      <p>Shop thể thao sanin, Shop the thao uy tin, giày thể thao, quần áo thể thao, dụng cụ và phụ kiện thể thao, đồ thể dục, đồ bóng đá, quần áo bóng rổ,quần áo cầu lông, quần áo tennis, đồ bơi, giày đá banh Nike, Adidas, giày bóng rổ, giày chạy bộ, đặt áo đá bóng, đặt áo bóng rổ, đồng phục thể dục, áo lớp, áo trường. Nhận đặt làm in quần áo bóng đá, bóng rổ theo yêu cầu, quần áo bóng đá Thái Lan, quần áo bóng đá tay dài, áo bóng đá CLB, quốc gia, giày chạy bộ, túi đựng giày, balo thể thao, áo bó body tay dài...Chuyên cung cấp các mặt hàng thể thao theo nhu cầu - Giao hàng tận nơi </p>
                    </div>
                    <!-- STATICBLOCK END -->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <!-- STORE-INFORMATION START -->
                    <div class="Store-Information">
                      <h2>Thông tin shop</h2>
                      <ul>
                        <li>
                          <div class="info-lefticon">
                            <i class="fa fa-map-marker"></i>
                          </div>
                          <div class="info-text">
                            <p>Việt Nam,quận 9,Hutech </p>
                          </div>
                        </li>
                        <li>
                          <div class="info-lefticon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <div class="info-text call-lh">
                            <p>Điện thoại liên hệ : 0123-456-789</p>
                          </div>
                        </li>
                        <li>
                          <div class="info-lefticon">
                            <i class="fa fa-envelope-o"></i>
                          </div>
                          <div class="info-text">
                            <p>Email : <a href="mailto:trungminhminh@gmail.com"><i class="fa fa-angle-double-right"></i> sports@saninshop.com</a></p>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!-- STORE-INFORMATION END -->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <!-- GOOGLE-MAP-AREA START -->
                    <div class="google-map-area">
                      <div class="google-map">
                        <div id="googleMap" style="width:100%;height:150px;"></div>
                      </div>
                    </div>
                    <!-- GOOGLE-MAP-AREA END -->
                  </div>
                </div>
              </div>
              <!-- FOOTER-TOP-RIGHT-1 END -->
              <div class="footer-top-right-2">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- FOTTER-MENU-WIDGET START -->
                    <div class="fotter-menu-widget">
                      <div class="single-f-widget">
                        <h2>Loại sản phẩm</h2>
                        <ul>
                          <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Giày thể thao </a></li>
                          <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Dụng cụ y tế</a></li>
                          <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Vợt</a></li>
                          <li><a href="shop-gird.html"><i class="fa fa-angle-double-right"></i>Áo</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- FOTTER-MENU-WIDGET END -->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <!-- FOTTER-MENU-WIDGET START -->
                    <div class="fotter-menu-widget">
                      <div class="single-f-widget">
                        <h2>Môn thể thao</h2>
                        <ul>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Bóng đá</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Bóng rổ</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Tennis</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Cầu lông</a></li>
                          <!-- <li><a href="contact-us.html"><i class="fa fa-angle-double-right"></i>Contact Us</a></li> -->
                        </ul>
                      </div>
                    </div>
                    <!-- FOTTER-MENU-WIDGET END -->
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <!-- FOTTER-MENU-WIDGET START -->
                    <div class="fotter-menu-widget">
                      <div class="single-f-widget">
                        <h2>Tài khoản</h2>
                        <ul>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Giỏ hàng</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Thông tin</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Chỉnh sửa</a></li>
                          <li><a href="#"><i class="fa fa-angle-double-right"></i>Đăng xuất</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- FOTTER-MENU-WIDGET END -->
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <!-- PAYMENT-METHOD START -->
                    <div class="payment-method">
                      <img class="img-responsive pull-right" src="img/payment.png" alt="payment-method" />
                    </div>
                    <!-- PAYMENT-METHOD END -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FOOTER-TOP-AREA END -->
    <!-- COPYRIGHT-AREA START -->
    <footer class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="copy-right">
              <address>Copyright © 2019 <a href="http://SanninShop.com/">SanninShop</a> All Rights Reserved</address>
            </div>
            <div class="scroll-to-top">
              <a href="#" class="bstore-scrollertop"><i class="fa fa-angle-double-up"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- COPYRIGHT-AREA END -->
    <!-- JS
    ===============================================-->
    <!-- jquery js -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>

    <!-- fancybox js -->
        <script src="js/jquery.fancybox.js"></script>

    <!-- bxslider js -->
        <script src="js/jquery.bxslider.min.js"></script>

    <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>

    <!-- owl carousel js -->
        <script src="js/owl.carousel.min.js"></script>

    <!-- nivo slider js -->
        <script src="js/jquery.nivo.slider.js"></script>

    <!-- jqueryui js -->
        <script src="js/jqueryui.js"></script>

    <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>

    <!-- wow js -->
        <script src="js/wow.js"></script>
    <script>
      new WOW().init();
    </script>

    <!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapOptions = {
        zoom: 8,
        scrollwheel: false,
        center: new google.maps.LatLng(35.149868, -90.046678)
        };
        var map = new google.maps.Map(document.getElementById('googleMap'),
          mapOptions);
        var marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map
        });

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!-- main js -->
        <script src="js/main.js"></script>
    </body>
<!-- Nulled by http://www.baobinh.net by tieulonglanh -->
</html>
