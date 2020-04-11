@extends('frontend.master.master')
@section('title','detail')
@section('content')

<div class="shop-area pt-50 pb-100 blog-project">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12 col-md-12">
                <div class="blog-details-wrapper res-mrg-top">
                    <div class="single-blog-wrapper">
                        <div class="title-label">
                            <div class="breadcrumb-content text-center">
                                <h2>Bảng báo giá sửa chữa, cải tạo nhà CND 2020 !!!</h2>
                            </div>
                        </div>
                        <div class="dec-img-wrapper">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 col-sm-6">
                                    <div class="dec-img">
                                        <img src="{{asset('public/backend/img/')}}/<?php echo $costs->img ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="dec-img dec-mrg res-mrg-top-2">
                                        <img src="{{asset('public/backend/img/')}}/<?php echo $costs->img ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-details-content">
                            
                        </div>
                        <p>
                            {{ $costs->detail }}
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection