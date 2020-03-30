@extends('frontend.master.master')
@section('title','list product')
@section('content')

<div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            @for ($i = 0; $i < 9; $i++)
                                <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                    <div class="product-wrapper mb-10">
                                        <div class="product-img">
                                            <a href="product/detail/14">
                                                <img src="{{url('public/frontend/images/tintuc5.jpg')}}" alt="">
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
                        <div class="pagination-style text-center mt-10">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-arrow-left"></i></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a class="active" href="#"><i class="icon-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="shop-sidebar">
                    <!--Menu slidebar-->
                    <div class="shop-widget">
                        <h4 class="shop-sidebar-title">Danh mục</h4>
                        <nav id="sidebar" class="shop-list-style mt-20">
                            <ul class="list-unstyled components slidebar-menu">
                                @for($j = 0; $j < 3 ; $j++)
                                <li class="active">
                                    <a href="#homeSubmenu-{{$j}}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle menu-dropdown-toggle">Gạch lát nền</a>
                                    <ul class="collapse list-unstyled" id="homeSubmenu-{{$j}}">
                                        @for($i = 0; $i < 3 ; $i++)
                                            <li>
                                                <a href="#">800x800</a>
                                            </li>
                                        @endfor
                                    </ul>
                                </li>
                                @endfor
                            </ul>
                        </nav>
                    </div>
                    <!--Filter-->
                    <div class="shop-widget mt-50">
                        <h4 class="shop-sidebar-title">KHOẢNG GIÁ</h4>
                            <div class="price_filter mt-25">
                                <div class="form-group">
                                    <label for="inputState">Từ</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>100.000 đ</option>
                                        <option>100.000 đ</option>
                                        <option>100.000 đ</option>
                                        <option>100.000 đ</option>
                                        <option>100.000 đ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputState">Đến</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>1.000.000 đ</option>
                                        <option>1.000.000 đ</option>
                                        <option>1.000.000 đ</option>
                                        <option>1.000.000 đ</option>
                                        <option>1.000.000 đ</option>
                                        <option>1.000.000 đ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-large btn-block btn-outline-secondary btn-radius-5 cursor-pointer">Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
