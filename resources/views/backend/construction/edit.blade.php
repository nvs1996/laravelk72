@extends('backend.master.master')
@section('title','Chỉnh sửa công trình')
@section('construction')
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
            <li class="active">Danh sách công trình</li>
        </ol>
    </div>
    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">Chỉnh sửa công trình </h3>
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
        {!! Form::open(['method' => 'POST', 'class' => 'validate', 'route' => ['construction.update', $constructions->id], 'class' => 'validate', 'enctype' => 'multipart/form-data']) !!}
            <div class="row">
                <div class="col-md-6">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label> Tên công trình (*)</label>
                        <input name="name" value="{{ $constructions->name }}" type="text" class="form-control" placeholder="Nhập vào tên công trình" required>
                    </div>
                    <div class="form-group">
                        <label>Nội dung (*)</label>
                        <textarea name="detail" value="{{ $constructions->detail }}" type="text" class="form-control" placeholder="Nhập vào nội dung" required><?php echo ( $constructions->detail ); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ảnh sản phẩm</label>
                        <input id="img" type="file" name="product_img" class="form-control hidden"
                            onchange="changeImg(this)">
                        <img id="avatar" class="thumbnail" width="60%" height="200px" src="public/backend/img/{{ $constructions->img }}">
                    </div>
                    <div class="form-group">
                        <label>Nội dung phụ(*)</label>
                        <textarea name="detail2" value="{{ $constructions->detail2 }}" type="text" class="form-control" placeholder="Nhập vào nội dung"><?php echo ( $constructions->detail2 ); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ảnh phụ của công trình</label>
                        <input id="img1" type="file" name="product_img2" class="form-control hidden"
                            onchange="changeImg1(this)">
                        <img id="avatar1" class="thumbnail" width="60%" height="200px" src="public/backend/img/{{ $constructions->img2 }}">
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <div class="box-footer" style="margin-bottom: 50px;">
            <a href=" {{ route('construction.index') }}" class="btn btn-warning" style="margin-left: 15px;">Hủy</a>
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
