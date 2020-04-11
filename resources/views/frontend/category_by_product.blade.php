@extends('frontend.master.master')
@section('title','search product')
@section('content')
<div class="shop-area pt-100 pb-100">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-9">
                <div class="grid-list-product-wrapper">
                    <div class="product-view product-grid">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                    <div class="product-wrapper mb-10">
                                        <div class="product-img">
                                            <a href="product/detail/14">
                                                <img src="{{asset('public/backend/img/')}}/<?php echo $product->img ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <h4><a href="product/detail/{{ $product->id }}">{{ $product->name }}</a></h4>
                                            <div class="product-price">
                                                <span class="new">{{number_format( $product->price,0,'',',') }} đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pagination-style text-center mt-10">
                            {{ $products->links() }}
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
                                @foreach ($category as $cate)
                                @if ($cate->parent==0)
                                <li class="active">
                                    <a href="#homeSubmenu-{{ $cate->id }}" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle menu-dropdown-toggle">{{ $cate->name }}</a>
                                    <ul class="collapse list-unstyled" id="homeSubmenu-{{ $cate->id }}">
                                        @foreach ($category as $item)
                                            @if ($item->parent==$cate->id)
                                            <li>
                                                <a href="{{route('category.by.product', $item->id)}}">{{ $item->name }}</a>
                                            </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                                @endforeach
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
