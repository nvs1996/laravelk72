@extends('frontend.master.master')
@section('title','Store')
@section('content')
<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>
<body>
		<div id="colorlib-featured-product" style="margin-top: 20px;">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
							<div class="w3-content w3-section" style="max-width:700px">
							<img class="mySlides" src="public/frontend/images/blog-3.jpg" style="width:100%">
							<img class="mySlides" src="public/frontend/images/blog-1.jpg" style="width:100%">
							<img class="mySlides" src="public/frontend/images/blog-2.jpg" style="width:100%">
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<a href="" class="f-product-2" style="background-image: url(public/frontend/images/blog-3.jpg);">
									<div class="desc">
										<h2>Tin <br>tức <br>Cnd</h2>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<div id="colorlib-intro" class="colorlib-intro" style="background-image: url(public/frontend/images/cover-img-1.jpg);"
		 data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">CND Company SALE OFF: Just hurry up limited offer!</h3>
									<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
									<p><a href="shop.html" class="btn btn-primary">Shop Now</a> <a href="#" class="btn btn-primary btn-outline">Read
											more</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Sản phẩm được quan tâm nhiều nhất</span></h2>
						<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure, debitis? Eaque fugiat quisquam beatae sunt
							similique obcaecati cupiditate saepe ab minus, praesentium velit inventore vitae repellat? Nisi repellendus sit
							deserunt.</p>
					</div>
				</div>
				<div class="row">
					@foreach ($products as $product)
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
			</div>
		</div>
</body>
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
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
@endsection