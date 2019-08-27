@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DANH SÁCH VIDEO
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Video</th>
                            <th>link</th>
                            <th>Tiêu đề</th>
                            <th>Tóm Tắt</th>
                            <th>Nội dung</th>
                            <th>delete</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($videos as $video)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $video->id }}</td>
                            <td><iframe width="200px" src="https://www.youtube.com/embed/{{substr($video->link,-11)}}">
                            </iframe></td>
                            <td><a href="{{ $video->link }}">{{ $video->link }}</a> </td>
                            <td>{{ $video->title }}</td>
                            <td>{{ $video->description }}</td>
                            <td>{{ $video->content }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/video/delete/{{ $video->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/video/edit/{{ $video->id }}">Edit</a></td>
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