@extends('frontend.master.master')
@section('title','search product')
@section('content')
<div class="pt-95">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>Từ khóa: sản phẩm XYZ</h3>
        </div>
    </div>
</div>
<div class="shop-area pt-30 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12">
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            @for ($i = 0; $i < 8; $i++)
                                <div class="product-width col-xl-3 col-lg-6 col-md-6 col-sm-12">
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
        </div>
    </div>
</div>
@endsection
