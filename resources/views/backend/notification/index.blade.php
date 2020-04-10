@extends('backend.master.master')
@section('title','Bảng tin tức')
@section('notification')
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
				<li class="active">Bảng tin tức</li>
			</ol>
		</div>
		<!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Bảng tin tức</h1>
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
										</svg>{{ session('thongbao') }}<a href="{{ route('notification.index') }}" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
									</div>
								@endif
								<a href="{{ route('notification.create') }}" class="btn btn-success">Thêm tin tức</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
		                                <tr bgcolor="#33b8ff">
		                                    <th class="text-center">#</th>
		                                    <th class="text-center">Thông tin dự án</th>
		                                    <th class="text-center">Tiêu đề</th>
		                                    <th class="text-center">Nội dung</th>
		                                    <th>Thao tác</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                @foreach ($notifications as $notification)
		                                <tr>
		                                    <td class="text-center">{{ $notification->id }}</td>
		                                    <td class="text-center" style="width:200px;"><img src="public/backend/img/{{$notification->img}}" alt="Chưa có ảnh" width="200px" class="thumbnail"></td>
		                                    <td class="text-center" style="width:200px;">{{ $notification->title }}</td>
		                                    <td class="text-center"><div style="width:200px; height: auto; word-wrap:break-word;">
													{{ $notification->content }}
												</div></td>
		                                    <td>
		                                        <div class="input-group-btn dropdown">
		                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Thao tác
		                                                <span class="fa fa-caret-down"></span></button>
		                                            <ul class="dropdown-menu">
		                                                <li>
		                                                    <a href="{{ route('notification.edit', $notification->id) }}" class="btn btn-default form-control" onclick="$(this).closest('form').submit();"><i class="fa fa-pencil"></i> Cập nhật</a>
		                                                </li>
		                                                <li>
		                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['notification.destroy', $notification->id]]) !!}
		                                                    <a href="admin/notification/index" class="btn btn-default form-control"  onclick="if(confirm('Bạn có chắc muốn xóa bản ghi này không?')) $(this).closest('form').submit();"><i class="fa fa-trash"></i> Xoá</a>
		                                                    {!! Form::close() !!}
		                                                </li>
		                                            </ul>
		                                        </div>
		                                    </td>
		                                </tr>
		                                @endforeach
		                            </tbody>
		                            <tfoot>
		                            </tfoot>
								</table>
								<div align='right'>
									{!!$notifications->links() !!}
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
