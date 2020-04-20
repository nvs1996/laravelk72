@extends('backend.master.master')
@section('title','Chỉnh sửa dự án')
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
            <li class="active">Danh sách slide </li>
        </ol>
    </div>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Chỉnh sửa slide </h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if ($errors->any())
                    <h4 style="color:red">{{$errors->first()}}</h4>
                @endif
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        {!! Form::open(['method' => 'POST', 'class' => 'validate', 'route' => ['slide.update', $slides->id], 'class' => 'validate', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-6">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Ảnh slide</label>
                        <input id="img1" type="file" name="img" class="form-control hidden"
                            onchange="changeImg1(this)">
                        <img id="avatar1" class="thumbnail" width="100%" height="100%" src="public/backend/img/{{ $slides->img }}">
                    </div>
                    <div class="form-group">
                        <label style="color: #30a5ff;">Trạng thái</label>
                        <select  name="state" class="form-control">
                            <option value="1">Hiển thị</option>
                            <option value="0">Không hiển thị</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="box-footer" style="margin-bottom: 50px;">
            <a href=" {{ route('slide.index') }}" class="btn btn-warning" style="margin-left: 15px;">Hủy</a>
            {!! Form::button('Cập nhật', ['class' => 'btn btn-success pull-left', 'type' => "submit"]) !!}
        </div>
        {!! Form::close() !!}
        <div class="overlay hide">
            <i class="fa fa-refresh fa-spin"></i>
        </div>
</div>
@endsection
@section('script')
@parent
<script>
    function changeImg1(input) {
        //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            //Sự kiện file đã được load vào website
            reader.onload = function (e) {
                //Thay đổi đường dẫn ảnh
                $('#avatar1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        $('#avatar1').click(function () {
            $('#img1').click();
        });
    });
</script>
@endsection
