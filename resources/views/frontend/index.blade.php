@extends('frontend.master.master')
@section('title','Store')
@section('content')

<div id="main" class="main">
	<div class="container">
		<div class="top-main">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="wrapper-slideshow">
						@foreach ($slides as $slide)
							<div class="slideshow">
								<div>
									<img class="mySlides w3-animate-fading image" src="public/backend/img/{{ $slide->img }}">
								</div>
							</div>
						@endforeach
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
					<div class="imgNoti">
						<div style="background-image: url('public/frontend/images/imgnoti.jpg');" class="img_noti_inside"> 
							<h2 class="h2noti">Các tin tức mới nhất của CND</h2>
							<ul class="list-group list-group-flush">
								@foreach ($notifications as $notification)
								<li class="list-group-item bg-none">{{ $notification->title }}</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-main">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center title-product-care">
					<h2>Sản phẩm được quan tâm nhiều nhất</h2>
				</div>
			</div>
		</div>
		<div class="colorlib-shop">
			
			<div class="row">
				@foreach ($product_80s as $product)
				<h3 class="upercase"><a href="product_by_category/{{ $product->category->id }}">Sản phẩm gạch 800*800</a></h3>
					<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(public/backend/img/{{ $product->img }});">
							<p class="tag"><span class="new">New</span></p>
							<div class="cart">
								<p>
									<!-- <span class="addtocart"><a href="product/detail/{{ $product->id }}"><i class="icon-shopping-cart"></i></a></span> -->
									<span><a href="product/detail/{{ $product->id }}"><i class="icon-eye"></i></a></span>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="product/detail/{{ $product->id }}">{{ $product->name }}</a></h3>
							<p class="price"><span>{{number_format( $product->price,0,'',',') }} đ</span></p>
						</div>
					</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<h3 class="upercase"><a href="product_by_category/{{ $product->category->id }}">Sản phẩm gạch 600*600</h3>
				@foreach ($product_60s as $product)
					<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(public/backend/img/{{ $product->img }});">
							<p class="tag"><span class="new">New</span></p>
							<div class="cart">
								<p class="fix_icon_eye_index">
									<span><a href="product/detail/{{ $product->id }}"><i class="icon-eye"></i></a></span>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="product/detail/{{ $product->id }}">{{ $product->name }}</a></h3>
							<p class="price"><span>{{number_format( $product->price,0,'',',') }} đ</span></p>
						</div>
					</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<h3 class="upercase"><a href="product_by_category/{{ $product->category->id }}">Sản phẩm gạch nền 300*300</h3>
				@foreach ($product_30s_gach_nen as $product_30_gach_nen)
					<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(public/backend/img/{{ $product->img }});">
							<p class="tag"><span class="new">New</span></p>
							<div class="cart">
								<p class="fix_icon_eye_index">
									<span><a href="product/detail/{{ $product_30_gach_nen->id }}"><i class="icon-eye"></i></a></span>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="product/detail/{{ $product_30_gach_nen->id }}">{{ $product_30_gach_nen->name }}</a></h3>
							<p class="price"><span>{{number_format( $product_30_gach_nen->price,0,'',',') }} đ</span></p>
						</div>
					</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<h3 class="upercase"><a href="product_by_category/{{ $product->category->id }}">Sản phẩm gạch ốp 300*600</h3>
				@foreach ($product_30s_gach_op as $product_30_gach_op)
					<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(public/backend/img/{{ $product_30_gach_op->img }});">
							<p class="tag"><span class="new">New</span></p>
							<div class="cart">
								<p class="fix_icon_eye_index">
									<span><a href="product/detail/{{ $product_30_gach_op->id }}"><i class="icon-eye"></i></a></span>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="product/detail/{{ $product_30_gach_op->id }}">{{ $product_30_gach_op->name }}</a></h3>
							<p class="price"><span>{{number_format( $product_30_gach_op->price,0,'',',') }} đ</span></p>
						</div>
					</div>
					</div>
				@endforeach
			</div>
			<div class="row">
				<h3 class="upercase"><a href="product_by_category/{{ $product->category->id }}">Sản phẩm gạch gỗ thanh 150*800</h3>
				@foreach ($product_go_thanh as $product)
					<div class="col-md-3 text-center">
					<div class="product-entry">
						<div class="product-img" style="background-image: url(public/backend/img/{{ $product->img }});">
							<p class="tag"><span class="new">New</span></p>
							<div class="cart">
								<p class="fix_icon_eye_index">
									<span><a href="product/detail/{{ $product->id }}"><i class="icon-eye"></i></a></span>
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="product/detail/{{ $product->id }}">{{ $product->name }}</a></h3>
							<p class="price"><span>{{number_format( $product->price,0,'',',') }} đ</span></p>
						</div>
					</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
	

	<!-- <div id="colorlib-featured-product">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					@foreach ($slides as $slide)
						<div class="slideshow">
							<div class="w3-content w3-section">
								<img class="mySlides w3-animate-fading image" src="public/backend/img/{{ $slide->img }}">
							</div>
						</div>
					@endforeach
				</div>
				<div class="col-md-6">
					<div class="imgNoti">
						<div style="background-image: url('public/frontend/images/imgnoti.jpg');" class="img_noti_inside"> 
							<h2 class="h2noti">Các tin tức mới nhất của CND</h2>
							@foreach ($notifications as $notification)
								<div class="notifition">
									<li style="font-family: Courier New"> {{ $notification->title }}</li>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div> -->

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>

@endsection