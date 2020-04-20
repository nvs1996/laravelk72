@extends('backend.master.master')
@section('title','Danh sách dự án')
@section('slide')
class="active"
@endsection
@section('content')
	<!--main-->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home">
							<use xlink:href="#stroked-home"></use>
						</svg></a></li>
				<li class="active">Danh sách slide</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh sách slide </h1>
			</div>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@if (session('thongbao'))
									<div class="alert bg-success" role="alert">
										<svg class="glyph stroked checkmark">
											<use xlink:href="#stroked-checkmark"></use>
										</svg>{{ session('thongbao') }}<a href="{{ route('slide.index') }}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								@endif
								<a href="{{ route('slide.create') }}" class="btn btn-success">Thêm slide</a>
								<h5>Slide bên ngoài trang bán hàng sẽ hiển thị ra 2 slide có trạng thái là "Hiển thị". </h5>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th style="width: 10%;">ID</th>
											<th style="width: 40%;">Thông tin slide</th>
											<th style="width: 30%;">Trạng thái</th>
											<th width='16%'>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
										@php
											$i=1;
										@endphp
										@foreach ($slides as $slide)
										<tr>
											<td>{{$slide->id}}</td>
											<td>
												<div class="row">
												<div class="col-md-3"><img src="public/backend/img/{{$slide->img}}" alt="" width="100px" class="thumbnail"></div>
												</div>
											</td>
											<td>
												@if ($slide->state==1)
												<a name="" id="" class="btn btn-success" href="#" role="button">Hiển thị</a>
												@else
												<a name="" id="" class="btn btn-danger" href="#" role="button">Không hiển thị</a>
												@endif
											
											</td>
											<td>
												<div class="input-group-btn dropdown">
		                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Thao tác
		                                                <span class="fa fa-caret-down"></span></button>
		                                            <ul class="dropdown-menu">
		                                                <li>
		                                                    <a href="{{ route('slide.edit', $slide->id) }}" class="btn btn-default form-control" onclick="$(this).closest('form').submit();"><i class="fa fa-pencil"></i> Cập nhật</a>
		                                                </li>
		                                                <li>
		                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['slide.destroy', $slide->id]]) !!}
		                                                    <a href="admin/slide/index" class="btn btn-default form-control"  onclick="if(confirm('Bạn có chắc muốn xóa bản ghi này không?')) $(this).closest('form').submit();"><i class="fa fa-trash"></i> Xoá</a>
		                                                    {!! Form::close() !!}
		                                                </li>
		                                            </ul>
		                                        </div>
											</td>
										</tr>
										@php
											$i++;
										@endphp
										@endforeach
									</tbody>
								</table>
								<div align='right'>
									{!!$slides->links() !!}
								</div>
							</div>
							<div class="clearfix"></div>
						</div>

					</div>
				</div>
				<!--/.row-->


			</div>
			<!--end main-->

			@endsection
