@extends('frontend.master.master')
@section('title','detail')
@section('content')
<div class="colorlib-shop" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3" style="left: 12%">
                <h2 style="text-align: center; color: brown; text-transform: uppercase; font-size: 25px;">Danh sách các công trình đã và đang thi công</h2>
                <p style="">Các công trình sẽ được chúng tôi cập nhật liên tục !</p>
                <div class="row row-pb-lg">
                @foreach ($constructions as $construction)
                    <div class="col-md-4 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(public/backend/img/{{ $construction->img }});">
                        </div>
                        <div class="desc">
                            <h3><a href="construction-detail/{{ $construction->id }}">{{ $construction->name }}</a></h3>
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                       {{ $constructions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection