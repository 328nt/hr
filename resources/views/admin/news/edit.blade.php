@extends('admin.layout.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">THÊM VIdeo
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $err)
                        <div class="alert alert-danger">
                            {{ $err }}
                        </div>
                        @endforeach
                    @endif

                    @if(session('msg'))
                    <div class="alert alert-success">
                        {{ session('msg') }}
                    </div>
                    @endif
                <form action="admin/video/update/{{$videos->id}}" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="title" value="{{$videos->title}}" placeholder="Please Enter Name" />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="description"  value="{{$videos->description}}" placeholder="Please Enter Email" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <input class="form-control" name="content" value="{{$videos->content}}" placeholder="Please Enter Email" />
                        </div>
                        <div  class="form-group">
                            <iframe width="400px" height="auto" src="https://www.youtube.com/embed/{{substr($videos->link,-11)}}">
                            </iframe>
                        </div>
                        <div class="form-group">
                            <label>link Youtube</label>
                            <input class="form-control" name="link" value="{{$videos->link}}" placeholder="Please Enter Password" />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm videos</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection