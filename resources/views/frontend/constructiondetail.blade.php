@extends('frontend.master.master')
@section('title','detail')
@section('content')

<div class="breadcrumb-area pt-95 bg-img" style="background-image:url(assets/img/banner/banner-2.jpg);">
    <div class="container">
        <div class="breadcrumb-content text-center">
        <h2>{{ $constructions->name }}</h2>
        </div>
    </div>
</div>
<div class="shop-area pt-50 pb-100 blog-project">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12 col-md-12">
                <div class="blog-details-wrapper res-mrg-top">
                    <div class="single-blog-wrapper">
                        <div class="blog-img mb-30">
                            <img src="{{asset('public/backend/img/')}}/<?php echo $constructions->img ?>" alt="">
                        </div>
                        <div class="blog-details-content">
                           
                        </div>
                        <p> {{ $constructions->detail }}</p>
                        <div class="dec-img-wrapper">
                            <div class="row justify-content-md-center">
                                <div class="col-md-6 col-sm-6">
                                    <div class="dec-img">
                                        <img src="{{asset('public/backend/img/')}}/<?php echo $constructions->img ?>" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p> {{ $constructions->detail2 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
