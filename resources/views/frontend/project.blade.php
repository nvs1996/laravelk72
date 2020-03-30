@extends('frontend.master.master')
@section('title','detail')
@section('content')

<div class="pt-95">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h2>DANH SÁCH CÁC DỰ ÁN MỚI NHẤT</h2>
        </div>
    </div>
</div>
<div class="blog-area pt-60 pb-100 clearfix">
    <div class="container">
        <div class="row">
            @for($i=0; $i < 6 ; $i++)  
                <div class="col-lg-6 col-md-6">
                    <div class="blog-wrapper mb-30 gray-bg">
                        <div class="blog-img hover-effect">
                            <a href="http://cndco.local/project-detail/7"><img alt="" src="{{url('public/frontend/images/nt-01.jpg')}}"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="text-center"><a href="http://cndco.local/project-detail/7">DỰ ÁN CND</a></h4>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="pagination-style text-center mt-20">
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

@endsection