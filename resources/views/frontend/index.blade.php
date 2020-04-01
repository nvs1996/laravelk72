@extends('frontend.master.master')
@section('title','Store')
@section('content')

<div class="slider-area">
	<div class="slider-active owl-dot-style owl-carousel">
		<div class="single-slider pt-100 pb-100 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12 col-sm-7">
						<div class="slider-content slider-animated-1 pt-114">
							<h1 class="animated">Tin tức mới nhất của CND</h1>
							<div class="slider-btn">
								<a class="animated" href="">Đọc ngay</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-12 col-sm-5">
						<div class="slider-single-img slider-animated-1">
							<img class="animated" src="{{url('public/frontend/images/Thi-cong-nha-pho-BIET-THU.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-slider pt-100 pb-100 gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-7 col-12">
						<div class="slider-content slider-animated-1 pt-114">
							<h1 class="animated">Bộ sưu tập 2020 mới được CND cập nhật</h1>
							<div class="slider-btn">
								<a class="animated" href="">Đọc ngay</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-5 col-12">
						<div class="slider-single-img slider-animated-1">
							<img class="animated" src="{{url('public/frontend/images/LUYA11.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="food-category food-category-col pt-100 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4">
				<div class="single-food-category cate-padding-1 text-center mb-30">
					<a href="product_by_category/11">
						<div class="single-food-hover-2">
							<img src="{{url('public/frontend/images/tintuc3.jpg')}}" alt="">
						</div>
						<div class="single-food-content">
							<h3>Gạch 800x800</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="single-food-category cate-padding-1 text-center mb-30">
					<a href="product_by_category/11">
						<div class="single-food-hover-2">
							<img src="{{url('public/frontend/images/tintuc3.jpg')}}" alt="">
						</div>
						<div class="single-food-content">
							<h3>Gạch 600x600</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="single-food-category cate-padding-1 text-center mb-30">
					<a href="product_by_category/11">
						<div class="single-food-hover-2">
							<img src="{{url('public/frontend/images/tintuc3.jpg')}}" alt="">
						</div>
						<div class="single-food-content">
							<h3>Gạch 300x300</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="single-food-category cate-padding-1 text-center mb-30">
					<a href="product_by_category/11">
						<div class="single-food-hover-2">
							<img src="{{url('public/frontend/images/tintuc3.jpg')}}" alt="">
						</div>
						<div class="single-food-content">
							<h3>Gạch gỗ thanh 180x800</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="single-food-category cate-padding-1 text-center mb-30">
					<a href="product_by_category/11">
						<div class="single-food-hover-2">
							<img src="{{url('public/frontend/images/tintuc3.jpg')}}" alt="">
						</div>
						<div class="single-food-content">
							<h3>Gạch 600x600</h3>
						</div>
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4">
				<div class="single-food-category cate-padding-1 text-center mb-30">
					<a href="product_by_category/11">
						<div class="single-food-hover-2">
							<img src="{{url('public/frontend/images/tintuc3.jpg')}}" alt="">
						</div>
						<div class="single-food-content">
							<h3>Gạch 300x300</h3>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-area pt-95 pb-70 gray-bg">
	<div class="container">
		<div class="section-title text-center mb-55">
			<h3>SẢN PHẨM ĐƯỢC QUAN TÂM NHIỀU NHẤT</h3>
		</div>
		<div class="row">
			@for($i=0; $i < 8 ; $i++)  
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
				<div class="product-wrapper mb-10">
					<div class="product-img">
						<a href="product/detail/14">
							<img src="{{url('public/frontend/images/LZ0XlxAAV.jpg')}}" alt="">
						</a>
					</div>
					<div class="product-content">
						<h4><a href="product/detail/14">PORCELAIN MEN KIM CƯƠNG SIÊU BÓNG KC89001</a></h4>
						<div class="product-price">
							<span class="new">260,000 đ</span>
						</div>
					</div>
				</div>
			</div>
			@endfor
		</div>
	</div>
</div>

@endsection