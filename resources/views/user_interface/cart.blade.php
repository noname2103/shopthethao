@extends('user_interface.layout')

@section('content')
<div class="" id="alertxoa" style="position: fixed; top:35%; right:30%; z-index: 9999;background-color:rgba(0,0,0,0.7);padding: 30px; border-radius: 5px;display:none;">
	<img src="img/success.png" alt="thanhcong" style="width: 50px;">
	<span style="color:white; font-size: 25px;">Đã xóa sản phẩm khỏi giỏ hàng</span>
</div>
    <!-- MAIN-CONTENT-SECTION START -->
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- BSTORE-BREADCRUMB START -->
						<div class="bstore-breadcrumb">
							<a href="index.html">HOMe</a>
							<span><i class="fa fa-caret-right	"></i></span>
							<span>Your shopping cart</span>
						</div>
						<!-- BSTORE-BREADCRUMB END -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPPING-CART SUMMARY START -->
						<h2 class="page-title">Shopping-cart summary <span class="shop-pro-item">Your shopping cart contains: 2 products</span></h2>
						<!-- SHOPPING-CART SUMMARY END -->
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- SHOPING-CART-MENU START -->
						<div class="shoping-cart-menu">
							<ul class="step">
								<li class="step-current first">
									<span>01. Summary</span>
								</li>
								<li class="step-todo second">
									<span>02. Sign in</span>
								</li>
								<li class="step-todo third">
									<span>03. Address</span>
								</li>
								<li class="step-todo four">
									<span>04. Shipping</span>
								</li>
								<li class="step-todo last" id="step_end">
									<span>05. Payment</span>
								</li>
							</ul>
						</div>
						<!-- SHOPING-CART-MENU END -->
						<!-- CART TABLE_BLOCK START -->
						<div class="table-responsive">
							<!-- TABLE START -->
							<table class="table table-bordered" id="cart-summary">
								<!-- TABLE HEADER START -->
								<thead>
									<tr>
										<th class="cart-product">Product</th>
										<th class="cart-description">Description</th>
										<th class="cart-avail text-center">Availability</th>
										<th class="cart-unit text-right">Unit price</th>
										<th class="cart_quantity text-center">Qty</th>
										<th class="cart-delete">&nbsp;</th>
										<th class="cart-total text-right">Total</th>
									</tr>
								</thead>
								<!-- TABLE HEADER END -->
								<!-- TABLE BODY START -->
								<tbody>
									@foreach($giohang as $gh)
										@foreach($sanpham as $sp)
											@if($gh->MaSP == $sp->MaSP)
									<!-- SINGLE CART_ITEM START -->
									<tr id="giohang{{$gh->MaGH}}">
										<td class="cart-product">
											<a href="#"><img alt="Blouse" src="img/anhsp/{{$sp->HinhAnh}}"></a>
										</td>
										<td class="cart-description">
											<p class="product-name"><a href="#">{{$sp->TenSP}}</a></p>
											<small>SKU : demo_1</small>
											<small><a href="#">Size : S, Color : Orange</a></small>
										</td>
										<td class="cart-avail"><span class="label label-success">In stock</span></td>
										<td class="cart-unit">
											<ul class="price text-right">
												<li class="price" id="dongia{{$gh->MaGH}}">{{$sp->Gia}}</li>
											</ul>
										</td>
										<td class="cart_quantity text-center">
											<div class="">
												<input type="number" class="cart-plus-minus" type="text" name="qtybutton" id="soluong{{$gh->MaGH}}" value="{{$gh->SoLuong}}">
											</div>
										</td>
										<td class="cart-delete text-center">
											<span>
												<a id="xoagiohang{{$gh->MaGH}}" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
											</span>
										</td>
										<td class="cart-total">
											<span class="price" id="tonggia{{$gh->MaGH}}">{{$gh->TongGia}}</span>
										</td>
									</tr>
									<script type="text/javascript">
										$(document).ready(function(){
											$("#xoagiohang{{$gh->MaGH}}").click(function(){
												$.get("xoagiohang{{$gh->MaGH}}", function(data){
													$("#giohang{{$gh->MaGH}}").hide();
													$("#alertxoa").show();
													setTimeout(function(){
														$("#alertxoa").hide(1000)
														//alert("Chào mừng bạn đến với freetuts.net");
													}, 3000);
												});
											});
											$("#soluong{{$gh->MaGH}}").change(function(){
												var soluong = $("#soluong{{$gh->MaGH}}").val();
												var dongia = $("#dongia{{$gh->MaGH}}").text();
												$.get("themsoluong{{$gh->MaGH}}&"+soluong+"&"+dongia, function(data){
													$("#tonggia{{$gh->MaGH}}").text(data);
													//alert(data);
												});
											});
										});
									</script>
									<!-- SINGLE CART_ITEM END -->
											@endif
										@endforeach
									@endforeach
								</tbody>
								<!-- TABLE BODY END -->
								<!-- TABLE FOOTER START -->
								<tfoot>
									<tr class="cart-total-price">
										<td class="cart_voucher" colspan="3" rowspan="4"></td>
										<td class="text-right" colspan="3">Total products (tax excl.)</td>
										<td id="total_product" class="price" colspan="1">$76.46</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Total shipping</td>
										<td id="total_shipping" class="price" colspan="1">$5.00</td>
									</tr>
									<tr>
										<td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
										<td class="price" colspan="1">$0.00</td>
									</tr>
									<tr>
										<td class="total-price-container text-right" colspan="3">
											<span>Total</span>
										</td>
										<td id="total-price-container" class="price" colspan="1">
											<span id="total-price">$76.46</span>
										</td>
									</tr>
								</tfoot>
								<!-- TABLE FOOTER END -->
							</table>
							<!-- TABLE END -->
						</div>
						<!-- CART TABLE_BLOCK END -->
					</div>

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<!-- RETURNE-CONTINUE-SHOP START -->
						<div class="returne-continue-shop">
							<a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
							<a href="checkout-signin.html" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
						</div>
						<!-- RETURNE-CONTINUE-SHOP END -->
					</div>
				</div>
			</div>
		</section>
@endsection
