@extends('frontend.master.master')
@section('title','detail')
@section('content')
<div class="colorlib-shop" style="margin-top: 50px;">
    <div class="container">
        <div class="row">
            <div style="left: 12%">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <h2 style="text-align: center; color: brown; text-transform: uppercase; font-size: 25px;">Danh sách các dự án mới nhất</h2>
                    <p style="">Các dự án sẽ được chúng tôi cập nhật liên tục!</p>
                </div>
                @foreach ($projects as $project)
                <div class="col-sm-6 col-md-3 col-xs-12 text-center">
                        <div class="product-entry">
                            <div class="product-img" style="background-image: url(public/backend/img/{{ $project->img }});">
                            </div>
                            <div class="desc">
                                <h3><a href="project-detail/{{ $project->id }}">{{ $project->name }}</a></h3>
                            </div>
                        </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-12">
                       {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection