@extends('frontend.master.master')
@section('title','search product')
@section('content')
<div class="pt-95">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>Từ khóa: <?php echo $request['product']; ?></h3>
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
                            @foreach ($products as $product)
                                <div class="product-width col-lg-6 col-xl-4 col-md-6 col-sm-6">
                                    <div class="product-wrapper mb-10">
                                        <div class="product-img">
                                            <a href="product/detail/{{ $product->id }}">
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
        </div>
    </div>
</div>
@endsection
