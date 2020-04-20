@extends('backend.master.master')
@section('title','Thêm dự án')
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
            <h3 class="box-title">Thêm mới slide </h3>
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
        {!! Form::open(['method' => 'POST',  'route' => ['slide.store'], 'enctype' => 'multipart/form-data']) !!}
        @csrf
            <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Ảnh chính của dự án</label>
                        @if ($errors->has('product_img'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{$errors->first('product_img')}}</strong>
                            </div>
                        @endif
                        <input id="img" type="file" name="product_img" class="form-control hidden"
                            onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="60%" height="100%" src="public/backend/img/import-img.png">
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
        <div class="box-footer">
            <a href=" {{ route('slide.index') }}" class="btn btn-warning" style="margin-left: 15px; margin-bottom: 50px;">Hủy</a>
            {!! Form::button('Thêm mới', ['class' => 'btn btn-success pull-left', 'type' => "submit", 'files' => true]) !!}
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
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function (e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#avatar').click(function () {
                $('#img').click();
            });
        });
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
