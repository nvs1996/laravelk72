
$( document ).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop:true,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});
  
$(".zoom-product").elevateZoom({
    gallery : "gallery",
    galleryActiveClass: "active",
    zoomWindowWidth:300,
    zoomWindowHeight:100,
    scrollZoom : false,
    zoomType : "inner",
    cursor: "crosshair"
});  