@extends('admin.layout.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">DANH SÁCH NHÂN SỰ IEG
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
                            <th>image</th>
                            <th>Tên đầy đủ</th>
                            <th>Email</th>
                            <th>chức vụ</th>
                            <th>phòng ban</th>
                            <th>Số điện thoại</th>
                            <th>Ngày vào công ty</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($member as $m)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $m->id }}</td>
                            <td><img width="100px" src="upload/member/{{ $m->image }}" /></td>
                            <td>{{ $m->fullname }}</td>
                            <td>{{ $m->email }}</td>
                            <td>{{ $m->position }}</td>
                            <td>
                                @if($m->department == 0)
                                {{ "HR - 2440" }}
                                @elseif($m->department == 1)
                                {{ "Admin - 2442" }}
                                @elseif($m->department == 2)
                                {{ "CC - 2443" }}
                                @elseif($m->department == 3)
                                {{ "IT - 2444" }}
                                @elseif($m->department == 4)
                                {{ "KMC - 2445" }}
                                @elseif($m->department == 5)
                                {{ "Makerting - 2446" }}
                                @elseif($m->department == 6)
                                {{ "Event - 2447" }}
                                @elseif($m->department == 7)
                                {{ "Academic - 2448" }}
                                @else
                                {{ "EC - 2449" }}
                                @endif

                            </td>
                            <td>{{ $m->phone }}</td>
                            <td>{{ $m->dayin }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/member/delete/{{ $m->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/member/edit/{{ $m->id }}">Edit</a></td>
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