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
                    <form action="admin/news/store" method="POST"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <select class="form-control" name="idcatalog" id="">
                                @foreach ($catalogs as $catalog)
                            <option value="{{$catalog->id}}">{{$catalog->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input class="form-control" name="title" placeholder="Please Enter title" />
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" name="description" placeholder="Please Enter description" />
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <input class="form-control" name="content" placeholder="Please Enter content" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input  class="form-control" type="file" name="image" />
                        </div>
                        <button type="submit" class="btn btn-default">Thêm video</button>
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