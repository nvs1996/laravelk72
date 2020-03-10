@extends('frontend.master.master')
@section('title','list product')
@section('content')
<div class="colorlib-shop" style="margin-top: 10px;">
    <div class="container">
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-md-push-3">
                {!! Form::open(['method' => 'GET', 'route' => ['search.product']]) !!}
                <div class="col-md-2 col-xs-6" style="float: right;">
                    <label style="visibility: hidden">TK</label>
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Tìm kiếm</button>
                </div>
                <div class="col-md-3 col-xs-6" style="margin-top: 20px; float: right;">
                    <input name="product" type="textbox" class= "form-control pull-right" placeholder="Nhập vào tên sản phẩm">
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="row row-pb-lg">

                    @foreach ($products as $product)
                    <div class="col-md-4 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url(public/backend/img/{{ $product->img }});">
                          
                            <div class="cart">
                                <p>
                                    <!-- <span class="addtocart"><a href="product/detail/{{ $product->id }}"><i class="icon-shopping-cart"></i></a></span> -->
                                    <span><a href="product/detail/{{ $product->id }}"><i class="icon-eye"></i></a></span>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="product/detail/{{ $product->id }}">{{ $product->name }}</a></h3>
                            <p class="price"><span>{{number_format( $product->price,0,'',',') }} đ</span></p>
                        </div>
                    </div>
                    </div>
                @endforeach
            
                </div>
                <div class="row">
                    <div class="col-md-12">
                       {{ $products->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
                <div class="sidebar">
                    <div class="side">
                        <h2>Danh mục</h2>
                        <div class="fancy-collapse-panel">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                               @foreach ($category as $cate)
                               @if ($cate->parent==0)
                               <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#tab{{ $cate->id }}"
                                            aria-expanded="true" aria-controls="collapseOne">{{ $cate->name }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="tab{{ $cate->id }}" class="panel-collapse collapse" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <ul>
                                          @foreach ($category as $item)
                                              @if ($item->parent==$cate->id)
                                                <li><a href="product?category={{ $item->id }}">{{ $item->name }}</a></li>
                                              @endif
                                          @endforeach
                                         
                                        </ul>
                                    </div>
                                </div>
                                </div>
                                   
                               @endif
                               @endforeach
                            

                            </div>
                        </div>
                    </div>
                    <div class="side">
                        <h2>Khoảng giá</h2>
                        <form method="get" class="colorlib-form-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Từ:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="start" id="people" class="form-control">
                                                <option value="100000">100.000 VNĐ</option>
                                                <option value="200000">200.000 VNĐ</option>
                                                <option value="300000">300.000 VNĐ</option>
                                                <option value="500000">500.000 VNĐ</option>
                                                <option value="1000000">1.000.000 VNĐ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="guests">Đến:</label>
                                        <div class="form-field">
                                            <i class="icon icon-arrow-down3"></i>
                                            <select name="end" id="people" class="form-control">
                                                <option value="2000000">2.000.000 VNĐ</option>
                                                <option value="4000000">4.000.000 VNĐ</option>
                                                <option value="6000000">6.000.000 VNĐ</option>
                                                <option value="8000000">8.000.000 VNĐ</option>
                                                <option value="10000000">10.000.000 VNĐ</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" style="width: 100%;border: none;height: 40px;">Tìm kiếm</button>
                        </form>
                    </div>
                    <!-- @foreach ($attribute as $attr)
                    <div class="side">
                        <h2>{{ $attr->name }}</h2>
                        <div class="size-wrap">
                            <p class="size-desc">
                               @foreach ($attr->values as $value)
                                <a href="product?value={{ $value->id }}" class="size size-1">{{ $value->value }}</a>
                               @endforeach
                            </p>
                        </div>
                    </div>
                    @endforeach -->
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
