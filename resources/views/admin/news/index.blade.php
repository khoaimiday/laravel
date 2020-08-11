@extends('admin.Adminlayout')
@section('title', 'NewsIndex')
@section('content')
<style>
    p.n_content,p.n_title{
      white-space: pre;
      word-wrap: break-word;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 180px;
      max-height:180px;
    }
    .actionButton{
        text-decoration:none;
        font-size:15px;
        color:#000;
        opacity:1;
        display:block;
        padding:6px 15px;
        margin:7px;
        max-width:auto;
        text-align:center;
        border-radius:3px;
        border:1px solid #ddd;
        box-shadow: 0px 6px 8px 0px rgba(0,0,0,0.2);
        cursor: pointer;
    }
</style>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Trang Admin - News</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                        <li class="breadcrumb-item active"> <a href="{{ route('create-news') }}">Tạo mới</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách tin tức </h3>
                    </div>
                    <!-- /.card-header -->
                    
                    @if (session('delete_success'))
                        <div class="alert alert-info pull-right" style="width:fit-content;place-self:flex-end;opacity:0.6;">
                            {{ session('delete_success') }}
                        </div>
                    @endif
                    @if (session('update_success'))
                        <div class="alert alert-info pull-right" style="width:fit-content;place-self:flex-end;opacity:0.6;">
                            {{ session('update_success') }}
                        </div>
                    @endif
                    @if (session('create_success'))
                        <div class="alert alert-info pull-right" style="width:fit-content;place-self:flex-end;opacity:0.6;">
                            {{ session('create_success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table id="product" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Chủ đề</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Chỉnh sửa</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                            <tr>
                                <td>{{ $new->id }}</td>
                                <td><p class="n_title">{{ $new->title }}</p></td>
                                <td><p class="n_content">{{ $new->content }}</p></td>
                                <td>{{ $new->topic }}</td>
                                <td><img width="100px" src="{{ url('images/news/'.$new->image) }}"/></td>
                                <td>{{ $new->created_at }}</td>
                                <td>{{ $new->updated_at  }}</td>
                                <td class="text-right">
                                    <a class="actionButton" href="{{ url('/admin/news/update/'.$new->id) }}">
                                     Sửa
                                    </a>
                                    <a class="actionButton" href="{{ url('/admin/news/delete/'.$new->id) }}">
                                    Xoá
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Chủ đề</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th>Chỉnh sửa</th>
                                <th></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('script-section')
    <script>
        $(function () {
            $('#product').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
@endsection
