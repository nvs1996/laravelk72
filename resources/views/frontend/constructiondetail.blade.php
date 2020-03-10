@extends('frontend.master.master')
@section('title','detail')
@section('content')


<div class="colorlib-shop" style="margin-top: 50px;">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-10 col-md-offset-1">
                <div class="product-detail-wrap">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(public/backend/img/{{ $constructions->img }});">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="desc">
                                <h2 style="color: brown;">{{ $constructions->name }}</h2>
                                <p>{{ $constructions->detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
