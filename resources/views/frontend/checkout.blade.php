@extends('frontend.master.master')
@section('title','check out')
@section('content')
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Thanh toán</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn tất thanh toán</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form method="post" class="colorlib-form">
							@csrf
							<h2>Chi tiết thanh toán</h2>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Họ & Tên</label>
										<input type="text" name="full" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="fname">Địa chỉ</label>
										<input type="text" name="address" class="form-control" placeholder="Nhập địa chỉ của bạn">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-6">
										<label for="email">Địa chỉ email</label>
										<input type="email" name="email" class="form-control" placeholder="Ex: youremail@domain.com">
									</div>
									<div class="col-md-6">
										<label for="Phone">Số điện thoại</label>
										<input type="text" name="phone" class="form-control" placeholder="Ex: 0123456789">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">
										
									</div>
								</div>
							</div>
						
					</div>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Tổng Giỏ hàng</h2>
							<ul>
								<li>
									
									<ul>
										@foreach ($cart as $product)
										<li><span>{{ $product->qty }} x {{ $product->name }}(@foreach($product->options->attr as $key=>$value){{ $key }}:{{ $value }}, @endforeach)</span> <span>{{ number_format($product->price,0,'','.') }}đ</span></li>
										@endforeach

									</ul>
								</li>
								
								<li><span>Tổng tiền đơn hàng</span> <span>{{ $total }}đ</span></li>
							</ul>
						</div>
					
						<div class="row">
							<div class="col-md-12">
								<p><button type="submit" class="btn btn-primary">Thanh toán</button></p>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Có thể Bạn quan tâm (Chỗ này em sẽ random sản phẩm- để cho đẹp) </span></h2>
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-5.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>

										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-6.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>

										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-7.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>

										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/item-8.jpg);">
								<p class="tag"><span class="new">New</span></p>
								<div class="cart">
									<p>
										<span class="addtocart"><a href="#"><i class="icon-shopping-cart"></i></a></span>
										<span><a href="product-detail.html"><i class="icon-eye"></i></a></span>

										
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="shop.html">Floral Dress</a></h3>
								<p class="price"><span>3.000.000 đ</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endsection
