@extends('backend.master.master')
@section('title','Thêm sản phẩm')
@section('product')
class="active"
@endsection
@section('content')
    <!--main-->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Thêm sản phẩm</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-6 col-md-12 col-lg-12">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                <div class="panel panel-primary">
                    <div class="panel-heading">Thêm sản phẩm</div>
                    <div class="panel-body">
                        <div class="row" style="margin-bottom:40px">
                            <div class="col-xs-8">
                                <div class="row">
                                    <form action="" method="post"></form> {{-- form ảo --}}
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label style="color: #30a5ff;">Danh mục</label>
                                            <select name="category" class="form-control">
                                             {{ GetCategory($category,0,'',0) }}
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label style="color: #30a5ff;">Mã sản phẩm</label>
                                            <input  type="text" name="product_code" class="form-control">
                                            @if ($errors->has('product_code'))
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{$errors->first('product_code')}}</strong>
                                                </div>
                                            @endif
                                        
                                        </div>
                                        <div class="form-group">
                                            <label style="color: #30a5ff;">Tên sản phẩm</label>
                                            <input  type="text" name="product_name" class="form-control">
                                            @if ($errors->has('product_name'))
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{$errors->first('product_name')}}</strong>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label style="color: #30a5ff;">Giá sản phẩm (Giá chung)</label>
                                            <input  type="number" name="product_price" class="form-control">
                                            @if ($errors->has('product_price'))
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{$errors->first('product_price')}}</strong>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label style="color: #30a5ff;">Trạng thái</label>
                                            <select  name="product_state" class="form-control">
                                                <option value="1">Còn hàng</option>
                                                <option value="0">Hết hàng</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-xs-4">
                                        <div class="panel panel-default">
                                            <div class="panel-body tabs" style="width: 500px; padding-left: 183px; ">
                                                @if ($errors->has('attr_name'))
                                                    <div class="alert alert-danger" role="alert">
                                                    <strong>{{ $errors->first('attr_name') }}</strong>
                                                    </div>
                                                @endif
                                                @if (session('thongbao'))
                                                    <div class="alert alert-success" role="alert">
                                                        <strong>{{ session('thongbao') }}</strong>
                                                    </div>
                                                @endif
                                                <label>Các thuộc Tính <a href="admin/product/attr"><span class="glyphicon glyphicon-cog"></span>
                                                        Tuỳ chọn</a></label>
                                                <ul class="nav nav-tabs">
                                                    @php
                                                        $i=1;
                                                    @endphp

                                                    @foreach ($attribute as $attr)
                                                        <li @if($i==1) class='active' @endif><a href="#tab{{ $attr->id }}" data-toggle="tab">{{ $attr->name }}</a></li>
                                                    @php
                                                        $i=2;
                                                    @endphp  
                                                    @endforeach
                                                 
                                                    <li><a href="#tab-add" data-toggle="tab">+</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    @foreach ($attribute as $attr)
                                                    <div class="tab-pane fade @if($i==2) active @endif  in" id="tab{{ $attr->id }}">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        @foreach ($attr->values as $value)
                                                                        <th>{{ $value->value }}</th>
                                                                        @endforeach
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        @foreach ($attr->values as $value)
                                                                        <td> <input class="form-check-input" type="checkbox" name="value[{{ $attr->name }}][]"
                                                                            value="{{ $value->id }}"> </td>
                                                                        @endforeach
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <hr>
                                                            <div class="form-group">
                                                                <form action="admin/product/add-value" method="post">
                                                                    @csrf
                                                                    <label for="" style="color: #30a5ff;">Thêm giá trị cho thuộc tính</label>
                                                                    <input type="hidden" name="attr_id" value="{{ $attr->id }}">
                                                                    <input name="value" type="text" class="form-control"
                                                                    aria-describedby="helpId" placeholder="">
                                                                    <div style="color: #30a5ff;"> <button  type="submit">Thêm</button></div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                 
                                                    @php
                                                        $i=3;
                                                    @endphp
                                                    @endforeach
                                                  
                                                    <div class="tab-pane fade" id="tab-add">
                                                        <form action="admin/product/add-attr" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="" >Tên thuộc tính mới</label>
                                                                <input type="text" class="form-control" name="attr_name"
                                                                    aria-describedby="helpId" placeholder="">
                                                            </div>

                                                            <button type="submit" name="add_pro" class="btn btn-success"> <span
                                                                    class="glyphicon glyphicon-plus"></span>
                                                                Thêm thuộc tính</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label">
                                                    <p></p>

                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color: #30a5ff;">Ảnh sản phẩm</label>
                                                @if ($errors->has('product_img'))
                                                    <div class="alert alert-danger" role="alert">
                                                        <strong>{{$errors->first('product_img')}}</strong>
                                                    </div>
                                                @endif
                                                <input id="img" type="file" name="product_img" class="form-control hidden"
                                                    onchange="changeImg(this)">
                                                <img id="avatar" class="thumbnail" width="100%" height="250px" src="public/backend/img/import-img.png">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color: #30a5ff;">Ảnh 2 của sản phẩm</label>
                                                <input id="img2" type="file" name="product_img2" class="form-control hidden"
                                                    onchange="changeImg2(this)">
                                                <img id="avatar2" class="thumbnail" width="100%" height="250px" src="public/backend/img/import-img.png">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label style="color: #30a5ff;">Ảnh 3 của sản phẩm</label>
                                                <input id="img3" type="file" name="product_img3" class="form-control hidden"
                                                    onchange="changeImg3(this)">
                                                <img id="avatar3" class="thumbnail" width="100%" height="250px" src="public/backend/img/import-img.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin</label>
                                    @if ($errors->has('info'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{$errors->first('info')}}</strong>
                                        </div>
                                    @endif
                                    <textarea  name="info" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin 1</label>
                                    <textarea  name="info1" style="width: 100%;height: 100px;"></textarea>
                                </div>

                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin 2</label>
                                    <textarea  name="info2" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin 3</label>
                                    <textarea  name="info3" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin 4</label>
                                    <textarea  name="info4" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin 5</label>
                                    <textarea  name="info5" style="width: 100%;height: 100px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label style="color: #30a5ff;">Thông tin 6</label>
                                    <textarea  name="info6" style="width: 100%;height: 100px;"></textarea>
                                </div>


                            </div>
                        </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: #30a5ff;">Miêu tả</label>
                                        @if ($errors->has('description'))
                                                <div class="alert alert-danger" role="alert">
                                                    <strong>{{$errors->first('description')}}</strong>
                                                </div>
                                            @endif
                                        <textarea id="editor"  name="description" style="width: 100%;height: 100px;"></textarea>
                                    </div>
                                    <button class="btn btn-success" name="add-product" type="submit">Thêm sản phẩm</button>
                                    <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                                </div>
                            </div>
                        <div class="clearfix"></div>
                    </form>
                    </div>
                </div>

            </div>
        </div>
 
        <!--/.row-->
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

        function changeImg2(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function (e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#avatar2').click(function () {
                $('#img2').click();
            });
        });

        function changeImg3(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function (e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar3').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#avatar3').click(function () {
                $('#img3').click();
            });
        });
	</script>
@endsection
