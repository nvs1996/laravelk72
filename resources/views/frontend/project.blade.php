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
            @foreach ($projects as $project)
                <div class="col-lg-6 col-md-6">
                    <div class="blog-wrapper mb-30 gray-bg">
                        <div class="blog-img hover-effect">
                            <a href="project-detail/{{ $project->id }}"><img alt="" src="{{asset('public/backend/img/')}}/<?php echo $project->img ?>"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="text-center"><a href="project-detail/{{ $project->id }}">{{ $project->name  }}</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pagination-style text-center mt-20">
            {{ $projects->links() }}
        </div>
    </div>
</div>

@endsection