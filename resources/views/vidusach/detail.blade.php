<html>
    <head>
        <style>
            
        </style>
        
    </head>
    <body>
        @extends("layouts.sach_layout")
        @section("title","Chi Tiết Sách")
        @section("content")
                @foreach($data as $row)
                    <h4>{{$row->tieu_de}}</h4>
                    <div class='book-detail' >
                        <div style="float:left;margin-right:15px;">
                            <img src="{{asset('book_image/'.$row->file_anh_bia)}}" width='200px'
                            height='200px'><br>
                        </div>
                        <div style="float:left;">
                            Nhà cung cấp: <b>{{$row->nha_cung_cap}}</b><br/>
                            Nhà xuất bản: <b>{{$row->nha_xuat_ban}}</b><br/>
                            Tác giả: <b>{{$row->tac_gia}}</b><br/>
                            Hình thức bìa: <b>{{$row->hinh_thuc_bia}}</b><br/>
                        </div>
                        <br style="clear:both;">
                    </div>

                    <div style='text-align:justify'>
                        <b>Mô tả:</b><br> {{$row->mo_ta}}<br/>
                    </div>
                @endforeach
            
        @endsection

    </body>
</html>