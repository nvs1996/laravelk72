@extends('frontend.master.master')
@section('title','detail')
@section('content')

<div class="colorlib-shop" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3" style="left: 12%">
                <!-- <h2 style="text-align: center; color: brown; text-transform: uppercase; font-size: 25px;">Bảng giá cải tạo và sửa chữa nhà</h2> -->
                <div class="row row-pb-lg">
                @foreach ($costs as $cost)
                    <div class="col-md-12 text-center">
                    <div class="product-entry">
                        <div class="desc" style="color: brown;">
                            <h2 style="color: brown;">{{ $cost->detail }}</h2>
                        </div>
                        <div style="display: block; height: 500px; margin-bottom: 20px; position: relative; background-image: url(public/backend/img/{{ $cost->img }});">
                        </div>
                    </div>
                    </div>
                    <div class="product-entry">
                        <div class="desc" style="color: brown;">
                            <p style="color: brown;">{{ $cost->detail2 }}</p>
                        </div>
                        <div class="product-img" style="background-image: url(public/backend/img/{{ $cost->img2 }});">
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection