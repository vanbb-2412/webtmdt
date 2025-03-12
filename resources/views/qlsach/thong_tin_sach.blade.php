<html>
    <head>
        <style>
            .bang th, .bang td{
                border: 1px solid #000;                
            }
            .bang{
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
        <table class="bang" >
            <tr>
                <th>Tiêu đề</th>
                <th>Tác giả</th>
                <th>Giá bán</th>
            </tr>
            @foreach($sach as $row)
            <tr>
                <td>{{$row->tieu_de}}</td>
                <td>{{$row->tac_gia}}</td>
                <td>{{$row->gia_ban}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>


        

    


