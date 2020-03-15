@extends('frontend.master.master')
@section('title','detail')
@section('content')




<div class="colorlib-shop" style="margin-top: 50px;">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-10 col-md-offset-1">
                <div class="product-detail-wrap">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="slideshow-container">
                                <div class="mySlidesImage ">
                                    <div class="numbertext">1 / 3</div>
                                    <img src="public/backend/img/{{ $product->img }}">
                                  <div class="text">CND company</div>
                                </div>

                                <div class="mySlidesImage ">
                                  <div class="numbertext">2 / 3</div>
                                  <img src="public/backend/img/{{ $product->img2 }}">
                                  <div class="text">CND company</div>
                                </div>

                                <div class="mySlidesImage ">
                                  <div class="numbertext">3 / 3</div>
                                  <img src="public/backend/img/{{ $product->img3 }}">
                                  <div class="text">CND company</div>
                                </div>
                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>
                            <div>
                                @if ($product->state==1)
                                    <a name="" id="" class="btn btn-success" style="display: block;
                                        margin-left: auto;
                                        margin-right: auto" role="button">Còn hàng</a>
                                    @else
                                    <a name="" id="" class="btn btn-danger" style="display: block;
                                        margin-left: auto;
                                        margin-right: auto" role="button">Hết Hàng</a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-7">
                            <form action="product/AddCart" method="get">
                                <div class="desc">
                                    <h3>{{ $product->name }}</h3>
                                    <p class="price">
                                        <span>{{number_format( $product->price,0,'',',') }} đ</span>
                                    </p>
                                    <p>{{ $product->info }}</p>
                                    <p>{{ $product->info1 }}</p>
                                    <p>{{ $product->info2 }}</p>
                                    <p>{{ $product->info3 }}</p>
                                    <p>{{ $product->info4 }}</p>
                                    <p>{{ $product->info5 }}</p>
                                    <p>{{ $product->info6 }}</p>
                                    <p>{{ $product->describe }}</p>

                                    
                                    <!-- @foreach (attr_value($product) as $key=>$value)
                                    <div class="size-wrap">
                                        <p class="size-desc">
                                            {{ $key }}:
                                            @foreach ($value as $item)
                                                <a class="size">{{ $item }}</a>
                                            @endforeach
                                        </p>
                                    </div>
                                    @endforeach -->
                                    <!-- <h4>Lựa chọn</h4>
                                    <div class="row">
                                        @foreach (attr_value($product) as $key=>$value)
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>{{ $key }}:</label>
                                                <select class="form-control " name="attr[{{ $key }}]" id="">
                                                    @foreach ($value as $item)
                                                    <option value="{{ $item }}">{{ $item }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div> -->
                                    <!-- <div class="row row-pb-sm">
                                        <div class="col-md-4">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-left-minus btn" data-type="minus"
                                                        data-field="">
                                                        <i class="icon-minus2"></i>
                                                    </button>
                                                </span>
                                                <input type="text" id="quantity" name="quantity" class="form-control input-number"
                                                    value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-right-plus btn" data-type="plus"
                                                        data-field="">
                                                        <i class="icon-plus2"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <input type="hidden" name="id_product" value="{{ $product->id }}">
                                    <p><button class="btn btn-primary btn-addtocart" type="submit"> Thêm vào giỏ hàng</button></p> -->
                                    <form method="post" action="/lien-he">
                                        <p><button class="btn btn-primary" type="submit"> Liên hệ đặt hàng</button></p>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-12 tabulation">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="description" class="tab-pane fade in active">
                                <p>dsasdas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</div>

@endsection

@section('script')
@parent
    <!-- <script>
        $(document).ready(function () {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function (e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function (e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script> -->
    <script type="text/javascript">
        var slideIndex = 1;
            showDivs(slideIndex);

            function plusSlides(n) {
              showDivs(slideIndex += n);
            }

            function showDivs(n) {
              var i;
              var x = document.getElementsByClassName("mySlidesImage");
              if (n > x.length) {slideIndex = 1}
              if (n < 1) {slideIndex = x.length}
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
              }
              x[slideIndex-1].style.display = "block";  
            }
    </script>
@endsection