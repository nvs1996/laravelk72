@extends('backend.master.master')
@section('title','Thêm sản phẩm')
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
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Thêm mới tin tức </h3>
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
        {!! Form::open(['method' => 'POST', 'class' => 'validate', 'route' => ['notification.update', $notifications->id], 'class' => 'validate']) !!}
            <div class="row">
                <div class="col-md-6">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label> Tiêu đề (*)</label>
                        <input name="title" type="text" value="{{ $notifications->title }}" class="form-control" placeholder="Nhập vào tiêu đề tin tức" required>
                    </div>
                    <div class="form-group">
                        <label>Nội dung chính(*)</label>
                        <textarea name="content" class="form-control" placeholder="Nhập vào nội dung tin tức" required><?php echo ( $notifications->content ); ?></textarea>
                    </div>
                   <div class="form-group">
                        <label>Ảnh chính của tin tức</label>
                        @if ($errors->has('product_img'))
                            <div class="alert alert-danger" role="alert">
                                <strong>{{$errors->first('product_img')}}</strong>
                            </div>
                        @endif
                        <input id="img" type="file" name="product_img" class="form-control hidden"
                            onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="60%" height="200px" src="public/backend/img/{{ $notifications->img }}">
                    </div>
                    <div class="form-group">
                        <label>Nội dung phụ(*)</label>
                        <textarea name="content2" class="form-control" placeholder="Nhập vào nội dung"><?php echo ( $notifications->content2 ); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ảnh phụ của tin tức</label>
                        <input id="img2" type="file" name="product_img2" class="form-control hidden"
                            onchange="changeImg1(this)">
                        <img id="avatar1" class="thumbnail" width="60%" height="200px" src="public/backend/img/{{ $notifications->img2 }}">
                    </div>
                </div>
                    
            </div>
            <!-- /.row -->
        </div>
        <div class="box-footer">
            <a href=" {{ route('notification.index') }}" class="btn btn-warning" style="margin-left: 15px;">Hủy</a>
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
