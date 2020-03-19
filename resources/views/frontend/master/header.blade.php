<meta name="viewport" content="width=device-width, initial-scale=1">
	<div class="colorlib-loader"></div>

<div id="page">
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-2">
					<div class="wrapper-image">
						<img class="logo" src="public/frontend/images/logo.jpg">
					</div>
				</div>
				<div class="col-12 col-md-10">
					<nav class="colorlib-nav" role="navigation">
						<div class="top-menu">
							<div class="row">
								<div class="col-xs-10 menu-1 col-md-12">
									<ul>
										<?php 
											$category = App\models\category::where('parent','0')->get();
										?>
										<li class="uppercase_h2_menu"><a href="">Trang chủ</a></li>
										<!-- <li style="margin-left: 60px;"><a href="product">Sản phẩm</a></li> -->
											<li class="has-dropdown">
												<a href="product" >Sản phẩm</a>
												<ul class="dropdown dropdown_color menu-2">
												@foreach ($category as $key)
													<li class="dropdown-submenu">
														<a href="#">{{ $key->name }}</a>
														<ul class="dropdown-menu">
															<?php $category_child = App\models\category::where('parent',$key->id)->get(); ?>
															@foreach ($category_child as $rc)
																<li><a href="#"> {{ $rc->name }}</a></li>
															@endforeach
														</ul>
													</li>
												@endforeach
												</ul>
											</li>
										<li class="has-dropdown">
											<a href="cost" >Lĩnh vực khác</a>
											<ul class="dropdown dropdown_color">
												<li><a href="cost">Bảng giá cải tạo,sửa chữa nhà</a></li>
												<li><a href="construction">Các công trình đã và đang thi công</a></li>
											</ul>
										</li>
										<li class="left_menu"><a href="project">Dự án</a></li>
										<li class="left_menu"><a href="lien-he">Liên hệ</a></li>
										<li class="uppercase_h2_menu left_menu" ><a href="search">Tìm kiếm</a></li>
										<!-- <li><a href="product/cart"><i class="icon-shopping-cart"></i> Giỏ hàng [{{ Cart::content()->count() }}]</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</div>
			
		</div>
	</div>
	
</div>
	
