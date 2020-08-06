<form action="{{url('superAdmin/PostCreateAdmin')}}" method="post">
{{csrf_field()}}
    <table>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Tên</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
             <td>Mật Khẩu</td>
             <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Chức Vụ</td>
            <td>
                <select name="srole">
                    <option value="1">SuperAdmin</option>
                    <option value="2">Admin</option>
                </select>
            </td>
        </tr>
            <td><button type="submit">Thêm</button></td>
        </tr>  
    </table>

</form>