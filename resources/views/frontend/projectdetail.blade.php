@extends('frontend.master.master')
@section('title','detail')
@section('content')


<div class="colorlib-shop" style="margin-top: 50px;">
    <div class="container">
        <div class="col-md-9 col-sm-6">
            <div class="row row-pb-lg">
                <div class="product-detail-wrap">
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <div class="product-entry">
                                <div class="product-img" style="background-image: url(public/backend/img/{{ $projects->img }});">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6">
                            <div class="desc">
                                <h2 style="color: brown;">{{ $projects->name }}</h2>
                                <p>{{ $projects->detail }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
