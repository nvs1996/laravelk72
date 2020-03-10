<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Document</title>
</head>
<body>

   <div class="data">
    <input type="text" ><input type="text"><input type="text"><input type="text">
   </div>

   <div class="data">
    <input type="text" ><input type="text"><input type="text"><input type="text">
   </div>

    <br> Kết quả: <span id="kq"></span>
    <br>
    <button id="send">gửi dữ liệu</button>
    <script src="public/frontend/js/jquery.min.js"></script>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function(e){
            
             $('#send').click(function(){
                var data=[];
                $('.data').each(
                    function(){
                        var dl=[];
                        $(this).children("input").each(function(){
                            dl.push($(this).val());
                        });
                        data.push(dl);
                    }
                );
            



                $.ajax({
                type: "GET",   
                url: "xuly",
                data: {
                    soa:$("#soa").val(), sob:$("#sob").val()
                    },
                dataType: 'json',  
                success: function(data) {
                    alert(data.tong.mang[2]);
                },
                error: function() {
                alert('Số liệu có vấn đề xin hãy tải lại trang !! ');
                }
                });

                
                 });
        })


    </script>
</body>
</html>