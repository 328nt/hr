@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
                @endif
                <div class="col-lg-12">
                    <h1 class="page-header">DANH SÁCH baif viết
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Image</th>
                            <th>Tiêu đề</th>
                            <th>Tóm Tắt</th>
                            <th>Nội dung</th>
                            <th>Danh mục</th>
                            <th>delete</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $new)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $new->id }}</td>
                        <td><img width="100px;" src="upload/news/{{$new->image}}" alt=""> </td>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->description }}</td>
                            <td>{{ $new->content }}</td>
                            <td>{{ $new->catalog->name }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/delete/{{ $new->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/edit/{{ $new->id }}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection