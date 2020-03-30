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
                                    <img src="{{url('public/frontend/images/item-7.jpg')}}"/>
                                </div>
                                <div class="item">
                                    <img  src="{{url('public/frontend/images/img_bg_1.jpg')}}"/>
                                </div>
                                <div class="item">
                                    <img src="{{url('public/frontend/images/person2.jpg')}}"/>
                                </div>
                                <div class="item">
                                    <img src="{{url('public/frontend/images/person1.jpg')}}"/>
                                </div>
                                <div class="item">
                                    <img src="{{url('public/frontend/images/person3.jpg')}}"/>
                                </div>
                                
                            </div>
                            
                          
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content">
                            <h2>PORCELAIN MEN KIM CƯƠNG SIÊU BÓNG KC89001</h2>
                            <div class="product-price">
                                <span class="new">$20.00 </span>
                            </div>
                            <div class="in-stock">
                                <span><i class="ion-android-checkbox-outline"></i>Còn Hàng</span>
                            </div>
                            <p>PORCELAIN MEN KIM CƯƠNG SIÊU BÓNG KC89001 Kích thước: 800x800mm Chất liệu: Porcelain, phẳng Công nghệ: Kim cương NANO siêu bóng Màu: Xám tro - vân đá rễ cây Bề mặt : Bề mặt: phẳng - siêu bóng, được phủ lớp men Kim Cương siêu cứng giúp chống trầy xước tốt Độ bóng đạt 99%, Bóng nhưng không trơn - trượt</p>
                            <p>PORCELAIN MEN KIM CƯƠNG SIÊU BÓNG KC89001 Kích thước: 800x800mm Chất liệu: Porcelain, phẳng Công nghệ: Kim cương NANO siêu bóng Màu: Xám tro - vân đá rễ cây Bề mặt : Bề mặt: phẳng - siêu bóng, được phủ lớp men Kim Cương siêu cứng giúp chống trầy xước tốt Độ bóng đạt 99%, Bóng nhưng không trơn - trượt</p>
                           
                            
                            <div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a class="addtocart-btn" href="#" title="Add to cart">
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