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
                            <th>Question</th>
                            <th>rightanswer</th>
                            <th>wrong1</th>
                            <th>wrong2</th>
                            <th>wrong3</th>
                            <th>delete</th>
                            <th>edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($quiz as $q)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $q->id }}</td>
                            <td>{!! $q->question !!}</td>
                            <td>{{ $q->rightanswer }}</td>
                            <td>{{ $q->wrong1 }}</td>
                            <td>{{ $q->wrong2 }}</td>
                            <td>{{ $q->wrong3 }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/question/delete/{{ $q->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/question/edit/{{ $q->id }}">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                @foreach ($quiz as $q)
                    <ul>
                        <li>{{ $q->rightanswer }}</li>
                        <li>{{ $q->wrong1 }}</li>
                        <li>{{ $q->wrong2 }}</li>
                        <li>{{ $q->wrong3 }}</li>
                    </ul>
                @endforeach
                <script>
                    var ul = document.querySelector('ul');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
                </script>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection