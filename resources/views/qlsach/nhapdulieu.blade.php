<form action="{{url('luudulieu')}}" method = "post">
    Nhập id: <input type='text' name='id'><br>
    Nhập tên thể loại: <input type='text' name='ten_the_loai'><br>
    <input type='submit' value='Thêm'>
    {{ csrf_field() }}
</form>