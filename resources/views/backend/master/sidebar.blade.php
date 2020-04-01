<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  	background-color: white;
  	color: #30a5ff;
  	padding: 10px 15px;
 	padding-left: 0px;
 	font-size: 14px;
  	border: none;
  	width: 100%;
}

.dropdown {
	width: 100%;
  	position: relative;
  	display: inline-block;
}

.dropdown-content {
 	 display: none;
  	position: absolute;
  	background-color: #87CEEB;
  	min-width: 100%;
  	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  	z-index: 1;
}

.dropdown-content a {
 	 color: black;
  	padding: 12px 16px;
  	text-decoration: none;
  	display: block;
}


.dropdown-content a:hover {background-color: #30a5ff;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #30a5ff; color: white;}
</style>
</head>
	<!-- sidebar right-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li  @yield('admin')><a><svg class="glyph stroked dashboard-dial">
				<use xlink:href="#stroked-dashboard-dial"></use>
				</svg> Tổng quan</a></li>
				
			<li @yield('category')><a href="admin/category"><svg class="glyph stroked clipboard with paper">
				<use xlink:href="#stroked-clipboard-with-paper" /></svg> Danh Mục</a></li>

			<li @yield('product')><a href="admin/product"><svg class="glyph stroked bag">
				<use xlink:href="#stroked-bag"></use>
				</svg> Sản phẩm</a></li>

			<li @yield('notification')><a href="admin/notification/index"><svg class="glyph stroked video">
				<use xlink:href="#stroked-notepad"></use>
				</svg> Tin tức</a></li>
			<li @yield('project')><a href="admin/project/index"><svg class="glyph stroked notepad ">
				<use xlink:href="#stroked-notepad" />
				</svg> Quản lý dự án </a></li>
			<li @yield('construction')><a href="admin/construction/index"><svg class="glyph stroked notepad ">
				<use xlink:href="#stroked-notepad" />
				</svg> Quản lý công trình </a></li>	
			<li @yield('cost')><a href="admin/cost/index"><svg class="glyph stroked clipboard with paper">
				<use xlink:href="#stroked-clipboard-with-paper" />
				</svg> Bảng giá cải tạo sửa chữa nhà </a></li>	
			<li @yield('slide')><a href="admin/slide/index"><svg class="glyph stroked notepad ">
				<use xlink:href="#stroked-notepad" />
				</svg> Quản lý slide </a></li>	
			<!-- <div class="dropdown">
			 	<button class="dropbtn"><i class="fa fa-bars" style="padding-right: 16px; margin-left: -10px; "></i>Quản lý lĩnh vực khác</button>
		 		<div class="dropdown-content">
				    <a href="admin/cost/index">Bảng giá cải tạo sửa chữa nhà</a>
				</div>
			</div> -->
			<li><a href="index"><svg class="glyph stroked male-user">
				<use xlink:href="#stroked-male-user"></use>
				</svg> Trang bán hàng</a></li>




			<!-- <li><a href="forms.html"><svg class="glyph stroked video"> -->
			<!-- <li><a href="login.html"><svg class="glyph stroked male-user">
				<use xlink:href="#stroked-male-user"></use>
				</svg> Quản lý lĩnh vực</a></li> -->
			<!-- <li><a href="login.html"><svg class="glyph stroked male-user">
				<use xlink:href="#stroked-male-user"></use>
				</svg> Quản lý dự án</a></li>
						<use xlink:href="#stroked-video" /></svg> Banner QC</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user">
						<use xlink:href="#stroked-male-user"></use>
					</svg> Quản lý thành viên</a></li> -->
		</ul>

	</div>
	<!--/. end sidebar right-->