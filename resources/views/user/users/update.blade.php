<form action="post" action="{{url('customer/customerPostUpdate')}}"></form>
<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>DOD</td>
        <td>Gendar</td>
        <td>Image</td>
    </tr>
    <tr>
        <tbody>
            @foreach(users as $u)
        <td read only>{{$u->id}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->email}}</td>
        <td>{{$u->address}}</td>
        <td>{{$u->dod}}</td>
        <td>{{$u->gender}}</td>
        <td>{{$u->image}}</td>
            @endforeach
        </tbody>
        
    </tr>
    <tr>
    <button type="button" class="btn btn-success">Cập Nhật</button>
    </tr>
</table>
