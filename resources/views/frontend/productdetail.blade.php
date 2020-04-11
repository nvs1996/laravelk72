@extends('frontend.master.master')
@section('title','detail')
@section('content')
<div class="shop-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img">
                            <div class="owl-carousel">
                                <div class="item">
                                    <img src="{{asset('public/backend/img/')}}/<?php echo $product->img ?>"/>
                                </div>
                                <div class="item">
                                    <img  src="{{asset('public/backend/img/')}}/<?php echo $product->img2 ?>"/>
                                </div>
                                <div class="item">
                                    <img src="{{asset('public/backend/img/')}}/<?php echo $product->img3 ?>"/>
                                </div>
                            </div>
                            
                          
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content">
                            <h2>{{ $product->name }}</h2>
                            <div class="product-price">
                                <span class="new">{{number_format( $product->price,0,'',',') }} đ</span>
                            </div>
                            <div class="in-stock">
                                 @if ($product->state==1)
                                    <span><i class="ion-android-checkbox-outline"></i>Còn Hàng</span>
                                @else
                                    <span><i class="ion-android-checkbox-outline"></i>Hết Hàng</span>
                                @endif
                            </div>
                            <p>{{ $product->info }}</p>
                            <p>{{ $product->info1 }}</p>
                            <p>{{ $product->info2 }}</p>
                            <p>{{ $product->info3 }}</p>
                            <p>{{ $product->info4 }}</p>
                            <p>{{ $product->info5 }}</p>
                            <p>{{ $product->info6 }}</p>
                            <p>{{ $product->describe }}</p>
                           
                            
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a class="addtocart-btn" href="{{ route('lien_he') }}" title="Add to cart">
                                        <i class="ion-bag"></i>
                                        Liên hệ đặt hàng
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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